<template>
  <div class="client-personal-references">
    <nav class = "navbar navbar-expand-lg p-0" id="toolbar">
        <ul class= "navbar-nav mr-auto" style="float:left;">
        <li class="nav-item">
            <a class="nav-link"><span class="client-tools">File</span></a>
        </li>
        </ul>
    </nav>

    <h2 class="mt-2 mb-4">Personal References</h2>

    <form @submit.prevent="insertPersonalReferences">
        <fieldset>
            <div class="form-row justify-content-between mb-4 mt-2">
                <input type="hidden" name="clientIdPRef" v-model="personalrefs.clientIdPRef">
                <div class="col-sm-2">
                    <label class="col-form-label col-form-label-sm" for="name">Name:</label>
                    <input class="form-control form-control-sm" v-model="personalrefs.pRefName" name="pRefName" type="text">
                </div>
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm" for="address">Address:</label>
                    <input class="form-control form-control-sm" v-model="personalrefs.pRefAddress" name="pRefAddress" type="text">
                </div>
                <div class="col-sm-2">
                    <label class="col-form-label col-form-label-sm" for="telnumber">Tel Number:</label>
                    <input class="form-control form-control-sm" v-model="personalrefs.pRefTelNum" name="pRefTelNum" type="text">
                </div>
                <div class="col-sm-2">
                    <label class="col-form-label col-form-label-sm" for="relation">Relation:</label>
                    <select v-model="personalrefs.pRefRelation" name="pRefRelation" class="form-control form-control-sm">
                        <option disabled selected="selected" value ng-reflect-value>(select one)</option>
                        <option v-for="clientPrefRelation in clientPrefRelations" v-bind:value="clientPrefRelation.relationId">{{ clientPrefRelation.relationDesc }}</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm" for="remarks">Remarks:</label>
                    <input class="form-control form-control-sm" v-model="personalrefs.pRefRemarks" name="pRefRemarks" type="text">
                </div>
                <input type="hidden" v-model="personalrefs.pRefDateTimeAdded" name="">
            </div>
        </fieldset>
       <!--  <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="addPersonalRefs">
                <i class="fa fa-plus mr-1"></i>
                <span>Add</span>
            </button>
            <button class="btn btn-sm mr-1 btn-outline-secondary" type="button">
                <i class="fa fa-pencil-alt mr-1"></i>
                <span>Update</span>
            </button>
            <button class="btn btn-sm mr-1 btn-outline-secondary" type="button" @click="deletePersonalReference">
                <i class="fa fa-ban mr-1"></i>
                <span>Clear</span>
            </button>
        </div> -->

        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-outline-primary mr-1" type="button" @click="insertPersonalReferences">
                <i class="save_add_icon fa fa-plus mr-1"></i>
                <span id="save_add_button">Add</span>
            </button>
            <button class="btn btn-outline-primary" @click="cancelPersonalReference">
                <i class="fa fa-times-circle mr-1"></i>
                <span>Canc<u>e</u>l</span>
            </button>
        </div>
    </form>
    <table class="table table-sm table-bordered custom-table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">BF</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Tel Num</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="pref in prefs" v-bind:key="pref.pRefId">
                <td>{{ pref.pRefId }}</td>
                <td>{{ pref.pRefBrCode }}</td>
                <td>{{ pref.pRefName }}</td>
                <td>{{ pref.pRefAddress }}</td>
                <td>{{ pref.pRefTelNum }}</td>
                <td class="text-center">
                    <a class="p-2 text-primary" @click="updatePersonalReferences(pref)">
                        <i class="fa fa-pencil-alt "></i>
                    </a>
                     <a class="p-2 text-danger" @click="popDeletePersonalReferences(pref.pRefId)">
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
            <button type="button" class="btn btn-danger"  data-dismiss="modal" @click="deletePersonalReference">DELETE</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="cancelDeletePersonalReference">CANCEL</button>
          </div>

        </div>
      </div>
    </div>
    <!-- The Modal -->

  </div>
</template>

