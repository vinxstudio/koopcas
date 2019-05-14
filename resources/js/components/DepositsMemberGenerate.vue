<template>
    <div class="memgenerate">
        <div class="form-row justify-content-center pt-3">
            <div class="col-sm-8">
                <div class="form-row">
                    <label class="col-sm-4 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Period Covered:</label>
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
                    <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Department:</label>
                    <div class="col my-1">
                        <select class="custom-select custom-select-sm" name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Transaction Date for Generated Transactions:</label>
                    <div class="col my-1">
                        <input class="form-control form-control-sm" type="date" name="">
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">DEBIT</label>
                    <div class="col">
                        <div class="form-row">
                            <div class="col-sm-3 my-1">
                                <input class="form-control form-control-sm" type="text" name="">
                            </div>
                            <div class="col my-1">
                                <input class="form-control form-control-sm bg-light-yellow border-0" type="text" name="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right">Credit PRIMARY (SL Must have Balance)</label>
                    <div class="col">
                        <div class="form-row">
                            <div class="col-sm-auto my-1">
                                <input class="form-control form-control-sm" type="text" name="">
                            </div>
                            <div class="col-sm-auto my-1">
                                <input class="form-control form-control-sm" type="text" name="">
                            </div>
                            <div class="col my-1">
                                <input class="form-control form-control-sm bg-light-yellow border-0" type="text" name="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right">Credit SECONDARY (If Primary Credit has no Balance or does not exist)</label>
                    <div class="col">
                        <div class="form-row">
                            <div class="col-sm-auto my-1">
                                <input class="form-control form-control-sm" type="text" name="">
                            </div>
                            <div class="col-sm-auto my-1">
                                <input class="form-control form-control-sm" type="text" name="">
                            </div>
                            <div class="col my-1">
                                <input class="form-control form-control-sm bg-light-yellow border-0" type="text" name="">
                            </div>
                        </div>
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
