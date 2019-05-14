<template>
<div class="front-office-reports"> <div class="form-row justify-content-center pt-3"><div class="col-sm-4"><div class="form-row"><div class="col"><label class="col-form-label col-form-label-sm">Report:</label><select class="custom-select custom-select-sm" id="" name=""><option value="1" ng-reflect-value="1">1</option><option value="2" ng-reflect-value="2">2</option></select></div></div><div class="form-row"><label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Cashier/Teller Username:</label><div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div></div><div class="form-row"><label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Transaction Date:</label><div class="col my-1"><input class="form-control form-control-sm" name="" type="date"></div></div><div class="form-row"><label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Transaction Time:</label><div class="col my-1"><div class="form-row align-items-center"><div class="col"><input class="form-control form-control-sm" name="" type="time"></div><div class="col-auto">-</div><div class="col"><input class="form-control form-control-sm" name="" type="time"></div></div></div></div><div class="form-row justify-content-center"><div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div><div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div></div></div></div> </div>
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