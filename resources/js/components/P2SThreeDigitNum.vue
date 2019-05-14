<template>
    <div class="playtosave">
        <nav class="navbar navbar-expand-lg p-0 mt-2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="newThreeDigit">
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>

                    <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
                        <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                    </button>
                </li>
            </ul>
        </nav>

        <div class="alert alert-success" v-if="successAdd" transition="expand">Three Digit Added Successfully.</div>

        <div class="alert alert-success" v-if="successEdit" transition="expand">Three Digit Updated Successfully.</div>

        <h3 class="mt-2">Play To Save</h3>
        <form @submit.prevent="inserThreeDigitNumbers">
            <fieldset class="border p-4 bg-light">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Date of Transaction</label>
                            <input type="date" name="tdDateOfDraw" v-model="playtosavethree.tdDateOfDraw" class="form-control" :readonly="readOnly">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Document No.</label>
                            <input type="text" name="ptsTdNumDocNo" v-model="playtosavethree.ptsTdNumDocNo" class="form-control" :readonly="readOnly">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Total Collection</label>
                            <input type="text" name="tdTotalCollection" v-model="playtosavethree.tdTotalCollection" class="form-control" :readonly="readOnly">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-2">
                    <div class="col-md-6">
                        <fieldset class="border p-4 bg-light mb-3">
                            <label for="">3 Number Digits</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="number" name="threeDigitOne" v-model="threeDigitOne" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="number" name="threeDigitTwo" v-model="threeDigitTwo" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="number" name="threeDigitThree" v-model="threeDigitThree" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Winning Prize for Solo</label>
                                        <input type="text" name="threeDigitWinPrizeSolo" v-model="playtosavethree.threeDigitWinPrizeSolo" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Winning Prize for Rumble</label>
                                        <input type="text" name="threeDigitWinPrizeRumble" v-model="playtosavethree.threeDigitWinPrizeRumble" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>
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
                        <router-link to="/play-to-save/p2s-threedigit-num" class="new" :disabled="selectDisabled">
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
            playtosavethree: {
                ptsTdId: "",
                ptsTdNumBrCode: "",
                ptsTdNumDocNo: "",
                threeDigitNum: "",
                threeDigitWinPrizeSolo: "",
                threeDigitWinPrizeRumble: "",
                tdDateOfDraw: "",
                tdTotalCollection: "",
                tdDateTimeTrans: "",
            },

            threeDigitOne: "",
            threeDigitTwo: "",
            threeDigitThree: "",

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
        inserThreeDigitNumbers() {
            if(this.edit === false) {
                this.playtosavethree.threeDigitNum = this.threeDigitOne+""+this.threeDigitTwo+""+this.threeDigitThree;
                fetch('/api/playtosavethreedigits', {
                    method: "post",
                    body: JSON.stringify(this.playtosavethree),
                    headers: { "content-type": "application/json" }
                })
                .then(res => {
                    this.playtosavethree.ptsTdNumDocNo = "";
                    this.playtosavethree.threeDigitNum = "";
                    this.playtosavethree.threeDigitWinPrizeSolo = "";
                    this.playtosavethree.threeDigitWinPrizeRumble = "";
                    this.playtosavethree.tdDateOfDraw = "";
                    this.playtosavethree.tdTotalCollection = "";
                    this.playtosavethree.tdDateTimeTrans = "";
                    this.threeDigitOne = "";
                    this.threeDigitTwo = "";
                    this.threeDigitThree = "";
                    this.readOnly = true;
                    this.selectDisabled = true;
                    this.successAdd = true;
                    setTimeout(() => {
                        this.successAdd = false;
                    }, 2000),
                    console.log("Three Digit Added");
                })
            }
        },

        newThreeDigit() {
            this.readOnly = false;
            this.selectDisabled = false;
            this.playtosavethree.ptsTdNumBrCode = 18;
            this.playtosavethree.ptsTdNumDocNo = moment(new Date).format('YYYYMMDD');
            this.playtosavethree.threeDigitNum = "";
            this.playtosavethree.threeDigitWinPrizeSolo = "";
            this.playtosavethree.threeDigitWinPrizeRumble = "";
            this.playtosavethree.tdDateOfDraw = moment(new Date).format('YYYY-MM-DD');
            this.playtosavethree.tdTotalCollection = "";
            this.playtosavethree.tdDateTimeTrans = moment(new Date).format('YYYY-MM-DD hh:mm:ss');
        },

        cancel() {
            this.readOnly = true;
            this.selectDisabled = true;
            this.playtosavethree.ptsTdNumDocNo = "";
            this.playtosavethree.threeDigitNum = "";
            this.playtosavethree.threeDigitWinPrizeSolo = "";
            this.playtosavethree.threeDigitWinPrizeRumble = "";
            this.playtosavethree.tdDateOfDraw = "";
            this.playtosavethree.tdTotalCollection = "";
            this.playtosavethree.tdDateTimeTrans = "";
            this.threeDigitOne = "";
            this.threeDigitTwo = "";
            this.threeDigitThree = "";
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
