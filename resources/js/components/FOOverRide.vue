<template>
    <div class="override">
        <nav class="navbar navbar-expand-lg p-0" id="toolbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
                </li>
            </ul>
        </nav>

        <div class="form-row mb-4 mt-2 align-items-center">
            <label for="search" class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold"><u>S</u>earch</label>
            <div class="col-sm-3 mr-3">
                <input type="text" class="form-control form-control-sm"
                    name="search">
            </div>
            <div class="col-auto">
                <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                <i class="fa fa-search mr-1"></i><u>G</u>o
                </button>
                <button class="btn btn-sm btn-outline-primary" type="button">
                <i class="fa fa-times-circle mr-1"></i>Cancel
                </button>
            </div>
        </div>

        <div class="form-row">
            <table class="table table-sm table-bordered table-hover custom-table">
                <thead>
                <tr>
                    <th scope="col">Override ID</th>
                    <th scope="col">Override Description</th>
                    <th scope="col">FROM</th>
                    <th scope="col">STATUS</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="override in override" v-bind:key="override.id">
                        <td>{{override.id}}</td>
                        <td>{{override.descr}}</td>    
                        <td>{{override.userIdFrom}}</td>
                        <td>{{override.statusFlag}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>
<script>
    export default {
        data() {
            return {
                override: []
            }
        },

        created(){
            this.fetchOverride(18,1);//not final; branchCode depends on login? userId depends on login
        },

        methods: {
            fetchOverride(brCode,userId) {
                fetch(`/api/override/${brCode}/${userId}`)
                    .then(res => res.json())
                    .then(res => {
                        console.log(res.data);
                        this.override = res.data;
                    })
                    .catch(err => console.log(err));
            },
        }
    }
</script>

<style>
.override {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>

