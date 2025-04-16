export default () => ({
    theme: Alpine.$persist("system").as("theme"),

    setTheme(newTheme) {
        this.theme = newTheme;
        setTimeout(() => this.applyTheme(), 300);
    },

    applyTheme() {
        let isDark =
            this.theme === "dark" ||
            (this.theme === "system" &&
                window.matchMedia("(prefers-color-scheme: dark)").matches);
        document.documentElement.classList.toggle("dark", isDark);
    },

    toggleTheme() {
        const themes = ["light", "dark", "system"];
        let currentIndex = themes.indexOf(this.theme);
        let nextIndex = (currentIndex + 1) % themes.length;
        this.setTheme(themes[nextIndex]);
    },

    init() {
        this.applyTheme();
        window
            .matchMedia("(prefers-color-scheme: dark)")
            .addEventListener("change", () => {
                if (this.theme === "system") this.applyTheme();
            });
    },
});
