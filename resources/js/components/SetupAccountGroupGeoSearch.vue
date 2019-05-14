<template>
    <div class="account-group-geo">
        <router-link to="/setup/account-group-geo" class="btn btn-outline-primary mb-2 mt-1">
            <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
        </router-link>

        <table class="table table-sm table-bordered table-hover custom-table">
            <thead>
            <tr>
                <td scope="col">BR</td>
                <td scope="col">Geo ID</td>
                <td scope="col">Geo Description</td>
                <td scope="col">Collector Chart</td>
                <td scope="col">Edit Geo</td>
            </tr>
            </thead>

            <tbody>
            <tr v-for="geo in geos" v-bind:key="geo.id">
                <td>{{ geo.geoBrCode }}</td>
                <td>{{ geo.geoId }}</td>
                <td>{{ geo.geoDesc }}</td>
                <td>{{ geo.collChartDesc }}</td>
                <td><router-link v-bind:to="'/setup/account-group-geo/'+geo.geoId+'/'+geo.geoBrCode">View Geo</router-link></td>
            </tr>
            </tbody>
        </table>

      <!-- <nav>
        <ul class="pagination">
            <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchGeoGraphicals(pagination.prev_page_url)">Previous</a></li>
            <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>
            <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="fetchGeoGraphicals(pagination.next_page_url)">Next</a></li>
        </ul>
      </nav> -->

    </div>
</template>

<script>
export default {
    data() {
        return {
            geos: [],
            pagination: {},
        }
    },
    
    created() {
        this.fetchGeoGraphicals();
    },

    methods: {
        fetchGeoGraphicals(page_url) {
            page_url = page_url || '/api/geos';
            fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.geos = res.data;
                    this.makePagination(res.meta, res.links);
                console.log(this.geos);
                })
                .catch(err => console.log(err));
        },

    makePagination(meta, links) {
      let pagination = {
        current_page: meta.current_page,
        last_page: meta.last_page,
        next_page_url: links.next,
        prev_page_url: links.prev,
      }

      this.pagination = pagination;
    },

    }
}
</script>


<style>
.account-group-geo {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>