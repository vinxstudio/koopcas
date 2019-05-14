<template>
    <div class="playtosave">
        <form @submit.prevent="fetchSixDigit">
            <div class="form-row mb-4 mt-4 align-items-center">
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search"><u>S</u>earch</label>
                <div class="col-sm-3 mr-3">
                    <input class="form-control form-control-sm" name="search" v-model="search" type="date" @keyup.enter="fetchSixDigit()">
                </div>

                <div class="col-sm-3 mr-3">
                    <input type="text" name="search" v-model="search" id="" class="form-control" placeholder="Enter Document No." @keyup.enter="fetchSixDigit()">
                </div>
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="status">Status</label>
                <div class="col-auto">
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchSixDigit()">
                        <i class="fa fa-search mr-1"></i><u>G</u>o 
                    </button>
                    <router-link to="/play-to-save/p2s-sixdigit-winner" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-times-circle mr-1"></i>Cancel 
                    </router-link>
                </div>
            </div>
        </form>

        <table class="table table-sm table-bordered table-hover custom-table">
            <thead>
                <tr>
                    <th scope="col">BR</th>
                    <th scope="col">Document No.</th>
                    <th scope="col">Six Digit Number</th>
                    <th scope="col">Winning Prize</th>
                    <th scope="col">Date of Draw</th>
                    <th scope="col">View Number</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="sixdigit in sixdigits" v-bind:key="sixdigit.id">
                    <td>{{ sixdigit.ptsSdNumBrCode }}</td>
                    <td>{{ sixdigit.ptsSdNumDocNo }}</td>
                    <td>{{ sixdigit.sixDigitNumber }}</td>
                    <td>{{ sixdigit.sixDigitWinPrize }}</td>
                    <td>{{ sixdigit.sdDateOfDraw }}</td>
                    <td><router-link v-bind:to="'/play-to-save/p2s-sixdigit-winner/'+sixdigit.ptsSdId+'/'+sixdigit.sixDigitNumber2">View Number</router-link></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            sixdigits: [],
            search: "",
        }
    },

    created() {

    },

    methods: {
        fetchSixDigit() {
            let search = this.search;
            fetch(`/api/playtosavesix/${search}`)
                .then(res => res.json())
                .then(res => {
                    this.sixdigits = res.data;
                    console.log(this.sixdigits);
                })
                .catch(err => console.log(err));
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