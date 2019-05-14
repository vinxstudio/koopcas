<template>
   <div class="override">
      <div class="form-row mb-4 mt-2 align-items-center">
         <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search"><u>S</u>earch</label>
         <div class="col-sm-3 mr-3"><input class="form-control form-control-sm" name="search" type="text"></div>
         <div class="col-auto"><button class="btn btn-sm btn-outline-primary mr-1" type="button"><i class="fa fa-search mr-1"></i><u>G</u>o </button><button class="btn btn-sm btn-outline-primary" type="button"><i class="fa fa-times-circle mr-1"></i>Cancel </button></div>
      </div>
      <div class="form-row">
         <table class="table table-sm table-bordered table-hover custom-table">
            <thead>
               <tr>
                  <th scope="col">Override ID</th>
                  <th scope="col">Override Desciption</th>
                  <th scope="col">FROM</th>
                  <th scope="col">STATUS</th>
               </tr>
            </thead>
            <tbody style="min-height: 339px;">
               <tr>
                  <td>123</td>
                  <td>test</td>
                  <td>test</td>
                  <td>test</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</template>