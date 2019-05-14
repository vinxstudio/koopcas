<template>
   <div class="receivable-analysis">
      <div class="form-row align-items-stretch p-3">
         <div class="col">
            <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
               <ul role="tablist" class="nav nav-tabs nav-fill">
                  <li class="nav-item">
                     <a class="nav-link active" href="#basic" data-toggle="tab">
                     Basic
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#client-info" data-toggle="tab">
                     Client Info
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#setup-data" data-toggle="tab">
                     Setup Data
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#advanced" data-toggle="tab">
                     Advanced
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#groupings" data-toggle="tab">
                     Groupings
                     </a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="basic">
                     <div class="form-row">
                        <div class="col-sm-5">
                           <div class="form-row">
                              <div class="col mt-2">
                                 <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Show Totals Only</label></div>
                              </div>
                              <div class="col">
                                 <div class="form-row">
                                    <label class="col-form-label col-form-label-sm mt-1">CUT-OFF DATE:</label>
                                    <div class="col my-1"><input class="form-control form-control-sm" name="" type="date"></div>
                                 </div>
                              </div>
                           </div>
                           <fieldset class="my-1 border pb-3 px-3 mx-1">
                              <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Setup Dates</legend>
                              <div class="form-row">
                                 <div class="col-sm-3 text-sm-right">
                                    <p class="col-form-label col-form-label-sm mt-1">Date Released:</p>
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
                                    <p class="col-form-label col-form-label-sm mt-1">Maturity Date:</p>
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
                           </fieldset>
                           <fieldset class="my-1 border pb-3 px-3 mx-1">
                              <div class="form-row">
                                 <div class="col-sm-3 text-sm-right">
                                    <p class="col-form-label col-form-label-sm mt-1">Last Trans Date:</p>
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
                           </fieldset>
                        </div>
                        <div class="col">
                           <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
                              <ul role="tablist" class="nav nav-tabs nav-fill">
                                 <li class="nav-item">
                                    <a class="nav-link active" href="#number-filters" data-toggle="tab">
                                    Number Filters
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#basic-groupings" data-toggle="tab">
                                    Grouping
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#sorting" data-toggle="tab">
                                    Sorting
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane active" aria-labelledby="ngb-tab-156" id="ngb-tab-156-panel" aria-expanded="true">
                                    <div class="form-row">
                                       <div class="col">
                                          <div class="form-row mt-1">
                                             <div class="col-12 my-1">
                                                <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Balance Not ZERO</label></div>
                                             </div>
                                             <div class="col"><input class="form-control form-control-sm" name="" type="text"></div>
                                          </div>
                                          <div class="form-row">
                                             <div class="col"><label class="col-form-label col-form-label-sm">Principal Amount:</label><input class="form-control form-control-sm" name="" type="text"></div>
                                          </div>
                                          <div class="form-row">
                                             <div class="col"><label class="col-form-label col-form-label-sm">Deposits Amount:</label><input class="form-control form-control-sm" name="" type="text"></div>
                                          </div>
                                          <div class="form-row">
                                             <div class="col"><label class="col-form-label col-form-label-sm">Share Capital Amount:</label><input class="form-control form-control-sm" name="" type="text"></div>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="form-row">
                                             <div class="col"><label class="col-form-label col-form-label-sm">Number of Delayed Installments:</label><input class="form-control form-control-sm" name="" type="text"></div>
                                          </div>
                                          <div class="form-row">
                                             <div class="col"><label class="col-form-label col-form-label-sm">Number of Months Delayed:</label><input class="form-control form-control-sm" name="" type="text"></div>
                                          </div>
                                          <div class="form-row">
                                             <div class="col"><label class="col-form-label col-form-label-sm">Principal Due:</label><input class="form-control form-control-sm" name="" type="text"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="basic-groupings">
                                    <div class="form-row">
                                       <div class="col">
                                          <div class="form-check my-2"><input class="form-check-input" id="1" type="checkbox" value=""><label class="form-check-label" for="1">Group by SL CLASS</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="2" type="checkbox" value=""><label class="form-check-label" for="2">Group by Gender</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="3" type="checkbox" value=""><label class="form-check-label" for="3">Group by Loan Class</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="4" type="checkbox" value=""><label class="form-check-label" for="4">Group by Loan Purpose</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="5" type="checkbox" value=""><label class="form-check-label" for="5">Group by Geographical</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="6" type="checkbox" value=""><label class="form-check-label" for="6">Group by SL STATUS</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="7" type="checkbox" value=""><label class="form-check-label" for="7">Group by Cluster</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="8" type="checkbox" value=""><label class="form-check-label" for="8">Group by CI</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="9" type="checkbox" value=""><label class="form-check-label" for="9">Group by Security</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="10" type="checkbox" value=""><label class="form-check-label" for="10">Group by Geo Sub Group</label></div>
                                       </div>
                                       <div class="col">
                                          <div class="form-check my-2"><input class="form-check-input" id="11" type="checkbox" value=""><label class="form-check-label" for="11">Group by Employer Code</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="12" type="checkbox" value=""><label class="form-check-label" for="12">Group by Pay Mode</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="13" type="checkbox" value=""><label class="form-check-label" for="13">Group by Account Status</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="14" type="checkbox" value=""><label class="form-check-label" for="14">Group by SL Type</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="15" type="checkbox" value=""><label class="form-check-label" for="15">Group by Client ID</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="16" type="checkbox" value=""><label class="form-check-label" for="16">Group by Transaction Type</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="17" type="checkbox" value=""><label class="form-check-label" for="17">Group by INdustry Section</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="18" type="checkbox" value=""><label class="form-check-label" for="18">Group by Bank</label></div>
                                          <div class="form-check my-2"><input class="form-check-input" id="19" type="checkbox" value=""><label class="form-check-label" for="19">Group by Collector</label></div>
                                       </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                       <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="sorting">
                                    <div class="form-row">
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
                           </ngb-tabset>
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
                     <div class="form-row justify-content-end">
                        <div class="col-auto">
                           <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Wide Version</label></div>
                        </div>
                     </div>
                     <div class="form-row justify-content-center">
                        <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                        <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                     </div>
                  </div>
                  <div class="tab-pane" id="client-info">
                     <div class="form-row justify-content-center">
                        <div class="col-sm-10 p-3">
                           <div class="form-row my-5">
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client Type:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">Associate</option>
                                          <option value="2" ng-reflect-value="2">CoMaker</option>
                                          <option value="3" ng-reflect-value="3">Institutional</option>
                                          <option value="4" ng-reflect-value="4">Others</option>
                                          <option value="5" ng-reflect-value="5">Regular Individual</option>
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
                                          <option value="1" ng-reflect-value="1">Female</option>
                                          <option value="2" ng-reflect-value="2">Male</option>
                                          <option value="3" ng-reflect-value="3">N/A</option>
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
                                          <option value="1" ng-reflect-value="1">Divorced</option>
                                          <option value="2" ng-reflect-value="2">Married</option>
                                          <option value="3" ng-reflect-value="3">N/A</option>
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
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Alert Level:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">1st Demand</option>
                                          <option value="2" ng-reflect-value="2">For Litigation</option>
                                          <option value="3" ng-reflect-value="3">For Offsetting</option>
                                          <option value="4" ng-reflect-value="4">In Litigation</option>
                                          <option value="5" ng-reflect-value="5">Last Demand</option>
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
                        <div class="col-sm-10 p-3">
                           <div class="form-row my-5">
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client ID:</label>
                              <div class="col"><textarea class="form-control form-control-sm bg-light-yellow border-0" cols="30" id="" name="" rows="10"></textarea></div>
                              <div class="col-sm-auto my-2 my-sm-0"><button class="btn btn-sm btn-block btn-outline-primary"><i class="fa fa-file mr-1"></i><span>Browse</span></button></div>
                           </div>
                        </div>
                     </div>
                     <div class="form-row justify-content-center">
                        <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                        <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                     </div>
                  </div>
                  <div class="tab-pane" id="setup-data">
                     <div class="form-row justify-content-center">
                        <div class="col-sm-10 p-3">
                           <div class="form-row my-5">
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Principal Payment Mode:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">Daily</option>
                                          <option value="2" ng-reflect-value="2">Every nP</option>
                                          <option value="3" ng-reflect-value="3">Lumpsum</option>
                                          <option value="4" ng-reflect-value="4">Monthly</option>
                                          <option value="5" ng-reflect-value="5">Quarterly</option>
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
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Interest Payment Mode:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">Daily</option>
                                          <option value="2" ng-reflect-value="2">Every nP</option>
                                          <option value="3" ng-reflect-value="3">Lumpsum</option>
                                          <option value="4" ng-reflect-value="4">Monthly</option>
                                          <option value="5" ng-reflect-value="5">Quarterly</option>
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
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Amortization Type:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">Annuity</option>
                                          <option value="2" ng-reflect-value="2">Diminishing Balance</option>
                                          <option value="3" ng-reflect-value="3">Straight Line</option>
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
                  <div class="tab-pane" id="advanced">
                     <div class="form-row justify-content-center">
                        <div class="col-sm-10 p-3">
                           <div class="form-row">
                              <div class="col-sm-3 text-sm-right">
                                 <p class="col-form-label col-form-label-sm mt-1">Match Amortization Schedule Due Dates:</p>
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
                           <div class="form-row my-5">
                              <label class="col-sm-1 col-form-label col-form-label-sm">SL Status:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">Current</option>
                                          <option value="2" ng-reflect-value="2">In Litigation</option>
                                          <option value="3" ng-reflect-value="3">Mediated</option>
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
                              <label class="col-sm-1 col-form-label col-form-label-sm">Account Status:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">Advance Payment</option>
                                          <option value="2" ng-reflect-value="2">Delinquent</option>
                                          <option value="3" ng-reflect-value="3">Over-Paid</option>
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
                              <label class="col-sm-1 col-form-label col-form-label-sm">DOSRI Tag:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">Directors</option>
                                          <option value="2" ng-reflect-value="2">Officers</option>
                                          <option value="3" ng-reflect-value="3">Related Interests</option>
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
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Geographical:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">Alcantara</option>
                                          <option value="2" ng-reflect-value="2">Alegria</option>
                                          <option value="3" ng-reflect-value="3">Badian</option>
                                          <option value="4" ng-reflect-value="4">Ceylabco</option>
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
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Employer Code:</label>
                              <div class="col">
                                 <div class="form-row align-items-center">
                                    <div class="col">
                                       <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                          <option value="1" ng-reflect-value="1">N/A</option>
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
                        <div class="col-sm-10 p-3">
                           <div class="form-row my-5">
                              <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Restriction Group</label>
                              <div class="col"><textarea class="form-control form-control-sm bg-light-yellow border-0" cols="30" id="" name="" rows="10"></textarea></div>
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