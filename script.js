document.addEventListener("DOMContentLoaded", function () {
    const navToggle = document.getElementById("nav-toggle");
    const siteNav = document.getElementById("site-nav");
    const themeToggle = document.getElementById("theme-toggle");

    if (navToggle && siteNav) {
        navToggle.addEventListener("click", function () {
            const isOpen = siteNav.classList.toggle("nav-open");
            navToggle.setAttribute("aria-expanded", String(isOpen));
            navToggle.setAttribute("aria-label", isOpen ? "Close navigation" : "Open navigation");
        });

        document.addEventListener("click", function (event) {
            if (window.innerWidth <= 700 &&
                siteNav.classList.contains("nav-open") &&
                !siteNav.contains(event.target) &&
                !navToggle.contains(event.target)) {
                siteNav.classList.remove("nav-open");
                navToggle.setAttribute("aria-expanded", "false");
                navToggle.setAttribute("aria-label", "Open navigation");
            }
        });

        siteNav.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                siteNav.classList.remove("nav-open");
                navToggle.setAttribute("aria-expanded", "false");
                navToggle.setAttribute("aria-label", "Open navigation");
            });
        });
    }

    function applyTheme(theme) {
        const isLight = theme === "light";
        document.body.classList.toggle("light-mode", isLight);

        if (themeToggle) {
            themeToggle.setAttribute("aria-pressed", String(isLight));
            themeToggle.setAttribute("aria-label", isLight ? "Switch to dark mode" : "Switch to light mode");
            themeToggle.setAttribute("title", isLight ? "Switch to dark mode" : "Switch to light mode");
            const icon = themeToggle.querySelector(".theme-icon");
            if (icon) {
                icon.textContent = isLight ? "☾" : "☼";
            }
        }

        try {
            localStorage.setItem("amieltech-theme", theme);
        } catch (error) {
            // The theme still works for the current page if browser storage is unavailable.
        }
    }

    let savedTheme = "dark";
    try {
        savedTheme = localStorage.getItem("amieltech-theme") || "dark";
    } catch (error) {
        savedTheme = "dark";
    }
    applyTheme(savedTheme);

    if (themeToggle) {
        themeToggle.addEventListener("click", function () {
            const nextTheme = document.body.classList.contains("light-mode") ? "dark" : "light";
            applyTheme(nextTheme);
        });
    }
});
