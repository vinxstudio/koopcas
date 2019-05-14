<template>
  <div class="client-beneficiaries">
    <nav class = "navbar navbar-expand-lg p-0" id="toolbar">
        <ul class= "navbar-nav mr-auto" style="float:left;">
        <li class="nav-item">
            <a class="nav-link"><span class="client-tools">File</span></a>
        </li>
        </ul>
    </nav>

    <h2 class="mt-2 mb-4">Beneficiaries</h2>

    <form @submit.prevent="insertBeneficiary">
        <fieldset>
            <div class="form-row justify-content-between mb-4 mt-2">
                <input type="hidden" name="clientIdBenef" v-model="beneficiary.clientIdBenef">
                <div class="col-sm-4">
                    <label class="col-form-label col-form-label-sm" for="name">Name:</label>
                    <input class="form-control form-control-sm" v-model="beneficiary.benefName" name="benefName" type="text">
                </div>
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm" for="relation">Relation:</label>
                    <select class="form-control form-control-`sm" v-model="beneficiary.benefRelation" name="benefRelation" type="text">
                        <option disabled selected="selected" value ng-reflect-value>(select one)</option>
                        <option v-for="clientBenefRelation in clientBenefRelations" v-bind:value="clientBenefRelation.relationId">{{ clientBenefRelation.relationDesc }}</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label class="col-form-label col-form-label-sm" for="dateOfBirth">Date of Birth:</label>
                    <input class="form-control form-control-sm" v-model="beneficiary.benefDateofBirth" name="benefDateofBirth" type="date">
                </div>
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm" for="occupation">Occupation:</label>
                    <select v-model="beneficiary.benefOccu" name="benefOccu" class="form-control form-control-sm">
                        <option disabled selected="selected" value ng-reflect-value>(select one)</option>
                        <option v-for="clientBenefOccupation in clientBenefOccupations" v-bind:value="clientBenefOccupation.occuId">{{ clientBenefOccupation.occuDesc }}</option>
                    </select>
                </div>
                <input type="hidden" name="benefDateTimeAdded" v-model="beneficiary.benefDateTimeAdded">
            </div>
        </fieldset>

        <div class="d-flex justify-content-center mb-4">
            <!-- <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="insertBeneficiary">
                <i class="fa fa-plus mr-1"></i>
                <span>Add</span>
            </button>
            <button class="btn btn-sm mr-1 btn-outline-secondary" type="button">
                <i class="fa fa-pencil-alt mr-1"></i>
                <span>Update</span>
            </button>
            <button class="btn btn-sm mr-1 btn-outline-secondary" type="button" @click="deleteBeneficiary">
                <i class="fa fa-ban mr-1"></i>
                <span>Clear</span>
            </button> -->
        </div>

        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-outline-primary mr-1" type="button" @click="insertBeneficiary">
                <i class="save_add_icon fa fa-plus mr-1"></i>
                <span id="save_add_button">Add</span>
            </button>
            <button class="btn btn-outline-primary" @click="cancelBeneficiary">
                <i class="fa fa-times-circle mr-1"></i>
                <span>Canc<u>e</u>l</span>
            </button>
        </div>
    </form>
    <table class="table table-sm table-bordered custom-table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Relation</th>
                <th scope="col">Age</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Occupation</th>
                <th scope="col">Added</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="benef in benefs" v-bind:key="benef.benefID">
                <td>{{ benef.benefName }}</td>
                <td>{{ benef.benefRelationDesc }}</td>
                <td></td>
                <td>{{ benef.benefDateofBirth }}</td>
                <td>{{ benef.benefOccuDesc }}</td>
                <td>{{ benef.benefDateTimeAdded }}</td>
                <td class="text-center">
                    <a class="p-2 text-primary" @click="updateBeneficiary(benef)">
                        <i class="fa fa-pencil-alt "></i>
                    </a>
                     <a class="p-2 text-danger" @click="popDeleteBeneficiary(benef.benefID)">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

     <!-- The Modal -->
     <div class="modal" id="confirm-delete">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Confirm</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            Are you sure you want to delete this record?
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger"  data-dismiss="modal" @click="deleteBeneficiary">DELETE</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="cancelDeleteBeneficiary">CANCEL</button>
          </div>

        </div>
      </div>
    </div>

  </div>
</template>
 
