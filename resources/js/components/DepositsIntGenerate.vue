<template>
  <div class="deposits-int-generate">
    <div class="form-row justify-content-around py-3">
      <div class="col-sm-3">
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Period Covered:</label>
          <div class="col my-1">
            <div class="form-row">
              <div class="col-6">
                <input class="form-control form-control-sm bg-light-yellow border-0" type="date">
              </div>
              <div class="col-6">
                <input class="form-control form-control-sm" type="date">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Transaction Date:</label>
          <div class="col my-1">
            <input class="form-control form-control-sm" type="date">
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Department:</label>
          <div class="col my-1">
            <select
              class="custom-select custom-select-sm"
              id
              name="dept"
              v-model="intgenerate.dept"
            >
              <option v-for="dept in depts" :value="dept.deptId">{{dept.deptDesc}}</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="form-row justify-content-stretch">
      <div class="col">
        <div class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a
                class="nav-link active"
                href
                role="tab"
                id="ngb-tab-2"
                aria-controls="ngb-tab-2-panel"
                aria-expanded="true"
                aria-disabled="false"
              >
                <span>Parameters</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href
                role="tab"
                id="ngb-tab-3"
                aria-expanded="false"
                aria-disabled="false"
              >
                <span>Option</span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div
              role="tabpanel"
              class="tab-pane active"
              aria-labelledby="ngb-tab-2"
              id="ngb-tab-2-panel"
              aria-expanded="true"
            >
              <table class="table table-sm table-bordered custom-table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Account Type</th>
                    <th scope="col">Sectoral</th>
                    <th scope="col">Interest Rate</th>
                    <th scope="col">W/Tax Rate</th>
                    <th scope="col">Minimum ADB</th>
                    <th scope="col">Maximum ADB</th>
                    <th scope="col">Interest Exp Account</th>
                    <th scope="col">Account Title</th>
                    <th scope="col">W/Tax Account</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Test</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>4</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Test</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>4</td>
                    <td>3</td>
                    <td>4</td>
                    <td>4</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form-row justify-content-center">
      <div class="col-sm-auto my-2">
        <button class="btn btn-dark-blue btn-block p-3">
          <i class="fa fa-key mr-1"></i>
          <span>Generate</span>
        </button>
      </div>
      <div class="col-sm-auto my-2">
        <button class="btn btn-outline-dark-blue btn-block p-3">
          <i class="fa fa-ban mr-1"></i>
          <span>Cancel</span>
        </button>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      intgenerate: {
        dept: ""
      },
      depts: []
    };
  },
  created() {
    this.fetchDepts();
  },
  methods: {
    fetchDepts() {
      fetch("/api/departments")
        .then(res => res.json())
        .then(res => {
          this.depts = res.data;
          console.log(this.depts);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>
<style>
.bg-light-green {
  background-color: #20c997 !important;
}

.bg-light-blue {
  background-color: #6dcff6 !important;
}

.bg-light-pink {
  background-color: #ef80ff !important;
}

.bg-light-yellow {
  background-color: #fff9c4 !important;
}
</style>