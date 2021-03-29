<template>
    <div class="main">
        <Home></Home>
    </div>
</template>

<script>
import Home from "./Home/Home";

export default {
    name: "Index",
    components: {
        Home
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
