export default () => ({
    theme: Alpine.$persist("system").as("theme"),

    setTheme(newTheme) {
        this.theme = newTheme;
        this.applyTheme();
    },

    applyTheme() {
        let isDark =
            this.theme === "dark" ||
            (this.theme === "system" &&
                window.matchMedia("(prefers-color-scheme: dark)").matches);
        
        // Плавное изменение темы
        document.documentElement.classList.add('transition-colors', 'duration-200');
        document.documentElement.classList.toggle("dark", isDark);
        
        // Удаляем классы transition после завершения анимации
        setTimeout(() => {
            document.documentElement.classList.remove('transition-colors', 'duration-200');
        }, 200);
    },

    toggleTheme() {
        const themes = ["light", "dark", "system"];
        let currentIndex = themes.indexOf(this.theme);
        let nextIndex = (currentIndex + 1) % themes.length;
        this.setTheme(themes[nextIndex]);
    },

    init() {
        this.applyTheme();
        
        // Слушаем изменения системной темы
        window
            .matchMedia("(prefers-color-scheme: dark)")
            .addEventListener("change", () => {
                if (this.theme === "system") this.applyTheme();
            });
    },
});
