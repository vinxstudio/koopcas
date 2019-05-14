<template>
   <div class="inventory-item">
      <nav class="navbar navbar-expand-lg p-0" id="toolbar">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
               <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" tabindex="0" id="menuDropdown-1">Tools</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" tabindex="0" id="menuDropdown-2">System</a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a
                  class="btn btn-sm btn-outline-primary mr-4"
                  >
               <i class="fa fa-search mr-1"></i>
               <span>Find</span>
               </a>
               <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
               <i class="fa fa-file mr-1"></i>
               <span> Ne<u>w</u> </span>
               </button>
               <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
               <i class="fa fa-pencil-square-o mr-1"></i>
               <span> <u>E</u>dit </span>
               </button>
               <button class="btn btn-sm btn-outline-secondary mr-4" disabled type="button">
               <i class="fa fa-trash mr-1"></i>
               <span>
               <u>D</u>elete
               </span>
               </button>
               <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
               <i class="fa fa-floppy-o mr-1"></i>
               <span>
               <u>S</u>ave
               </span>
               </button>
               <button class="btn btn-sm btn-outline-primary" type="button">
               <i class="fa fa-times-circle mr-1"></i>
               <span>
               Canc
               <u>e</u>l
               </span>
               </button>
            </li>
         </ul>
      </nav>

      <div class="form-row">
         <div class="col">
            <fieldset class="my-1 border pb-3 px-3 mx-1">
               <div class="form-row">
                  <div class="col">
                     <br>
                     <div class="form-row">
                        <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">Short Desc</label>
                        <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                     </div>
                     <div class="form-row">
                        <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">Long Desc</label>
                        <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                     </div>
                     <div class="form-row">
                        <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">Department</label>
                        <div class="col my-1">
                           <select class="custom-select custom-select-sm">
                              <option value="" ng-reflect-value=""></option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="col">
                  <div class="form-row">
                     <div class="form-check"><input class="form-check-input" id="defaultCheck1" style="float: center;" type="checkbox" value=""><label class="form-check-label" for="defaultCheck1"> New SL Only </label></div>
                     <div class="col">
                        <div class="form-check"><input class="form-check-input" id="defaultCheck2" style="float: center;" type="checkbox" value=""><label class="form-check-label" for="defaultCheck2"> Must Have SL </label></div>
                     </div>
                  </div>
               </div>
               <div class="form-row mt-2 mb-2 align-items-stretch">
                  <div class="col">
                     <div class="custom-tabs" ng-reflect-justify="fill">
                        <ul role="tablist" class="nav nav-tabs nav-fill">
                           <li class="nav-item">
                              <a class="nav-link active" href="#purchase-account" data-toggle="tab">
                                 <span><u>P</u>urchase Account</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#sales-account" data-toggle="tab">
                                <span><u>S</u>ales Account</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#other-account" data-toggle="tab">
                                <span><u>O</u>ther Accounts</span>
                              </a>
                           </li>
                        </ul>

                        <div class="tab-content">

                           <div class="tab-pane active" id="purchase-account" >
                              <div class="form-row mt-2 mb-2 align-items-stretch">
                                 <div class="col">
                                    <div class="custom-tabs" ng-reflect-justify="fill">
                                       <ul role="tablist" class="nav nav-tabs nav-fill">

                                          <li class="nav-item">
                                             <a class="nav-link active" href="#pa-sales-tab" data-toggle="tab">
                                              <span><u>S</u>ales</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" href="#pa-return-tab" data-toggle="tab">
                                                <span><u>R</u>eturn</span>
                                             </a>
                                          </li>
                                       </ul>

                                       <div class="tab-content">
                                          <div class="tab-pane active" id="pa-sales-tab">
                                             <div class="col">
                                                <br>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Class</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Type</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">COA</label>
                                                   <div class="col my-1">
                                                      <select class="custom-select custom-select-sm">
                                                         <option value="" ng-reflect-value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                                                   <div class="col my-1"><input class="form-control form-control-sm bg-warning border-0" name="" type="text"></div>
                                                </div>
                                             </div>
                                          </div>

                                           <div class="tab-pane" id="pa-return-tab">
                                             <div class="col">
                                                <br>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Class</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Type</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">COA</label>
                                                   <div class="col my-1">
                                                      <select class="custom-select custom-select-sm">
                                                         <option value="" ng-reflect-value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                                                   <div class="col my-1"><input class="form-control form-control-sm bg-warning border-0" name="" type="text"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div> 
                                    </div>
                                 </div>
                              </div>
                           </div>

                        <div class="tab-pane" id="sales-account" >
                              <div class="form-row mt-2 mb-2 align-items-stretch">
                                 <div class="col">

                                    <div class="custom-tabs" ng-reflect-justify="fill">
                                       <ul role="tablist" class="nav nav-tabs nav-fill">
                                          <li class="nav-item">
                                             <a class="nav-link active" href="#sa-sales-tab" data-toggle="tab">
                                              <span><u>S</u>ales</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" href="#sa-return-tab" data-toggle="tab">
                                                <span><u>R</u>eturn</span>
                                             </a>
                                          </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="#sa-discount-tab" data-toggle="tab">
                                                <span><u>D</u>iscount</span>
                                             </a>
                                          </li>
                                       </ul>

                                       <div class="tab-content">
                                          <div class="tab-pane active" id="sa-sales-tab">
                                             <div class="col">
                                                <br>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Class</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Type</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">COA</label>
                                                   <div class="col my-1">
                                                      <select class="custom-select custom-select-sm">
                                                         <option value="" ng-reflect-value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                                                   <div class="col my-1"><input class="form-control form-control-sm bg-warning border-0" name="" type="text"></div>
                                                </div>
                                             </div>
                                          </div>
                                           <div class="tab-pane" id="sa-return-tab">
                                             <div class="col">
                                                <br>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Class</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Type</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">COA</label>
                                                   <div class="col my-1">
                                                      <select class="custom-select custom-select-sm">
                                                         <option value="" ng-reflect-value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                                                   <div class="col my-1"><input class="form-control form-control-sm bg-warning border-0" name="" type="text"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tab-pane" id="sa-discount-tab">
                                             <div class="col">
                                                <br>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Class</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Type</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">COA</label>
                                                   <div class="col my-1">
                                                      <select class="custom-select custom-select-sm">
                                                         <option value="" ng-reflect-value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                                                   <div class="col my-1"><input class="form-control form-control-sm bg-warning border-0" name="" type="text"></div>
                                                </div>
                                             </div>
                                          </div>

                                       </div> 
                                    </div>
                                 </div>
                              </div>
                           </div>


                        <div class="tab-pane" id="other-account" >
                              <div class="form-row mt-2 mb-2 align-items-stretch">
                                 <div class="col">
                                     
                                    <div class="custom-tabs" ng-reflect-justify="fill">
                                       <ul role="tablist" class="nav nav-tabs nav-fill">
                                          <li class="nav-item">
                                             <a class="nav-link active" href="#oa-cost-of-gold-sold-tab" data-toggle="tab">
                                              <span>Cost of gold sold</span>
                                             </a>
                                          </li>
                                          <li class="nav-item">
                                             <a class="nav-link" href="#oa-credit-sales-tab" data-toggle="tab">
                                                <span>Credit Sales</span>
                                             </a>
                                          </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="#oa-credit-sales-return-tab" data-toggle="tab">
                                                <span>Credit Sales Return</span>
                                             </a>
                                          </li>
                                       </ul>

                                       <div class="tab-content">
                                          <div class="tab-pane active" id="oa-cost-of-gold-sold-tab">
                                             <div class="col">
                                                <br>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Class</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Type</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">COA</label>
                                                   <div class="col my-1">
                                                      <select class="custom-select custom-select-sm">
                                                         <option value="" ng-reflect-value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                                                   <div class="col my-1"><input class="form-control form-control-sm bg-warning border-0" name="" type="text"></div>
                                                </div>
                                             </div>
                                          </div>
                                           <div class="tab-pane" id="oa-credit-sales-tab">
                                             <div class="col">
                                                <br>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Class</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Type</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">COA</label>
                                                   <div class="col my-1">
                                                      <select class="custom-select custom-select-sm">
                                                         <option value="" ng-reflect-value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                                                   <div class="col my-1"><input class="form-control form-control-sm bg-warning border-0" name="" type="text"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tab-pane" id="oa-credit-sales-return-tab">
                                             <div class="col">
                                                <br>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Class</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">SL Type</label>
                                                   <div class="col my-1"><input class="form-control form-control-sm" name="" type="text"></div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">COA</label>
                                                   <div class="col my-1">
                                                      <select class="custom-select custom-select-sm">
                                                         <option value="" ng-reflect-value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-row">
                                                   <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                                                   <div class="col my-1"><input class="form-control form-control-sm bg-warning border-0" name="" type="text"></div>
                                                </div>
                                             </div>
                                          </div>

                                       </div> 
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div> <!--Purchase Account -->
                     </div>
                  </div>
               </div>
            </fieldset>
         </div>
      </div>
   </div>
</template>
<style>
   .bg-light-green{
   background-color: #20c997 !important;
   }
   .bg-light-blue{
   background-color: #6dcff6 !important;
   }
   .bg-light-pink{
   background-color: #ef80ff !important;
   }
   .bg-light-yellow{
   background-color: #FFF9C4 !important;
   }
</style>