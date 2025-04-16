import "./bootstrap";

import Alpine from "alpinejs";
import persist from "@alpinejs/persist";

// Import Alpine.js components
import nav from "./components/nav";
import themeSwitcher from "./components/theme-switcher";
import logoutButton from "./components/logout-button";

// Register Alpine.js components
Alpine.data("nav", nav);
Alpine.data("logoutButton", logoutButton);
Alpine.data("themeSwitcher", themeSwitcher);

window.Alpine = Alpine;
Alpine.plugin(persist);

Alpine.start();
