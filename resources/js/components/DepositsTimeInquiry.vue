<template>
    <div class="inquiry-time">
        <div class="form-row py-2">
            <div class="col">
                <fieldset class="border p-2 bg-light">
                <h5>Account Info</h5>

                <div class="form-row align-items-stretch">
                    <div class="col-md-7">

                    <!-- CLIENT ID -->
                    <div class="form-row justify-content-between">

                        <div class="col-sm-4 my-1">
                        <label for="clientId" class="col-form-label col-form-label-sm">Client ID:</label>
                        <input type="text" class="form-control form-control-sm bg-light-green border-0" name="clientId">
                        </div>

                        <fieldset class="col-sm-3 my-1 border pb-3 px-3 mx-1">
                        <legend for="rating" class="col-form-label col-form-label-sm w-auto px-1">RATING</legend>
                        <select class="custom-select custom-select-sm" name="rating">
                            <option value=""></option>
                        </select>
                        </fieldset>
                    </div>

                    <!-- NAME -->
                    <div class="form-row justify-content-between">
                        <div class="col-sm my-1">
                        <label for="lastName" class="col-form-label col-form-label-sm">Last Name</label>
                        <input type="text" class="form-control form-control-sm" name="lastName">
                        </div>

                        <div class="col-sm-auto d-none d-sm-block align-self-end">
                        <strong>,</strong>
                        </div>

                        <div class="col-sm my-1">
                        <label for="firstName" class="col-form-label col-form-label-sm">First Name</label>
                        <input type="text" class="form-control form-control-sm" name="firstName">
                        </div>

                        <div class="col-sm my-1">
                        <label for="middleName" class="col-form-label col-form-label-sm">Middle Name</label>
                        <input type="text" class="form-control form-control-sm" name="middleName">
                        </div>

                        <div class="col-sm-1 my-1">
                        <label for="suffix" class="col-form-label col-form-label-sm">Suffix</label>
                        <input type="text" class="form-control form-control-sm" name="suffix">
                        </div>
                    </div>

                    <!-- ORGANIZATION NAME -->
                    <div class="form-row mb-2 justify-content-between">
                        <fieldset class="col-sm my-1 border pb-3 px-3 mx-1">
                        <legend for="orgName" class="col-form-label col-form-label-sm w-auto px-1">Organization Name</legend>
                        <input type="text" class="form-control form-control-sm" name="orgName">
                        </fieldset>

                        <fieldset class="col-md-3 col-sm-4 my-1 border pb-3 px-3 mx-1">
                        <legend for="dateOpened" class="col-form-label col-form-label-sm w-auto px-1">Date Opened</legend>
                        <input type="date" class="form-control form-control-sm" name="dateOpened">
                        </fieldset>
                    </div>
                    </div>
                    <div class="col-md-5">

                    <!-- ACCT TYPE -->
                    <div class="form-row">
                        <label for="acctType" class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Acct Type:</label>
                        <div class="col-sm-6 my-1">
                        <input type="text" class="form-control form-control-sm" name="acctType">
                        </div>
                    </div>

                    <!-- JOINT TYPE -->
                    <div class="form-row">
                        <label for="jointType" class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Joint Type:</label>
                        <div class="col-sm-6 my-1">
                        <input type="text" class="form-control form-control-sm" name="jointType">
                        </div>
                    </div>

                    <!-- CLIENT TYPE -->
                    <div class="form-row">
                        <label for="clientType" class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Client Type:</label>
                        <div class="col-sm-6 my-1">
                        <input type="text" class="form-control form-control-sm" name="clientType">
                        </div>
                    </div>

                    <!-- ACCT STATUS -->
                    <div class="form-row">
                        <label for="acctStatus" class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Acct Status:</label>
                        <div class="col-sm-6 my-1">
                        <input type="text" class="form-control form-control-sm" name="acctStatus">
                        </div>
                    </div>
                    </div>
                </div>
                </fieldset>
            </div>
            </div>
            <div class="form-row mt-2">
            <div class="col-md-7 align-items-stretch">
                <ngb-tabset class="custom-tabs tab-content-bg-light" [justify]="'fill'">
                <ngb-tab>
                    <ng-template ngbTabTitle><span>Se<u>t</u>up</span></ng-template>
                    <ng-template ngbTabContent>
                    <div class="form-row justify-content-between">
                        <div class="col">
                        <div class="form-row">
                            <label for="depositType" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Deposit Type:</label>
                            <div class="col-sm my-1">
                            <select class="custom-select custom-select-sm" name="depositType">
                                <option value=""></option>
                            </select>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-row">
                            <label for="accountNum" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Account Number:</label>
                            <div class="col-sm my-1">
                            <input type="text" class="form-control form-control-sm bg-light-green border-0" name="accountNum">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-between">
                        <div class="col">
                        <div class="form-row">
                            <label for="dateOpened" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Date Opened:</label>
                            <div class="col-sm my-1">
                            <input type="date" class="form-control form-control-sm" name="dateOpened">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="status" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Status:</label>
                            <div class="col-sm my-1">
                            <select class="custom-select custom-select-sm" name="status">
                                <option value=""></option>
                            </select>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-row">
                            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Time Certificate Number:</label>
                            <div class="col-sm my-1">
                                                <input class="form-control form-control-sm" type="number" name="">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-between">
                        <div class="col align-self-end">
                        <!-- INTEREST RATE -->
                        <div class="form-row">
                            <label for="interestRate" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Interest Rate:</label>
                            <div class="col my-1">
                            <input type="text" class="form-control form-control-sm text-right" name="interestRate">
                            </div>
                            <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                        </div>
                        <div class="form-row">
                            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Term:</label>
                            <div class="col-sm my-1">
                                <div class="form-row">
                                    <div class="col-sm-3">
                                                        <input class="form-control form-control-sm" type="text" name="">
                                    </div>
                                    <div class="col">
                                                        <select class="custom-select custom-select-sm" name="" id="">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Maturity</label>
                            <div class="col-sm my-1">
                            <input type="text" class="form-control form-control-sm text-right bg-light-green border-0">
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-row">
                            <label for="totalBalance" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Total Balance:</label>
                            <div class="col-sm my-1">
                            <input type="text" class="form-control form-control-sm bg-light-pink border-0 text-right" name="totalBalance">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="floats" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Floats:</label>
                            <div class="col-sm my-1">
                            <input type="text" class="form-control form-control-sm bg-light-pink border-0 text-right" name="floats">
                            </div>
                        </div>
                        <!-- ENCUMBERED -->
                        <div class="form-row">
                            <label for="encumbered" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Encumbered:</label>
                            <div class="col-sm my-1">
                            <input type="text" class="form-control form-control-sm bg-light-pink border-0 text-right" name="encumbered">
                            </div>
                        </div>
                        <!-- AVAIL. BALANCE -->
                        <div class="form-row">
                            <label for="availBalance" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Avail. Balance:</label>
                            <div class="col-sm my-1">
                            <input type="text" class="form-control form-control-sm bg-light-pink border-0 text-right" name="availBalance">
                            </div>
                        </div>
                        </div>
                    </div>
                    </ng-template>
                </ngb-tab>
                </ngb-tabset>
            </div>
            <div class="col-md-5 align-items-stretch">
                <ngb-tabset class="custom-tabs tab-content-bg-light" [justify]="'fill'">
                <ngb-tab>
                    <ng-template ngbTabTitle><span><u>H</u>oldouts</span></ng-template>
                    <ng-template ngbTabContent>

                    <!-- AMOUNT HELD -->
                    <div class="form-row justify-content-between">

                        <div class="col-sm my-1">
                        <label for="clientId" class="col-form-label col-form-label-sm">Amount Held:</label>
                        <input type="text" class="form-control form-control-sm" name="clientId">
                        </div>

                        <div class="col-sm my-1">
                        <label for="reason" class="col-form-label col-form-label-sm">Reason for Hold-out:</label>
                        <select class="custom-select custom-select-sm" name="reason">
                            <option value=""></option>
                        </select>
                        </div>
                    </div>

                    <div class="form-row justify-content-center mt-5 mb-2">
                        <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
                        <i class="fa fa-plus mr-1"></i><span>Add</span>
                        </button>
                        <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
                        <i class="fa fa-pencil-alt mr-1"></i><span>Update</span>
                        </button>
                        <button class="btn btn-sm btn-outline-primary" type="button">
                        <i class="fa fa-ban mr-1"></i><span>Clear</span>
                        </button>
                    </div>

                    <div class="bg-dark">
                        <table class="table table-sm table-bordered custom-table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">BR</th>
                            <th scope="col">Held Amount</th>
                            <th scope="col">Reason for Hold-out</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>30</td>
                            <td>test</td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>30</td>
                            <td>test</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </ng-template>
                </ngb-tab>
                <ngb-tab>
                    <ng-template ngbTabTitle><span><u>R</u>emarks</span></ng-template>
                    <ng-template ngbTabContent>
                    <textarea class="form-control form-control-sm" name="" id="" cols="30" rows="10"></textarea>
                    </ng-template>
                </ngb-tab>
                        <ngb-tab>
                            <ng-template ngbTabTitle><span>Rollover</span></ng-template>
                            <ng-template ngbTabContent>
                                <!-- INSERT ADVANCED FORM HERE -->
                            </ng-template>
                        </ngb-tab>
                </ngb-tabset>
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