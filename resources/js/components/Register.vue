<template>
    <div class="container h-100 mt-5">
        <div class="alert alert-success" v-if="successAdd" transition="expand">You have registered successfully. You can now login your account.</div>
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-lg-5 col-md-7 col-sm-8">
                <div class="card">
                    <img :src="'/images/logo.png'" alt="" class="card-img-top p-5 mx-auto" style="width: 342px; height: 196px;">
                    <div class="card-body px-lg-5">
                        <form @submit.prevent="register">
                            <div class="form-row mb-2">
                                <div class="col">
                                    <i class="fa fa-user position-absolute text-secondary" style="top: 10px; left: 16px;"></i>
                                    <input type="text" class="form-control font-weight-light" name="name" v-model="name" placeholder="Name" style="padding-left: 30px;">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <i class="fa fa-envelope position-absolute text-secondary" style="top: 10px; left: 16px;"></i>
                                    <input type="text" class="form-control font-weight-light" name="email" v-model="email" placeholder="Email" style="padding-left: 30px;">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <i class="fa fa-user-circle position-absolute text-secondary" style="top: 10px; left: 16px;"></i>
                                    <input type="text" class="form-control font-weight-light" name="username" v-model="username" placeholder="Username" style="padding-left: 30px;">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <i class="fa fa-lock position-absolute text-secondary" style="top: 10px; left: 16px;"></i>
                                    <input type="password" class="form-control font-weight-light" name="password" v-model="password" placeholder="Password" style="padding-left: 30px;">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                </div>
                            </div>
                            <div class="form-row mb-2 justify-content-center">
                                <div class="col-auto"><span>or</span></div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <a href="/" class="btn btn-primary btn-block" type="button">Login</a>
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
            name: '',
            email: '',
            username: '',
            password: '',

            successAdd: '',
        }
    },

    methods: {
        register() {
            axios.post('/api/register',{
                name: this.name,
                email: this.email,
                username: this.username,
                password: this.password
            })
            .then((res) => {
                this.name = ''
                this.email = ''
                this.username = ''
                this.password = ''
                this.successAdd = true;
            })
        }
    }
}
</script>