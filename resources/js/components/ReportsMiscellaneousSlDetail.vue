<template>
   <div class="miscellaneous-sl-detail">
      <div class="form-row align-items-stretch p-3">
         <div class="col">
            <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
               <ul role="tablist" class="nav nav-tabs nav-fill">
            
                  <li class="nav-item">
                     <a class="nav-link active" href="#basic" data-toggle="tab" >
                        Basic
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#other-options" data-toggle="tab">
                        Other Options
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#advanced" data-toggle="tab">
                        Advanced
                     </a>
                  </li>
               </ul>
               <div class="tab-content">
                
                  <div class="tab-pane active" id="basic">
                    
                     <div class="form-row">
                        <div class="col-sm-4">
                           <div class="form-row">
                              <div class="col-sm-3 text-sm-right">
                                 <p class="col-form-label col-form-label-sm mt-1">Cut-off Dates:</p>
                              </div>
                              <div class="col">
                                 <div class="form-row">
                                    <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
                                    <div class="col my-1"><input class="form-control form-control-sm" name="" type="date"></div>
                                 </div>
                                 <div class="form-row">
                                    <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                                    <div class="col my-1"><input class="form-control form-control-sm" name="" type="date"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-row">
                              <div class="col-sm-1"><label class="col-form-label col-form-label-sm">Client ID:</label><button class="btn btn-sm btn-block btn-outline-primary"><i class="fa fa-file mr-1"></i><span>Browse</span></button></div>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1"></option>
                                          <option value="2" ng-reflect-value="2"></option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-row justify-content-center">
                        <div class="col-sm-10 p-3">
                           <div class="form-row my-5">
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Class:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">1</option>
                                          <option value="2" ng-reflect-value="2">2</option>
                                       </select>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                    <div class="col">
                                       <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1"></option>
                                          <option value="2" ng-reflect-value="2"></option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row my-5">
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Type:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">1</option>
                                          <option value="2" ng-reflect-value="2">2</option>
                                       </select>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                    <div class="col">
                                       <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1"></option>
                                          <option value="2" ng-reflect-value="2"></option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row my-5">
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Entry Type:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">1</option>
                                          <option value="2" ng-reflect-value="2">2</option>
                                       </select>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                    <div class="col">
                                       <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1"></option>
                                          <option value="2" ng-reflect-value="2"></option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-row justify-content-center">
                        <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                        <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                     </div>
                  </div>

            <div class="tab-pane" id="other-options"> <div>test1 </div> </div>

            <div class="tab-pane" id="advanced"> <div>test2</div> </div>

               </div>
            </ngb-tabset>
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