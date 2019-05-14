<template>
   <div class="transaction-coci-listing">
      <div class="mt-3">
         <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
            <ul role="tablist" class="nav nav-tabs nav-fill">
               <li class="nav-item">
                  <a class="nav-link active" href="#general" data-toggle="tab" >
                  <span>General</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#sl-options" data-toggle="tab">
                  <span>SL Options</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#advanced" data-toggle="tab">
                  <span>Advanced</span>
                  </a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane active" id="general">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-8">
                        <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Show Totals Only</label></div>
                        <div class="form-row">
                           <div class="col">
                              <div class="form-row justify-content-end">
                                 <div class="col">
                                    <label class="col-form-label col-form-label-sm">Cut-Off Dates</label>
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
                           <div class="col-sm-8">
                              <div class="form-row">
                                 <div class="col"><label class="col-form-label col-form-label-sm">Amount Filter:</label><input class="form-control form-control-sm" name="" type="number"></div>
                              </div>
                              <div class="form-row">
                                 <div class="col-12 mt-3">
                                    <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Include Explanation</label></div>
                                 </div>
                                 <div class="col"><input class="form-control form-control-sm" name="" type="text"></div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row justify-content-center">
                           <div class="col">
                              <div class="form-row my-3">
                                 <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">Transaction Type:</label>
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
                              <div class="form-row my-3">
                                 <div class="col-sm-2"><label class="col-form-label col-form-label-sm">GL Account Code:</label><button class="btn btn-sm btn-block btn-outline-primary"><i class="fa fa-file mr-1"></i><span>Browse</span></button></div>
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
                              <div class="form-row my-3">
                                 <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">Posting Tag:</label>
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
                     </div>
                     <div class="col">
                        <fieldset class="my-1 border pb-3 px-3 mx-1 h-100">
                           <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Groupings</legend>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Trans Type</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Geographical</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Gender</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Encode By</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Client Name</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Client ID</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by GL Account</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by SL Class</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by SL Status</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by SL Type</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by SL Entry</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Transaction Date</label></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Control Number</label></div>
                        </fieldset>
                     </div>
                  </div>
                  <div class="form-row justify-content-center">
                     <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                     <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
               <div class="tab-pane" id="sl-options">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-3">
                           <div class="col-sm-2"><label class="col-form-label col-form-label-sm">Client ID:</label><button class="btn btn-sm btn-block btn-outline-primary"><i class="fa fa-file mr-1"></i><span>Browse</span></button></div>
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
                     <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                     <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
               <div class="tab-pane" id="advanced">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-6">
                        <div class="form-row">
                           <label class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Client Name:</label>
                           <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                        </div>
                        <div class="form-row">
                           <label class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">And/Or Name:</label>
                           <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                        </div>
                        <div class="form-row">
                           <label class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Check Number:</label>
                           <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                        </div>
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Check Voucher Bank:</label>
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
            </div>
         </ngb-tabset>
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