(() => {
    "use strict";
    
    const r = () => {
      document.documentElement.setAttribute("data-bs-theme", "light");
    };
  
    const c = (t = !1) => {
      var a = document.querySelector(".bs-theme-text"),
        r = document.querySelector(`[data-bs-theme-value="light"]`);
      document.querySelectorAll("[data-bs-theme-value]").forEach((e) => {
        e.classList.remove("active"), e.setAttribute("aria-pressed", "false");
      }),
        r.classList.add("active"),
        r.setAttribute("aria-pressed", "true"),
        a.textContent = "Light Mode",
        r.dataset.bsThemeValue;
      (e = document.querySelector(".theme-icon-active")),
        (a = document.querySelector(
          `[data-bs-theme-value="light"] .theme-icon`
        )),
        e && a && (e.innerHTML = a.outerHTML),
        t && r.focus();
    };
  
    window.addEventListener("DOMContentLoaded", () => {
      r();
      c();
      document.querySelectorAll("[data-bs-theme-value]").forEach((t) => {
        t.addEventListener("click", () => {
          localStorage.setItem("theme", "light");
          r();
          c(true);
        });
      });
    });
  })();
  