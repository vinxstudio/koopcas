<template>
    <div class="playtosave">
        <nav class="navbar navbar-expand-lg p-0 mt-2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="newSixDigit">
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>

                    <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
                        <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                    </button>
                </li>
            </ul>
        </nav>

        <h3 class="mt-2">Play To Save</h3>

        <div class="alert alert-success" v-if="successAdd" transition="expand">Six Digit Added Successfully.</div>

        <div class="alert alert-success" v-if="successEdit" transition="expand">Six Digit Updated Successfully.</div>

        <form @submit.prevent="insertSixDigitNumber">
            <fieldset class="border p-4 bg-light">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Date of Transaction</label>
                            <input type="date" name="sdDateOfDraw" v-model="playtosavesix.sdDateOfDraw" class="form-control" :readonly="readOnly">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Document No.</label>
                            <input type="text" name="ptsSdNumDocNo" v-model="playtosavesix.ptsSdNumDocNo" class="form-control" :readonly="readOnly">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Total Collection</label>
                            <input type="text" name="sdTotalCollection" v-model="playtosavesix.sdTotalCollection" class="form-control" :readonly="readOnly">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-2">
                    <div class="col-md-6">
                        <fieldset class="border p-4 bg-light mb-3">
                            <label>6 Number Digits</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="sixDigitOne" v-model="sixDigitOne" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="sixDigitTwo" v-model="sixDigitTwo" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="sixDigitThree" v-model="sixDigitThree" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="sixDigitFour" v-model="sixDigitFour" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="sixDigitFive" v-model="sixDigitFive" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="number" name="sixDigitSix" v-model="sixDigitSix" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Winning Prize</label>
                                <input type="text" name="sixDigitWinPrize" v-model="playtosavesix.sixDigitWinPrize" class="form-control" :readonly="readOnly">
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 20px;">
                    <button class="btn btn-secondary mr-1" type="submit" v-if="selectDisabled">
                        <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
                    </button>
                    <button class="btn btn-success mr-1" type="submit" v-else :disabled="selectDisabled">
                        <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
                    </button>
                    
                    <button class="btn btn-secondary" type="button" v-if="selectDisabled">
                        <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
                    </button>
                    <button class="btn btn-outline-primary" type="button" v-else :disabled="selectDisabled" @click="cancel">
                        <router-link to="/play-to-save/p2s-sixdigit-num" class="new" :disabled="selectDisabled">
                            <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
                        </router-link>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</template>

<script>
import moment from "moment";

export default {
    data() {
        return {
            playtosavesix: {
                ptsSdId: "",
                ptsSdNumBrCode: 18,
                ptsSdNumDocNo: "",
                sixDigitNumber: "",
                sixDigitNumber2: "",
                sixDigitWinPrize: "", 
                sdDateOfDraw: "",
                sdTotalCollection: "",
                sdDateTimeTrans: "",
            },

            sixDigitOne: "",
            sixDigitTwo: "",
            sixDigitThree: "",
            sixDigitFour: "",
            sixDigitFive: "",
            sixDigitSix: "",

            edit: false,

            successAdd: "",
            successEdit: "",
            readOnly: true,
            selectDisabled: true,
        }
    },

    created() {

    },

    methods: {
        insertSixDigitNumber() {
            if(this.edit === false) {
                this.playtosavesix.sixDigitNumber = this.sixDigitOne+","+this.sixDigitTwo+","+this.sixDigitThree+","+this.sixDigitFour+","+this.sixDigitFive+","+this.sixDigitSix;
                this.playtosavesix.sixDigitNumber2 = this.sixDigitOne+""+this.sixDigitTwo+""+this.sixDigitThree+""+this.sixDigitFour+""+this.sixDigitFive+""+this.sixDigitSix;
                fetch('/api/playtosavesixdigits', {
                    method: "post",
                    body: JSON.stringify(this.playtosavesix),
                    headers: { "content-type": "application/json" }
                })
                .then(res => {
                    this.playtosavesix.ptsSdNumDocNo = "";
                    this.playtosavesix.sixDigitNum = "";
                    this.playtosavesix.sixDigitWinPrize = "";
                    this.playtosavesix.sdDateOfDraw = "";
                    this.playtosavesix.sdTotalCollection = "";
                    this.playtosavesix.sdDateTimeTrans = "";
                    this.sixDigitOne = "";
                    this.sixDigitTwo = "";
                    this.sixDigitThree = "";
                    this.sixDigitFour = "";
                    this.sixDigitFive = "";
                    this.sixDigitSix = "";
                    this.readOnly = true;
                    this.selectDisabled = true;
                    this.successAdd = true;
                    setTimeout(() => {
                        this.successAdd = false;
                    }, 2000),
                    console.log("Six Digit Added");
                })
                .catch(err => console.log(err));
            }
        },

        newSixDigit() {
            this.readOnly = false;
            this.selectDisabled = false;
            this.playtosavesix.ptsSdNumBrCode = 18;
            this.playtosavesix.ptsSdNumDocNo = moment(new Date).format('YYYYMMDD');
            this.playtosavesix.sixDigitNumber = "";
            this.playtosavesix.sixDigitNumber2 = "";
            this.playtosavesix.sixDigitWinPrize = ""; 
            this.playtosavesix.sdDateOfDraw = moment(new Date).format('YYYY-MM-DD');
            this.playtosavesix.sdTotalCollection = "";
            this.playtosavesix.sdDateTimeTrans = moment(new Date).format('YYYY-MM-DD hh:mm:ss');
        },

        cancel() {
            this.readOnly = true;
            this.selectDisabled = true;
            this.playtosavesix.ptsSdNumDocNo = "";
            this.playtosavesix.sixDigitNumber = "";
            this.playtosavesix.sixDigitNumber2 = "";
            this.playtosavesix.sixDigitWinPrize = "";
            this.playtosavesix.sdDateOfDraw = "";
            this.playtosavesix.sdTotalCollection = "";
            this.playtosavesix.sdDateTimeTrans = "";
            this.sixDigitOne = "";
            this.sixDigitTwo = "";
            this.sixDigitThree = "";
            this.sixDigitFour = "";
            this.sixDigitFive = "";
            this.sixDigitSix = "";
        }
    }
}
</script>

<style>
.playtosave {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>
