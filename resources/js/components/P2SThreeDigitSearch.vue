<template>
    <div class="playtosave">
        <form @submit.prevent="fetchThreeDigits">
            <div class="form-row mb-4 mt-4 align-items-center">
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search"><u>S</u>earch</label>
                <div class="col-sm-3 mr-3">
                    <input class="form-control form-control-sm" name="search" v-model="search" type="date" @keyup.enter="fetchThreeDigits()">
                </div>

                <div class="col-sm-3 mr-3">
                    <input type="text" name="search" v-model="search" id="" class="form-control" placeholder="Enter Document No." @keyup.enter="fetchThreeDigits()">
                </div>
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="status">Status</label>
                <div class="col-auto">
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchThreeDigits()">
                        <i class="fa fa-search mr-1"></i><u>G</u>o 
                    </button>
                    <router-link to="/play-to-save/p2s-threedigit-winner" class="btn btn-sm btn-outline-primary">
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
                    <th scope="col">Three Digit Number</th>
                    <th scope="col">Winning Prize Solo</th>
                    <th scope="col">Winning Prize Rumble</th>
                    <th scope="col">Date of Draw</th>
                    <th scope="col">View Number</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="threedigit in threedigits" v-bind:key="threedigit.id">
                    <td>{{ threedigit.ptsTdNumBrCode }}</td>
                    <td>{{ threedigit.ptsTdNumDocNo }}</td>
                    <td>{{ threedigit.threeDigitNum }}</td>
                    <td>{{ threedigit.threeDigitWinPrizeSolo }}</td>
                    <td>{{ threedigit.threeDigitWinPrizeRumble }}</td>
                    <td>{{ threedigit.tdDateOfDraw }}</td>
                    <td><router-link v-bind:to="'/play-to-save/p2s-threedigit-winner/'+threedigit.ptsTdId+'/'+threedigit.threeDigitNum">View Number</router-link></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            threedigits: [],
            search: "",
        }
    },

    created() {

    },

    methods: {
        fetchThreeDigits() {
            let search = this.search;
            fetch(`/api/playtosavethree/${search}`)
                .then(res => res.json())
                .then(res => {
                    this.threedigits = res.data;
                    console.log(this.threedigits);
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
