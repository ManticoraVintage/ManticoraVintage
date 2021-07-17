<<template>
    <div class="main main-div d-flex justify-content-center align-items-center">
        <div class="modal-login">
            <form @submit.prevent="onSubmit">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input
                        type="text"
                        class="form-control"
                        name="username"
                        id="name1"
                        placeholder="Enter username"
                    />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password1"
                        name="password"
                        placeholder="Password"
                    />
                </div>

                <button @click="checkCredentials()" class="btn btn-primary">
                    Conectar
                </button>
            </form>
        </div>
    </div>
</template>
<style scoped>
.main-div {
    height: 100%;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background: rgb(104, 104, 104);
    z-index: 1001;
}
.modal-login {
    padding: 20px;
    border-radius: 10px;
    background: white;
    width: 300px;
    height: 300px;
    border: 2px solid #ee2a7b;
}

label{
    color: #ee2a7b;
    font-weight: bold;
}

input:active, input:focus{
    outline: none !important;
    border: 0px;
}

label {
    margin-top: 20px;
}

input{
    border: 2px solid #ee2a7b !important;
}
button {
    border: 2px solid #ee2a7b;
    color: #ee2a7b;
    margin-top: 20px;
    background: transparent;
    font-weight: bold;
  
}

button:hover{
    background: #ee2a7b;
    border: 2px solid #ee2a7b;
}
</style>

<script>
export default {
    name: "Login",

    data() {
        return {
            usuario: "",
            password: ""
        };
    },
    methods: {
        checkCredentials() {
            const modal = document.querySelector(".main-div");
            const username = document.querySelector("input[name=username]")
                .value;
            const password = document.querySelector("input[name=password]")
                .value;
            if (username == this.usuario && password == this.password) {
             
                modal.style.visibility = "hidden";
            } else{
               alert("USUARIO O CONTRASEÑA INCORRECTOS")
            }
           
        },
        onSubmit() {
            // Do something...
        }
    }
};
</script>
