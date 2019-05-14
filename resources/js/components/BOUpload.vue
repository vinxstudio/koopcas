<template>
  <div class="upload">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
      </ul>
    </nav>
    <div class="col">
      <fieldset class="border p-2 h-400">
        <div>
          <label for="" class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Upload Bills Payment</label>
      </div>
      <div class="col">
            <fieldset class="border p-2 h-400">
              <!-- REF. NUMBER -->
              <div class="form-row">
      
                <label for="refNumber" class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Input File Name:</label>
                <div class="col-sm-6 my-1">
                  <input type="text" class="form-control form-control-sm" name="InputFileName" >
                </div>

               <div class="custom-file browse-only" style="width: 100px; top:5%; left: 83%;">
                    <input class="custom-file-input" id="image-file" title="Choose file to upload" type="file">
                      <label class="custom-file-label" for="image-file"></label>
                  </div> 

              </div>
              
              <!-- TRANS. DATE -->
              <div class="form-row">
      
                <label for="transDate" class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Trans. Date:</label>
                <div class="col-sm-6 my-1">
                  <input type="date" class="form-control form-control-sm" name="transDate">
                </div>
              </div>

              <!-- BATCH NO. -->
              <div class="form-row">
      
                <label for="batchNo" class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Batch No.:</label>
                <div class="col-sm-6 my-1">
                    <select class="custom-select custom-select-sm" name="batchNo">
                        <option value=""></option>
                      </select>
                </div>
              </div>
              <div class="form-row">
                &nbsp;&nbsp;
              </div>
              <div class="form-row justify-content-center">
                <button class="btn btn-sm btn-outline-primary">
                  <i class="fa fa-file mr-1"></i>
                  <span>Ok</span>
                </button>
                &nbsp;&nbsp;
                <button class="btn btn-sm btn-outline-primary">
                  <i class="fa fa-file mr-1"></i>
                  <span>Cancel</span>
                </button>
              </div>
              
            </fieldset>
          </div>
      </fieldset>
    </div>
  </div>
</template>

<script>
export default {
  
}
</script>


<style>

</style>
