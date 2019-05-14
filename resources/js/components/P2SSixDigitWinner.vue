<template>
    <div class="playtosave">
        <nav class="navbar navbar-expand-lg p-0 mt-2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <router-link to="/play-to-save/p2s-sixdigit-search" class="btn btn-sm btn-outline-primary mr-1">
                        <i class="fa fa-search mr-1"></i><span>Find</span>
                    </router-link>
                    
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="newSixDigitWinner" v-if="this.$route.params.id">
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

        <div class="alert alert-success mt-2" v-if="successAdd" transition="expand">Six Digit Winner Added Successfully.</div>

        <div class="alert alert-success mt-2" v-if="successEdit" transition="expand">Six Digit Winner Updated Successfully.</div>

        <form @submit.prevent="insertSixDigitWinners">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <fieldset class="border p-4 bg-light">
                        <div class="container">
                            <fieldset class="border p-4 bg-light mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">6 Digit Number</label>
                                            <input type="text" name="sixDigitNum" v-model="playtosavesix.sixDigitNumber" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Winning Prize</label>
                                            <input type="text" name="sixDigitWinPrize" v-model="playtosavesix.sixDigitWinPrize" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Date of Draw</label>
                                            <input type="date" name="sdDateOfDraw" v-model="playtosavesix.sdDateOfDraw" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <fieldset class="border p-4 bg-light">
                                <!-- <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="">Client Account Number</label>
                                            <input type="text" name="clientAcctNum" v-model="sixdigitwinners.clientAcctNum" class="form-control" :readonly="readOnly">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Client Name</label>
                                            <input type="text" name="clientName" v-model="sixdigitwinners.clientName" class="form-control" :readonly="readOnly">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="">Winning Number</label>
                                            <input type="text" name="winningNumber" v-model="sixdigitwinners.winningNumber" class="form-control" :readonly="readOnly">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="">Prize Won</label>
                                            <input type="text" name="prizeWon" v-model="sixdigitwinners.prizeWon" class="form-control" :readonly="readOnly">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Date of Winning</label>
                                            <input type="date" name="dateOfWinning" :value="sixdigitwinners.dateOfWinning = playtosavesix.sdDateOfDraw" class="form-control" :readonly="readOnly">
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
                                        <tr v-for="sixdigitwin in sixdigitwins" v-bind:key="sixdigitwin.id">
                                            <td>{{ sixdigitwin.ptsSdWinBrCode }}</td>
                                            <td>{{ sixdigitwin.clientAcctNum }}</td>
                                            <td>{{ sixdigitwin.clientName }}</td>
                                            <td>{{ sixdigitwin.winningNumber }}</td>
                                            <td>{{ sixdigitwin.prizeWon }}</td>
                                            <td>{{ sixdigitwin.dateOfWinning }}</td>
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
                                            <th scope="col">Transaction Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr v-for="sixdigitentry in sixdigitentries" v-bind:key="sixdigitentry.id">
                                            <td>{{ sixdigitentry.ptsSdeBrCode }}</td>
                                            <td>{{ sixdigitentry.ptsSdTrDocNo }}</td>
                                            <td>{{ sixdigitentry.ptsSdClientId }}</td>
                                            <td>{{ sixdigitentry.lastName }}, {{ sixdigitentry.firstName }} {{ sixdigitentry.middleName }}</td>
                                            <td>{{ sixdigitentry.ptsSixDigitNum }}</td>
                                            <td>{{ sixdigitentry.ptsSdDateTrans }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
    </div> 
</template>

<script>
export default {
    data() {
        return {
            sixdigitwinners: {
                ptsSdWinId: "",
                ptsSdWinBrCode: "",
                ptsSdId: "",
                clientAcctNum: "",
                clientName: "",
                winningNumber: "",
                prizeWon: "",
                dateOfWinning: "",
                dateTimeOfTrans: "",
            },

            playtosavesix: {
                ptsSdId: "",
                sixDigitNumber: "",
                sixDigitWinPrize: "", 
                sdDateOfDraw: "",
            },

            sixdigitwins: [],
            sixdigitentries: [],

            successAdd: "",
            successEdit: "",
            readOnly: true,
            selectDisabled: true,
        }
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if (this.paramId > 0) {
            this.fetchSixDigitNumber(this.paramId);
        }

        this.six = this.$route.params.sixdigit;
        if (this.six > 0) {
            this.fetchSixDigitEntries(this.six);
        }
    },

    created() {

    },

    methods: {
        fetchSixDigitWinners(id) {
            fetch(`/api/playtosavesixdigitwinners/${id}`)
                .then(res => res.json())
                .then(res => {
                    this.sixdigitwins = res.data;
                    console.log(this.sixdigitwins);
                })
                .catch(err => console.log(err));
        },

        fetchSixDigitNumber(id) {
            fetch(`/api/playtosavesixdigit/${id}`)
                .then(res => res.json())
                .then(res => {
                    this.playtosavesix = res.data[0];
                    console.log(this.playtosavesix);
                })
                .catch(err => console.log(err));
        },

        fetchSixDigitEntries(sixdigit) {
            fetch(`/api/playtosavesixdigitentries/${sixdigit}`)
                .then(res => res.json())
                .then(res => {
                    this.sixdigitentries = res.data;
                    console.log(this.sixdigitentries);
                })
                .catch(err => console.log(err));
        },

        insertSixDigitWinners() {
            fetch("/api/playtosavesixdigitwinners", {
                method: "post",
                body: JSON.stringify(this.sixdigitwinners),
                headers: { "content-type": "application/json" }
            })
            .then(res => {
                this.sixdigitwinners.ptsSdId = "";
                this.sixdigitwinners.clientAcctNum = "";
                this.sixdigitwinners.clientName = "";
                this.sixdigitwinners.winningNumber = "";
                this.sixdigitwinners.prizeWon = "";
                this.sixdigitwinners.dateOfWinning = "";
                this.sixdigitwinners.dateTimeOfTrans = "";
                this.readOnly = true;
                this.selectDisabled = true;
                this.successAdd = true;
                setTimeout(() => {
                    this.successAdd = false;
                }, 2000),
                console.log("Winners Added");
            })
            .catch(err => console.log(err));
        },

        newSixDigitWinner() {
            this.readOnly = false;
            this.selectDisabled = false;
            this.sixdigitwinners.ptsSdWinBrCode = 18;
            this.sixdigitwinners.ptsSdId = this.$route.params.id;
            this.sixdigitwinners.clientAcctNum = "";
            this.sixdigitwinners.clientName = "";
            this.sixdigitwinners.winningNumber = "";
            this.sixdigitwinners.prizeWon = "";
            this.sixdigitwinners.dateOfWinning = "";
            this.sixdigitwinners.dateTimeOfTrans = moment(new Date).format('YYYY-MM-DD hh:mm:ss');
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