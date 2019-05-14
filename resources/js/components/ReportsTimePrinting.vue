<template>
   <div class="time-printing">
      <div class="form-row justify-content-center pt-3">
         <div class="col-sm-6">
            <fieldset class="bg-light border p-2">
               <div class="form-row justify-content-between">
                  <div class="col-sm-4">
                     <div class="form-row">
                        <div class="col"><label class="col-form-label col-form-label-sm">Client ID:</label><input class="form-control form-control-sm bg-light-blue border-0" name="" type="text"></div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-row">
                        <div class="col"><label class="col-form-label col-form-label-sm">Transaction Control Number</label><input class="form-control form-control-sm bg-light-green border-0" name="" type="text"></div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-row">
                        <div class="col"><label class="col-form-label col-form-label-sm">Issued On</label><input class="form-control form-control-sm" name="" type="date"></div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-row">
                        <div class="col"><label class="col-form-label col-form-label-sm">Due On</label><input class="form-control form-control-sm" name="" type="date"></div>
                     </div>
                  </div>
               </div>
               <hr>
               <div class="form-row justify-content-between">
                  <div class="col"><label class="col-form-label col-form-label-sm" for="lastName">Last Name</label><input class="form-control form-control-sm" formcontrolname="lastName" name="lastName" type="text"></div>
                  <div class="col-sm-auto d-none d-sm-block align-self-end"><strong>,</strong></div>
                  <div class="col"><label class="col-form-label col-form-label-sm" for="firstName">First Name</label><input class="form-control form-control-sm" formcontrolname="firstName" name="firstName" type="text"></div>
                  <div class="col"><label class="col-form-label col-form-label-sm" for="middleName">Middle Name</label><input class="form-control form-control-sm" formcontrolname="middleName" name="middleName" type="text"></div>
                  <div class="col-sm-2"><label class="col-form-label col-form-label-sm" for="suffix">Suffix</label><input class="form-control form-control-sm" formcontrolname="suffix" name="suffix" type="text"></div>
               </div>
               <div class="form-row">
                  <div class="col-sm-8">
                     <div class="form-row">
                        <div class="col"><label class="col-form-label col-form-label-sm">Account Name</label><input class="form-control form-control-sm" name="" type="text"></div>
                     </div>
                     <div class="col"></div>
                  </div>
               </div>
               <div class="form-row">
                  <div class="col-sm-4">
                     <div class="form-row">
                        <div class="col"><label class="col-form-label col-form-label-sm">Balance</label><input class="form-control form-control-sm bg-light-pink border-0" name="" type="text"></div>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="form-row">
                        <div class="col"><label class="col-form-label col-form-label-sm">Term</label><input class="form-control form-control-sm" name="" type="text"></div>
                        <span class="col-auto col-form-label col-form-label-sm align-self-end">Days</span>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="form-row">
                        <div class="col"><label class="col-form-label col-form-label-sm">Rate</label><input class="form-control form-control-sm" name="" type="text"></div>
                        <span class="col-auto col-form-label col-form-label-sm align-self-end">% p.a.</span>
                     </div>
                  </div>
               </div>
            </fieldset>
            <div class="form-row justify-content-between">
               <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block"><i class="fa fa-search mr-1"></i><span>Find</span></button></div>
               <div class="col-sm-auto my-2">
                  <div class="form-row">
                     <div class="col"><button class="btn btn-outline-dark-blue btn-block"><i class="fa fa-print mr-1"></i><span>Print</span></button></div>
                     <div class="col"><button class="btn btn-outline-dark-blue btn-block"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
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
