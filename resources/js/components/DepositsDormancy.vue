<template>
    <div class="dormancy">
        <div class="form-row justify-content-around py-3">
            <div class="col-sm-3">
                <div class="form-row">
                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Cut Off Date:</label>
                    <div class="col my-1">
                                <input type="date" class="form-control form-control-sm bg-date border-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-stretch">
            <div class="col">
                <div class="custom-tabs tab-content-bg-light">
                    <ul role="tablist" class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="#parameters" data-toggle="tab"  role="tab">Parameters</a>
                    </li>
                    </ul>
                    <div class="tab-content">
                        <div id="parameters" class="tab-pane active">
                            <table class="table table-sm table-bordered custom-table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Account Type</th>
                                        <th scope="col">Months</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Test</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Test</td>
                                    </tr>
                                </tbody>
                            </table>
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
.bg-date{
    background-color: #FFF9C4;    
}

</style>
