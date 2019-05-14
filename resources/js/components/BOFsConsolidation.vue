<template>
   <div class="fsconsolidation">
      <nav class="navbar navbar-expand-lg p-0" id="toolbar">
         <ul class="navbar-nav mr-auto">  
            <li class="nav-item"><a class="nav-link" tabindex="0" id="menuDropdown-0">File</a></li>
         </ul>
      </nav>
      <div class="form-row my-3">
         <div class="col-sm-12">
            <fieldset class="bg-light border p-2">
               <div class="form-row justify-content-center">
                  <div class="col-sm-10">
                     <div class="form-row"><label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="">Extract Data for Conso:</label></div>
                  </div>
                  <div class="col-sm-3">
                     <div class="form-row">
                        <label class="col-sm-4 text-sm-right text-truncate ol-form-label col-form-label-sm mt-1"><b>From:</b></label>
                        <div class="col-sm-6 my-1"><input class="form-control form-control-sm" v-model="fsconsolidation.tdTrDate" name="date" type="date" :readOnly="readOnly"></div>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="form-row">
                        <label class="col-sm-4 text-sm-right text-truncate ol-form-label col-form-label-sm mt-1"><b>To:</b></label>
                        <div class="col-sm-6 my-1"><input class="form-control form-control-sm" v-model="fsconsolidation.tdTrDate" name="date" type="date" :readOnly="readOnly"></div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-row">
                        <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="client1" :readOnly="readOnly">Output Filename:</label>
                        <div class="col my-1">
                           <div class="form-row m-0"><input class="col-8 mr-sm-2 form-control form-control-sm" name="" type="text"><button class="btn btn-sm btn-outline-primary"><i class="fa fa-file mr-1"></i><span>Browse</span></button></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 justify-content-center"><button class="btn btn-sm btn-outline-primary"><i class="fa fa-file mr-1"></i><span>Ok</span></button> &nbsp; <router-link to="/back-office" class="btn btn-sm btn-outline-primary"><i class="fa fa-file mr-1"></i><span>Cancel</span></router-link></div>
               </div>
            </fieldset>
         </div>
      </div>
   </div>
</template>

<script>
export default {
   data() {
      return {

         //methods
         fsconsolidation: {
         tdTrDate: '',
      },

      //method clientID 
      client: {
         clientId: '',
      },

      //events
      selectDisabled: '',
      readOnly: '',


      methods: {
         fetchTd() {
            fetch("/api/td")
               .then(res => res.json())
               .then(res => {
                  this.clientTd = res.data;
                  console.log(this.clientTd);
               })
               .catch(err => console.log(err));
            }
         }



      }
   }
}

</script>