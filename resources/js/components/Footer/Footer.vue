<template>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <section class="links">
            <a href="">Contact</a>
            <a href="">Newsletter</a>
            <a href="">Shop</a>
            <a href="">Company</a>
        </section>
        <section class="media">
            <a href=""><i class="fab fa-instagram"></i></a
            ><a href=""><i class="fab fa-spotify"></i></a>
        </section>
        <section class="copyright d-flex justify-content-center align-items-center flex-column">
            © 2021 MANTICORA All rights reserved<br />
           <div> Font made from <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>is licensed by CC BY 3.0</div>
        </section>
    </div>
</template>

<style lang="scss" scoped>
.footer {
    font-family: "Quicksand";
    section {
        padding: 10px 0;
    }
    .links a {
        margin: 0 10px;
        padding: 5px 0;
        &:hover {
            border-bottom: 1px solid rgb(80, 80, 80);
        }
    }
    .media i {
        font-size: 20px;
        padding: 0 10px;
    }
    *:hover {
        color: inherit;
    }
    .copyright {
        font-size: 12px;
    }
}
</style>

<script>
export default {};
</script>
