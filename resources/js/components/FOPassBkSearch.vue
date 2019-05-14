<template>
    <div class="passbooksearch">
        <h1>Passbook Search</h1>

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
                    <router-link to="/front-office/passbook-printing" class="btn btn-sm btn-outline-primary">
                        <i class="fa fa-times-circle mr-1"></i>Cancel 
                    </router-link>
                </div>
            </div>
        </form>

        <table class="table table-sm table-bordered table-hover custom-table" v-if="this.$route.params.id">
            <thead>
                <tr>
                    <th scope="col">S/L Account Type</th>
                    <th scope="col">S/L Account No.</th>
                    <th scope="col">Passbook Serial No.</th>
                    <th scope="col">Date Last Update</th>
                    <th scope="col">Line No.</th>
                    <th scope="col">Top Margin</th>
                    <th scope="col">Left Margin</th>
                    <th scope="col">View Passbook</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="passbook in passbooks" v-bind:key="passbook.id">
                    <td>{{ passbook.slTypeMDesc }}</td>
                    <td>{{ passbook.passBkRefNo }}</td>
                    <td>{{ passbook.passBkSerNum }}</td>
                    <td>{{ passbook.passBkLtrDate }}</td>
                    <td>{{ passbook.passBkLineNum }}</td>
                    <td>{{ passbook.passBkPbType }}</td>
                    <td>{{ passbook.passBkSeqNo }}</td>
                    <td><router-link v-bind:to="'/front-office/passbook-printing/'+passbook.passBkBrCode+'/'+passbook.passBkClientId+'/'+passbook.passBkSlcCode+'/'+passbook.passBkSltCode+'/'+passbook.passBkRefNo">View Passbook</router-link></td>
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
                <tr v-for="clientpassbk in clientpassbks" v-bind:key="clientpassbk.id">
                    <td>{{ clientpassbk.brCode }}</td>
                    <td>{{ clientpassbk.clientId }}</td>
                    <td>{{ clientpassbk.chkDgt }}</td>
                    <td>{{ clientpassbk.lastName }}, {{ clientpassbk.firstName }}</td>
                    <td>{{ clientpassbk.middleName }}</td>
                    <td>{{ clientpassbk.clientTypeName }}</td>
                    <td>{{ clientpassbk.accountStatusName }}</td>
                    <td>{{ clientpassbk.accountName }}</td>
                    <td>{{ clientpassbk.referenceId }}</td>
                    <td><router-link v-bind:to="'/front-office/passbook-printing/'+clientpassbk.clientId">View Client</router-link></td>
                </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
export default {
    data() {
        return {
            clientpassbks: [],
            passbooks: [],
            search: "",
            paramId: "",
        }
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if (this.paramId > 0) {
            this.fetchPassBooks(this.paramId);
        }
    },

    methods: {
        fetchLoans() {
            let search = this.search;
            fetch(`/api/loansearch/${search}`)
                .then(res => res.json())
                .then(res => {
                    this.clientpassbks = res.data;
                    console.log(this.clientpassbks);
                })
                .catch(err => console.log(err));
        },

        fetchPassBooks(id) {
            fetch(`/api/passBks/${id}`)
                .then(res => res.json())
                .then(res => {
                    this.passbooks = res.data;
                    console.log(this.passbooks);
                })
                .catch(err => console.log(err));
        }
    }
}
</script>

<style>
.passbooksearch {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>