<template>
    <div class="batch-process-maintenance">
            
        <div class="form-row my-3">
            <div class="col-sm-7">
                <fieldset class="bg-light border p-2"> 
                    <div class="form-row justify-content-between"> 
                        <div class="col-sm-6">
                            <div class="form-row">
                                <label class="col-sm-4 text-sm-right text-truncate ol-form-label col-form-label-sm mt-1">Transaction Type:</label>
                                    <div class="col my-1">
                                      <select class="custom-select custom-select-sm" id name>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                      </select>
                                    </div>
                                </div> 

                    <div class="form-row">
                        <label class="col-sm-4 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Control Number:</label>
                            <div class="col my-1">
                                 <div class="form-row align-items-center"> 
                                    <div class="col-sm-2"> 
                                        <input class="form-control form-control-sm" name="" type="text"> 
                                    </div>
                                         <span class="col-auto">-</span>
                                             <div class="col"> 
                                                <input class="form-control form-control-sm" name="" type="text"> 
                                             </div>
                                         </div>
                                    </div>
                                 </div>
                             </div>

                    <div class="col-sm-4">
                        <div class="form-row"> 
                            <label class="col-sm-4 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Department:</label>
                              <div class="col my-1"> 
                                 <select class="custom-select custom-select-sm" id="" name="">
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                 </select> 
                            </div>
                         </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-row">
                            <label class="col-sm-2 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Client:</label>
                                 <div class="col">
                                     <div class="form-row justify-content-end"> 
                                         <div class="col-sm-4 my-1"> 
                                             <input class="form-control form-control-sm" name="" type="text">
                                         </div>
                                     <div class="col-sm-8 my-1">
                                        <input class="form-control form-control-sm" name="" type="text">
                                     </div>
                                    <div class="col-sm-8 my-1">
                                        <input class="form-control form-control-sm" name="" type="text">
                                          </div>
                                     </div>
                                </div>
                            </div>
                         </div>
                     </div>
                 </fieldset>
             </div>

             <div class="col-sm-3">
                 <fieldset class="bg-light border p-2">
                    <div class="form-row">
                         <label class="col-form-label col-form-label-sm mt-1  col-sm-3 text-sm-right text-truncate">Reference Number</label>
                            <div class="col my-1"> 
                                <input class="form-control form-control-sm" name="" type="number"> 
                            </div>
                         </div>

                     <div class="form-row">
                         <label class="col-form-label col-form-label-sm mt-1  col-sm-3 text-sm-right text-truncate">Transaction Date:</label>
                            <div class="col my-1"> 
                                <input class="form-control form-control-sm" name="" type="date"> 
                        </div>
                     </div>

                     <div class="form-row">
                        <label class="col-form-label col-form-label-sm mt-1  col-sm-3 text-sm-right text-truncate">Batch Number</label>
                            <div class="col my-1"> 
                                <input class="form-control form-control-sm" name="" type="number">
                             </div>
                         </div>
                    </fieldset>
                </div>

             <div class="col-sm-2">
                 <p class="h4 text-center p-4">Press F4 to Enlarge the Transaction Grid</p>
            </div>
        </div>

        <div class="form-row align-items-stretch">
            <div class="col">
                <!-- <ngb-tabset class="custom-tab tab-content-bg-light"> -->
                    <ul role="tablist" class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#gl/sl" role="tab"> GL/SL Entries<!----></a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#explanation" role="tab"> COCI Details1<!----></a>
                            </li>
                        </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="#gl/sl">
                            <div class="form-row">
                                <table class="table table-sm table-bordered custom-table table-dark">
                                    <thead>
                                        <tr>
                                            <th>P</th>
                                            <th>SC</th>
                                            <th>ST</th>
                                            <th>SE</th>
                                            <th>SN</th>
                                            <th>G/L Acct.</th>
                                            <th>Acct Description</th>
                                            <th>Debit</th>
                                            <th>Credit</th>
                                            <th>Client ID</th>
                                            <th>Name of Client</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>P</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>7338010</td>
                                            <td>Meetings and Conferences - Staff</td>
                                            <td>1,894.50</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                            
                                        <tr>
                                                <td>P</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>2310009</td>
                                                <td>Vouches Payable</td>
                                                <td></td>
                                                <td>1,894.50</td>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <div class="form-row justify-content-between my-2">
                                <div class="col"><div class="form-row justify-content-start">
                                    <label class="col-auto col-form-label col-form-label-sm mt-1">Difference:</label>
                                        <div class="col-sm-4 my-1">
                                            <input class="form-control form-control-sm bg-light-blue border-0" name="" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    <label class="col-auto col-form-label col-form-label-sm mt-1">Debit:</label>
                                        <div class="col-sm-2 my-1">
                                            <input class="form-control form-control-sm bg-light-blue border-0" name="" type="text">
                                        </div>
                                            <label class="col-auto col-form-label col-form-label-sm mt-1">Credit:</label>
                                        <div class="col-sm-2 my-1">
                                            <input class="form-control form-control-sm bg-light-blue border-0" name="" type="text">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                    <!-- </ngb-tabset> -->
                 </div>
             </div>
            
            <div class="form-row my-3">
                <div class="col">
                    <!-- <ngb-tabset class="custom-tabs tab-content-bg-light"> -->
                        <ul role="tablist" class="nav nav-tabs nav-fill"><!---->
                            <li class="nav-item">
                                <a class="nav-link active" href="#explanation" data-toggle="tab"> Explanation </a>
                            </li>
                        </ul>
                 <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" id="#explanation">
                         <div class="form-row justify-content-between">
                            <textarea class="form-control form-control-sm" cols="30" id="" name="" rows="5"> </textarea>
                        </div>
                    </div>
                </div>
             <!-- </ngb-tabset> -->
            </div>
        </div>
    </div>

</template>

<style>

.bg-light-blue {
    background-color: #6dcff6 !important;
}

.custom-tabs > .nav-tabs > .nav-item > .nav-link.active {
    background-color: #418cb3;
    color: #fff;
}

.custom-tabs > .nav-tabs > .nav-item > .nav-link {
    border: 0;
}

</style>