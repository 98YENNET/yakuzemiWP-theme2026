const HIDDEN_CLASS = "is-header-hidden";

export function initSpHeader(): void {
  const header = document.querySelector<HTMLElement>(
    "body.aft26 header.hidePC",
  );
  if (!header) return;

  let lastScrollY = window.scrollY;

  window.addEventListener(
    "scroll",
    () => {
      const currentScrollY = window.scrollY;
      const scrollingDown = currentScrollY > lastScrollY;
      const pastThreshold = currentScrollY > window.innerHeight * 0.5;
      const menuOpen =
        document.documentElement.classList.contains("sb-active-right");

      if (!menuOpen) {
        if (pastThreshold && scrollingDown) {
          header.classList.add(HIDDEN_CLASS);
        } else if (!scrollingDown) {
          header.classList.remove(HIDDEN_CLASS);
        }
      }

      lastScrollY = currentScrollY;
    },
    { passive: true },
  );
}

export function initSpDrawer(): void {
  const htmlEl = document.documentElement;
  const menuBtn = document.querySelector<HTMLElement>(
    ".sb-toggle-right.mb-menu-button",
  );
  const header = document.querySelector<HTMLElement>(
    "body.aft26 header.hidePC",
  );

  if (!menuBtn) return;

  // 暗幕オーバーレイを生成
  const overlay = document.createElement("div");
  overlay.className = "sp-drawer-overlay";
  document.body.appendChild(overlay);

  // slidebars が <html> に付与するクラスを監視してUI同期
  const observer = new MutationObserver(() => {
    const isOpen = htmlEl.classList.contains("sb-active-right");

    menuBtn.classList.toggle("is-menu-open", isOpen);
    overlay.classList.toggle("is-active", isOpen);
    document.body.style.overflow = isOpen ? "hidden" : "";

    // メニュー展開中はヘッダーを強制表示
    if (isOpen && header) {
      header.classList.remove(HIDDEN_CLASS);
    }
  });

  observer.observe(htmlEl, { attributes: true, attributeFilter: ["class"] });

  // 暗幕タップ/クリックでドロワーを閉じる
  // モバイルでは slidebars が touchend 後に click ハンドラを削除するため
  // touchend では jQuery 経由で touchend をトリガーし直す
  overlay.addEventListener("touchend", (e) => {
    e.preventDefault(); // 後続の click イベントを抑制
    const jq = (window as any).jQuery || (window as any).$;
    if (jq) jq(menuBtn).trigger("touchend");
  });
  overlay.addEventListener("click", () => {
    menuBtn.click(); // デスクトップ用フォールバック
  });
}
