const HIDDEN_CLASS = 'is-header-hidden';

export function initSpHeader(): void {
  const header = document.querySelector<HTMLElement>('body.aft26 header.hidePC');
  if (!header) return;

  let lastScrollY = window.scrollY;

  window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;
    const scrollingDown = currentScrollY > lastScrollY;
    const pastThreshold = currentScrollY > window.innerHeight * 0.5;

    if (pastThreshold && scrollingDown) {
      header.classList.add(HIDDEN_CLASS);
    } else if (!scrollingDown) {
      header.classList.remove(HIDDEN_CLASS);
    }

    lastScrollY = currentScrollY;
  }, { passive: true });
}
