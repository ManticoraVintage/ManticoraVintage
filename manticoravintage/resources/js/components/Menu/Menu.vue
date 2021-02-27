<template>
    <div class="main">
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
    </div>
</template>

<style scoped>
.toggle {
    width: 30px;
    height: 25px;
    position: fixed;
    right: 50px;
    top: 35px;
    transform: translate(-50%, -50%);
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
    transform: translateY(-15px);
    opacity: 0;
}

.toggle.active span:nth-child(5) {
    transform: translateY(15px);
    opacity: 0;
}

.toggle.active span:nth-child(3) {
    transform: rotate(135deg);
}

.toggle.active span:nth-child(4) {
    transform: rotate(-135deg);
}
</style>

<script>
export default {
    name: "Menu",

    data: () => ({
        isActive: false
    }),

    methods: {
        menuOpen: function() {
            this.isActive = !this.isActive;
        }
    }
};
</script>
