const body = document.body;

window.onload = () => {
  const { element: asideEl } = HSOverlay.getInstance("#aside", true);

  const isMobile = () => window.innerWidth < 768;

  const asideState = localStorage.getItem("asideState");

  if (!isMobile() && asideState === "open") {
    asideEl.open();
    body.classList.add("menu-open");
  } else {
    asideEl.close();
    body.classList.remove("menu-open");
  }

  asideEl.on("open", () => {
    body.classList.add("menu-open");
    localStorage.setItem("asideState", "open");
  });

  asideEl.on("close", () => {
    body.classList.remove("menu-open");
    localStorage.setItem("asideState", "closed");
  });

  window.addEventListener("resize", () => {
    if (isMobile()) {
      asideEl.close();
      body.classList.remove("menu-open");
    } else if (localStorage.getItem("asideState") === "open") {
      asideEl.open();
      body.classList.add("menu-open");
    }
  });
};
