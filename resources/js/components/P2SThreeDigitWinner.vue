<template>
    <div class="playtosave">
        <nav class="navbar navbar-expand-lg p-0 mt-2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <router-link to="/play-to-save/p2s-threedigit-search" class="btn btn-sm btn-outline-primary mr-1">
                        <i class="fa fa-search mr-1"></i><span>Find</span>
                    </router-link>

                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="newThreeDigitWinner" v-if="this.$route.params.id">
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>
                    <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else disabled>
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>

                    <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
                        <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                    </button>
                </li>
            </ul>
        </nav>

        <div class="alert alert-success mt-2" v-if="successAdd" transition="expand">Three Digit Winner Added Successfully.</div>

        <div class="alert alert-success mt-2" v-if="successEdit" transition="expand">Three Digit Winner Updated Successfully.</div>

        <form @submit.prevent="insertThreeDigitWinners">
            <div class="row justify-content-center mt-2">
                <div class="col-md-12">
                    <fieldset class="border p-4 bg-light">
                        <fieldset class="border p-4 bg-light mb-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">3 Digit Number</label>
                                        <input type="text" name="threeDigitNum" v-model="playtosavethree.threeDigitNum" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Winning Prize Solo</label>
                                        <input type="text" name="threeDigitWinPrize" v-model="playtosavethree.threeDigitWinPrizeSolo" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Winning Prize Rumble</label>
                                        <input type="text" name="threeDigitWinPrize" v-model="playtosavethree.threeDigitWinPrizeRumble" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Date of Draw</label>
                                        <input type="date" name="tdDateOfDraw" v-model="playtosavethree.tdDateOfDraw" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="border p-4 bg-light">
                            <!-- <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Client Account Number</label>
                                        <input type="text" name="clientAcctNum" v-model="threedigitwinners.clientAcctNum" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Client Name</label>
                                        <input type="text" name="clientName" v-model="threedigitwinners.clientName" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Winning Number</label>
                                        <input type="text" name="winningNumber" v-model="threedigitwinners.winningNumber" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Prize Won</label>
                                        <input type="text" name="prizeWon" v-model="threedigitwinners.prizeWon" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="">Date of Winning</label>
                                        <input type="date" name="dateOfWinning" :value="threedigitwinners.dateOfWinning = playtosavethree.tdDateOfDraw" class="form-control" :readonly="readOnly">
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="d-flex justify-content-center mb-4">
                                <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-if="selectDisabled">
                                    <i class="fa fa-plus mr-1"></i>
                                    <span>Add</span>
                                </button>
                                <button class="btn btn-sm btn-outline-primary mr-1" type="submit" v-else :disabled="selectDisabled">
                                    <i class="fa fa-plus mr-1"></i>
                                    <span>Add</span>
                                </button>

                                <button class="btn btn-sm mr-1 btn-outline-secondary" type="button">
                                    <i class="fa fa-ban mr-1"></i>
                                    <span>Clear</span>
                                </button>
                            </div> -->

                            <!-- <table class="table table-sm table-bordered table-hover custom-table">
                                <thead>
                                    <tr>
                                        <th scope="col">BR</th>
                                        <th scope="col">Account Number</th>
                                        <th scope="col">Client Name</th>
                                        <th scope="col">Winning Number</th>
                                        <th scope="col">Prize Won</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="threedigitwin in threedigitwins" v-bind:key="threedigitwin.id">
                                        <td>{{ threedigitwin.ptsTdWinBrCode }}</td>
                                        <td>{{ threedigitwin.clientAcctNum }}</td>
                                        <td>{{ threedigitwin.clientName }}</td>
                                        <td>{{ threedigitwin.winningNumber }}</td>
                                        <td>{{ threedigitwin.prizeWon }}</td>
                                        <td>{{ threedigitwin.dateOfWinning }}</td>
                                    </tr>
                                </tbody>
                            </table> -->
                            <h4>List of Winner/s</h4>
                            <table class="table table-sm table-bordered table-hover custom-table">
                                <thead>
                                    <tr>
                                        <th scope="col">BR</th>
                                        <th scope="col">Document No.</th>
                                        <th scope="col">Client ID</th>
                                        <th scope="col">Client Name</th>
                                        <th scope="col">Winning Number</th>
                                        <th scope="col">Solo/Rumble</th>
                                        <th scope="col">Transaction Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="threedigitentry in threedigitentries" v-bind:key="threedigitentry.id">
                                        <td>{{ threedigitentry.ptsTdeBrCode }}</td>
                                        <td>{{ threedigitentry.ptsTdTrDocNo }}</td>
                                        <td>{{ threedigitentry.ptsTdClientId }}</td>
                                        <td>{{ threedigitentry.lastName }}, {{ threedigitentry.firstName }} {{ threedigitentry.middleName }}</td>
                                        <td>{{ threedigitentry.ptsThreeDigitNum.split("").toString() }}</td>
                                        <td>{{ threedigitentry.ptsTdRumbleSolo }}</td>
                                        <td>{{ threedigitentry.ptsTdDateTrans }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import moment from "moment";

export default {
    data() {
        return {
            threedigitwinners: {
                ptsTdWinId: "",
                ptsTdWinBrCode: "", 
                ptsTdId: "",
                clientAcctNum: "",
                clientName: "",
                winningNumber: "",
                prizeWon: "",
                dateOfWinning: "",
                dateTimeOfTrans: "",
            },

            playtosavethree: {
                ptsTdId: "",
                threeDigitNum: "",
                threeDigitWinPrizeSolo: "",
                threeDigitWinPrizeRumble: "",
                tdDateOfDraw: "",
            },

            threedigitwins: [],
            threedigitentries: [],

            successAdd: "",
            successEdit: "",
            readOnly: true,
            selectDisabled: true,
        }
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if (this.paramId > 0) {
            this.fetchThreeDigitNumbers(this.paramId);
        }

        this.three = this.$route.params.threedigit
        if (this.three > 0) {
            this.fetchThreeDigitEntries(this.three);
        }
    },

    created() {
        
    },

    methods: {
        fetchThreeDigitWinners(id) {
            fetch(`/api/playtosavethreedigitwinners/${id}`)
                .then(res => res.json())
                .then(res => {
                    this.threedigitwins = res.data;
                    console.log(this.threedigitwins);
                })
                .catch(err => console.log(err));
        },

        fetchThreeDigitNumbers(id) {
            fetch(`/api/playtosavethreedigit/${id}`)
                .then(res => res.json())
                .then(res => {
                    this.playtosavethree = res.data[0];
                    this.playtosavethree.threeDigitNum = this.playtosavethree.threeDigitNum.split("").toString();
                    console.log(this.playtosavethree);
                })
                .catch(err => console.log(err));
        },

        fetchThreeDigitEntries(threedigit) {
            fetch(`/api/playtosavethreedigitentries/${threedigit}`)
                .then(res => res.json())
                .then(res => {
                    this.threedigitentries = res.data;
                    console.log(this.threedigitentries);
                })
                .catch(err => console.log(err));
        },

        insertThreeDigitWinners() {
            fetch("/api/playtosavethreedigitwinners", {
                method: "post",
                body: JSON.stringify(this.threedigitwinners),
                headers: { "content-type": "application/json" }
            })
            .then(res => {
                this.threedigitwinners.ptsTdWinId = "";
                this.threedigitwinners.clientAcctNum = "";
                this.threedigitwinners.clientName = "";
                this.threedigitwinners.winningNumber = "";
                this.threedigitwinners.prizeWon = "";
                this.threedigitwinners.dateOfWinning = "";
                this.threedigitwinners.dateTimeOfTrans = "";
                this.readOnly = true;
                this.selectDisabled = true;
                this.successAdd = true;
                setTimeout(() => {
                    this.successAdd = false;
                }, 2000),
                console.log("Three Digit Winners Added");
            })
            .catch(err => console.log(err));
        },

        newThreeDigitWinner() {
            this.readOnly = false;
            this.selectDisabled = false;
            this.threedigitwinners.ptsTdWinBrCode = 18; 
            this.threedigitwinners.ptsTdId = this.$route.params.id;
            this.threedigitwinners.clientAcctNum = "";
            this.threedigitwinners.clientName = "";
            this.threedigitwinners.winningNumber = "";
            this.threedigitwinners.prizeWon = "";
            this.threedigitwinners.dateOfWinning = "";
            this.threedigitwinners.dateTimeOfTrans = moment(new Date).format('YYYY-MM-DD hh:mm:ss');
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