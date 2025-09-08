import { ref, onMounted } from "vue"

export function useDarkMode() {
    const isDark = ref(false)

    const setTheme = (dark) => {
        isDark.value = dark
        if (dark) {
            document.documentElement.classList.add("dark")
            localStorage.setItem("theme", "dark")
        } else {
            document.documentElement.classList.remove("dark")
            localStorage.setItem("theme", "light")
        }
    }

    const toggleTheme = () => {
        setTheme(!isDark.value)
    }

    onMounted(() => {
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            setTheme(true)
        } else {
            setTheme(false)
        }
    })

    return { isDark, toggleTheme }
}
