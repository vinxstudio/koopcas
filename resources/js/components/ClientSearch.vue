<template>
    <div class="search">
        <nav class="navbar navbar-expand-lg p-0" id="toolbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-1">Tools</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-2">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-3">Sorting (F3)</a>
                </li>
            </ul>
        </nav>

        <h2 class="mt-2 mb-4">Clients List</h2>
        <form @submit.prevent="fetchClients">
            <div class="form-row mb-4 mt-2 align-items-center">
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search"><u>S</u>earch</label>
                <div class="col-sm-3 mr-3">
                    <input class="form-control form-control-sm ng-pristine ng-valid ng-touched" v-model="search" name="search" placeholder="Enter Client's ID, Last Name or First Name" type="text" @keyup.enter="fetchClients()">
                </div>
                <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="status">Status</label>
                <div class="col-sm-auto mr-3">
                    <div class="btn-group btn-group-toggle ng-untouched ng-pristine ng-valid" id="status">
                    <label class="btn btn-primary">Active
                        <input type="checkbox" id="active" value="active" v-model="status" class=""> 
                    </label>
                    <label class="btn btn-primary">Dormant
                        <input type="checkbox" id="dormant" value="dormant" v-model="status" class=""> 
                    </label>
                    <label class="btn btn-primary">Closed
                        <input type="checkbox" id="closed" value="closed" v-model="status"  class=""> 
                    </label>
                </div>
            </div>
            <div class="col-auto">
                <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchClients()">
                    <i class="fa fa-search mr-1"></i><u>G</u>o 
                </button>
                <router-link to="/client" class="btn btn-sm btn-outline-primary">
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
                    <tH scope="col">Select Client</tH>
                </tr>
            </thead>
            <tbody>
                <tr v-for="client in clients" v-bind:key="client.clientId">
                    <td>{{ client.brCode }}</td>
                    <td>{{ client.clientId }}</td>
                    <td>{{ client.chkDgt }}</td>
                    <td>{{ client.lastName }}, {{ client.firstName }}</td>
                    <td>{{ client.middleName }}</td>
                    <td>{{ client.clientTypeName }}</td>
                    <td>{{ client.accountStatusName }}</td>
                    <td>{{ client.accountName }}</td>
                    <td>{{ client.referenceId }}</td>
                    <td><router-link v-bind:to="'/client/'+client.clientId">View Client</router-link></td>
                </tr>
            </tbody>
        </table>

        <nav>
            <ul class="pagination">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchClients(pagination.prev_page_url)">Previous</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a>
                </li>
                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchClients(pagination.next_page_url)">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {

        // data() {
        //     return {
        //         clients: {},
        //         pagination: {},
        //         search: '',
        //         status: []
        //     }
        // },

        // methods: {
        //     fetchClients() {
        //         const search = this.search;
        //         axios.get(`/api/clients/term=${search}`)
        //             .then((response) => {
        //                 this.clients = response.data;
        //                 console.log(this.clients);
        //             })
        //             .catch((error) => console.log(error));
        //     }
        // }

        data() {
            return {
                clients: [],
                pagination: {},
                search: '',
                status: [],
            }
        },

        methods: {
            fetchClients(page_url) {
                const search = this.search;
                page_url = page_url || `/api/client/term=${search}`;
                fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                        this.clients = res.data;
                        this.makePagination(res.meta, res.links);
                        console.log(this.clients);
                    })
                    .catch(err => console.log(err));
            },

            makePagination(meta, links) {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                }

                this.pagination = pagination;
            }
        }
    }
</script>

<style>
.search {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>