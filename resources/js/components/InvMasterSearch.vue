<template>
  <div class="time-deposit-search">
    <h1>Deposits List</h1>

    <form @submit.prevent="fetchItems">
      <div class="form-row mb-4 mt-2 align-items-center">
        <label
          class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold"
          for="search"
        >
          <u>S</u>earch
        </label>
        <div class="col-sm-3 mr-3">
          <input
            class="form-control form-control-sm"
            v-model="search"
            name="search"
            placeholder="Bar Code TEST: 101683"
            type="text"
            @keyup.enter="fetchItems()"
          >
        </div>
        <label
          class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold"
          for="status"
        >Status</label>
        <div class="col-auto">
          <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchItems()">
            <i class="fa fa-search mr-1"></i>
            <u>G</u>o
          </button>
          <router-link to="items-master" class="btn btn-sm btn-outline-primary">
            <i class="fa fa-times-circle mr-1"></i>Cancel
          </router-link>
        </div>
      </div>
    </form>

    <table class="table table-sm table-bordered table-hover custom-table">
      <thead>
        <tr>
          <th scope="col">Bar Code</th>
          <th scope="col">Description</th>
          <th scope="col">Retail Price</th>
          <th scope="col">Wholesale Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Brand</th>
          <th scope="col">Common Name</th>
          <th scope="col">Alternate</th>
          <th scope="col">Description</th>
          <!-- <th scope="col">Amount</th> -->
          <th scope="col">GO</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in items" v-bind:key="item.id">
          <td>{{item.upc }}</td>
          <td>{{item.desc1 }}</td>
          <td>{{item.retailPrice }}</td>
          <td>{{item.wholeSalePrice }}</td>
          <td>{{item.orderQty}}</td>
          <td>{{item.brandDesc1}}</td>
          <td>{{item.commonNameDesc1 }}</td>
          <td>{{item.alternateLookUp}}</td>
          <td>{{item.desc2}}</td>
          <td>
            <router-link v-bind:to="'/inventory/items-master/'+item.upc">GO</router-link>
          </td>
        </tr>
      </tbody>
    </table>
    <!--
    {} -> one row
    [] -> array
    "" -> empty string
    -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: {
        // brandDesc1: "",
        // commonNameDesc1: ""
      },
      search: ""
    };
  },

  methods: {
    fetchItems() {
      const search = this.search;
      fetch(`/api/invItems/upc=${search}`)
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.items = res.data;
        })
        .catch(err => console.log(err));
    }
  }
};
</script>


<style>
.-time-deposit-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
