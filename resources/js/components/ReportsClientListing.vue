<template>
   <div class="client-listing">
      <div class="mt-3">
         <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
            <ul role="tablist" class="nav nav-tabs nav-fill">
               <li class="nav-item">
                  <a class="nav-link active" href="#basic" data-toggle="tab">
                  <span>Basic</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#groupings" data-toggle="tab">
                  <span>Groupings</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#info" data-toggle="tab">
                  <span>Info</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#closed-options" data-toggle="tab">
                  <span>Closed Options</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#others" data-toggle="tab">
                  <span>Others</span>
                  </a>
               </li>
            </ul>
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="basic">
                  <div class="form-row">
                     <div class="col">
                        <div class="form-row justify-content-end">
                           <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">CUT-OFF DATE:</label>
                           <div class="col my-1"><input class="form-control form-control-sm" name="" type="date"></div>
                        </div>
                        <div class="form-row">
                           <div class="col-sm-3 text-sm-right">
                              <p class="col-form-label col-form-label-sm mt-1">Date Opened:</p>
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
                        <div class="form-row">
                           <div class="col-sm-3 text-sm-right">
                              <p class="col-form-label col-form-label-sm mt-1">Birthday:</p>
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
                        <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
                           <ul role="tablist" class="nav nav-tabs nav-fill">
                              <li class="nav-item">
                                 <a class="nav-link active" href="#number-filters" data-toggle="tab" >
                                 <span>Number Filters</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#basic-groupings" data-toggle="tab">
                                 <span>Grouping</span>
                                 </a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane active" id="number-filters">
                                 <div class="form-row">
                                    <div class="col-12">
                                       <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Balance Not ZERO</label></div>
                                    </div>
                                    <div class="col"><input class="form-control form-control-sm" name="" type="text"></div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="basic-groupings" >
                                 <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Geo Groups</label></div>
                                 <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Gender</label></div>
                                 <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Client Type</label></div>
                                 <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Group by Client Status</label></div>
                              </div>
                           </div>
                        </ngb-tabset>
                        <fieldset class="border p-2 mt-2">
                           <span>Type of Report:</span>
                           <div class="form-check form-check-sm"><input checked="" class="form-check-input" type="radio" value="option1"><label class="form-check-label">With Signature Space</label></div>
                           <div class="form-check form-check-sm">
                              <input class="form-check-input" type="radio" value="option2"><label class="form-check-label">With Address</label>
                              <select class="custom-select custom-select-sm my-1" id="" name="">
                                 <option value="1" ng-reflect-value="1">1</option>
                                 <option value="2" ng-reflect-value="2">2</option>
                              </select>
                           </div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="radio" value="option3"><label class="form-check-label">Wide Format</label><sub class="d-block mt-1 mb-3">(Address, Gender, Date Opened, etc.)</sub></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="radio" value="option4"><label class="form-check-label">Subsidiary Ledger</label></div>
                        </fieldset>
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
                     </div>
                  </div>
                  <div class="form-row justify-content-center">
                     <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                     <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
               <div class="tab-pane" id="groupings">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Sectoral:</label>
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
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Occupational:</label>
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
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Geographical:</label>
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
               <div class="tab-pane" id="info">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client Type:</label>
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
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Gender:</label>
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
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Civil Status:</label>
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
               <div class="tab-pane" id="closed-options">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client Status:</label>
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
               <div class="tab-pane" id="others">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">DOSRI Tag:</label>
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
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Restriction Group:</label>
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