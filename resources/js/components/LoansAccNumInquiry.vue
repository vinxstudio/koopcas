<template>
    <div class="loans-account-number-inquiry">
        <h1>Loans Account Number Inquiry</h1>
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
                    <router-link to="/loans/loans-application-module" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-times-circle mr-1"></i>Cancel 
                    </router-link>
                </div>
            </div>
        </form>
        
        <table class="table table-sm table-bordered table-hover custom-table" v-if="this.$route.params.id">
            <thead>
                <tr>
                    <th scope="col">LOAN TYPE</th>
                    <th scope="col">ACCOUNT NUMBER</th>
                    <th scope="col">DATE</th>
                    <th scope="col">PRINCIPAL</th>
                    <th scope="col">BALANCE</th>
                    <th scope="col">View Loan</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="client in clients" v-bind:key="client.id">
                    <td>{{ client.loanType }}</td>
                    <td>{{ client.refNo }}</td>
                    <td>{{ client.trDate }}</td>
                    <td>{{ client.prinAmt }}</td>
                    <td>BALANCE</td>
                    <td><router-link v-bind:to="'/loans/loans-application-module/'+client.clientId+'/'+client.brCode+'/'+client.refNo+'/'+client.slcCode+'/'+client.sltCode">View Loan</router-link></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-sm table-bordered table-hover custom-table" v-else>
            <thead>
                <tr>
                    <th scope="col">LOAN TYPE</th>
                    <th scope="col">ACCOUNT NUMBER</th>
                    <th scope="col">DATE</th>
                    <th scope="col">PRINCIPAL</th>
                    <th scope="col">BALANCE</th>
                    <th scope="col">View Loan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>View Loan</td>
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
            search: ''
        }
    },

    mounted() {
        this.paramId = this.$route.params.id;
        this.branchCode = this.$route.params.branchCode;
        if (this.paramId > 0) {
            this.fetchLoans(this.paramId,this.branchCode);
        }
    },

    created() {

    },

    methods: {
        fetchLoans(id,branchCode) {
            fetch(`/api/loansAccNumInquiry/${id}/${branchCode}/loansAccNum`)
                .then(res => res.json())
                .then(res => {
                    this.clients = res.data;
                    console.log(this.clients);
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
