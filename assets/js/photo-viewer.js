(() => {
  const dialog = document.querySelector('.photo-viewer-dialog');
  if (!dialog) return;

  const triggers = [...document.querySelectorAll('[data-photo-viewer-trigger]')];
  const image = dialog.querySelector('.photo-viewer-image');
  const caption = dialog.querySelector('.photo-viewer-alt');
  const count = dialog.querySelector('.photo-viewer-count');
  const closeButton = dialog.querySelector('.photo-viewer-close');
  const previousButton = dialog.querySelector('.photo-viewer-previous');
  const nextButton = dialog.querySelector('.photo-viewer-next');
  let currentIndex = 0;

  const showPhoto = (index) => {
    if (!triggers.length) return;
    currentIndex = (index + triggers.length) % triggers.length;
    const trigger = triggers[currentIndex];
    const alt = trigger.dataset.photoAlt || '';

    image.src = trigger.dataset.photoSrc || '';
    image.alt = alt;
    caption.textContent = alt;
    count.textContent = `${currentIndex + 1} / ${triggers.length}`;
  };

  triggers.forEach((trigger, index) => {
    trigger.addEventListener('click', () => {
      showPhoto(index);
      if (!dialog.open) dialog.showModal();
      closeButton.focus();
    });
  });

  previousButton.addEventListener('click', () => showPhoto(currentIndex - 1));
  nextButton.addEventListener('click', () => showPhoto(currentIndex + 1));
  closeButton.addEventListener('click', () => dialog.close());

  dialog.addEventListener('click', (event) => {
    if (event.target === dialog) dialog.close();
  });

  dialog.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowLeft') {
      event.preventDefault();
      showPhoto(currentIndex - 1);
    } else if (event.key === 'ArrowRight') {
      event.preventDefault();
      showPhoto(currentIndex + 1);
    }
  });
})();