<script>
export default{
    data() {

        return{
            personalrefs: {
                clientIdPRef: this.$route.params.id,
                pRefId: '',
                pRefBrCode: '',
                pRefName: '',
                pRefAddress: '',
                pRefTelNum: '',
                pRefRelation: '',
                pRefRemarks: '',
                pRefDateTimeAdded: new Date().toISOString().slice(0,10),
            },
            prefs: [],
            paramId: '',
            pref_id: '',
            delete_pref_id: '',
            edit: false,

            clientPrefRelations: [],
        }

    },

    created() {
        this.fetchClientPrefRelations();
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if(this.paramId > 0){
            this.fetchClientPref(this.paramId);
        }
    },

    methods: {
        fetchClientPref(id) {
            fetch(`/api/prefs/clientId=${id}`)
                .then(res => res.json())
                .then(res => {
                    this.prefs = res.data;
                    console.log(this.prefs);
                })
                .catch(err => console.log(err));
        },

        fetchClientPrefRelations() {
            fetch('/api/relations')
                .then(res => res.json())
                .then(res => {
                    this.clientPrefRelations = res.data;
                    console.log(this.clientPrefRelations);
                })
                .catch(err => console.log(err));
        },

        addPersonalRefs() {
            this.prefs.push(this.$data.personalrefs);
        },

        cancelPersonalReference(){
            this.fetchClientPref(this.$route.params.id);
        },

        insertPersonalReferences() {
            if(this.edit === false ){
                fetch('/api/pref', {
                    method: 'post',
                    body: JSON.stringify(this.personalrefs),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => {
                    res.json();
                    this.personalrefs.pRefName = '',
                    this.personalrefs.pRefAddress = '',
                    this.personalrefs.pRefTelNum = '',
                    this.personalrefs.pRefRelation = '',
                    this.personalrefs.pRefRemarks = '',
                    console.log('Personal References added');
                    this.fetchClientPref(this.$route.params.id);
                })
                .catch(err => console.log(err));
            }else{
                 fetch('/api/pref', {
                    method: 'put',
                    body: JSON.stringify(this.personalrefs),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => {
                    res.json();
                    this.personalrefs.pRefId = '',
                    this.personalrefs.pRefName = '',
                    this.personalrefs.pRefAddress = '',
                    this.personalrefs.pRefTelNum = '',
                    this.personalrefs.pRefRelation = '',
                    this.personalrefs.pRefRemarks = '',
                    console.log('Personal References updated');
                    this.fetchClientPref(this.$route.params.id);

                    $("#save_add_button").text("Add");
                    $(".save_add_icon").removeClass("fa-save");
                    $(".save_add_icon").addClass("fa-plus");
                    this.edit = false;
                })
                .catch(err => console.log(err));
            }
        },

        popDeletePersonalReferences(id){
            this.delete_pref_id = id;
            console.log(this.delete_pref_id);
            $("#confirm-delete").modal('show');
        },


        cancelDeletePersonalReference(){
            this.delete_pref_id = '';
            $("#confirm-delete").modal('hide');
        },


        deletePersonalReference() {
            var id = this.delete_pref_id;
            if(id){
                fetch(`/api/pref/${id}`, {
                    method: 'delete'
                })
                .then(res => {
                    res.json();
                    console.log('Personal Reference removed');
                    this.fetchClientPref(this.$route.params.id);
                })
                .catch(err => console.log(err));
            }
        },

        updatePersonalReferences(pref){
            this.edit = true;
            this.pref_id = pref.pRefId;
            this.personalrefs.pRefId = pref.pRefId;
            this.personalrefs.pRefName = pref.pRefName;
            this.personalrefs.pRefAddress = pref.pRefAddress;
            this.personalrefs.pRefTelNum = pref.pRefTelNum;
            this.personalrefs.pRefRelation = pref.pRefRelation;
            this.personalrefs.pRefRemarks = pref.pRefRemarks;
            $("#save_add_button").text("Save");
            $(".save_add_icon").removeClass("fa-plus");
            $(".save_add_icon").addClass("fa-save");
        }
    }
}
</script>

<style>  
.client-personal-references{
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>
