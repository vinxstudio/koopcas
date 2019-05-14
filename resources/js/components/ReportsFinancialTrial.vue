<template>
<div class="financial-trial"> <div class="form-row justify-content-center pt-3"><div class="col-sm-4"><div class="form-row"><div class="col"><div class="form-row"><label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">FROM:</label><div class="col my-1"><input class="form-control form-control-sm" name="" type="date"></div></div><div class="form-row"><label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">TO:</label><div class="col my-1"><input class="form-control form-control-sm" name="" type="date"></div></div></div><div class="col"><div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Balance Not ZERO</label></div><div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Exclude Closing Entries</label></div></div></div><div class="form-row"><div class="col-sm-3"><fieldset class="border p-2 h-100"><h5>Type of Report:</h5><div class="form-check form-check-sm"><input checked="" class="form-check-input" name="financial-balance-sheet" type="radio" value="option1"><label class="form-check-label">Details</label></div><div class="form-check form-check-sm"><input class="form-check-input" name="financial-balance-sheet" type="radio" value="option2"><label class="form-check-label">Summary</label></div></fieldset></div><div class="col"><div class="form-row"><div class="col"><label class="col-form-label col-form-label-sm">Department</label><select class="custom-select custom-select-sm" id="" name=""><option value="1" ng-reflect-value="1">1</option><option value="2" ng-reflect-value="2">2</option></select></div></div></div></div><div class="form-row justify-content-center"><div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div><div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div></div></div></div> </div>
</template>

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