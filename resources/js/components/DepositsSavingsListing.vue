<template>
    <div class="depositslisting">
        <div class="form-row justify-content-center pt-3">
            <div class="col">
                <div class="custom-tabs tab-content-bg-light">
                    <ul role="tablist" class="nav nav-tabs nav-fill">
                        <li class="nav-item active">
                            <a class="nav-link active" href="#basic" data-toggle="tab" role="tab">Basic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clientinfo" data-toggle="tab" role="tab">Client Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#advanced" data-toggle="tab" role="tab">Advanced</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="basic" class="tab-pane active">
                            <div class="form-row">
                                <div class="col mt-2">
                                    <div class="form-check form-check-sm">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label">Show Totals Only</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row align-items-end justify-content-center">
                                <div class="col-sm-3">
                                    <div class="form-row">
                                        <label class="col-form-label col-form-label-sm mt-1">CUT-OFF DATE:</label>
                                        <div class="col mt-1">
                                            <input type="date" class="form-control form-control-sm" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-row">
                                        <div class="col-12">
                                            <div class="form-check form-check-sm">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Balance Not ZERO</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" name="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Setup Dates</legend>
                                        <div class="form-row">
                                            <div class="col-sm-3 text-sm-right">
                                                <p class="col-form-label col-form-label-sm mt-1">Date Setup:</p>
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
                                                <p class="col-form-label col-form-label-sm mt-1">Last Transaction Date:</p>
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
                                <div class="col mt-2">
                                    <div class="form-check my-2">
                                        <input class="form-check-input" type="checkbox" value="" id="1">
                                        <label class="form-check-label" for="1">Group by SL Type</label>
                                    </div>
                                    <div class="form-check my-2">
                                        <input class="form-check-input" type="checkbox" value="" id="1">
                                        <label class="form-check-label" for="1">Group by Chapter</label>
                                    </div>
                                    <div class="form-check my-2">
                                        <input class="form-check-input" type="checkbox" value="" id="1">
                                        <label class="form-check-label" for="1">Group by School</label>
                                    </div>
                                    <div class="form-check my-2">
                                        <input class="form-check-input" type="checkbox" value="" id="1">
                                        <label class="form-check-label" for="1">Group by Class Section</label>
                                    </div>
                                    <div class="form-check my-2">
                                        <input class="form-check-input" type="checkbox" value="" id="1">
                                        <label class="form-check-label" for="1">Group by Gender</label>
                                    </div>
                                    <div class="form-check my-2">
                                        <input class="form-check-input" type="checkbox" value="" id="1">
                                        <label class="form-check-label" for="1">Group by Cliend ID</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-sm-10 p-3">
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
                                    <div class="form-row my-5">
                                        <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Status:</label>
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
                                        <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Chapter:</label>
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
                        <div id="advanced" class="tab-pane">
                            <div class="form-row justify-content-center">
                                <div class="col-sm-5">
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Remarks:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" type="text" name="">
                                        </div>
                                    </div>
                                    <div class="form-row my-5">
                                        <div class="col-sm-3 text-sm-right">
                                            <p class="col-form-label col-form-label-sm mt-1">Birthdate:</p>
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
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Age:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" type="number" name="">
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-center my-5">
                                        <div class="col-auto">
                                            <i class="fas fa-angle-double-right"></i>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Restriction:</label>
                                        <div class="col">
                                            <select class="custom-select custom-select-sm bg-light-yellow border-0" name="" id="" multiple="">
                                                <option value="1"></option>
                                                <option value="2"></option>
                                            </select>
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
        </div>
    </div>
</template>

<style>
.bg-light-yellow{
    background-color: #FFF9C4;
}

</style>
