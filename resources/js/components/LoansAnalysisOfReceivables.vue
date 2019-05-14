<template>
    <div class="receivables">
        <div class="form-row align-items-stretch p-3">
	        <div class="col">
                <div class="custom-tabs tab-content-bg-light">
                <ul role="tablist" class="nav nav-tabs nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="#basic" data-toggle="tab"  role="tab">Basic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#clientinfo" data-toggle="tab">Client Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#setupdata" data-toggle="tab">Setup Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#advanced" data-toggle="tab">Advanced</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#groupings" data-toggle="tab">Groupings</a>
                </li>
                </ul>
                <div class="tab-content">
                    <div id="basic" class="tab-pane active">
                        <div class="form-row">
                            <div class="col-sm-5">
                                <div class="form-row">
                                    <div class="col mt-2">
                                        <div class="form-check form-check-sm">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">Show Totals Only</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-row">
                                            <label class="col-form-label col-form-label-sm mt-1">CUT-OFF DATE:</label>
                                            <div class="col my-1">
                                                <input type="date" class="form-control form-control-sm" name="">
                                            </div>
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
                                    <div class="form-row">
                                        <div class="col-sm-3 text-sm-right">
                                            <p class="col-form-label col-form-label-sm mt-1">Maturity Date:</p>
                                        </div>
                                        <div class="col">
                                            <div class="form-row">
                                                <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
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
                                </fieldset>
                                <fieldset class="my-1 border pb-3 px-3 mx-1">
                                    <div class="form-row">
                                        <div class="col-sm-3 text-sm-right">
                                            <p class="col-form-label col-form-label-sm mt-1">Last Trans Date:</p>
                                        </div>
                                        <div class="col">
                                            <div class="form-row">
                                                <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
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
                                </fieldset>
                            </div>
                            <div class="col">
                                <div class="custom-tabs tab-content-bg-light">
                                    <ul role="tablist" class="nav nav-tabs nav-fill">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#numberfilters" data-toggle="tab"  role="tab">Number Filters</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#grouping" data-toggle="tab"  role="tab">Grouping</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sorting" data-toggle="tab"  role="tab">Sorting</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="numberfilters" class="tab-pane active">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-row mt-1">
                                                    <div class="col-12 my-1">
                                                        <div class="form-check form-check-sm">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label">Balance Not ZERO</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-control-sm" name="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label class="col-form-label col-form-label-sm">Principal Amount:</label>
                                                        <input class="form-control form-control-sm" type="text" name="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label class="col-form-label col-form-label-sm">Deposits Amount:</label>
                                                        <input class="form-control form-control-sm" type="text" name="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label class="col-form-label col-form-label-sm">Share Capital Amount:</label>
                                                        <input class="form-control form-control-sm" type="text" name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label class="col-form-label col-form-label-sm">Number of Delayed Installments:</label>
                                                        <input class="form-control form-control-sm" type="text" name="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">                                                                
                                                        <label class="col-form-label col-form-label-sm">Number of Months Delayed:</label>
                                                        <input class="form-control form-control-sm" type="text" name="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label class="col-form-label col-form-label-sm">Principal Due:</label>
                                                        <input class="form-control form-control-sm" type="text" name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="grouping" class="tab-pane">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="1">
                                                    <label class="form-check-label" for="1">Group by SL CLASS</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                                    <label class="form-check-label" for="2">Group by Gender</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="3">
                                                    <label class="form-check-label" for="3">Group by Loan Class</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="4">
                                                    <label class="form-check-label" for="4">Group by Loan Purpose</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="5">
                                                    <label class="form-check-label" for="5">Group by Geographical</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="6">
                                                    <label class="form-check-label" for="6">Group by SL STATUS</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="7">
                                                    <label class="form-check-label" for="7">Group by Cluster</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="8">
                                                    <label class="form-check-label" for="8">Group by CI</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="9">
                                                    <label class="form-check-label" for="9">Group by Security</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="10">
                                                    <label class="form-check-label" for="10">Group by Geo Sub Group</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="11">
                                                    <label class="form-check-label" for="11">Group by Employer Code</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="12">
                                                    <label class="form-check-label" for="12">Group by Pay Mode</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="13">
                                                    <label class="form-check-label" for="13">Group by Account Status</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="14">
                                                    <label class="form-check-label" for="14">Group by SL Type</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="15">
                                                    <label class="form-check-label" for="15">Group by Client ID</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="16">
                                                    <label class="form-check-label" for="16">Group by Transaction Type</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="17">
                                                    <label class="form-check-label" for="17">Group by INdustry Section</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="18">
                                                    <label class="form-check-label" for="18">Group by Bank</label>
                                                </div>
                                                <div class="form-check my-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="19">
                                                    <label class="form-check-label" for="19">Group by Collector</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col my-1">
                                                <input class="form-control form-control-sm" type="text">
                                            </div>
                                            <div class="col my-1">
                                                <input class="form-control form-control-sm" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="sorting" class="tab-pane">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-row align-items-center">
                                                    <div class="col">
                                                        <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                        <div class="col-auto">
                                                        <i class="fas fa-angle-double-right"></i>
                                                    </div>
                                                    <div class="col">
                                                        <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                            <option value="1"></option>
                                                            <option value="2"></option>
                                                        </select>
                                                    </div>
                                                </div>
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
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                    <option value="1"></option>
                                                    <option value="2"></option>
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
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                    <option value="1"></option>
                                                    <option value="2"></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-end">
                            <div class="col-auto">
                                <div class="form-check form-check-sm">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label">Wide Version</label>
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
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i>
                                    <span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="clientinfo" class="tab-pane">
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
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
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
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
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
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
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
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
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
                                        <textarea class="form-control form-control-sm bg-light-yellow border-0" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-sm-auto my-2 my-sm-0">
                                        <button class="btn btn-sm btn-block btn-outline-primary">
                                            <i class="fa fa-file mr-1"></i>
                                            <span>Browse</span>
                                        </button>
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
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i>
                                    <span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="setupdata" class="tab-pane">
                        <div class="form-row justify-content-center">
                            <div class="col-sm-10 p-3">
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Principal Payment Mode:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">Daily</option>
                                                    <option value="2">Every nP</option>
                                                    <option value="3">Lumpsum</option>
                                                    <option value="4">Monthly</option>
                                                    <option value="5">Quarterly</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                    <option value="1"></option>
                                                    <option value="2"></option>
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
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">Daily</option>
                                                    <option value="2">Every nP</option>
                                                    <option value="3">Lumpsum</option>
                                                    <option value="4">Monthly</option>
                                                    <option value="5">Quarterly</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                    <option value="1"></option>
                                                    <option value="2"></option>
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
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">Annuity</option>
                                                    <option value="2">Diminishing Balance</option>
                                                    <option value="3">Straight Line</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
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
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-dark-blue btn-block p-3">
                                    <i class="fa fa-save mr-1"></i>
                                    <span>OK</span>
                                </button>
                            </div>
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i>
                                    <span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="advanced" class="tab-pane">
                        <div class="form-row justify-content-center">
                            <div class="col-sm-10 p-3">
                                <div class="form-row">
                                    <div class="col-sm-3 text-sm-right">
                                        <p class="col-form-label col-form-label-sm mt-1">Match Amortization Schedule Due Dates:</p>
                                    </div>
                                    <div class="col">
                                        <div class="form-row">
                                            <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
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
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm">SL Status:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">Current</option>
                                                    <option value="2">In Litigation</option>
                                                    <option value="3">Mediated</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                    <option value="1"></option>
                                                    <option value="2"></option>
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
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">Advance Payment</option>
                                                    <option value="2">Delinquent</option>
                                                    <option value="3">Over-Paid</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                    <option value="1"></option>
                                                    <option value="2"></option>
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
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">Directors</option>
                                                    <option value="2">Officers</option>
                                                    <option value="3">Related Interests</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
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
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-dark-blue btn-block p-3">
                                    <i class="fa fa-save mr-1"></i>
                                    <span>OK</span>
                                </button>
                            </div>
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i>
                                    <span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="groupings" class="tab-pane">
                        <div class="form-row justify-content-center">
                            <div class="col-sm-10 p-3">
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Geographical:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">Alcantara</option>
                                                    <option value="2">Alegria</option>
                                                    <option value="3">Badian</option>
                                                    <option value="4">Ceylabco</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                    <option value="1"></option>
                                                    <option value="2"></option>
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
                                                <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                    <option value="1">N/A</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
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
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Restriction Group</label>
                                    <div class="col">
                                        <textarea class="form-control form-control-sm bg-light-yellow border-0" name="" id="" cols="30" rows="10"></textarea>
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
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i>
                                    <span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>      
                </div>
                </div>
	        </div>
        </div>
    </div>
</template>

<style>

.custom-tab > .nav-tabs {
  background-color:#418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link.active {
  color: #fff; 
  background-color:#418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link {
  color: #fff; 
  background-color:#418cb3;
  border: 0;
}

</style>