<script>
export default{
    data() {

        return{
            beneficiary:{
                benefID: '',
                benefBrCode: '',
                clientIdBenef: this.$route.params.id,
                benefName: '',
                benefRelation: '',
                benefDateofBirth: '',
                benefOccu: '',
                benefDateTimeAdded:  new Date().toISOString().slice(0,10),
            },
            benefID: '',
            benefBrCode: '',
            clientIdBenef: this.$route.params.id,
            benefName: '',
            benefRelation: '',
            benefDateofBirth: '',
            benefOccu: '',
            benefDateTimeAdded:  new Date().toISOString().slice(0,10),

            benefs: [],
            edit: false,
            benef_id: '',
            delete_benef_id: '',
            paramId: '',

            // clients: [],

            clientBenefRelations: [],
            clientBenefOccupations: [],
        }


    },

    created() {
        this.fetchClientOccupations();
        this.fetchClientBenefRelations();
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if(this.paramId > 0){
            this.fetchClientBenef(this.paramId);
        }

        // if(this.paramId > 0){
        //     this.deleteBeneficiary(this.paramId);
        // }
    },

    methods: {
        fetchClientBenef(id) {
            fetch(`/api/benefs/clientId=${id}`)
                .then(res => res.json())
                .then(res => {
                    this.benefs = res.data;
                    console.log(this.benefs);
                })
                .catch(err => console.log(err));
        },

        fetchClientOccupations() {
            fetch('/api/occupations')
                .then(res => res.json())
                .then(res => {
                    this.clientBenefOccupations = res.data;
                    console.log(this.clientBenefOccupations);
                })
                .catch(err => console.log(err));
        },

        fetchClientBenefRelations() {
            fetch('/api/relations')
                .then(res => res.json())
                .then(res => {
                    this.clientBenefRelations = res.data;
                    console.log(this.clientBenefRelations);
                })
                .catch(err => console.log(err));
        },

        cancelBeneficiary(){
            this.fetchClientBenef(this.$route.params.id);
        },

        addBeneficiary() {
            this.benefs.push(this.$data.beneficiary);
        },

        insertBeneficiary() {
            if(this.edit === false ){
                fetch('/api/benef', {
                    method: 'post',
                    body: JSON.stringify(this.beneficiary),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => {
                    res.json();
                    this.beneficiary.benefName = '',
                    this.beneficiary.benefRelation = '',
                    this.beneficiary.benefDateofBirth = '',
                    this.beneficiary.benefOccu = '',
                    console.log('Beneficiary added');
                    this.fetchClientBenef(this.$route.params.id);
                })
                .catch(err => console.log(err));
            }else{
                fetch('/api/benef', {
                    method: 'put',
                    body: JSON.stringify(this.beneficiary),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => {
                    res.json();
                    this.beneficiary.benefName = '',
                    this.beneficiary.benefRelation = '',
                    this.beneficiary.benefDateofBirth = '',
                    this.beneficiary.benefOccu = '',
                    console.log('Beneficiary updated');
                    this.fetchClientBenef(this.$route.params.id);
                    $("#save_add_button").text("Add");
                    $(".save_add_icon").removeClass("fa-save");
                    $(".save_add_icon").addClass("fa-plus");
                    this.edit = false;
                })
                .catch(err => console.log(err));
            }
        },

        updateBeneficiary(benef){
            this.edit = true;
            this.benef_id = benef.benefID;
            this.beneficiary.benefID = benef.benefID;
            this.beneficiary.benefName = benef.benefName,
            this.beneficiary.benefRelation = benef.benefRelation,
            this.beneficiary.benefDateofBirth = benef.benefDateofBirth,
            this.beneficiary.benefOccu = benef.benefOccu
            $("#save_add_button").text("Save");
            $(".save_add_icon").removeClass("fa-plus");
            $(".save_add_icon").addClass("fa-save");
        },

        popDeleteBeneficiary(id){
            this.delete_benef_id = id;
            console.log(this.delete_benef_id);
            $("#confirm-delete").modal('show');
        },

        cancelDeleteBeneficiary(){
            this.delete_benef_id = '';
            $("#confirm-delete").modal('hide');
        },

        deleteBeneficiary() {
            var id = this.delete_benef_id;
            if(id){
                fetch(`/api/benef/${id}`, {
                    method: 'delete'
                })
                .then(res => {
                    res.json(); 
                    console.log('Beneficiaries Removed');
                    this.fetchClientBenef(this.$route.params.id);
                })
                .catch(err => console.log(err));
            }
            // const id = this.$route.params.id;
            // fetch(`/api/benef/${id}`, {
            //     method: 'delete'
            // })
            // .then(res => {
            //     res.json();
            //     console.log('Beneficiaries Removed');
            //     this.fetchClientBenef(this.$route.params.id);
            // })
            // .catch(err => console.log(err));
        },

        // fetchClients() {
        //     const search = this.search;
        //     fetch(`/api/client/term=${search}`)
        //         .then(res => res.json())
        //         .then(res => {
        //             console.log(res.data);
        //             this.clients = res.data;
        //         })
        //         .catch(err => console.log(err));
        // },
    }
}
</script>

<style>  
.client-beneficiaries{
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>
