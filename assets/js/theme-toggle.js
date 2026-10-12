(() => {
  const root = document.documentElement;
  const button = document.querySelector('[data-theme-toggle]');
  const systemTheme = window.matchMedia('(prefers-color-scheme: dark)');
  if (!button) return;

  const getTheme = () => root.dataset.theme || (systemTheme.matches ? 'dark' : 'light');
  const updateButton = () => {
    const theme = getTheme();
    const targetTheme = theme === 'dark' ? 'light' : 'dark';
    const label = `Switch to ${targetTheme} theme`;

    button.dataset.targetTheme = targetTheme;
    button.setAttribute('aria-label', label);
    button.setAttribute('title', label);
    button.setAttribute('aria-pressed', String(theme === 'dark'));
  };

  button.addEventListener('click', () => {
    const nextTheme = getTheme() === 'dark' ? 'light' : 'dark';
    root.dataset.theme = nextTheme;
    root.dataset.themeMode = 'manual';
    try {
      localStorage.setItem('mainza-theme', nextTheme);
    } catch (error) {
      // The current page still switches when browser storage is unavailable.
    }
    updateButton();
  });

  const followSystemTheme = () => {
    if (root.dataset.themeMode !== 'manual') {
      root.dataset.theme = systemTheme.matches ? 'dark' : 'light';
      root.dataset.themeMode = 'system';
      updateButton();
    }
  };

  if (typeof systemTheme.addEventListener === 'function') {
    systemTheme.addEventListener('change', followSystemTheme);
  } else {
    systemTheme.addListener(followSystemTheme);
  }

  updateButton();
})();
