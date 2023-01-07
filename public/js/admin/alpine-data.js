document.addEventListener('alpine:init', () => {

    Alpine.data('main_init', () => ({
        icon : 'uil-moon',
        theme: localStorage.getItem('theme'),
        toggle() {
            if(this.icon === 'uil-moon') {
                this.setThe()
            } else {
                this.setThe()
            }
        },
        setThe() {
            if(this.theme === 'light') {
                localStorage.setItem('theme', 'dark')
                this.theme = 'dark'
                this.icon = 'uil-sun'
            } else {
                localStorage.setItem('theme', 'light')
                this.theme = 'light'
                this.icon = 'uil-moon'
            }
        },
        init() {
            if(this.theme === 'dark') {
                this.theme = 'dark'
                this.icon = 'uil-sun'
            } else {
                this.theme = 'light'
                this.icon = 'uil-moon'
            }
        }
    }));



})
