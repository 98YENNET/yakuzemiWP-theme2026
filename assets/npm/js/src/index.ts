declare var $: any;
import { initSpHeader, initSpDrawer } from "./js/sp-header";
import { initStickySidebar } from "./js/sticky-sidebar";

window.onload = function () {
  initSpHeader();
  initSpDrawer();
  initStickySidebar();
};
