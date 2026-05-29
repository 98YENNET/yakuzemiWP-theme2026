// PC の右カラム（.side-menu + .side-banner）を position:sticky で追従させる。
//
// 右カラムはビューポートより高いことが多いため、単純な top:20 では下部バナーが
// ずっと隠れてしまう。そこで sticky の top を動的に決める:
//   - 右カラムが画面より高い  → top = (画面高 - 右カラム高 - GAP) の「負の値」
//       → 上端では普通に流れてメニューが見え、下までスクロールすると下端で貼り付き
//         バナー下部が見える（= ページ上部:メニュー / 下部:バナー）。
//   - 右カラムが画面より低い  → top = GAP（通常の上端固定）
// 高さは画像読込やリサイズで変わるため、load/resize/ResizeObserver で再計算する。

const PC_MEDIA = "(min-width: 768px)";
const GAP = 20;

export function initStickySidebar(): void {
  const rc = document.querySelector<HTMLElement>(
    ".page-contents > .right-contents",
  );
  if (!rc) return;

  const mq = window.matchMedia(PC_MEDIA);

  const update = (): void => {
    if (!mq.matches) {
      // SP では CSS 側の指定に戻す
      rc.style.top = "";
      return;
    }
    const vh = window.innerHeight;
    const h = rc.offsetHeight;
    rc.style.top = (h + GAP > vh ? vh - h - GAP : GAP) + "px";
  };

  update();
  window.addEventListener("resize", update);
  if (typeof ResizeObserver !== "undefined") {
    new ResizeObserver(update).observe(rc);
  }
}
