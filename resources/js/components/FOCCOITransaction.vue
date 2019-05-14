<template>
    <div class="ccoitransaction">
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
                <div class="form-row justify-content-center">
                <label for="transType" class="col-md-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Trans. Type:</label>
                <div class="col my-1">
                    <select class="col-md-5 custom-select custom-select-sm" name="transType">
                        <option value=""></option>
                    </select>
                </div>
                </div>
                <br>
                <div class="form-row">
                <label class="col-md-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Trans. Year:</label>
                <input type="date" class="col-md-3 form-control form-control-sm" name="">
                </div>
                <br>
                <label class="text-sm-right text-truncate">CHECK NUMBER</label>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" name="">
                </div>
                <br>
                <div class="row justify-content-center">
                <div class="col my-1 align-items-end justify-content-end">
                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Dates</legend>
                        <div class="form-row text-center">
                            <label class="col-md-6 text-center">FROM</label>
                            <label class="col-md-6 text-center">TO</label>
                        </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="date" class="col-md-12 form-control form-control-sm" name="">
                                </div>
                                <div class="col">
                                    <input type="date" class="col-md-12 form-control form-control-sm" name="">
                                </div>
                            </div>
                    </fieldset>
                    </div>
                </div>
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

<script>
export default {
    data() {
        return {
            cocitransaction: {
                trYear: "",
                trDocNo: "",
                trDate: moment(new Date).format('YYYY-MM-DD'),
            },

            slClass: "",
            
        }
    }
}
</script>

<style >
.ccoitransaction {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>