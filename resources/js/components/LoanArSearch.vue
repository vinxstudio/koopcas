<template>
    <div class="loanarsearch">
        <h1>AR Master List</h1>

        <form @submit.prevent="fetchLoans">
            <div class="form-row mb-4 mt-2 align-items-center">
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search"><u>S</u>earch</label>
                <div class="col-sm-3 mr-3">
                    <input class="form-control form-control-sm" v-model="search" name="search" placeholder="Enter Client's ID" type="text" @keyup.enter="fetchLoans()">
                </div>
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="status">Status</label>
                <div class="col-auto">
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchLoans()">
                        <i class="fa fa-search mr-1"></i><u>G</u>o 
                    </button>
                    <router-link to="/loans/loan-ar-master" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-times-circle mr-1"></i>Cancel 
                    </router-link>
                </div>
            </div>
        </form>

        <table class="table table-sm table-bordered table-hover custom-table" v-if="this.$route.params.id">
            <thead>
                <tr>
                    <th scope="col">BR</th>
                    <th scope="col">SLC CODE</th>
                    <th scope="col">SLT CODE</th>
                    <th scope="col">REF NO</th>
                    <th scope="col">TR DATE</th>
                    <th scope="col">Amount</th>
                    <th scope="col">View AR</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="armaster in armasters" v-bind:key="armaster.id">
                    <td>{{ armaster.arBrCode }}</td>
                    <td>{{ armaster.arSlcCode }}</td>
                    <td>{{ armaster.arSltCode }}</td>
                    <td>{{ armaster.arRefNo }}</td>
                    <td>{{ armaster.arTrDate }}</td>
                    <td>{{ armaster.arPamt }}</td>
                    <td><router-link v-bind:to="'/loans/loan-ar-master/'+armaster.arBrCode+'/'+armaster.arSlcCode+'/'+armaster.arSltCode+'/'+armaster.arRefNo+'/'+armaster.clientIdAr">View AR Master</router-link></td>
                </tr>
            </tbody>
        </table>

        <table class="table table-sm table-bordered table-hover custom-table" v-else>
            <thead>
                <tr>
                    <th scope="col">B</th>
                    <th scope="col">Client ID</th>
                    <th scope="col">K</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Client Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Organization Name</th>
                    <th scope="col">Old ClientID</th>
                    <th scope="col">View Client</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="clientloan in clientloans" v-bind:key="clientloan.id">
                    <td>{{ clientloan.brCode }}</td>
                    <td>{{ clientloan.clientId }}</td>
                    <td>{{ clientloan.chkDgt }}</td>
                    <td>{{ clientloan.lastName }}, {{ clientloan.firstName }}</td>
                    <td>{{ clientloan.middleName }}</td>
                    <td>{{ clientloan.clientTypeName }}</td>
                    <td>{{ clientloan.accountStatusName }}</td>
                    <td>{{ clientloan.alertLevel }}</td>
                    <td>{{ clientloan.referenceId }}</td>
                    <td><router-link v-bind:to="'/loans/loan-ar-master/'+clientloan.clientId">View Loan</router-link></td>
                </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
export default {
    data() {
        return {
            clientloans: [],
            armasters: [],
            search: '',
            paramId: '',
        }
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if (this.paramId > 0) {
            this.fetchArLoans(this.paramId);
        }
    },

    methods: {
        fetchLoans() {
            let search = this.search;
            fetch(`/api/loansearch/${search}`)
                .then(res => res.json())
                .then(res => {
                    this.clientloans = res.data;
                    console.log(this.clientloans);
                })
                .catch(err => console.log(err));
        },

        fetchArLoans(id) {
            fetch(`/api/ars/${id}`)
                .then(res => res.json())
                .then(res => {
                    this.armasters = res.data;
                    console.log(this.armasters);
                })
                .catch(err => console.log(err));
        }
    }
}
</script>

<style>
.loanarsearch{
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>
