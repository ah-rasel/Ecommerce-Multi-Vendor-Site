let data = () => {
    function getThemeFromLocalStorage() {
        // if user already changed the theme, use it
        if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'))
        }

        // else return their preferences
        return (
            !!window.matchMedia &&
            window.matchMedia('(prefers-color-scheme: dark)').matches
        )
    }

    function setThemeToLocalStorage(value) {
        window.localStorage.setItem('dark', value)
    }

    return {
        dark: getThemeFromLocalStorage(),
        toggleTheme() {
            this.dark = !this.dark
            setThemeToLocalStorage(this.dark)
        },
        product_modal:false,
        SuccessMessage:false,
        img:'',
        productId:'',
        productName:'',
        productQuantity:1,
        productCurrentPrice:'',
        productRegularPrice:'',
        productDescription:'',
        link:'',
        isSideMenuOpen: false,
        isBackdropOpen: false,
        increment(){
            this.productQuantity = this.productQuantity+1;
        },
        decrement(){
            this.productQuantity = this.productQuantity-1;
        },
        toggleSideMenu() {
            if (this.isSideMenuOpen) {
                this.isSideMenuOpen = false;
                this.isBackdropOpen = false;

            } else {
                this.isSideMenuOpen = true;
                this.isBackdropOpen = true;
                this.isCartOpen = false;
            }
        },
        closeSideMenu() {
            this.isSideMenuOpen = false;
            this.isBackdropOpen = false;
        },
        // cart
        isCartOpen: false,
        closeCart() {
            this.isCartOpen = false
            this.isBackdropOpen = false
        },
        toggleCart() {
            if (this.isCartOpen) {
                this.isCartOpen = false;
                this.isBackdropOpen = false;
            } else {
                this.isCartOpen = true;
                this.isBackdropOpen = true;
            }
        },
        profile: false,
        toggleProfile() {
            this.profile = !this.profile
        },
        closeProfileMenu() {

        },

        isUsersMenuOpen: false,
        toggleUsersMenu() {
            this.isUsersMenuOpen = !this.isUsersMenuOpen
        },

        // Modal
        isModalOpen: false,
        trapCleanup: null,
        openModal() {
            this.isModalOpen = true
            this.trapCleanup = focusTrap(document.querySelector('#modal'))
        },
        closeModal() {
            this.isModalOpen = false
            this.trapCleanup()
        },
        //   Wish List
        isWishListOpen: false,
        toggleWishList() {
            this.isWishListOpen = !this.isWishListOpen;
        },
        //   Select Box.
        options: [],
        selected: [],
        show: false,
        open() { this.show = true },
        close() { this.show = false },
        isOpen() { return this.show === true },
        select(index, event) {
            if (!this.options[index].selected) {

                this.options[index].selected = true;
                this.options[index].element = event.target;
                this.selected.push(index);

            } else {
                this.selected.splice(this.selected.lastIndexOf(index), 1);
                this.options[index].selected = false
            }
        },
        remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);
        },
        loadOptions() {
            const options = document.getElementById('select').options;
            for (let i = 0; i < options.length; i++) {
                this.options.push({
                    value: options[i].value,
                    text: options[i].innerText,
                    selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                });
            }
        },
        selectedValues() {
            return this.selected.map((option) => {
                return this.options[option].value;
            })
        },

    }
}
