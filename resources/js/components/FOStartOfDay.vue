<template>
    <div class="startofday">
        <nav class="navbar navbar-expand-lg p-0" id="toolbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
                </li>
            </ul>
        </nav>
        
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="alert alert-success mb-2" v-if="successDate">A New Date of Transaction Has Been Added.</div>

                <div class="alert alert-danger mb-2" v-if="errorDate">Please Input the Previous Date and Current Date.</div>

                <div class="alert alert-danger mb-2" v-if="errorCurrent">An Error Occured Setting Up the Date.</div>

                <fieldset class="border p-4 bg-light">
                    <h3 class="mt-0 mb-4" style="text-align: left;">Start of Day</h3>
                    <div class="form-row">
                        <label class="col-md-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="prevProcessingDate">Previous Processing Date:</label>
                        <div class="col my-1">
                            <input class="form-control form-control-sm" name="previousProcessingDate" type="date" v-model="queryDate.prevDate">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <label class="col-md-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="newProcessingDate">Enter New Processing Date:</label>
                        <div class="col my-1">
                            <input class="form-control form-control-sm" name="newProcessingDate" type="date" v-model="queryDate.newDate">
                        </div>
                    </div>
                    <div class="form-row mt-4 justify-content-center">
                        <div class="col-auto">
                            <button class="btn btn-outline-primary bg-white mr-1" @click="clickOk"><i class="fa fa-key mr-1"></i><span><u>O</u>k</span></button>
                            <button class="btn btn-outline-primary bg-white" @click="clickCancel"><i class="fa fa-times-circle mr-1"></i><span><u>C</u>ancel</span></button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>    
</template>

<script>
import moment from "moment";

    export default {
        data(){
            return {
                queryDate: {
                    prevDate: moment(new Date).subtract(1, 'day').format('YYYY-MM-DD'),
                    newDate: moment(new Date).format('YYYY-MM-DD'),
                },
                
                successDate: "",

                errorDate: "",

                errorCurrent: "",
            }
        },
        methods: {
            clickOk(){
                if (this.queryDate.prevDate === "" && this.queryDate.newDate === "") {
                    this.errorDate = true;
                    setTimeout(() => {
                        this.errorDate = false;
                    },3000)
                } else if (this.queryDate.newDate < this.queryDate.prevDate || this.queryDate.prevDate === this.queryDate.newDate) {
                    this.errorCurrent = true;
                    setTimeout(() => {
                        this.errorCurrent = false;
                    },3000) 
                } else {
                    this.successDate = true;
                    setTimeout(() => {
                        this.successDate = false;
                    },3000)
                }
                console.log(this.$data.queryDate);
            },
            clickCancel(){
                this.queryDate.prevDate = "",
                this.queryDate.newDate = "",
                console.log("cancel");
            }
        }
    }
</script>
<style >
    .startofday {
        text-align: center;
        width: 100%;
        height: 100%;
        border: 1px solid #fff;
        padding-left: 15px;
        padding-right: 15px;
    }
</style>