<template>
    <div class="clearingacutility">
        <nav class="navbar navbar-expand-lg p-0" id="toolbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
                </li>
            </ul>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <fieldset class="border p-4 bg-light">
                    <div class="form-row">
                        <label class="col-form-label col-form-label-sm mt-1">CUT-OFF DATE :</label>
                        <div class="col-md-3">
                            <input type="date" class="form-control form-control-sm" name="dateOpened" formControlName="dateOpened">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <label class="col-form-label col-form-label-sm mt-1">Transaction Type :</label>
                        <div class="col-sm-5 my-1">
                            <select class="custom-select custom-select-sm" name="transType">
                            <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Option</legend>
                        <label class="col-form-label col-form-label-sm mt-1">Client ID</label>
                        <div class="form-row">
                        <textarea class="col-md-10 form-control"></textarea>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                <a class="btn btn-sm btn-outline-primary mr-4">
                                <i class="fa fa-search mr-1"></i><span>Browse</span>
                            </a>
                            </li>
                        </ul>
                        </div>
                    </fieldset>
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                            <a class="btn btn-sm btn-outline-primary mr-4">
                            <i class="fa fa-check mr-1"></i><span>Ok</span>
                        </a>
                        <a class="btn btn-sm btn-outline-primary mr-4">
                                <i class="fa fa-times-circle mr-1"></i><span>Cancel</span>
                            </a>
                        </li>
                    </ul>
                </fieldset>
            </div>
        </div>

    </div>
</template>

<style>
.clearingacutility {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>
