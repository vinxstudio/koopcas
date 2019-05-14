<template>
    <div class="dividendpatronagecompute">
        <div class="form-row justify-content-center pt-3">
            <div class="col-sm-6">
                <h4>Allocation of Interest on Share Capital and Patronage Refund</h4>
                <hr>
                <div class="form-row">
                    <label class="col-sm-3 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Interest on Share Capital:</label>
                    <div class="col my-1">
                        <input class="form-control form-control-sm bg-light-yellow border-0" type="text" name="">
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-3 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Patronage Refund on Interest Paid:</label>
                    <div class="col my-1">
                        <input class="form-control form-control-sm" type="text" name="">
                    </div>
                </div>
                <hr>
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
                <hr>
                <h4>Allocation of Interest on Share Capital and Patronage Refund</h4>
                <hr>
                <div class="form-row">
                    <label class="col-sm-3 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Interest on Share Capital:</label>
                    <div class="col my-1">
                        <input class="form-control form-control-sm bg-transparent" type="text" name="" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-sm-3 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">Patronage Refund on Interest Paid:</label>
                    <div class="col my-1">
                        <input class="form-control form-control-sm bg-transparent" type="text" name="" disabled>
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
.bg-light-green{
    background-color: #20c997 !important;
}

.bg-light-blue{
    background-color: #6dcff6 !important;
}

.bg-light-pink{
    background-color: #ef80ff !important;
}

.bg-light-yellow{
    background-color: #FFF9C4 !important;
}
</style>
