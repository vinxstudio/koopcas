<template>
    <div class="transaction-search">
        <h1>Inquiry Client List</h1>

        <form>
            <div class="form-row mb-4 mt-2 align-items-center">
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search"><u>S</u>earch</label>
                <div class="col-sm-2 mb-2">
                    <select class="custom-select custom-select-sm" name="trCode" v-model="trCode">
                        <option v-for="transType in transTypes" v-bind:value="transType.transTypeId">{{ transType.transTypeDesc }}</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <input class="form-control form-control-sm" v-model="trYear" name="trYear" placeholder="" type="text">
                </div>
                <div class="col-sm-2">
                    <input class="form-control form-control-sm" v-model="trCtlNo" name="trCtlNo" placeholder="Control Number" type="text">
                </div>
                <div class="col-sm-2">
                    <input class="form-control form-control-sm" v-model="trDocNo" name="trDocNo" placeholder="Document Number" type="text">
                </div>
                <div class="col-sm-2">
                    <input class="form-control form-control-sm" name="explanation" placeholder="Explanation" type="text">
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchTrans()">
                        <i class="fa fa-search mr-1"></i><u>G</u>o 
                    </button>
                    <router-link to="/front-office/transaction" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-times-circle mr-1"></i>Cancel 
                    </router-link>
                </div>
            </div>
        </form>

        <table class="table table-sm table-bordered table-hover custom-table">
            <thead>
                <tr>
                    <td scope="col">Trans Type</td>
                    <td scope="col">Year</td>
                    <td scope="col">Control Number</td>
                    <td scope="col">Document Number</td>
                    <td scope="col">Explanation</td>
                    <td scope="col">View Transaction</td>
                </tr>
            </thead>

            <tbody>
                <tr v-for="transsum in transsums" v-bind:key="transsum.id">
                    <td>{{ transsum.transTypeDesc }}</td>
                    <td>{{ transsum.trYear }}</td>
                    <td>{{ transsum.trCtlNo }}</td>
                    <td>{{ transsum.trDocNo }}</td>
                    <td>{{ transsum.explanation }}</td>
                    <td><router-link v-bind:to="'/front-office/inquiry/'+transsum.trCode+'/'+transsum.trYear+'/'+transsum.trCtlNo+'/'+transsum.trDocNo">View Transaction</router-link></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import moment from "moment";

export default {
    data() {
        return {
            transTypes: [],
            transsums: [],
            trCode: '',
            trYear: moment(new Date).format('YYYY'),
            trCtlNo: '',
            trDocNo: '',
        }
    },

    created() {
        this.fetchTransTypes();
    },

    methods: {
        fetchTransTypes() {
            fetch('/api/transTypes')
                .then(res => res.json())
                .then(res => {
                    this.transTypes = res.data;
                    console.log(this.transTypes);
                })
                .catch(err => console.log(err));
        },

        fetchTrans() {
            let trCode = this.trCode;
            let trYear = this.trYear;
            let trCtlNo = this.trCtlNo;
            let trDocNo = this.trDocNo;
            fetch(`/api/transSum/${trCode}/${trYear}/${trCtlNo}/${trDocNo}`)
                .then(res => res.json())
                .then(res => {
                    this.transsums = res.data;
                    console.log(this.transsums);
                })
                .catch(err => console.log(err));
        }
    }
}
</script>

<style>
.transaction-search {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>