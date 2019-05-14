<template>
    <div class="container h-100 mt-5">
        <div class="alert alert-danger" v-if="errorlogin">Invalid username or password</div>
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-lg-5 col-md-7 col-sm-8">
                <div class="card">
                    <img :src="'/images/logo.png'" alt="" class="card-img-top p-5 mx-auto" style="width: 342px; height: 196px;">
                    <div class="card-body px-lg-5">
                        <form @submit="logincheck">
                            <div class="form-row mb-2">
                                <div class="col">
                                    <i class="fa fa-user position-absolute text-secondary" style="top: 10px; left: 16px;"></i>
                                    <input type="text" class="form-control font-weight-light" name="username" v-model="username" placeholder="Username" style="padding-left: 30px;" @keyup.enter="logincheck()" required>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <i class="fa fa-lock position-absolute text-secondary" style="top: 10px; left: 16px;"></i>
                                    <input type="password" class="form-control font-weight-light" name="password" v-model="password" placeholder="Password" style="padding-left: 30px;" @keyup.enter="logincheck()" required>
                                </div>
                            </div>
                            <div class="form-row mb-4 justify-content-end">
                                <div class="col-auto">
                                    <small><a href>Forgot Password</a></small>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <button class="btn btn-primary btn-block" type="button" @click="logincheck()">Login</button>
                                </div>
                            </div>
                            <div class="form-row mb-2 justify-content-center">
                                <div class="col-auto"><span>or</span></div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <a href="/register" class="btn btn-primary btn-block">Register Now</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            // login: {
            //     username: '',
            //     password: ''
            // }
            username: '',
            password: '',
            
            errorlogin: '',
        }
    },

    methods: {
       logincheck() {

        //    if (this.$data.login.username != "" && this.$data.login.password != "") {
        //        if (this.$data.login.username == "admin" && this.$data.login.password == "admin") {
        //            console.log(this.$data.login);
        //            localStorage.setItem("username", this.$data.login.username);
        //            this.$router.push('/home');
        //            location.reload();

        //        }else{
        //         alert("Invalid username/password");
        //        }
        //    }else{
        //     alert("all field required");
        //    }

        if (this.$data.username != this.username && this.$data.password != this.password) {
            this.errorlogin = true;
        } else {
            axios.post('/api/login',{
                username: this.username,
                password: this.password,
            })
            .then((res) => {
                localStorage.setItem("username", this.$data.username)
                this.username = ''
                this.password = ''
                this.$router.push('/home');
                location.reload();
                console.log(res.data);
            })
            .catch((err) => {
                console.log(err);
            });
        }

       }
    }
}
</script>