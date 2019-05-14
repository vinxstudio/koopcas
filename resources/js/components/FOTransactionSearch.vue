<template>
    <div class="transaction-search">
        <h1>Transaction Client List</h1>

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
                    <router-link to="/front-office/transaction" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-times-circle mr-1"></i>Cancel 
                    </router-link>
                </div>
            </div>
        </form>

        <table class="table table-sm table-bordered table-hover custom-table">
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
                    <td><router-link v-bind:to="'/front-office/transaction/'+client.clientId">View Client</router-link></td>
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
            search: '',
        }
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