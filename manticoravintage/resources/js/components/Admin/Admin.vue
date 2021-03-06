<template>
    <div class="main">
        <div
            class="horizontal-navbar d-flex justify-content-between align-items-center"
        >
            <div class="main-title">Manticora Vintage Administration</div>
            <ul
                class="horizontal-navbar-options d-flex justify-content-center align-items-center"
            >
                <li>Exit</li>
            </ul>
        </div>
    </div>
</template>

<style scoped>
* {
    font-family: "Roboto" !important;
    margin: 0;
    padding: 0;
}

.horizontal-navbar {
    width: 100vw;
    min-height: 50px;
    padding: 0 20px;
    background-color: #f522e4;
    color: white;
}

.horizontal-navbar-options {
    min-height: 50px;
    padding: 2px 15px;
}

.horizontal-navbar-options:hover {
    background-color: #3a3a3a;
    cursor: pointer;
}
</style>

<script>
export default {
    name: "Admin"
};
</script>
