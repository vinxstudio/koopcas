<template>
  <div class="report-generation">
    <div class="form-row mt-2 mb-2 align-items-stretch">
        <div class="col">
            <div class="custom-tabs tab-content-bg-light">
                <ul role="tablist" class="nav nav-tabs nav-fill">
                  <li class="nav-item active">
                      <a class="nav-link active" href="#general" data-toggle="tab"  role="tab"><span><u>G</u>eneral</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#sloptions" data-toggle="tab" role="tab"><span>S/L <u>O</u>ptions</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#advance" data-toggle="tab"  role="tab"><span><u>A</u>dvance</span></a>
                  </li>
                </ul>

                <div class="tab-content">
                    <div id="general" class="tab-pane active">
                      <div class="form-row">
                            <div class="col">
                                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                                        <div class="form-row">
                                                <div class="col mt-2">
                                                    <div class="form-check form-check-sm">
                                                        <input type="checkbox" class="form-check-input" id="mycheck1">
                                                        <label class="form-check-label" for="mycheck1">Show Totals Only</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="form-row">
                                            <div class="col-sm-3 text-sm-right">
                                                <p class="col-form-label col-form-label-sm mt-1">CUT-OFF DATE:</p>
                                            </div>
                                            <div class="col">
                                                <div class="form-row">
                                                    <label class="col-sm-1 text-right col-form-label col-form-label-sm mt-1">from</label>
                                                    <div class="col my-1">
                                                        <input type="date" class="form-control form-control-sm" name="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                                                    <div class="col my-1">
                                                        <input type="date" class="form-control form-control-sm" name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 text-sm-right justify-content-center">
                                                <p class="col-form-label col-form-label-sm mt-1">Amount Filter:</p>
                                        </div>
                                        <div class="col-sm-3 my-1">
                                                <input type="text" class="form-control form-control-sm" name="">
                                            </div>
                                            <div class="form-row">
                                                    <div class="col mt-2">
                                                        <div class="form-check form-check-sm">
                                                            <input id="mycheck2" type="checkbox" class="form-check-input">
                                                            <label class="form-check-label" for="mycheck2">Include Explanation</label>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col my-1">
                                                    <input id="explanationId" type="display:none"
                                                    class="form-control form-control-sm" name="explanationId" formcontrolname="explanationId">
                                            </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-3">
                                <fieldset class="border pb-3 px-3 mx-1">
                                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Groupings</legend>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="1">
                                                            <label class="form-check-label" for="1">Group By trans Type</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="2">
                                                            <label class="form-check-label" for="2">Group By Geographical</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="3">
                                                            <label class="form-check-label" for="3">Group By Gender</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="4">
                                                            <label class="form-check-label" for="4">Group By Encd By</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="5">
                                                            <label class="form-check-label" for="5">Group By Client Name</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="6">
                                                            <label class="form-check-label" for="6">Group By Client ID</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="7">
                                                            <label class="form-check-label" for="7">Group By GL Acct</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="8">
                                                            <label class="form-check-label" for="8">Group By Class</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="9">
                                                            <label class="form-check-label" for="9">Group By Status</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="10">
                                                            <label class="form-check-label" for="10">Group By Type</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="11">
                                                            <label class="form-check-label" for="11">Group By Entry</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="12">
                                                            <label class="form-check-label" for="12">Group By Trans Date</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="13">
                                                            <label class="form-check-label" for="13">Group By Ctrl No.</label>
                                                        </div>
                                                    </div>
                                        </fieldset>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                    <div class="col-sm-10 p-3">
                                        <div class="form-row my-3">
                                            <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Transaction Type:</label>
                                            <div class="col">
                                                <div class="form-row align-items-center">
                                                    <div class="col">
                                                        <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                            <option value="">Accrued Interest</option>
                                                            <option value="">Adj Qty</option>
                                                            <option value="">Balance Forward</option>
                                                            <option value="">Bank Deposit</option>
                                                            <option value="">Begin Qty</option>
                                                            <option value="">Bills Payment</option>
                                                            <option value="">Cash receipt</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-angle-double-right"></i>
                                                    </div>
                                                    <div class="col">
                                                        <select class="custom-select custom-select-sm bg-warning border-0" name="" id="" multiple="">
                                                            <option value=""></option>
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col">
                                                <p>GL Acct Code:</p>
                                                <div class="form-row">
                                                    <div class="col-auto col-sm-1">
                                                        <button class="btn btn-sm btn-outline-primary">
                                                                <i class="fa fa-file mr-1"></i>
                                                                <span>Browse</span>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <textarea class="form-control form-control-sm bg-warning border-0" name="" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="form-row my-3">
                                            <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Posting Type:</label>
                                            <div class="col">
                                                <div class="form-row align-items-center">
                                                    <div class="col">
                                                        <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                            <option value="">0-NOT POSTED</option>
                                                            <option value="">2-Cancelled</option>
                                                            <option value="">3-G/L Acct Error</option>
                                                            <option value="">4-S/L Ifor Error</option>
                                                            <option value="">5-Reversed</option>
                                                            <option value="">6-Pending</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-angle-double-right"></i>
                                                    </div>
                                                    <div class="col">
                                                        <select class="custom-select custom-select-sm bg-warning border-0" name="" id="" multiple="">
                                                            <option value="">1-Posted</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div id="sloptions" class="tab-pane">
                        <div class="form-row justify-content-center">
                                <div class="col-sm-10 p-3">
                                    <div class="form-row my-5">
                                        <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client Type:</label>
                                        <div class="col">
                                            <div class="form-row align-items-center">
                                                <div class="col">
                                                    <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                        <option value="1">Associate</option>
                                                        <option value="2">CoMaker</option>
                                                        <option value="3">Institutional</option>
                                                        <option value="4">Others</option>
                                                        <option value="5">Regular Individual</option>
                                                    </select>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-angle-double-right"></i>
                                                </div>
                                                <div class="col">
                                                    <select class="custom-select custom-select-sm bg-warning border-0" name="" id="" multiple="">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
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
                                                    <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                        <option value="1">Female</option>
                                                        <option value="2">Male</option>
                                                        <option value="3">N/A</option>
                                                    </select>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-angle-double-right"></i>
                                                </div>
                                                <div class="col">
                                                    <select class="custom-select custom-select-sm bg-warning border-0" name="" id="" multiple="">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
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
                                                    <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                        <option value="1">Divorced</option>
                                                        <option value="2">Married</option>
                                                        <option value="3">N/A</option>
                                                    </select>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-angle-double-right"></i>
                                                </div>
                                                <div class="col">
                                                    <select class="custom-select custom-select-sm bg-warning border-0" name="" id="" multiple="">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
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
                                                    <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                        <option value="1">1st Demand</option>
                                                        <option value="2">For Litigation</option>
                                                        <option value="3">For Offsetting</option>
                                                        <option value="4">In Litigation</option>
                                                        <option value="5">Last Demand</option>
                                                    </select>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-angle-double-right"></i>
                                                </div>
                                                <div class="col">
                                                    <select class="custom-select custom-select-sm bg-warning border-0" name="" id="" multiple="">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
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
                                            <div class="col">
                                                <textarea class="form-control form-control-sm bg-warning border-0" name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div id="advance" class="tab-pane">
                        <div class="form-row align-items-center">
                        <label class="col-sm-3 text-right col-form-label col-form-label-sm mt-1">Client Name:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm">
                        </div>
                        </div>
                        <br>
                        <div class="form-row align-items-center">
                        <label class="col-sm-3 text-right col-form-label col-form-label-sm mt-1">And/Or Name:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm">
                        </div>
                        </div>
                        <br>
                        <div class="form-row justify-content-center">
                        <div class="col-auto">
                                <p>Document:</p>
                                <button class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-file mr-1"></i>
                                        <span>Browse</span>
                                </button>
                            </div>
                        <div class="col-sm-3">
                            <textarea class="form-control form-control-sm bg-warning border-0" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="" id="" cols="30" rows="10">
                            DEFAULT
                            </textarea>
                        </div>
                        <div class="form-row align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-angle-double-right"></i>
                        </div>
                        </div>
                        <div class="col-sm-3">
                            <textarea class="form-control form-control-sm bg-warning border-0" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        </div>
                        <br>
                        <div class="form-row align-items-center">
                                <label class="col-sm-3 text-right col-form-label col-form-label-sm mt-1">DEBIT AMT:</label>
                                <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm">
                                </div>
                                </div>
                                <br>
                        <div class="form-row align-items-center">
                                <label class="col-sm-3 text-right col-form-label col-form-label-sm mt-1">CREDIT AMT:</label>
                                <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm">
                                </div>
                                </div>
                                <br>
                                <div class="form-row align-items-center">
                                        <label class="col-sm-3 text-right col-form-label col-form-label-sm mt-1">Restriction Group:</label>
                                        <div class="col-sm-3">
                                                <textarea class="form-control form-control-sm bg-warning border-0" name="" id="" cols="30" rows="10">
                                                    DEFAULT
                                                </textarea>
                                            </div>
                                        </div>
                    </div>
                </div>                     
            </div>
        </div>
     </div>
     <div class="form-row justify-content-center">
            <div class="col-sm-auto my-2">
                <button class="btn btn-dark-blue btn-block p-3">
                    <i class="fa fa-save mr-1"></i>
                    <span>OK</span>
                </button>
            </div>
            <br>
            <div class="col-sm-auto my-2">
                <button class="btn btn-outline-dark-blue btn-block p-3">
                    <i class="fa fa-ban mr-1"></i>
                    <span>Cancel</span>
                </button>
            </div>
      </div>

  </div>
</template>