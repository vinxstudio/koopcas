<template>
<div class="generate">
    <div class="row align-items-stretch p-3">
        <div class="col">
            <div class="form-row justify-content-center">
                <div class="col-sm-4">
                    <div class="form-row"><label class="col-form-label col-form-label-sm mt-1">CUT-OFF DATE:</label><div class="col my-1"><input class="form-control form-control-sm" formcontrolname="" name="" type="date"></div></div></div><div class="col-sm-4"><div class="form-row"><label class="col-form-label col-form-label-sm mt-1">Department</label><div class="col my-1"><select class="custom-select custom-select-sm" formcontrolname="department" id="" name="department"><option value="1">1</option><option value="2">2</option></select></div></div></div></div><div class="form-row justify-content-center"><div class="col-sm-10 p-3"><div class="form-row my-5"><label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Class:</label><div class="col"><div class="form-row align-items-center"><div class="col"><select class="custom-select custom-select-sm" formcontrolname="" id="" multiple="" name=""><option value="1">1</option><option value="2">2</option></select></div><div class="col-auto"><i class="fas fa-angle-double-right"></i></div><div class="col"><select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name=""><option value="1"></option><option value="2"></option></select></div></div></div></div><div class="form-row my-5"><label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Type:</label><div class="col"><div class="form-row align-items-center"><div class="col"><select class="custom-select custom-select-sm" formcontrolname="" id="" multiple="" name=""><option value="1">1</option><option value="2">2</option></select></div><div class="col-auto"><i class="fas fa-angle-double-right"></i></div><div class="col"><select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name=""><option value="1"></option><option value="2"></option></select></div></div></div></div></div></div><div class="form-row justify-content-center"><div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div><div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue bhg- btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div></div></div></div>
    </div>
</template>

<style>

.bg-light-yellow {
    background-color: #FFF9C4 !important;
}

.btn-dark-blue {
    color: #fff;
    background-color: #418cb3;
    border-color: #418cb3;
}



.generate {
        text-align: center;
        width: 100%;
        height: 100%;
        border: 1px solid #fff;
        padding-left: 15px;
        padding-right: 15px;
    }

</style>

