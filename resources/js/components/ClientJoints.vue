<template>
    <div class="client-joints">
        <nav class="navbar navbar-expand-lg p-0" id="toolbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
                </li>
            </ul>
        </nav>

        <h2 class="mt-2 mb-4">Joints</h2>

        <div class="form-row justify-content-center">
            <div class="col-sm-6">
                <form @submit.prevent="insertClientJoints">
                    <fieldset>
                        <div class="form-row justify-content-center mb-4 mt-2">
                            <input type="hidden" v-model="joints.clientIdJoints" name="clientIdJoints">
                            <div class="col-sm-5">
                                <label class="col-form-label col-form-label-sm" for="name">Name:</label>
                                <input class="form-control form-control-sm" v-model="joints.jName" name="jName" type="text">
                            </div>
                            <input type="hidden" v-model="joints.jDateTimeAdded" name="jDateTimeAdded">
                        </div>
                    </fieldset>
                    <div class="d-flex justify-content-center mb-4">
                        <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="addClientJoints">
                            <i class="fa fa-plus mr-1"></i><span>Add</span>
                        </button>
                        <button class="btn btn-sm mr-1 btn-outline-secondary" type="button" disabled="">
                            <i class="fa fa-pencil-alt mr-1"></i><span>Update</span>
                        </button>
                        <button class="btn btn-sm btn-outline-primary btn-outline-secondary" type="button"  @click="deleteJoints">
                            <i class="fa fa-ban mr-1"></i><span>Clear</span>
                        </button>
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <button class="btn btn-success mr-1" type="submit">
                            <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
                        </button>
                        <button class="btn btn-outline-primary" type="button">
                            <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
                        </button>
                    </div>
                </form>
                <table class="table table-sm table-bordered custom-table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">BR</th>
                            <th scope="col">Name</th>
                            <th scope="col">Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="clientJoint in clientJoints" v-bind:key="clientJoint.clientIdJoints">
                            <td>{{ clientJoint.jointsId }}</td>
                            <td>{{ clientJoint.jointsBrCode }}</td>
                            <td>{{ clientJoint.jName }}</td>
                            <td>{{ clientJoint.jDateTimeAdded }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        
        return {
            joints: {
                jointsId: '',
                jointsBrCode: '',
                clientIdJoints: this.$route.params.id,
                jName: '',
                jDateTimeAdded: new Date().toISOString().slice(0,10),
            },
            clientJoints: [],
            paramId: '',

        }

    },

    created() {
        
    },

    mounted() {
        this.paramId = this.$route.params.id;
        if(this.paramId > 0){
            this.fetchClientJoints(this.paramId);
        }
    },

    methods: {
        fetchClientJoints(id) {
            fetch(`/api/joints/clientId=${id}`)
                .then(res => res.json())
                .then(res => {
                    this.clientJoints = res.data;
                    console.log(this.clientJoints);
                })
                .catch(err => console.log(err));
        },

        addClientJoints() {
            this.clientJoints.push(this.$data.joints);
        },

        insertClientJoints() {
            fetch('/api/joints', {
                method: 'post',
                body: JSON.stringify(this.joints),
                headers: { 'content-type': 'application/json' }
            })
            .then(res => {
                res.json();
                this.joints.jName = '';
                console.log('Joint Added');
                this.fetchClientJoints(this.$route.params.id);
            })
        },

        deleteJoints() {
            const id = this.$route.params.id;
            fetch(`/api/joints/${id}`, {
                 method: 'delete'
            })
            .then(res => {
                console.log('Joints Removed');
                this.fetchClientJoints(this.$route.params.id);
            })
            .catch(err => console.log(err));
        }
    }
}
</script>

<style>
.client-joints {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;   
}
</style>