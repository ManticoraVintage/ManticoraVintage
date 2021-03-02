<template>
    <div class="main">
        <div class="navbar d-flex flex-column">
            <div
                class="toggle"
                v-on:click="menuOpen"
                v-bind:class="{ active: isActive }"
            >
                <p>{{ menuStateInput }}</p>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul v-bind:class="{ menuOpen: isMenuOpen }">
                <li>Manticora Vintage</li>
                <li>Manticora Selected</li>
                <li>Zozobra</li>
            </ul>
        </div>
        <div v-bind:class="{layoutOpen: isLayoutOpen}" class="menu-opened-layout"></div>
    </div>
</template>

<style scoped>
/* Navbar */

.navbar {
    position: fixed;
    right: 0;
    top: 40px;
    z-index: 3;
}

/* Toggle Menu Button */
.toggle {
    width: 30px;
    height: 25px;
    position: relative;
    z-index: 3;
}

.toggle:hover {
    cursor: pointer;
}

.toggle span {
    display: block;
    position: absolute;
    right: 0px;
    top: 10px;
    width: 30px;
    height: 4px;
    background: #f522e4;
    transition: 0.5s;
    z-index: 1001;
}

.toggle span:hover {
    cursor: pointer;
}

.toggle span:nth-child(2) {
    transform: translateY(-10px);
}

.toggle span:nth-child(5) {
    transform: translateY(10px);
}

.toggle.active span:nth-child(2) {
    transform: translateY(0px);
    opacity: 0;
}

.toggle.active span:nth-child(5) {
    transform: translateY(0px);
    opacity: 0;
}

.toggle.active span:nth-child(3) {
    transform: rotate(135deg);
}

.toggle.active span:nth-child(4) {
    transform: rotate(-135deg);
}

/* ul & li*/
ul {
    position: relative;
    right: -160px;
    transition: 0.3s ease-in-out;
    top: 10px;
}

ul.menuOpen {
    right: 43%;
}

ul li {
    list-style-type: none;
    text-align: right;
    margin: 5px 0px;
    color: #f522e4;
}

ul li:hover {
    cursor: pointer;
}

/* Menu opened black layout */

.menu-opened-layout {
    position: absolute;
    background-color: rgba(36, 36, 36, 0.755);
    width: 0vw;
    height: 100%;
    top: 0;
    left: 0;
    transition: 0.3s ease-in-out;
    z-index: 2;
}
.menu-opened-layout.layoutOpen {
    width: 100vw;
}
</style>

<script>
export default {
    name: "Menu",

    data: () => ({
        isActive: false,
        isMenuOpen: false,
        isLayoutOpen: false,
    }),

    methods: {
        menuOpen: function() {
            this.isActive = !this.isActive;
            this.isMenuOpen = !this.isMenuOpen;
            this.isLayoutOpen = !this.isLayoutOpen;
        }
    }
};
</script>
