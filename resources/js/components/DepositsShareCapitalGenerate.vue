<template>
    <div class="sharecapitalhgenerate">
        <div class="form-row justify-content-center pt-3">
            <div class="col-sm-6">
                <div class="form-row">
                    <label class="col-sm-3 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Period Covered:</label>
                    <div class="col my-1">
                        <div class="form-row align-items-center">
                            <div class="col">
                                <input class="form-control form-control-sm" type="date" name=""></div>
                            <span class="col-auto">-</span>
                            <div class="col">
                                <input class="form-control form-control-sm" type="date" name="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Cut Off Date of Loans Analysis:</label>
                    <div class="col my-1">
                        <input class="form-control form-control-sm" type="date" name="">
                    </div>
                </div>
                <div class="my-3">
                    <div class="custom-tabs tab-content-bg-light">
                        <ul role="tablist" class="nav nav-tabs nav-fill">
                            <li class="nav-item active">
                                <a class="nav-link active" href="#general" data-toggle="tab"  role="tab">General</a> 
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#clientinfo" data-toggle="tab"  role="tab">Client Info</a> 
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="general" class="tab-pane active">
                                <div class="form-row justify-content-between">
                                        <div class="col-12">
                                            <label class="col-form-label col-form-label-sm">Share Capital:</label>
                                        </div>
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
                            <div id="clientinfo" class="tab-pane">
                                <div class="form-row justify-content-between">
                                    <div class="form-row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-3 text-sm-right">
                        <p class="col-form-label col-form-label-sm mt-1">Share Capital Balance Range:</p>
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
                            <div class="col my-1">
                                <input type="number" class="form-control form-control-sm" name="">
                            </div>
                        </div>
                        <div class="form-row">
                            <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                            <div class="col my-1">
                                <input type="number" class="form-control form-control-sm" name="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-3 text-sm-right">
                        <p class="col-form-label col-form-label-sm mt-1">Average Share Capital Range:</p>
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
                            <div class="col my-1">
                                <input type="number" class="form-control form-control-sm" name="">
                            </div>
                        </div>
                        <div class="form-row">
                            <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                            <div class="col my-1">
                                <input type="number" class="form-control form-control-sm" name="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Total Average Share Capital</label>
                    <div class="col my-1">
                        <input class="form-control form-control-sm" type="text" name="" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Total Interest Paid</label>
                    <div class="col my-1">
                        <input class="form-control form-control-sm" type="text" name="" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="col-sm-auto my-2">
                <button class="btn btn-dark-blue btn-block p-3">
                    <i class="fa fa-key mr-1"></i>
                    <span>Generate</span>
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
</template>

<style>

.bg-light-yellow{
    background-color: #FFF9C4;
}

</style>
