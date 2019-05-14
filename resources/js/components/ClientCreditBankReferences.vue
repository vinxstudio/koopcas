<template>
  <div class="client-credit-bank-references">
    <nav class = "navbar navbar-expand-lg p-0" id="toolbar">
        <ul class= "navbar-nav mr-auto" style="float:left;">
        <li class="nav-item">
            <a class="nav-link"><span class="client-tools">File</span></a>
        </li>
        </ul>
    </nav>

    <h2 class="mt-2 mb-4">Credit/Bank References</h2>

    <form @submit.prevent="insertCreditReferences">
        <fieldset>
            <div class="form-row justify-content-between mb-4 mt-2">
                <input type="hidden" v-model="creditbankrefs.clientId" name="clientIdCbRef">
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm" for="creditorType">Creditor Type:</label>
                    <select class="form-control form-control-sm" v-model="creditbankrefs.cbRefType" name="cbRefType">
                        <option disabled>(select one)</option>
                        <option v-for="clientCbrefCreditorType in clientCbrefCreditorTypes" v-bind:value="clientCbrefCreditorType.creditorTypeId">{{ clientCbrefCreditorType.creditorTypeDesc }}</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label col-form-label-sm" for="name">Name:</label>
                    <input class="form-control form-control-sm" v-model="creditbankrefs.cbRefName" name="cbRefName" type="text">
                </div>
                <div class="col-sm-2">
                    <label class="col-form-label col-form-label-sm" for="dateAccountOpened">Date Account Opened:</label>
                    <input class="form-control form-control-sm" v-model="creditbankrefs.cbRefDateAcctOpened" name="cbRefDateAcctOpened" type="date">
                </div>
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm" for="principal">Principal:</label>
                    <input class="form-control form-control-sm" v-model="creditbankrefs.cbRefPrincipalAmount" name="cbRefPrincipalAmount" type="text">
                </div>
            </div>
            <div class="form-row justify-content-between mb-4 mt-2">
                <div class="col-sm-4">
                    <label class="col-form-label col-form-label-sm" for="address">Address:</label>
                    <input class="form-control form-control-sm" v-model="creditbankrefs.cbRefAddress" name="cbRefAddress" type="text">
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label col-form-label-sm" for="telnumber">Tel Number:</label>
                    <input class="form-control form-control-sm" v-model="creditbankrefs.cbRefTelNum" name="cbRefTelNum" type="text">
                </div>
                <div class="col-sm-4">
                    <label class="col-form-label col-form-label-sm" for="balance">Balance:</label>
                    <input class="form-control form-control-sm" v-model="creditbankrefs.cbRefLoanBalance" name="cbRefLoanBalance" type="text">
                </div>
                <input type="hidden" v-model="creditbankrefs.cbRefDateTimeAdded" name="cbRefDateTimeAdded">
            </div>
        </fieldset>

        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="addCreditBankReference">
                <i class="fa fa-plus mr-1"></i>
                <span>Add</span>
            </button>
            <button class="btn btn-sm mr-1 btn-outline-secondary" type="button">
                <i class="fa fa-pencil-alt mr-1"></i>
                <span>Update</span>
            </button>
            <button class="btn btn-sm mr-1 btn-outline-secondary" type="button" @click="deleteCbReference">
                <i class="fa fa-ban mr-1"></i>
                <span>Clear</span>
            </button>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-success mr-1" type="submit">
                <i class="fa fa-save mr-1"></i>
                <span><u>S</u>ave</span>
            </button>
            <router-link to="/client" class="btn btn-outline-primary">
                <i class="fa fa-times-circle mr-1"></i>
                <span>Canc<u>e</u>l</span>
            </router-link>
        </div>
    </form>
    <table class="table table-sm table-bordered custom-table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">BF</th>
                <th scope="col">Ref. Type</th>
                <th scope="col">Creditor Name</th>
                <th scope="col">Date Opened</th>
                <th scope="col">Principal</th>
                <th scope="col">Balance</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="cbref in cbrefs" v-bind:key="cbref.clientIdCbRef">
                <td>{{ cbref.cBrefId }}</td>
                <td>{{ cbref.cbRefBrCode }}</td>
                <td>{{ cbref.cbRefType }}</td>
                <td>{{ cbref.cbRefName }}</td>
                <td>{{ cbref.cbRefDateAcctOpened }}</td>
                <td>{{ cbref.cbRefPrincipalAmount }}</td>
                <td>{{ cbref.cbRefLoanBalance }}</td>
                <td>{{ cbref.cbRefAddress }}</td>
            </tr>
        </tbody>
    </table>
  </div>
</template>

<script>
export default {
    data() {

        return{
            creditbankrefs: {
                cbRefBrCode: '',
                clientIdCbRef: this.$route.params.id,
                cbRefType: '',
                cbRefName: '',
                cbRefDateAcctOpened: '',
                cbRefPrincipalAmount: '',
                cbRefLoanBalance: '',
                cbRefAddress: '',
                cbRefTelNum: '',
                cbRefDateTimeAdded: new Date().toISOString().slice(0,10),
            },
            cbrefs: [],
            paramId: '',

            clientCbrefCreditorTypes: [],
        }
    },

    created() {
        this.fetchClientCbrefCreditorTypes();
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if(this.paramId > 0){
            this.fetchClientCbref(this.paramId);
        }
    },

    methods: {
        fetchClientCbref(id) {
            fetch(`/api/cbrefs/clientId=${id}`)
                .then(res => res.json())
                .then(res => {
                    this.cbrefs = res.data;
                    console.log(this.cbrefs);
                })
                .catch(err => console.log(err));
        },

        fetchClientCbrefCreditorTypes() {
             fetch('/api/creditorTypes')
                .then(res => res.json())
                .then(res => {
                    this.clientCbrefCreditorTypes = res.data;
                    console.log(this.clientCbrefCreditorTypes);
                })
                .catch(err => console.log(err));
        },

        addCreditBankReference() {
            this.cbrefs.push(this.$data.creditbankrefs);
        },

        insertCreditReferences() {
            fetch('/api/cbref', {
                method: 'post',
                body: JSON.stringify(this.creditbankrefs),
                headers: { 'content-type': 'application/json' }
            })
            .then(res => {
                res.json();
                this.creditbankrefs.cbRefType = '';
                this.creditbankrefs.cbRefName = '';
                this.creditbankrefs.cbRefDateAcctOpened = '';
                this.creditbankrefs.cbRefPrincipalAmount = '';
                this.creditbankrefs.cbRefLoanBalance = '';
                this.creditbankrefs.cbRefAddress = '';
                this.creditbankrefs.cbRefTelNum = '';
                console.log('Credit/Bank Reference added');
                this.fetchClientCbref(this.$route.params.id);
            })
            .catch(err => console.log(err));
        },

        deleteCbReference() {
            const id = this.$route.params.id;
            fetch(`/api/cbref/${id}`, {
                method: 'delete'
            })
            .then(res => {
                res.json();
                console.log('Credit/Bank Reference Removed');
                this.fetchClientCbref(this.$route.params.id);
            })
            .catch(err => console.log(err));
        }
    }

}
</script>

<style>  
.client-credit-bank-references{
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>
