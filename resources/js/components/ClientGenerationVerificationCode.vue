<template>
  <div class="generation-verification-code">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
      </ul>
    </nav>

    <div class="row justify-content-center">
      <div class="col-md-5">
        <fieldset class="border p-4 bg-light">
          <h3 class="mt-0 mb-4" style="text-align: left;">Codes Display</h3>
          <div class="row justify-content-center">
            <div class="col my-1 align-items-end justify-content-end">
              <fieldset class="my-1 border pb-3 px-3 mx-1">
                <legend
                  class="col-form-label col-form-label-sm w-auto px-1"
                  for="dateOpened"
                >Online Members Inquiry</legend>
                <label class="text-sm-right text-truncate" for="clientId">ClientID:</label>
                <div class="col">
                  <input
                    type="text"
                    class="form-control form-control-sm"
                    v-model="gvc.clientId"
                    name="clientId"
                    readonly
                  >
                  <input type="hidden" :value="gvc.clientId" ref="cisaclient" name="cisaclient" id>
                </div>
                <br>
                <label class="text-sm-right text-truncate">Verification Code:</label>
                <div class="col">
                  <div id="app">
                    <div>
                      <div id="generator">
                        <p id="rNum">{{ randomNumber }}</p>
                        <div id="inputContainer">
                          <div id="inputs">
                            <input
                              id="generate"
                              type="hidden"
                              value="Generate Number"
                              v-on:click="getInput()"
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
              </fieldset>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  el: "#app",
  data() {
    return {
      gvc: {
        clientId: ""
      },
      min: 1,
      max: 1000000000000000000000,
      randomNumber: 1
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
    }
  },

  created: function() {
    this.generateNumber();
  },

  methods: {
    fetchClient(id) {
      fetch(`/api/client/${id}`)
        .then(res => res.json())
        .then(res => {
          this.gvc = res.data[0];
          console.log(this.gvc);
        })
        .catch(err => console.log(err));
    },

    loadNum: function() {
      this.min = 100000;
      this.max = 100000;
      this.generateNumber();
    },
    getInput: function() {
      if (this.min > this.max) {
        [this.min, this.max] = [this.max, this.min];
      }
      this.generateNumber();
    },
    generateNumber: function() {
      this.randomNumber = Math.floor(
        Math.random() * (this.max - this.min + 1) + this.min
      );
    }
  }
};
</script>


<style>
.generation-verification-code {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>