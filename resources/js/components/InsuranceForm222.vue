<template>
    <div class="container-fluid bg-image d-flex flex-column justify-content-center" style="height: 100vh;">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <a href="https://yaxint.com/" target="_blank"><img src="https://yaxint.com/storage/settings/June2021/eFcoQPC94I1VNbsH3J1R.svg"></a><br>
            <p class="h2 mt-3">Join the third party liability insurance</p>
            <p class="text-secondary">Fill out the form below and receive your link to the insurance application form by e-mail.</p>
        </div>
        <br/>
        <div class="form-container d-flex justify-content-center shadow py-5 border border-primary bg-white">
            <form class="col-12 col-md-10 col-lg-6" @submit.prevent="addInsurance" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4 text-center">
                    <label class="form-label" for="email">Email adress</label>
                    <input type="email" id="email" class="form-control text-center" v-model="lead.email"/>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4 text-center">
                    <label class="form-label" for="ins_type">Select the type of third party liability insurance</label>
                    <input type="text" id="ins_type" class="form-control text-center" v-model="lead.ins_type"/>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4 text-center">
                    <label class="form-label" for="profession_numb">Number of profession</label>
                    <input type="text" id="profession_numb" class="form-control text-center" v-model="lead.profession_numb"/>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col-2 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="is_checked"
                                v-model="lead.is_checked"
                            />
                        </div>
                    </div>

                    <label class="col-10" for="is_checked">
                        <!-- Simple link -->
                        <p>* Addressee for the exchange of information on reorganization proceedings in order to obtain the insurance program and the assessment of OIL and WIL and solutions to be contacted by INS Services Sp. Zoo. KRS as an entity0000 this program for the purpose.</p>
                        <p>The above consent may be revoked at any time by sending an appropriate statement from the e-mail address provided to the address biuro@yaxint.com.</p>
                    </label>
                </div>

                <!-- Submit button -->

            </form>
        </div>
    </div>
</template>

<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Login #07</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                    <div class="text w-100">
                        <h2>Welcome to login</h2>
                        <p>Don't have an account?</p>
                        <a href="#" class="btn btn-white btn-outline-white">Sign Up</a>
                    </div>
                </div>
                <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Sign In</h3>
                        </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                            </p>
                        </div>
                    </div>
                    <form action="#" class="signin-form">
                        <div class="form-group mb-3">
                            <label class="label" for="name">Username</label>
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
import Request from '../Request';
export default {
    name: "InsuranceForm",
    data() {
        return {
            lead: {}
        }
    },
    created() {
    },
    methods: {
        addInsurance() {
            this.errors = {};
            console.log(this.lead);
            Request({
                url: '/api/insurances',
                method: 'POST',
                data: this.lead
            })
        }
    }
}
</script>

<style scoped>
.form-container{
    min-width: 500px;
    max-width: 700px;
}
.bg-image {
    background-image: url("https://cdn.pixabay.com/photo/2014/07/06/13/55/calculator-385506_960_720.jpg");
    /*background-repeat: no-repeat;*/
    /*background-position: center;*/
    background-size: cover;
    height: 100vh;
    width: 100vw;
}
</style>
