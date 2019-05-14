<template>
    <div class="loans-armaster-inquiry">
        
        <nav class="navbar navbar-expand-lg p-0" id="toolbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" id="menuDropdown-0" tabindex="0">File</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="menuDropdown-1" tabindex="0">Others</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="menuDropdown-2" tabindex="0">Tools</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <router-link v-bind:to="'/loans/armaster-inquiry/'+client.clientId+'/ar-search-loan-inquiry'" class="btn btn-sm btn-outline-primary mr-4" v-if="this.$route.params.id">
                        <i class="fa fa-search mr-1"></i><span>Find</span>
                    </router-link>
                    <router-link to="/loans/loan-armaster-inquiry-search" class="btn btn-sm btn-outline-primary mr-4">
                        <i class="fa fa-search mr-1"></i><span>Find</span>
                    </router-link>

                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" v-if="this.$route.params.id" @click="insertNew">
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" @click="insertNew">
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>
                    <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>

                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" v-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" @click="editAr(loanar)">
                        <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                    </button>
                    <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
                        <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                    </button>

                    <button class="btn btn-sm btn-outline-primary mr-4" type="button" v-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" @click="deleteArById">
                        <i class="fa fa-trash mr-1"></i><span><u>D</u>elete</span>
                    </button>
                    <button class="btn btn-sm btn-outline-secondary mr-4" type="button" v-else>
                        <i class="fa fa-trash mr-1"></i><span><u>D</u>elete</span>
                    </button>
                </li>
            </ul>
        </nav>

        <div class="alert alert-success" v-if="successAdd" transition="expand">AR Master Successfully Added.</div>

        <div class="alert alert-success" v-if="successEdit" transition="expand">AR Master Successfully Updated.</div>

        <form @submit.prevent="insertAr">
            <div class="form-row align-items-stretch">
                <div class="col-sm-8 py-3">
                    <div class="bg-light h-100">
                        <fieldset class="border p-2 h-100">
                            <h5>Account Info</h5>
                            <div class="form-row justify-content-between">
                                <div class="col-sm-6 my-1">
                                    <label class="col-form-label col-form-label-sm" for="clientId">Client ID:</label>
                                    <!-- <input class="form-control form-control-sm bg-light-green border-0" v-model="client.clientId" name="clientIdAr" type="text" v-if="this.$route.params.id" readonly> -->
                                    <input class="form-control form-control-sm bg-light-green border-0" v-model="loanar.clientIdAr" name="clientIdAr" type="text" v-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" readonly>
                                    <input class="form-control form-control-sm bg-light-green border-0" v-model="loanar.clientId" name="clientIdAr" type="text" v-else readonly>
                                </div>
                                <div class="col-sm-4 my-1 align-items-end justify-content-end">
                                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Loan Setup</legend>
                                        <select class="custom-select custom-select-sm" id="" v-model="loanar.arMemberRating" name="arMemberRating" :disabled="selectDisabled">
                                            <option disabled>(select one)</option>
                                            <option v-for="loanLoanMemberRating in loanLoanMemberRatings" v-bind:value="loanLoanMemberRating.ratingId">{{ loanLoanMemberRating.ratingDesc }}</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="lastName">Last Name</label>
                                    <input class="form-control form-control-sm" v-model="client.lastName" name="lastName" v-if="this.$route.params.id" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loanar.lastName" name="lastName" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loanar.lastName" name="lastName" v-else type="text" readonly>
                                </div>
                                <div class="col-sm-auto d-none d-sm-block">
                                    <label></label>
                                    <p style="margin: 25px 0 0 -5px; font-weight: bolder;">,</p>
                                </div>
                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="firstName">First Name</label>
                                    <input class="form-control form-control-sm" v-model="client.firstName" name="firstName" v-if="this.$route.params.id" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loanar.firstName" name="firstName" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loanar.firstName" name="firstName" v-else type="text" readonly>
                                </div>
                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="middleName">Middle Name</label>
                                    <input class="form-control form-control-sm" v-model="client.middleName" name="middleName" v-if="this.$route.params.id" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loanar.middleName" name="middleName" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loanar.middleName" name="middleName" v-else type="text" readonly>
                                </div>
                                <div class="col-sm-2 my-1">
                                    <label class="col-form-label col-form-label-sm" for="suffix">Suffix</label>
                                    <input class="form-control form-control-sm" v-model="client.suffix" name="suffix" v-if="this.$route.params.id" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loanar.suffix" name="suffix" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loanar.suffix" name="suffix" v-else type="text" readonly>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col">
                                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="accountName">Organization</legend>
                                        <input class="form-control form-control-sm" v-model="client.accountName" name="accountName" v-if="this.$route.params.id" type="text" readonly>
                                        <input class="form-control form-control-sm" v-model="loanar.accountName" name="accountName" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" type="text" readonly>
                                        <input class="form-control form-control-sm" v-model="loanar.accountName" name="accountName" v-else type="text" readonly>
                                    </fieldset>
                                </div>
                                <div class="col-sm-4">
                                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Date Opened</legend>
                                        <input class="form-control form-control-sm" v-model="client.dateOpened" name="dateOpened" v-if="this.$route.params.id" type="date" readonly>
                                        <input class="form-control form-control-sm" v-model="loanar.dateOpened" name="dateOpened" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" type="date" readonly>
                                        <input class="form-control form-control-sm" v-model="loanar.dateOpened" name="dateOpened" v-else type="date" readonly>
                                    </fieldset>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="bg-light h-100">
                        <fieldset class="border p-2 h-100">
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanType">Account Type:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="client.acctType" name="acctType" v-if="this.$route.params.id" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.acctType" name="acctType" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.acctType" name="acctType" v-else disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanType">Joint Type:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="client.jointType" name="jointType" v-if="this.$route.params.id" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.jointType" name="jointType" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.jointType" v-else name="jointType" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanType">Client Type:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="client.clientType" name="clientType" v-if="this.$route.params.id" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.clientType" name="clientType" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.clientType" name="clientType" v-else disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanType">Account Status:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="client.accountStatus" name="accountStatus" v-if="this.$route.params.id" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAccountStatus in clientAccountStatuses" v-bind:value="clientAccountStatus.acctStatId">{{ clientAccountStatus.acctStatDesc }}</option>
                                    </select>
                                     <select class="custom-select custom-select-sm" id="" v-model="loanar.accountStatus" name="accountStatus" v-else-if="this.$route.params.arBrCode && this.$route.params.arSlcCode && this.$route.params.arSltCode && this.$route.params.arRefNo && this.$route.params.clientIdAr" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAccountStatus in clientAccountStatuses" v-bind:value="clientAccountStatus.acctStatId">{{ clientAccountStatus.acctStatDesc }}</option>
                                    </select>
                                     <select class="custom-select custom-select-sm" id="" v-model="loanar.accountStatus" name="accountStatus" v-else disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAccountStatus in clientAccountStatuses" v-bind:value="clientAccountStatus.acctStatId">{{ clientAccountStatus.acctStatDesc }}</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="form-row align-items-stretch">
                <div class="col-sm-8 custom-tabs">
                    <ul role="tablist" class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" href="" role="tab"> Setup</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active">
                            <div class="form-row justify-content-between">
                                <div class="col">
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Account Type:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loanar.arSltCode" name="arSltCode" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanSlType in loanLoanSlTypes" v-bind:value="loanLoanSlType.slTypeSltCode">{{ loanLoanSlType.slTypeMDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Reference Number:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loanar.arXxrefNo" name="arXxrefNo" type="text" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Date Issued:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loanar.ardIssued" name="ardIssued" type="date" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Credit Limit:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loanar.arCrLimit" name="arCrLimit" type="text" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                            <strong>Principal:</strong>
                                        </label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loanar.arPamt" name="arPamt" type="text" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Balance:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm bg-light-pink border-0" name="" type="text" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Loan Date:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loanar.arTrDate" name="arTrDate" type="date" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Maturity:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm bg-light-green border-0" name="" type="text" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Term</label>
                                        <div class="col my-1">
                                            <div class="form-row">
                                                <div class="col-sm-3 my-1">
                                                    <input class="form-control form-control-sm" v-model="loanar.arTerms" name="arTerms" type="number" :readonly="readOnly">
                                                </div>
                                                <div class="col  my-1">
                                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.arTermPerd" name="arTermPerd" :disabled="selectDisabled">
                                                        <option disabled>(select one)</option>
                                                        <option v-for="loanLoanTermPerd in loanLoanTermPerds" v-bind:value="loanLoanTermPerd.termId">{{ loanLoanTermPerd.termDesc }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Payment Mode:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loanar.arPpmtMode" name="arPpmtMode" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanPaymentMode in loanLoanPaymentModes" v-bind:value="loanLoanPaymentMode.paymentModeId">{{ loanLoanPaymentMode.paymentModeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Status:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loanar.arStatus" name="arStatus" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanCtsType in loanLoanCtsTypes" v-bind:value="loanLoanCtsType.ctsTypeCode">{{ loanLoanCtsType.ctsTypeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                            <strong>Account Number:</strong>
                                        </label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm bg-light-green border-0" v-model="loanar.arRefNo" name="arRefNo" type="text" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                            <strong>Interest:</strong>
                                        </label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loanar.arIntRate" name="arIntRate" type="number" :readonly="readOnly">
                                        </div>
                                        <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Based On:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loanar.arAmorType" name="arAmorType" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanAmorType in loanLoanAmorTypes" v-bind:value="loanLoanAmorType.amorTypeId">{{ loanLoanAmorType.amorTypeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Diminish:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loanar.arDimbFreq" name="arDimbFreq" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanDimFreq in loanLoanDimFreqs" v-bind:value="loanLoanDimFreq.dimFreqId">{{ loanLoanDimFreq.dimFreqDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Payment Mode:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loanar.arIpmtMode" name="arIpmtMode" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanPaymentMode in loanLoanPaymentModes" v-bind:value="loanLoanPaymentMode.paymentModeId">{{ loanLoanPaymentMode.paymentModeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                            <strong>Penalty:</strong>
                                        </label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loanar.arPenRate" name="arPenRate" type="number" :readonly="readOnly">
                                        </div>
                                        <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Computed:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loanar.arPenMode" name="arPenMode" :disabled="selectDisabled">
                                                <option disabled>(selec one)</option>
                                                <option v-for="loanLoanPaymentMode in loanLoanPaymentModes" v-bind:value="loanLoanPaymentMode.paymentModeId">{{ loanLoanPaymentMode.paymentModeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                            <strong>Grace Period:</strong>
                                        </label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loanar.arPenGp" name="arPenGp" type="number" :readonly="readOnly">
                                        </div>
                                        <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col custom-tabs">
                    <ul role="tablist" class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#duedates" role="tab"> Due Dates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#comakers" role="tab"> Co-Makers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#collateral" role="tab"> Collateral</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#remarks" role="tab"> Remarks</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="duedates">
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Due Date Option:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.arDdFlag" name="arDdFlag" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="loanLoanDueDateType in loanLoanDueDateTypes" v-bind:value="loanLoanDueDateType.dueDateTypeID">{{ loanLoanDueDateType.dueDateTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">1st Interest Due Date: </label>
                                <div class="col my-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                        <input class="form-control form-control-sm" v-model="loanar.arFidDate" name="arFidDate" type="date" :readonly="readOnly">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">1st Principal Due Date: </label>
                                <div class="col my-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                        <input class="form-control form-control-sm" v-model="loanar.arFpdDate" name="arFpdDate" type="date" :readonly="readOnly">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Maturity Date: </label>
                                <div class="col my-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                        <input class="form-control form-control-sm" v-model="loanar.arMatDate" name="arMatDate" type="date" :readonly="readOnly">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Use Actual No. of Days</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.arNdFlag" name="arNdFlag" :disabled="selectDisabled">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="comakers">
                            <div class="form-row">
                                <div class="col-sm-4 my-1">
                                    <input class="form-control form-control-sm" name="" type="text" :readonly="readOnly">
                                </div>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" name="" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row justify-content-center my-3">
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-outline-primary btn-block">
                                        <i class="fa fa-plus-circle mr-1"></i><span>Add</span>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-outline-primary btn-block">
                                        <i class="fa fa-file-signature mr-1"></i><span>Update</span>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-sm btn-outline-primary btn-block">
                                        <i class="fa fa-times-circle mr-1"></i><span>Clear</span>
                                    </button>
                                </div>
                            </div>
                            <table class="table table-sm table-bordered custom-table table-dark my-3">
                                <thead>
                                    <tr>
                                        <th>BR</th>
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>21</td>
                                        <td>Test</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>31</td>
                                        <td>Tester</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Borrower Classification:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.arMClass" name="arMClass" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="borrowerClass in borrowerClasses" v-bind:value="borrowerClass.borrowerClassId">{{ borrowerClass.borrowerClassDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Account Officer In-Charge:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loanar.arAcctOff" name="arAcctOff" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Credit Investigator:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loanar.arCi" name="arCi" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mt-2">
                                    <div class="form-check form-check-sm">
                                        <input class="form-check-input" v-model="loanar.arRestRuct" name="arRestRuct" type="checkbox" :readonly="readOnly">
                                        <label class="form-check-label">Restructured</label>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Previous Loan:</label>
                                        <div class="col my-1">
                                            <div class="form-row align-items-center">
                                                <div class="col-sm-2">
                                                    <input class="form-control form-control-sm" v-model="loanar.arXSltCode" name="arXSltCode" type="text" :readonly="readOnly">
                                                </div>
                                                <span class="col-auto">-</span>
                                                <div class="col">
                                                    <input class="form-control form-control-sm" v-model="loanar.arXRefNo" name="arXRefNo" type="text" :readonly="readOnly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="collateral">
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1">Loan Security:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.arSecurity" name="arSecurity" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="loanLoanSecurity in loanLoanSecurities" v-bind:value="loanLoanSecurity.loanSecurityId">{{ loanLoanSecurity.loanSecurityDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Type of Collateral:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.arCollType" name="arCollType" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="loanLoanCollateralType in loanLoanCollateralTypes" v-bind:value="loanLoanCollateralType.collateralType">{{ loanLoanCollateralType.collateralTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Appraised Value:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loanar.arCollAmt" name="arCollAmt" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col my-1">
                                    <label class="">Description:</label>
                                    <textarea class="form-control form-control-sm" cols="30" id="" v-model="loanar.arCollDesc" name="arCollDesc" rows="10" :readonly="readOnly"></textarea>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="remarks">
                            <div class="form-row">
                                <div class="col my-1">
                                    <label class="">Remarks:</label>
                                    <textarea class="form-control form-control-sm" cols="30" id="" v-model="loanar.arRemarks" name="arRemarks" rows="10" :readonly="readOnly"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1">Bank:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loanar.arBank" name="arBank" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="loanLoanBankCode in loanLoanBankCodes" v-bind:value="loanLoanBankCode.bcId">{{ loanLoanBankCode.bcDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Reference Number:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" name="" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Credit Limit:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loanar.arCrLimit" name="arCrLimit" type="text" :readonly="readOnly">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 20px;">
                <button class="btn btn-secondary mr-1" type="submit" v-if="selectDisabled">
                    <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
                </button>
                <button class="btn btn-success mr-1" type="submit" v-else :disabled="selectDisabled">
                    <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
                </button>

                <button class="btn btn-secondary" type="button" v-if="selectDisabled">
                    <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
                </button>
                <button class="btn btn-outline-primary" type="button" v-else :disabled="selectDisabled" @click="cancel">
                    <router-link to="/loans/armaster-inquiry" class="new" :disabled="selectDisabled">
                        <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
                    </router-link>
                </button>
            </div>
        </form>
        
    </div>
</template>

<script>
export default {
    data() {
        return {
            loanar: {
                arBrCode: 18,
                arSlcCode: 13,
                arSltCode: '',
                arRefNo: '',
                clientIdAr: '',
                lastName: '',
                lastName: '',
                firstName: '',
                middleName: '',
                alertLevel: '',
                department: '',
                acctType: '',
                accountName: '',
                jointType: '',
                clientType: '',
                accountStatus: '',
                referenceId: '',
                dateOpened: '',
                arMemberRating: '',
                arXxrefNo: '',
                ardIssued: '',
                arCrLimit: '',
                arPamt: '',
                arTrDate: '',
                arTerms: '',
                arTermPerd: '',
                arStatus: '',
                arPpmtMode: '',
                arIntRate: '',
                arAmorType: '',
                arDimbFreq: '',
                arIpmtMode: '',
                arPenRate: '',
                arPenGp: '',
                arPenMode: '',
                arDdFlag: '',
                arCollType: '',
                arBank: '',
                arSecurity: '',
                arFidDate: '',
                arFpdDate: '',
                arMatDate: '',
                arNdFlag: '',
                arMClass: '',
                arAcctOff: '',
                arCi: '',
                arRestRuct: '',
                arXSltCode: '',
                arXRefNo: '',
                arCollAmt: '',
                arCollType: '',
                arCollDesc: '',
                arRemarks: '',
                arCrLimit: '',
                arXxrefNo: '',
            },

            client: {
                clientId: '',
                lastName: '',
                firstName: '',
                middleName: '',
                alertLevel: '',
                department: '',
                acctType: '',
                accountName: '',
                jointType: '',
                clientType: '',
                accountStatus: '',
                referenceId: '',
                dateOpened: '',
            },

            edit: false,

            successAdd: '',

            successEdit: '',
            
            selectDisabled: true,

            readOnly: true,

            paramId: '',

            clientAcctTypes: [],
            clientJointTypes: [],
            clientClientTypes: [],
            clientAccountStatuses: [],

            loanLoanSlTypes: [],
            loanLoanMemberRatings: [],
            loanLoanPaymentModes: [],
            loanLoanTermPerds: [],
            loanLoanCtsTypes: [],
            loanLoanAmorTypes: [],
            loanLoanDimFreqs: [],
            loanLoanDueDateTypes: [],
            borrowerClasses: [],
            loanLoanSecurities: [],
            loanLoanCollateralTypes: [],
            loanLoanBankCodes: [],
        }
    },

    mounted() {
        this.arBrCode = this.$route.params.arBrCode;
        this.arSlcCode = this.$route.params.arSlcCode;
        this.arSltCode = this.$route.params.arSltCode;
        this.arRefNo = this.$route.params.arRefNo;
        this.clientIdAr = this.$route.params.clientIdAr;
        if (this.arBrCode > 0 && this.arSlcCode > 0 && this.arSltCode > 0 && this.arRefNo > 0 && this.clientIdAr > 0) {
            this.fetchArMaster(this.arBrCode, this.arSlcCode, this.arSltCode, this.arRefNo, this.clientIdAr);
        }

        this.paramId = this.$route.params.id;
        if(this.paramId > 0){
            this.fetchClient(this.paramId);
        }
    },

    created() {
        this.fetchAcctTypes();
        this.fetchJointTypes();
        this.fetchClientTypes();
        this.fetchClientStatuses();
        this.fetchLoanStatus();
        this.fetchLoanMemberRatings();
        this.fetchPaymentModes();
        this.fetchTermPerds();
        this.fetchLoanCtsTypes();
        this.fetchAmorTypes();
        this.fetchDimFreqs();
        this.fetchDueDateTypes();
        this.fetchBorrowerClass();
        this.fetchLoanCollTypes();
        this.fetchBankCodes();
        this.fetchLoanSecurities();
    },

    methods: {
        fetchArMaster(arBrCode, arSlcCode, arSltCode, arRefNo, clientIdAr) {
            fetch(`/api/ar/${arBrCode}/${arSlcCode}/${arSltCode}/${arRefNo}/${clientIdAr}`)
                .then(res => res.json())
                .then(res => {
                    this.loanar = res.data[0];
                    console.log(this.loanar);
                })
                .catch(err => console.log(err));
        },
        
        fetchClient(id) {
            fetch(`/api/client/${id}`)
            .then(res => res.json())
            .then(res => {
                console.log(res.data);
                this.client = res.data[0];
            })
            .catch(err => console.log(err));
        },

        fetchLoanMemberRatings() {
            fetch('/api/ratings')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanMemberRatings = res.data;
                    console.log(this.loanLoanMemberRatings);
                })
                .catch(err => console.log(err));
        },
        
        fetchAcctTypes() {
            fetch('/api/acctTypes')
                .then(res => res.json())
                .then(res => {
                    this.clientAcctTypes = res.data;
                    console.log(this.clientAcctTypes);
            })
            .catch(err => console.log(err));
        },

        fetchJointTypes() {
            fetch('/api/jointTypes')
                .then(res => res.json())
                .then(res => {
                    this.clientJointTypes = res.data;
                    console.log(this.clientJointTypes);
            })
            .catch(err => console.log(err));
        },

        fetchClientTypes() {
            fetch('/api/clientTypes')
                .then(res => res.json())
                .then(res => {
                    this.clientClientTypes = res.data;
                    console.log(this.clientClientTypes);
            })
            .catch(err => console.log(err));
        },

        fetchClientStatuses() {
            fetch('/api/acctStatuses')
                .then(res => res.json())
                .then(res => {
                    this.clientAccountStatuses = res.data;
                    console.log(this.clientAccountStatuses);
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

        fetchLoanStatus() {
            fetch('/api/slTypes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanSlTypes = res.data;
                    console.log(this.loanLoanSlTypes);
                })
                .catch(err => console.log(err));
        },

        fetchPaymentModes() {
            fetch('/api/paymentModes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanPaymentModes = res.data;
                    console.log(this.loanLoanPaymentModes);
                })
                .catch(err => console.log(err));
        },

        fetchLoanCtsTypes() {
            fetch('/api/ctsTypes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanCtsTypes = res.data;
                    console.log(this.loanLoanCtsTypes);
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

        fetchDimFreqs() {
            fetch('/api/dimFreqs')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanDimFreqs = res.data;
                    console.log(this.loanLoanDimFreqs);
                })
                .catch(err => console.log(err));
        },

        fetchDueDateTypes() {
            fetch('/api/dueDateTypes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanDueDateTypes = res.data;
                    console.log(this.loanLoanDueDateTypes);
                })
                .catch(err => console.log(err));
        },

        fetchBorrowerClass() {
            fetch('/api/borrowerClasses')
                .then(res => res.json())
                .then(res => {
                    this.borrowerClasses = res.data;
                    console.log(this.borrowerClasses);
                })
                .catch(err => console.log(err));
        },

        fetchLoanCollTypes() {
            fetch('/api/collateralTypes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanCollateralTypes = res.data;
                    console.log(this.loanLoanCollateralTypes);
                })
                .catch(err => console.log(err));
        },

        fetchBankCodes() {
            fetch('/api/bankCodes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanBankCodes = res.data;
                    console.log(this.loanLoanBankCodes);
                })
                .catch(err => console.log(err));
        },

        fetchLoanSecurities() {
            fetch('/api/loanSecurities')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanSecurities = res.data;
                    console.log(this.loanLoanSecurities);
                })
                .catch(err => console.log(err));
        },

        insertAr() {
            if (this.edit === false) {
                fetch('/api/ars', {
                    method: 'post',
                    body: JSON.stringify(this.loanar),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => {
                    res.json();
                    this.loanar.arSltCode = '',
                    this.loanar.arRefNo = '',
                    this.loanar.arMemberRating = '',
                    this.loanar.arXxrefNo = '',
                    this.loanar.clientIdAr = "",
                    this.loanar.lastName = "",
                    this.loanar.lastName = "",
                    this.loanar.firstName = "",
                    this.loanar.middleName = "",
                    this.loanar.alertLevel = "",
                    this.loanar.department = "",
                    this.loanar.acctType = "",
                    this.loanar.accountName = "",
                    this.loanar.jointType = "",
                    this.loanar.clientType = "",
                    this.loanar.accountStatus = "",
                    this.loanar.referenceId = "",
                    this.loanar.dateOpened = "",
                    this.loanar.ardIssued = '',
                    this.loanar.arCrLimit = '',
                    this.loanar.arPamt = '',
                    this.loanar.arTrDate = '',
                    this.loanar.arTerms = '',
                    this.loanar.arTermPerd = '',
                    this.loanar.arStatus = '',
                    this.loanar.arPpmtMode = '',
                    this.loanar.arIntRate = '',
                    this.loanar.arAmorType = '',
                    this.loanar.arDimbFreq = '',
                    this.loanar.arIpmtMode = '',
                    this.loanar.arPenRate = '',
                    this.loanar.arPenGp = '',
                    this.loanar.arPenMode = '',
                    this.loanar.arDdFlag = '',
                    this.loanar.arCollType = '',
                    this.loanar.arBank = '',
                    this.loanar.arSecurity = '',
                    this.loanar.arFidDate = '',
                    this.loanar.arFpdDate = '',
                    this.loanar.arMatDate = '',
                    this.loanar.arNdFlag = '',
                    this.loanar.arMClass = '',
                    this.loanar.arAcctOff = '',
                    this.loanar.arCi = '',
                    this.loanar.arRestRuct = '',
                    this.loanar.arXSltCode = '',
                    this.loanar.arXRefNo = '',
                    this.loanar.arCollAmt = '',
                    this.loanar.arCollType = '',
                    this.loanar.arCollDesc = '',
                    this.loanar.arRemarks = '',
                    this.loanar.arCrLimit = '',
                    this.loanar.arXxrefNo = '',
                    this.readOnly = true;
                    this.selectDisabled = true;
                    setTimeout(() => {
                        this.successAdd = false;
                    }, 2000),
                    console.log("AR Master Added");
                })
                .catch(err => console.log(err));
            } else {
                fetch('/api/ar', {
                    method: 'put',
                    body: JSON.stringify(this.loanar),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => {
                    this.successEdit = true;
                    this.readOnly = true;
                    this.selectDisabled = true;
                    setTimeout(() => {
                        this.successEdit = false;
                    }, 2000),
                    console.log("AR Master updated");
                    this.fetchArMaster(this.$route.params.arBrCode, this.$route.params.arSlcCode, this.$route.params.arSltCode, this.$route.params.arRefNo, this.$route.params.clientIdAr);
                })
                .catch(err => console.log(err));
            }
        },

        editAr(loanar) {
            this.edit = true;
            this.readOnly = false;
            this.selectDisabled = false;
            this.loanar.arBrCode = loanar.arBrCode;
            this.loanar.arSlcCode = loanar.arSlcCode;
            this.loanar.arSltCode = loanar.arSltCode;
            this.loanar.arRefNo = loanar.arRefNo;
            this.loanar.clientIdAr = loanar.clientIdAr;
            this.loanar.lastName = loanar.lastName;
            this.loanar.firstName = loanar.firstName;
            this.loanar.middleName = loanar.middleName;
            this.loanar.suffix = loanar.suffix;
            this.loanar.acctType = loanar.acctType;
            this.loanar.jointType = loanar.jointType;
            this.loanar.clientType = loanar.clientType;
            this.loanar.accountStatus = loanar.accountStatus;
            this.loanar.accountName = loanar.accountName;
            this.loanar.dateOpened = loanar.dateOpened;
            this.loanar.arMemberRating = loanar.arMemberRating;
            this.loanar.arXxrefNo = loanar.arXxrefNo;
            this.loanar.ardIssued = loanar.ardIssued;
            this.loanar.arCrLimit = loanar.arCrLimit;
            this.loanar.arPamt = loanar.arPamt;
            this.loanar.arTrDate = loanar.arTrDate;
            this.loanar.arTerms = loanar.arTerms;
            this.loanar.arTermPerd = loanar.arTermPerd;
            this.loanar.arStatus = loanar.arStatus;
            this.loanar.arPpmtMode = loanar.arPpmtMode;
            this.loanar.arIntRate = loanar.arIntRate;
            this.loanar.arAmorType = loanar.arAmorType;
            this.loanar.arDimbFreq = loanar.arDimbFreq;
            this.loanar.arIpmtMode = loanar.arIpmtMode;
            this.loanar.arPenRate = loanar.arPenRate;
            this.loanar.arPenGp = loanar.arPenGp;
            this.loanar.arPenMode = loanar.arPenMode;
            this.loanar.arDdFlag = loanar.arDdFlag;
            this.loanar.arCollType = loanar.arCollType;
            this.loanar.arBank = loanar.arBank;
            this.loanar.arSecurity = loanar.arSecurity;
            this.loanar.arFidDate = loanar.arFidDate;
            this.loanar.arFpdDate = loanar.arFpdDate;
            this.loanar.arMatDate = loanar.arMatDate;
            this.loanar.arNdFlag = loanar.arNdFlag;
            this.loanar.arMClass = loanar.arMClass;
            this.loanar.arAcctOff = loanar.arAcctOff;
            this.loanar.arCi = loanar.arCi;
            this.loanar.arRestRuct = loanar.arRestRuct;
            this.loanar.arXSltCode = loanar.arXSltCode;
            this.loanar.arXRefNo = loanar.arXRefNo;
            this.loanar.arCollAmt = loanar.arCollAmt;
            this.loanar.arCollType = loanar.arCollType;
            this.loanar.arCollDesc = loanar.arCollDesc;
            this.loanar.arRemarks = loanar.arRemarks;
            this.loanar.arCrLimit = loanar.arCrLimit;
            this.loanar.arXxrefNo = loanar.arXxrefNo;
        },

        insertNew() {
            this.readOnly = false;
            this.selectDisabled = false;
            this.loanar.clientIdAr = this.$route.params.id,
            this.loanar.arSltCode = '';
            this.loanar.arRefNo = '';
            this.loanar.arMemberRating = '';
            this.loanar.arXxrefNo = '';
            this.loanar.ardIssued = '';
            this.loanar.arCrLimit = '';
            this.loanar.arPamt = '';
            this.loanar.arTrDate = new Date().toISOString().slice(0,10);
            this.loanar.arTerms = '';
            this.loanar.arTermPerd = '';
            this.loanar.arStatus = '';
            this.loanar.arPpmtMode = '';
            this.loanar.arIntRate = '';
            this.loanar.arAmorType = '';
            this.loanar.arDimbFreq = '';
            this.loanar.arIpmtMode = '';
            this.loanar.arPenRate = '';
            this.loanar.arPenGp = '';
            this.loanar.arPenMode = '';
            this.loanar.arDdFlag = '';
            this.loanar.arCollType = '';
            this.loanar.arBank = '';
            this.loanar.arSecurity = '';
            this.loanar.arFidDate = '';
            this.loanar.arFpdDate = '';
            this.loanar.arMatDate = '';
            this.loanar.arNdFlag = '';
            this.loanar.arMClass = '';
            this.loanar.arAcctOff = '';
            this.loanar.arCi = '';
            this.loanar.arRestRuct = '';
            this.loanar.arXSltCode = '';
            this.loanar.arXRefNo = '';
            this.loanar.arCollAmt = '';
            this.loanar.arCollType = '';
            this.loanar.arCollDesc = '';
            this.loanar.arRemarks = '';
            this.loanar.arCrLimit = '';
            this.loanar.arXxrefNo = '';
        },

        cancel() {
            this.readOnly = true;
            this.selectDisabled = true;
            this.loanar.arSltCode = '';
            this.loanar.arRefNo = '';
            this.loanar.clientIdAr = '';
            this.loanar.lastName = '';
            this.loanar.lastName = '';
            this.loanar.firstName = '';
            this.loanar.middleName = '';
            this.loanar.alertLevel = '';
            this.loanar.department = '';
            this.loanar.acctType = '';
            this.loanar.accountName = '';
            this.loanar.jointType = '';
            this.loanar.clientType = '';
            this.loanar.accountStatus = '';
            this.loanar.referenceId = '';
            this.loanar.dateOpened = '';
            this.loanar.arSltCode = '';
            this.loanar.arRefNo = '';
            this.loanar.arMemberRating = '';
            this.loanar.arXxrefNo = '';
            this.loanar.ardIssued = '';
            this.loanar.arCrLimit = '';
            this.loanar.arPamt = '';
            this.loanar.arTrDate = '';
            this.loanar.arTerms = '';
            this.loanar.arTermPerd = '';
            this.loanar.arStatus = '';
            this.loanar.arPpmtMode = '';
            this.loanar.arIntRate = '';
            this.loanar.arAmorType = '';
            this.loanar.arDimbFreq = '';
            this.loanar.arIpmtMode = '';
            this.loanar.arPenRate = '';
            this.loanar.arPenGp = '';
            this.loanar.arPenMode = '';
            this.loanar.arDdFlag = '';
            this.loanar.arCollType = '';
            this.loanar.arBank = '';
            this.loanar.arSecurity = '';
            this.loanar.arFidDate = '';
            this.loanar.arFpdDate = '';
            this.loanar.arMatDate = '';
            this.loanar.arNdFlag = '';
            this.loanar.arMClass = '';
            this.loanar.arAcctOff = '';
            this.loanar.arCi = '';
            this.loanar.arRestRuct = '';
            this.loanar.arXSltCode = '';
            this.loanar.arXRefNo = '';
            this.loanar.arCollAmt = '';
            this.loanar.arCollType = '';
            this.loanar.arCollDesc = '';
            this.loanar.arRemarks = '';
            this.loanar.arCrLimit = '';
            this.loanar.arXxrefNo = '';
        },

        deleteArById() {
            const arBrCode = this.$route.params.arBrCode;
            const arSlcCode = this.$route.params.arSlcCode;
            const arSltCode = this.$route.params.arSltCode;
            const arRefNo = this.$route.params.arRefNo;
            const clientIdAr = this.$route.params.clientIdAr;
            if (confirm('Are you sure?')) {
                fetch(`/api/ar/${arBrCode}/${arSlcCode}/${arSltCode}/${arRefNo}/${clientIdAr}`, {
                    method: 'delete'
                })
                .then(res => {
                    res.json();
                    this.loanar.arMemberRating = '';
                    this.loanar.arXxrefNo = '';
                    this.loanar.ardIssued = '';
                    this.loanar.arCrLimit = '';
                    this.loanar.arPamt = '';
                    this.loanar.arTrDate = '';
                    this.loanar.arTerms = '';
                    this.loanar.arTermPerd = '';
                    this.loanar.arStatus = '';
                    this.loanar.arPpmtMode = '';
                    this.loanar.arIntRate = '';
                    this.loanar.arAmorType = '';
                    this.loanar.arDimbFreq = '';
                    this.loanar.arIpmtMode = '';
                    this.loanar.arPenRate = '';
                    this.loanar.arPenGp = '';
                    this.loanar.arPenMode = '';
                    this.loanar.arDdFlag = '';
                    this.loanar.arCollType = '';
                    this.loanar.arBank = '';
                    this.loanar.arSecurity = '';
                    this.loanar.arFidDate = '';
                    this.loanar.arFpdDate = '';
                    this.loanar.arMatDate = '';
                    this.loanar.arNdFlag = '';
                    this.loanar.arMClass = '';
                    this.loanar.arAcctOff = '';
                    this.loanar.arCi = '';
                    this.loanar.arRestRuct = '';
                    this.loanar.arXSltCode = '';
                    this.loanar.arXRefNo = '';
                    this.loanar.arCollAmt = '';
                    this.loanar.arCollType = '';
                    this.loanar.arCollDesc = '';
                    this.loanar.arRemarks = '';
                    this.loanar.arCrLimit = '';
                    this.loanar.arXxrefNo = '';
                    console.log("AR removed");
                })
            }
        }

    }
}
</script>

<style>
.loans-armaster-inquiry{
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}

.bg-light-green {
    background-color: #20c997 !important;
}

.bg-light-pink {
    background-color: #ef80ff !important;
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
</style>
