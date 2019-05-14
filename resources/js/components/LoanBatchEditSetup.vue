<template>
    <div class="loan-batch-edit">
        <form @submit.prevent="filterGenerate">
        <div class="form-row align-items-stretch p-3">
            <div class="col custom-tabs">
                <ul role="tablist" class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#basic" role="tab">Basic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#clientinfo" role="tab">Client Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#setupdata" role="tab">Setup Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#advance" role="tab">Advanced</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="basic">
                        <div class="form-row align-items-end justify-content-center">
                            <div class="col-sm-3">
                                <div class="form-row">
                                    <label class="col-form-label col-form-label-sm mt-1">CUT-OFF DATE:</label>
                                    <div class="col mt-1">
                                        <input class="form-control form-control-sm" name="" type="date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-check form-check-sm">
                                            <input class="form-check-input" type="checkbox" v-model="checkBalance">
                                            <label class="form-check-label">Balance Not ZERO</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input class="form-control form-control-sm" v-model="checkBalanceInput" name="" type="text" data-toggle="tooltip" data-placement="bottom" title="">
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
                                            <p class="col-form-label col-form-label-sm mt-1">Date Released:</p>
                                        </div>
                                        <div class="col">
                                            <div class="form-row">
                                                <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
                                                <div class="col my-1">
                                                    <input class="form-control form-control-sm" name="" type="date" v-model="loanDTFrom">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                                                <div class="col my-1">
                                                    <input class="form-control form-control-sm" name="" type="date" v-model="loanDTTo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-3 text-sm-right">
                                            <p class="col-form-label col-form-label-sm mt-1">Maturity Date:</p>
                                        </div>
                                        <div class="col">
                                            <div class="form-row">
                                                <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
                                                <div class="col my-1">
                                                    <input class="form-control form-control-sm" name="" type="date">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                                                <div class="col my-1">
                                                    <input class="form-control form-control-sm" name="" type="date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col">
                                <fieldset class="my-1 border pb-3 px-3 mx-1">
                                    <legend class="col-form-label col-form-label-sm mt-1 w-auto px-1" for="dateOpened">Edit Loan Setup</legend>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-row">
                                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                                    <strong>Interest:</strong>
                                                </label>
                                                <div class="col my-1">
                                                    <input class="form-control form-control-sm" name="" type="number" v-model="interestInput" required>
                                                </div>
                                                <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Based On:</label>
                                                <div class="col my-1">
                                                    <select class="custom-select custom-select-sm" id="" v-model="batchedit.loanAmorType" name="loanAmorType" required>
                                                        <option disabled>(select one)</option>
                                                        <option @click="checkAmort(loanLoanAmorType.amorTypeId)" v-for="loanLoanAmorType in loanLoanAmorTypes" v-bind:key="loanLoanAmorType.id" :value="loanLoanAmorType.amorTypeId">{{ loanLoanAmorType.amorTypeDesc }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Diminish:</label>
                                                <div class="col my-1">
                                                    <select class="custom-select custom-select-sm" id="" v-model="batchedit.loanDimbFreq" name="loanDimbFreq" :required="selectRequired">
                                                        <option disabled>(select one)</option>
                                                        <option v-for="loanLoanDimFreq in loanLoanDimFreqs" v-bind:key="loanLoanDimFreq.id" :value="loanLoanDimFreq.dimFreqId">{{ loanLoanDimFreq.dimFreqDesc }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Payment Mode:</label>
                                                <div class="col">
                                                    <div class="form-row">
                                                        <div class="col my-1">
                                                            <select class="custom-select custom-select-sm" id="" v-model="batchedit.loanIpmtMode" name="loanIpmtMode" required>
                                                                <option disabled>(select one)</option>
                                                                <option v-for="loanLoanPaymentMode in loanLoanPaymentModes" v-bind:key="loanLoanPaymentMode.id" :value="loanLoanPaymentMode.paymentModeId">{{ loanLoanPaymentMode.paymentModeDesc }}</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2 my-1">
                                                            <input class="form-control form-control-sm" name="" type="text">
                                                        </div>
                                                        <div class="col my-1">
                                                            <select class="custom-select custom-select-sm" id="" v-model="batchedit.loanTermPerd" name="loanTermPerd">
                                                                <option disabled>(select one)</option>
                                                                <option v-for="loanLoanTermPerd in loanLoanTermPerds" v-bind:key="loanLoanTermPerd.id" :value="loanLoanTermPerd.termId">{{ loanLoanTermPerd.termDesc }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-sm-10 p-3">
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Class:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.loanslClass" name="slClass">
                                                    <option @click="filterSLC(index,loanSlClass)" v-for="(loanSlClass,index) in loanSlClasses" v-bind:key="loanSlClass.id" :value="loanSlClass.slClassId">{{ loanSlClass.slClassDesc }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="" v-show="loanSlCFilters" >
                                                    <option @click="reverseFilterSLC(index,loanSlCFilter)" v-for="(loanSlCFilter,index) in loanSlCFilters" v-bind:key="loanSlCFilter.slcid" :value="loanSlCFilter.slClassId">{{loanSlCFilter.slClassDesc}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Type:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.loanslType" name="slType">
                                                    <!-- <option value="1">1</option> -->
                                                    <option @click="filterSelect(loanSlTFilters,loanSlTypes,index,loanSlType)" v-for="(loanSlType,index) in loanSlTypes" v-bind:key="loanSlType.id" :value="loanSlType.slTypeSltCode">{{loanSlType.slTypeSlcCode}}-{{ loanSlType.slTypeMDesc }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="" v-if="this.loanSlTFilters">
                                                    <option @click="reverseFilter(loanSlTypes,loanSlTFilters,index,loanSlTFilter)" v-for="(loanSlTFilter,index) in loanSlTFilters" v-bind:key="loanSlTFilter.sltid" :value="loanSlTFilter.slTypeSltCode">{{loanSlTFilter.slTypeSlcCode}}-{{loanSlTFilter.slTypeMDesc}}</option>
                                                </select>
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="" v-else>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-dark-blue btn-block p-3" type="submit">
                                    <i class="fa fa-save mr-1"></i><span>OK</span>
                                </button>
                            </div>
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i><span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="clientinfo">
                        <div class="form-row justify-content-center">
                            <div class="col-sm-10 p-3">
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client Type:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.clientTypes" name="clientTypes">
                                                    <option @click="filterSelect(clientFilters,clientClientTypes,index,clientClientType)" v-for="(clientClientType,index) in clientClientTypes" v-bind:key="clientClientType.id" :value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(clientClientTypes,clientFilters,index,clientFilter)" v-for="(clientFilter,index) in clientFilters" v-bind:key="clientFilter.cltid" :value="clientFilter.clientTypeId">{{clientFilter.clientTypeDesc}}</option>
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
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.gender" name="gender">
                                                    <option @click="filterSelect(genderFilters,clientGenders,index,clientGender)" v-for="(clientGender,index) in clientGenders" v-bind:key="clientGender.id" :value="clientGender.genderId">{{ clientGender.genderDesc }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(clientGenders,genderFilters,index,genderFilter)" v-for="(genderFilter,index) in genderFilters" v-bind:key="genderFilter.gId" :value="genderFilter.genderId">{{genderFilter.genderDesc}}</option>
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
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.civilStatus" name="civilStatus">
                                                    <option @click="filterSelect(civilStatusFilters,clientCivilStatuses,index,clientCivilStatus)" v-for="(clientCivilStatus,index) in clientCivilStatuses" v-bind:key="clientCivilStatus.id" :value="clientCivilStatus.civilStatId">{{ clientCivilStatus.civilStatDesc }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(clientCivilStatuses,civilStatusFilters,index,civilStatusFilter)" v-for="(civilStatusFilter,index) in civilStatusFilters" v-bind:key="civilStatusFilter.csid" :value="civilStatusFilter.civilStatId">{{civilStatusFilter.civilStatDesc}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Alert Level:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.alertLevel" name="alertLevel">
                                                    <option @click="filterSelect(chapterFilters,clientChapters,index,clientChapter)" v-for="(clientChapter,index) in clientChapters" v-bind:key="clientChapter.id" :value="clientChapter.geoId">{{ clientChapter.geoDesc }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(clientChapters,chapterFilters,index,chapterFilter)" v-for="(chapterFilter,index) in chapterFilters" v-bind:key="chapterFilter.id" :value="chapterFilter.geoId">{{chapterFilter.geoDesc}}</option>
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
                                        <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                            <option v-for="clientIdFilter in clientIdFilters" v-bind:key="clientIdFilter.id" :value="clientIdFilter.clientId">{{clientIdFilter.firstName}},{{clientIdFilter.lastName}}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-auto my-2 my-sm-0">
                                        <button class="btn btn-sm btn-block btn-outline-primary" type="button" data-toggle="modal" data-target="#browseClient">
                                            <i class="fa fa-file mr-1"></i><span>Browse</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-dark-blue btn-block p-3">
                                    <i class="fa fa-save mr-1"></i><span>OK</span>
                                </button>
                            </div>
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i><span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="setupdata">
                        <div class="form-row justify-content-center">
                            <div class="col-sm-10 p-3">
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Principal Payment Mode:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                                    <option @click="filterSelect(principalFilters,loanLoanPrinPaymentModes,index,loanLoanPrinPaymentMode)" v-for="(loanLoanPrinPaymentMode,index) in loanLoanPrinPaymentModes" v-bind:key="loanLoanPrinPaymentMode.id" :value="loanLoanPrinPaymentMode.paymentModeId">{{loanLoanPrinPaymentMode.paymentModeDesc}}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(loanLoanPrinPaymentModes,principalFilters,index,principalFilter)" v-for="(principalFilter,index) in principalFilters" v-bind:key="principalFilter.pId" :value="principalFilter.paymentModeId">{{principalFilter.paymentModeDesc}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Interest Payment Mode:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                                    <option @click="filterSelect(interestFilters,loanLoanIntPaymentModes,index,loanLoanIntPaymentMode)" v-for="(loanLoanIntPaymentMode,index) in loanLoanIntPaymentModes" v-bind:key="loanLoanIntPaymentMode.id" :value="loanLoanIntPaymentMode.paymentModeId">{{loanLoanIntPaymentMode.paymentModeDesc}}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(loanLoanIntPaymentModes,interestFilters,index,interestFilter)" v-for="(interestFilter,index) in interestFilters" v-bind:key="interestFilter.iId" :value="interestFilter.paymentModeId">{{interestFilter.paymentModeDesc}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Amortization Type:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.amorTypes" name="amorTypes">
                                                    <option @click="filterSelect(amortFilters,loanLoanAmorTypeSetUps,index,loanLoanAmorTypeSetUp)" v-for="(loanLoanAmorTypeSetUp,index) in loanLoanAmorTypeSetUps" v-bind:key="loanLoanAmorTypeSetUp.id" :value="loanLoanAmorTypeSetUp.amorTypeId">{{ loanLoanAmorTypeSetUp.amorTypeDesc }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(loanLoanAmorTypeSetUps,amortFilters,index,amortFilter)" v-for="(amortFilter,index) in amortFilters" v-bind:key="amortFilter.aId" :value="amortFilter.amorTypeId">{{amortFilter.amorTypeDesc}}</option>
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
                                    <i class="fa fa-save mr-1"></i><span>OK</span>
                                </button>
                            </div>
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i><span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="advance">
                        <div class="form-row justify-content-center">
                            <div class="col-sm-10 p-3">
                                <div class="form-row">
                                    <div class="col-sm-3 text-sm-right">
                                        <p class="col-form-label col-form-label-sm mt-1">Match Amortization Schedule Due Dates:</p>
                                    </div>
                                    <div class="col">
                                        <div class="form-row">
                                            <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
                                            <div class="col my-1">
                                                <input class="form-control form-control-sm" name="" type="date" v-model="loanAmortDFrom">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                                            <div class="col my-1">
                                                <input class="form-control form-control-sm" name="" type="date" v-model="loanAmortDTo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm">SL Status:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                                    <option @click="filterSelect(slStatusFilters,loanSLStatuses,index,loanSLStatus)" v-for="(loanSLStatus,index) in loanSLStatuses" v-bind:key="loanSLStatus.id" :value="loanSLStatus.ctsTypeCode">{{loanSLStatus.ctsTypeDesc}}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(loanSLStatuses,slStatusFilters,index,slStatusFilter)" v-for="(slStatusFilter,index) in slStatusFilters" v-bind:key="slStatusFilter.sfId" :value="slStatusFilter.ctsTypeCode">{{slStatusFilter.ctsTypeDesc}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm">Account Status:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.accountStatus" name="accountStatus">
                                                    <option @click="filterSelect(accStatusFilters,loanAccountStatuses,index,loanAccountStatus)" v-for="(loanAccountStatus,index) in loanAccountStatuses" v-bind:key="loanAccountStatus.id" :value="loanAccountStatus.code">{{ loanAccountStatus.descr }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(loanAccountStatuses,accStatusFilters,index,accStatusFilter)" v-for="(accStatusFilter,index) in accStatusFilters" v-bind:key="accStatusFilter.asId" :value="accStatusFilter.code">{{accStatusFilter.descr}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row my-5">
                                    <label class="col-sm-1 col-form-label col-form-label-sm">DOSRI Tag:</label>
                                    <div class="col">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm" id="" multiple="" v-model="batchedit.dosriTag" name="dosriTag">
                                                    <option @click="filterSelect(dosriFilters,clientDosriTags,index,clientDosriTag)" v-for="(clientDosriTag,index) in clientDosriTags" v-bind:key="clientDosriTag.idTag" :value="clientDosriTag.id">{{ clientDosriTag.desc1 }}</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-angle-double-right"></i>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                                    <option @click="reverseFilter(clientDosriTags,dosriFilters,index,dosriFilter)" v-for="(dosriFilter,index) in dosriFilters" v-bind:key="dosriFilter.dId" :value="dosriFilter.id">{{dosriFilter.desc1}}</option>
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
                                    <i class="fa fa-save mr-1"></i><span>OK</span>
                                </button>
                            </div>
                            <div class="col-sm-auto my-2">
                                <button class="btn btn-outline-dark-blue btn-block p-3">
                                    <i class="fa fa-ban mr-1"></i><span>Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        
        <!--BROWSE CLIENT MODAL-->
        <div class="modal" id="browseClient">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Client List Filter</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-row mt-1">
                            <label class="form-label form-label-sm mb-1" for="clientId">Client ID:</label>
                            <input class="form-control form-control-sm" name="clientId" id="clientId" v-model="clientIdInput">
                        </div>
            
                        <div class="form-row mt-1">
                            <label class="form-label form-label-sm mb-1" for="clientName">Client Name:</label>
                            <input class="form-control form-control-sm" name="clientName" id="clientName" v-model="clientNameInput">
                        </div>

                        <div class="form-row m-3">
                            <div class="col-sm-12">
                                <center>
                                    <div>
                                        <button class="btn btn-outline-primary col-sm-4 m-1" type="button" data-toggle="modal" data-target="#clientList" @click="searchClient" data-dismiss="modal">GO</button>
                                        <button class="btn btn-outline-primary col-sm-4 m-1" type="button" data-dismiss="modal">CANCEL</button>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF BROWSE CLIENT  MODAL-->
    
        <!-- CLIENT LIST MODAL -->
        <div class="modal fade" id="clientList" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
      
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Client List Filter</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-sm table-bordered table-hover custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">B</th>
                                    <th scope="col">Client ID</th>
                                    <th scope="col">K</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Client Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Organization Name</th>
                                    <th scope="col">Old ClientID</th>
                                    <th scope="col">Select Client</tH>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="client in clients" v-bind:key="client.clientId">
                                    <td>{{ client.brCode }}</td>
                                    <td>{{ client.clientId }}</td>
                                    <td>{{ client.chkDgt }}</td>
                                    <td>{{ client.lastName }}, {{ client.firstName }}</td>
                                    <td>{{ client.middleName }}</td>
                                    <td>{{ client.clientTypeName }}</td>
                                    <td>{{ client.accountStatusName }}</td>
                                    <td>{{ client.accountName }}</td>
                                    <td>{{ client.referenceId }}</td>
                                    <td><button class="btn btn-link" type="button" data-dismiss="modal" @click="filterClient(client)">View Client</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF CLIENT LIST MODAL-->

</form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            batchedit: {
                trBrCode: 18,
                tdSlcCode: 13,
                tdSltCode: 6,
                tdRefNo: 1,
                clientIdTd: 4505,
                tdTrDate: '',
                tdStatus: '',
                loanAmorType: '',
                loanDimbFreq: '',
                loanIpmtMode: '',
                loanslClass: [],
                loanslType: [],
                clientTypes: [],
                gender: [],
                civilStatus: [],
                alertLevel: [],
                amorTypes: [],
                accountStatus: [],
                dosriTag: [],
            },

            checkBalance:"",
            checkBalanceInput:"",
            interestInput:"",
            clientIdInput:"",
            clientNameInput:"",
            loanDTFrom:"",
            loanDTTo:"",
            loanMATFrom:"",
            loanMATTo:"",
            loanAmortDFrom:"",
            loanAmortDTo:"",

            AddressStatementBusiness:"",
AddressStatementHome:"",
WHEREClause:"",
HavingClause:"",
ReportTypeofBalance:"",
SLC_CODEFilter:"",
FS:"",
WHEREClauseGeneral:"",
WHEREClauseClient:"",

            loanLoanAmorTypes: [],
            loanLoanAmorTypeSetUps: [],
            loanLoanDimFreqs: [],
            loanLoanPaymentModes: [],
            loanLoanPrinPaymentModes: [],
            loanLoanIntPaymentModes: [],
            loanLoanTermPerds: [],
            loanSlClasses: [],
            loanSlTypes: [],
            loanSLStatuses: [],
            loanAccountStatuses: [
                {code:11,descr:"Up-to-Date"},
                {code:12,descr:"Advance Payment"},
                {code:13,descr:"Over-paid"},
                {code:14,descr:"Delinquent"},
                {code:15,descr:"Past Due"}
            ],

            loanSlCFilters: [],
            loanSlTFilters: [],
            clientFilters: [],
            clientIdFilters: [],
            genderFilters: [],
            civilStatusFilters: [],
            chapterFilters: [],
            interestFilters: [],
            principalFilters: [],
            amortFilters: [],
            dosriFilters: [],
            slStatusFilters: [],
            accStatusFilters: [],


            clientClientTypes: [],
            clientGenders: [],
            clientCivilStatuses: [],
            clientChapters: [],
            clientDosriTags: [],
            clients: [],

            selectRequired:false
        }
    },

    created() {
        this.fetchAmorTypes();
        this.fetchDimFreqs();
        this.fetchPrinPaymentModes();
        this.fetchIntPaymentModes();
        this.fetchPaymentModes();
        this.fetchTermPerds();
        this.fetchSlClasses();
        this.fetchClientTypes();
        this.fetchClientGenders();
        this.fetchClientCivilStatuses();
        this.fetchChapters(18);
        this.fetchClientDosriTags();
        this.fetchAmorTypesSetUp();
        this.fetchSLStatus();
    },

    methods: {
        fetchSLStatus(){
            fetch(`/api/spefCtsTypes`)
                .then(res => res.json())
                .then(res => {
                    this.loanSLStatuses = res.data;
                })
                .catch(err => console.log(err));
        },

        fetchAmorTypes() {
            fetch('/api/amorTypes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanAmorTypes = res.data;
                    console.log(this.loanLoanAmorTypes);
                })
                .catch(err => console.log(err));
        },

        fetchAmorTypesSetUp() {
            fetch('/api/amorTypes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanAmorTypeSetUps = res.data;
                })
                .catch(err => console.log(err));
        },

        fetchDimFreqs() {
            fetch('/api/dimFreqs')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanDimFreqs = res.data;
                    console.log(this.loanLoanDimFreqs);
                })
                .catch(err => console.log(err));
        },  
                   

        fetchPaymentModes() {
            fetch('/api/paymentModes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanPaymentModes = res.data;
                })
                .catch(err => console.log(err));
        },

        fetchPrinPaymentModes() {
            fetch('/api/paymentModes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanPrinPaymentModes = res.data;
                })
                .catch(err => console.log(err));
        },

        fetchIntPaymentModes() {
            fetch('/api/paymentModes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanIntPaymentModes = res.data;
                })
                .catch(err => console.log(err));
        },


        fetchTermPerds() {
            fetch('/api/terms')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanTermPerds = res.data;
                    console.log(this.loanLoanTermPerds);
                })
                .catch(err => console.log(err));
        },

        fetchSlClasses() {
            fetch('/api/loanSlclass')
                .then(res => res.json())
                .then(res => {
                    this.loanSlClasses = res.data;
                    console.log(this.loanSlClasses);
                })
                .catch(err => console.log(err));
        },

        fetchSlTypes(branchCode) {
            fetch(`/api/sltBranch/${branchCode}`)
                .then(res => res.json())
                .then(res => {
                    this.loanSlTypes = res.data;
                    console.log(this.loanSlTypes);
                })
                .catch(err => console.log(err));
        },

        fetchClientTypes() {
            fetch("/api/clientTypes")
                .then(res => res.json())
                .then(res => {
                    this.clientClientTypes = res.data;
                    console.log(this.clientClientTypes);
                })
                .catch(err => console.log(err));
        },

        fetchClientGenders() {
            fetch('/api/genders')
            .then(res => res.json())
            .then(res => {
                this.clientGenders = res.data;
                console.log(this.clientGenders);
            })
            .catch(err => console.log(err));
        },

        fetchClientCivilStatuses() {
            fetch('/api/civilStats')
            .then(res => res.json())
            .then(res => {
                this.clientCivilStatuses = res.data;
                console.log(this.clientCivilStatuses);
            })
            .catch(err => console.log(err));
        },

        fetchChapters(branchCode) {
            fetch(`/api/geoByBranch/${branchCode}`)
            .then(res => res.json())
            .then(res => {
                this.clientChapters = res.data;
            })
            .catch(err => console.log(err));
        },

        fetchClientDosriTags() {
            fetch('/api/dosritags')
            .then(res => res.json())
            .then(res => {
                this.clientDosriTags = res.data;
                console.log(this.clientDosriTags);
            })
            .catch(err => console.log(err));
        },

        filterSLC(index,object){
            this.loanSlCFilters.push(object);
            this.loanSlClasses.splice(index,1);
            this.fetchSlTypes(18);
        },

        reverseFilterSLC(index,object){
            this.loanSlClasses.push(object);
            this.loanSlCFilters.splice(index,1);
            this.loanSlTypes=[];
        },

        filterSelect(array1,array2,index,object){
            array1.push(object);
            array2.splice(index,1);
        },

        reverseFilter(array2,array1,index,object){
            array2.push(object);
            array1.splice(index,1);
        },

        checkAmort(value){
            if(value == 1){
                this.selectRequired=true;
            }
        },

        filterGenerate(){
            // sqlFilter = Array("", "");
            this.FS = "";
            this.SLC_CODEFilter = " sldtl.SLC_CODE=slsum.SLC_CODE "
            this.ReportTypeofBalance = ""
            this.HavingClause = ""
            this.WHEREClause = ""
            this.AddressStatementHome = " CAST(CONCAT(IF(client.ResAddStreet IS NOT NULL,client.ResAddStreet,''),' ',IF(client.ResAddBarangay IS NOT NULL,client.ResAddBarangay,''),' ',IF(client.ResAddCity IS NOT NULL,client.ResAddCity,''),' ',IF(client.ResAddProvince IS NOT NULL,client.ResAddProvince,'')) AS CHAR) "
            this.AddressStatementBusiness = " CAST(CONCAT(IF(client.BusAddStreet IS NOT NULL,client.BusAddStreet,''),' ',IF(client.BusAddBarangay IS NOT NULL,client.BusAddBarangay,''),' ',IF(client.BusAddCity IS NOT NULL,client.BusAddCity,''),' ',IF(client.BusAddProvince IS NOT NULL,client.BusAddProvince,'')) AS CHAR) "
        
            if(this.checkBalance){
                this.HavingClause = "HAVING ACCRUEDINTERESTBALANCEx<>0 ";
                if(this.checkBalanceInput){
                    if(this.HavingClause != ""){
                        this.HavingClause = this.HavingClause + " OR BALANCEx" + this.processConditionSyntax(this.checkBalanceInput); 
                        console.log(this.processConditionSyntax(this.checkBalanceInput));
                    }else{ 
                        this.HavingClause = " HAVING BALANCEx" + this.processConditionSyntax(this.checkBalanceInput);
                        console.log(this.processConditionSyntax(this.checkBalanceInput));
                    }
                }
                console.log("CHECK:"+this.HavingClause);
            }

            if(this.clientFilters.length > 0){
                this.WHEREClause = this.WHEREClause + "(client.ClientType='" + this.clientFilters[0].clientTypeDesc+"' OR ";
                for(let i=1; i < this.clientFilters.length;i++){
	                this.WHEREClause = this.WHEREClause + "client.ClientType='" +this.clientFilters[i].clientTypeDesc+"' OR ";
                }
                this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
            }

            if(this.genderFilters.length > 0){
                this.WHEREClause = this.WHEREClause + "(client.Gender='" + this.genderFilters[0].genderDesc+"' OR ";
                for(let i=1; i < this.genderFilters.length;i++){
	                this.WHEREClause = this.WHEREClause + "client.Gender='" +this.genderFilters[i].genderDesc+"' OR ";
                }
                this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
            }

            if(this.civilStatusFilters.length > 0){
                this.WHEREClause = this.WHEREClause + "(client.CivilStatus='" + this.civilStatusFilters[0].civilStatDesc+"' OR ";
                for(let i=1; i < this.civilStatusFilters.length;i++){
	                this.WHEREClause = this.WHEREClause + "client.Gender='" +this.civilStatusFilters[i].civilStatDesc+"' OR ";
                }
                this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
            }

            if(this.chapterFilters.length > 0){
                this.WHEREClause = this.WHEREClause + "(client.Geographical='" + this.chapterFilters[0].geoDesc+"' OR ";
                for(let i=1; i < this.chapterFilters.length;i++){
	                this.WHEREClause = this.WHEREClause + "client.Geographical='" +this.chapterFilters[i].geoDesc+"' OR ";
                }
                this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
            }

             if(this.dosriFilters.length > 0){
                this.WHEREClause = this.WHEREClause + "(client.DOSRITag='" + this.dosriFilters[0].desc1+"' OR ";
                for(let i=1; i < this.chapterFilters.length;i++){
	                this.WHEREClause = this.WHEREClause + "client.DOSRITag='" +this.dosriFilters[i].desc1+"' OR ";
                }
                this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
            }
            

            this.WHEREClauseGeneral = this.WHEREClause;

            for(let i=0;i < this.loanSlCFilters.length;i++){
	            this.WHEREClause = this.WHEREClauseGeneral;
	            this.SLC_CODE = this.loanSlCFilters[i].slClassId;
                this.FS = (this.SLC_CODE == 12) ? 'Loan' : 'AR';
                
                if(this.clientIdFilters.length > 0){
	                this.WHEREClause = this.WHEREClause + "(ClientID" + this.FS + "=" + this.clientIdFilters[0].clientId + " OR ";
	                for(let j=1;j < this.clientIdFilters.length;j++){
		                this.WHEREClause = this.WHEREClause + "ClientID" + this.FS + "=" + this.clientIdFilters[j].clientId + " OR ";	
                    }
	                this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
                }

                if(this.loanSlCFilters.length > 0){
	                this.WHEREClause = this.WHEREClause + this.FS + "SLC_CODE=" + this.loanSlCFilters[0].slClassId;
	                this.WHEREClause = this.WHEREClause + " AND "
                }

                if(this.loanSlTFilters.length > 0){
	                this.WHEREClause = this.WHEREClause + "("
	                for(let i = 0;i < this.loanSlTFilters.length;i++){
		                if(this.loanSlTFilters[i].slTypeSlcCode == this.SLC_CODE){
			                this.WHEREClause = this.WHEREClause + this.FS + "SLT_CODE=" + this.loanSlTFilters[i].slTypeSltCode + " OR ";
		                    this.ReportTypeofBalance = this.ReportTypeofBalance + this.loanSlTFilters[i].slTypeSltCode + " ";
	                    }
                    }
	                this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
                }

                if(this.slStatusFilters.length > 0){
	                this.WHEREClause = this.WHEREClause + "(";
	                for(let i = 0; i < this.slStatusFilters.length;i++){
		                this.WHEREClause = this.WHEREClause + this.FS + "STATUS=" + this.slStatusFilters[i].ctsTypeCode + " OR ";
		                this.ReportTypeofBalance = this.ReportTypeofBalance + this.slStatusFilters[i].ctsTypeCode + "  ";
	                }
	                this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
                }

                if(this.principalFilters.length > 0){
	                this.WHEREClause = this.WHEREClause + "(";
	                for(let i = 0;i < this.principalFilters.length;i++){
		                this.WHEREClause = this.WHEREClause + this.FS + "PPMT_MODE=" + this.principalFilters[i].paymentModeId +" OR ";
		                //ReportTypeofBalance
                    }
                    this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
                }

                if(this.amortFilters.length > 0){
	                this.WHEREClause = this.WHEREClause + "(";
	                for(let i = 0;i < this.amortFilters.length;i++){
		                this.WHEREClause = this.WHEREClause + this.FS + "AMORTYPE=" + this.amortFilters[i].amorTypeId +" OR ";
		                //ReportTypeofBalance
                    }
                    this.WHEREClause = this.WHEREClause.substr(0,this.WHEREClause.length - 4) + ") AND ";
                }

                if(this.interestFilters.length > 0){
	                this.WHEREClause = this.WHEREClause + "(";
	                for(let i = 0;i < this.interestFilters.length;i++){
		                this.WHEREClause = this.WHEREClause + this.FS + "PPMT_MODE=" + this.interestFilters[i].paymentModeId +" OR ";
		                //ReportTypeofBalance
                    }
                    this.WHEREClause = this.WHEREClause + "";
                    
                }

                if(this.loanDTFrom && this.loanDTTo){
	                this.WHEREClause = this.WHEREClause + " " + this.FS + "TR_DATE>='" + this.loanDTFrom + "' AND " + this.FS + "TR_DATE <='" + this.loanDTTo + "' AND "; 
                }else{
	                alert("Both FROM and TO Date Released Filter must be filled!");
                }

                if(this.loanMATFrom && loanMATTo){
	                this.WHEREClause = this.WHEREClause + " " + this.FS + "MAT_DATE>='" + this.loanMATFrom + "' AND " + this.FS + "MAT_DATE <='" + this.loanMATTo + "' AND ";
                }else{
	                alert("Both FROM and TO Maturity Date Filter must be filled!");
                }
            }
            console.log("WHERE CLAUSE:"+this.WHEREClause);


        },

        processConditionSyntax(value){
            value.replace("=>", ">=");
            value.replace("=<", "<=");
            value.replace("><", "<>");
            value.replace(">>", ">");
            value.replace("<<", "<");
            return value;
        },

        searchClient(value){
            if(this.clientIdInput){
                this.fetchClients(this.clientIdInput);
            }else if(this.clientNameInput){
                this.fetchClients(this.clientNameInput);
            }else{
                alert("Invalid Entry!");
            }
        },

        fetchClients(value){
            if(this.clientIdFilters.length > 0){
                this.WHEREClauseClient = this.WHEREClauseClient + "";
                for(let i=0; i < this.clientIdFilters.length;i++){
	                this.WHEREClauseClient = this.WHEREClauseClient + "ClientID<>" +this.clientIdFilters[i].clientId+" AND ";
                }
                this.WHEREClauseClient = this.WHEREClauseClient.substr(0,this.WHEREClauseClient.length - 5);
                this.fetchSpecificClientList(value,this.WHEREClauseClient);
                console.log(this.WHEREClauseClient);
            }else{
                this.fetchClient(value);
            }
            this.WHEREClauseClient="";
        },

        fetchSpecificClientList(name,whereClause){
            fetch(`/api/clientBatch/${name}/${whereClause}`)
                .then(res => res.json())
                .then(res => {
                    this.clients = res.data;
                })
                .catch(err => console.log(err));
        },

        fetchClient(value){
            fetch(`/api/client/term=${value}`)
                .then(res => res.json())
                .then(res => {
                    this.clients = res.data;
                })
                .catch(err => console.log(err));
        },

        filterClient(object){
            this.clientIdFilters.push(object);
            this.clientIdInput="";
            this.clientNameInput="";
        }
    }
}
</script>

<style>
.loan-batch-edit{
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}

.bg-light-yellow {
    background-color: #FFF9C4 !important;
}

.custom-tab > .nav-tabs {
  background-color:#418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link.active {
  color: #fff; 
  background-color:#418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link {
  color: #fff; 
  background-color:#418cb3;
  border: 0;
}

.btn-dark-blue {
    color: #fff;
    background-color: #418cb3;
    border-color: #418cb3;
}

.btn-dark-blue:hover {
    color: #fff;
    background-color: #377697;
    border-color: #336f8e;
}

.btn-outline-dark-blue {
    color: #418cb3;
    background-color: transparent;
    background-image: none;
    border-color: #418cb3;
}

.btn-outline-dark-blue:hover {
    color: #fff;
    background-color: #418cb3;
    border-color: #418cb3;
}
</style>
