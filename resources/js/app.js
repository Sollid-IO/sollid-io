import "./bootstrap";

/**
 * Handles preloader behavior:
 * - Fades out and hides the preloader after window fully loads.
 *
 * Requires an element with ID: #preloader
 */
function initPreloader() {
    window.addEventListener("load", () => {
        const preloader = document.getElementById("preloader");
        if (!preloader) return;

        preloader.classList.add("opacity-0");

        // Wait for fade-out transition before hiding
        setTimeout(() => {
            preloader.classList.add("hidden");
        }, 500); // Must match Tailwind's duration-500
    });
}

/**
 * Initializes the mobile mobileNav toggle logic.
 *
 * This function enables a mobile navigation menu (mobileNav) to:
 * - Open when the toggler button is clicked
 * - Close when the toggler is clicked again
 * - Automatically close when the user clicks outside the menu
 *
 * Relies on:
 * - [data-menu-toggler] for the toggle button
 * - [data-mobile-nav] for the mobile menu container
 *
 * Transitions are managed using TailwindCSS utility classes:
 * - 'opacity-0' and 'opacity-100' for fade animations
 * - 'hidden' for visibility control
 */
function initMobileMenu() {
    const toggler = document.querySelector("[data-menu-toggler]");
    const mobileNav = document.querySelector("[data-mobile-nav]");
    const pageSection = document.querySelector("[data-page-section]");
    const transitionDuration = 300; // Duration must match Tailwind transition class

    // Exit early if required elements are not found
    if (!toggler || !mobileNav) return;

    /**
     * Shows the mobile mobileNav with fade-in animation.
     */
    const show = () => {
        mobileNav.classList.remove("hidden");
        requestAnimationFrame(() => {
            mobileNav.classList.remove("opacity-0");
            mobileNav.classList.add("opacity-100");
            pageSection?.classList.add("blur-xs");
        });
    };

    /**
     * Hides the mobile mobileNav with fade-out animation.
     */
    const hide = () => {
        mobileNav.classList.remove("opacity-100");
        mobileNav.classList.add("opacity-0");
        pageSection?.classList.remove("blur-xs");
        setTimeout(() => mobileNav.classList.add("hidden"), transitionDuration);
    };

    /**
     * Toggles the mobileNav between visible and hidden states.
     */
    const toggle = () => {
        mobileNav.classList.contains("hidden") ? show() : hide();
    };

    /**
     * Event: Toggler clicked – open or close the menu.
     */
    toggler.addEventListener("click", (e) => {
        e.stopPropagation(); // Prevent outside click from triggering immediately
        toggle();
    });

    /**
     * Event: Click outside the menu – close it if open.
     */
    document.addEventListener("click", (e) => {
        const isOpen = !mobileNav.classList.contains("hidden");
        const clickedOutside =
            !mobileNav.contains(e.target) && !toggler.contains(e.target);
        if (isOpen && clickedOutside) hide();
    });
}

// Auto-run the initializer after the DOM has fully loaded
document.addEventListener("DOMContentLoaded", () => {
    initMobileMenu();
    initPreloader();
});
