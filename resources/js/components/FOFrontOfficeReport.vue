<template>
    <div class="frontofficereport">
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
                <h3 clas="h3">REPORT</h3>
                <div class="col">
                        <select type="text" class="col-auto form-control form-control-sm" name="">
                            <option value=""></option>
                        </select>
                    </div>
                    <br>
                    <br>
                        <div class="form-row justify-content-center">
                    <label class="col-auto text-truncate">Cashier/Teller Username:</label>
                    <input type="text" class="col-md-3 text-truncate form-control form-control-sm" name="">
                    </div>
                    <br>
                    <div class="form-row justify-content-center">
                        <label class="col-auto text-truncate">Trans. Date:</label>
                        <input type="date" class="col-md-3 form-control form-control-sm" name="">
                    </div>
                    <br>
                    <div class="form-row justify-content-center">
                            <label class="col-auto text-truncate">Trans. Time:</label>
                            <input type="time" class="col-md-2 form-control" name="">
                            <div class="col-auto justify-content-center">
                                    <i align="center" class="fa fa-minus"></i>
                            </div>
                        <input type="time" class="col-md-2 form-control" name="">
                        </div>
                        <br>
                        <br>
                        <div class="form-row justify-content-center">
                                <div class="col-auto">
                                <button class="btn btn-sm justify-content-center btn-outline-primary mr-1">
                                    <i class="fa fa-key mr-1"></i><span><u>O</u>k</span>
                                </button>
                                <button class="btn btn-sm justify-content-center btn-outline-primary mr-1">
                                    <i class="fa fa-times-circle mr-1"></i><span><u>C</u>ancel</span>
                                </button>
                                </div>
                            </div>
            </fieldset>
            </div>
        </div>

    </div>
</template>

<style>
.frontofficereport {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>

