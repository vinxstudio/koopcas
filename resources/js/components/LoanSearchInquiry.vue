<template>
    <div class="loans-search">
        <h1>Loans Inquiry List</h1>

        <form>
            <div class="form-row mb-4 mt-2 align-items-center">
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search"><u>S</u>earch</label>
                <div class="col-sm-3 mr-3">
                    <input class="form-control form-control-sm" v-model="search" name="search" placeholder="Enter Client's ID" type="text" ng-reflect-name="clientId">
                </div>
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="status">Status</label>
                <div class="col-auto">
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchLoans()">
                        <i class="fa fa-search mr-1"></i><u>G</u>o 
                    </button>
                    <router-link to="/loans/loans-master" class="btn btn-sm btn-outline-primary">
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
                    <th scope="col">TR DATE</th>
                    <th scope="col">Amount</th>
                    <th scope="col">View Loan</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="loan in loans" v-bind:key="loan.id">
                    <td>{{ loan.loanBrCode }}</td>
                    <td>{{ loan.loanSlcCode }}</td>
                    <td>{{ loan.loanSltCode }}</td>
                    <td>{{ loan.loanTrDate }}</td>
                    <td>{{ loan.loanPamt }}</td>
                    <td><router-link v-bind:to="'/loans/loans-master-inquiry/'+loan.loanBrCode+'/'+loan.loanSlcCode+'/'+loan.loanSltCode+'/'+loan.loanRefNo+'/'+loan.clientIdLoan">View Loan</router-link></td>
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
                <tr v-for="client in clients" v-bind:key="client.id">
                    <td>{{ client.brCode }}</td>
                    <td>{{ client.clientId }}</td>
                    <td>{{ client.chkDgt }}</td>
                    <td>{{ client.lastName }}, {{ client.firstName }}</td>
                    <td>{{ client.middleName }}</td>
                    <td>{{ client.clientTypeName }}</td>
                    <td>{{ client.accountStatusName }}</td>
                    <td>{{ client.alertLevel }}</td>
                    <td>{{ client.referenceId }}</td>
                    <td><router-link v-bind:to="'/loans/loans-master-inquiry/'+client.clientId">View Loan</router-link></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            clients: [],
            loans: [],
            search: '',
        }
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if (this.paramId > 0) {
            this.fetchClientLoans(this.paramId);
        }
    },

    created() {

    },

    methods: {
        fetchLoans() {
            let search = this.search;
            fetch(`/api/loansearch/${search}`)
                .then(res => res.json())
                .then(res => {
                    this.clients = res.data;
                    console.log(this.clients);
                })
                .catch(err => console.log(err));
        },

        fetchClientLoans(id) {
            fetch(`/api/loansearch/${id}/loan-search-loan`)
                .then(res => res.json())
                .then(res => {
                    this.loans = res.data;
                    console.log(this.loans);
                })
                .catch(err => console.log(err));
        }
    }
}
</script>

<style>
.loans-search{
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>