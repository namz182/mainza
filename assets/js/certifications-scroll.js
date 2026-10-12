(() => {
  const gallery = document.querySelector('.certifications-list');
  if (!gallery) return;

  const originalGroup = gallery.querySelector('.certifications-group');
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  const preview = document.querySelector('.cert-preview-dialog');
  const previewImage = preview?.querySelector('.cert-preview-image');
  const previewTitle = preview?.querySelector('.cert-preview-title');
  const closeButton = preview?.querySelector('.cert-preview-close');

  let pointerOver = false;
  let focused = false;
  let dragging = false;
  let dragged = false;
  let activePointerId = null;
  let dragStartX = 0;
  let dragStartScroll = 0;
  let pressedTrigger = null;
  let suppressClick = false;
  let clearSuppressClickTimer;
  let lastFrameTime = 0;
  let animationFrame = null;

  const normalizeScrollPosition = () => {
    const loopWidth = originalGroup?.getBoundingClientRect().width ?? 0;
    if (loopWidth <= 0) return;

    if (gallery.scrollLeft >= loopWidth) {
      gallery.scrollLeft -= loopWidth;
    } else if (gallery.scrollLeft < 0) {
      gallery.scrollLeft += loopWidth;
    }
  };

  const animate = (time) => {
    if (lastFrameTime > 0 && !reducedMotion.matches && !pointerOver && !focused && !dragging && !document.hidden && preview?.open !== true) {
      const elapsed = Math.min(time - lastFrameTime, 50);
      gallery.scrollLeft += elapsed * 0.032;
      normalizeScrollPosition();
    }

    lastFrameTime = time;
    animationFrame = window.requestAnimationFrame(animate);
  };

  if (!reducedMotion.matches) {
    animationFrame = window.requestAnimationFrame(animate);
  }

  reducedMotion.addEventListener('change', () => {
    if (reducedMotion.matches && animationFrame !== null) {
      window.cancelAnimationFrame(animationFrame);
      animationFrame = null;
    } else if (!reducedMotion.matches && animationFrame === null) {
      lastFrameTime = 0;
      animationFrame = window.requestAnimationFrame(animate);
    }
  });

  gallery.addEventListener('pointerenter', () => { pointerOver = true; });
  gallery.addEventListener('pointerleave', () => { pointerOver = false; });
  gallery.addEventListener('focusin', () => { focused = true; });
  gallery.addEventListener('focusout', (event) => {
    if (!gallery.contains(event.relatedTarget)) focused = false;
  });

  gallery.addEventListener('pointerdown', (event) => {
    if (event.pointerType === 'mouse' && event.button !== 0) return;

    dragging = true;
    dragged = false;
    activePointerId = event.pointerId;
    dragStartX = event.clientX;
    dragStartScroll = gallery.scrollLeft;
    pressedTrigger = event.target.closest('.cert-preview-trigger');
    gallery.classList.add('is-dragging');
    gallery.setPointerCapture(event.pointerId);
  });

  gallery.addEventListener('pointermove', (event) => {
    if (!dragging || event.pointerId !== activePointerId) return;

    const distance = event.clientX - dragStartX;
    if (Math.abs(distance) > 5) dragged = true;
    if (dragged) gallery.scrollLeft = dragStartScroll - distance;
  });

  const finishDrag = (event) => {
    if (!dragging || (event && event.pointerId !== activePointerId)) return;

    if (dragged) {
      suppressClick = true;
      window.clearTimeout(clearSuppressClickTimer);
      clearSuppressClickTimer = window.setTimeout(() => { suppressClick = false; }, 350);
    }

    dragging = false;
    activePointerId = null;
    gallery.classList.remove('is-dragging');
    normalizeScrollPosition();
    if (event?.type === 'pointercancel') pressedTrigger = null;
  };

  gallery.addEventListener('pointerup', finishDrag);
  gallery.addEventListener('pointercancel', finishDrag);

  gallery.addEventListener('click', (event) => {
    const trigger = event.target.closest('.cert-preview-trigger') ?? pressedTrigger;
    pressedTrigger = null;
    if (!trigger || !preview || !previewImage || !previewTitle) return;

    if (suppressClick) {
      event.preventDefault();
      suppressClick = false;
      return;
    }

    const title = trigger.dataset.certTitle ?? '';
    previewImage.src = trigger.dataset.certSrc ?? '';
    previewImage.alt = `${title} certification preview`;
    previewTitle.textContent = title;
    if (typeof preview.showModal === 'function') {
      preview.showModal();
    } else {
      preview.setAttribute('open', '');
    }
  });

  closeButton?.addEventListener('click', () => preview.close());
  preview?.addEventListener('click', (event) => {
    if (event.target === preview) preview.close();
  });
})();
