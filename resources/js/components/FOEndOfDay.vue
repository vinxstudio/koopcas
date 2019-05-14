<template>
    <div class="endofday">
        <nav class="navbar navbar-expand-lg p-0" id="toolbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
                </li>
            </ul>
        </nav>
        
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="alert alert-success mb-2" v-if="successEnd">Transaction Has Been Ended.</div>

                <div class="alert alert-danger mb-2" v-if="emptyEnd">Transaction Date Must Not Be Empty.</div>

                <fieldset class="border p-4 bg-light">
                    <h3 class="mt-0 mb-4">End of Day</h3>
                    <div class="form-row">
                        <label for="transactionDate" class="col-md-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Transaction Date:</label>
                        <div class="col my-1">
                        <input type="date" class="form-control form-control-sm" name="transactionDate" v-model="transactionDate">
                        </div>
                    </div>
                    <div class="form-row mt-4 justify-content-center">
                        <p class="col-auto lead">Proceed with End of Day Processing?</p>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-auto">
                        <button class="btn btn-outline-primary bg-white mr-1" @click="clickOk">
                            <i class="fa fa-key mr-1"></i><span><u>O</u>k</span>
                        </button>
                        <button class="btn btn-outline-primary bg-white" @click="clickCancel">
                            <i class="fa fa-times-circle mr-1"></i><span><u>C</u>ancel</span>
                        </button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</template>

<script>
import moment from "moment";

    export default{
        data(){
            return {
                transactionDate: moment(new Date).format('YYYY-MM-DD'),
                emptyEnd: "",
                successEnd: "",
            }
        },

        methods: {
            clickOk(){
                if (this.transactionDate === "") {
                    this.emptyEnd = true;
                    setTimeout(() => {
                        this.emptyEnd = false;
                    },3000);
                } else {
                    this.successEnd = true;
                    setTimeout(() => {
                        this.successEnd = false;
                    },3000);
                }
                console.log(this.$data);
            },
            clickCancel(){
                this.transactionDate = "",
                console.log("cancel");
            }
        }
    }
</script>
<style>
.endofday {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>