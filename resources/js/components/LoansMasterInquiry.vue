<template>
    <div class="loans-master-inquiry">
        
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
                    <router-link v-bind:to="'/loans/loans-master-inquiry/'+client.clientId+'/loan-search-loan-inquiry'" class="btn btn-sm btn-outline-primary mr-4" v-if="this.$route.params.id">
                        <i class="fa fa-search mr-1"></i><span>Find</span>
                    </router-link>
                    <router-link to="/loans/loan-master-inquiry-search" class="btn btn-sm btn-outline-primary mr-4" v-else>
                        <i class="fa fa-search mr-1"></i><span>Find</span>
                    </router-link>
                    
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" v-if="this.$route.params.id" @click="insertNew">
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" @click="insertNew">
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>
                    <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
                        <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                    </button>

                    <button class="btn btn-sm btn-outline-primary mr-1" type="button" v-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" @click="editLoan(loan)">
                        <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                    </button>
                    <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
                        <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                    </button>

                    <button class="btn btn-sm btn-outline-primary mr-4" type="button" v-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" @click="deleteLoanById">
                        <i class="fa fa-trash mr-1"></i><span><u>D</u>elete</span>
                    </button>
                    <button class="btn btn-sm btn-outline-secondary mr-4" type="button" v-else>
                        <i class="fa fa-trash mr-1"></i><span><u>D</u>elete</span>
                    </button>
                </li>
            </ul>
        </nav>

        <div class="alert alert-success" v-if="successAdd" transition="expand">Loan Successfully Added.</div>

        <div class="alert alert-success" v-if="successEdit" transition="expand">Loan Successfully Updated.</div>

        <form @submit.prevent="insertLoan">
            <div class="form-row align-items-stretch">
                <div class="col-sm-8 py-3">
                    <div class="bg-light h-100">
                        <fieldset class="border p-2 h-100">
                            <h5>Account Info</h5>
                            <input type="hidden" v-model="loan.loanBrCode" name="loanBrCode">
                            <input type="hidden" v-model="loan.loanSlcCode" name="loanSlcCode">
                            <div class="form-row justify-content-between">
                                <div class="col-sm-6 my-1">
                                    <label class="col-form-label col-form-label-sm" for="clientId">Client ID:</label>
                                    <input class="form-control form-control-sm bg-light-green border-0" v-model="client.clientIdLoan" name="clientIdLoan" v-if="this.$route.params.id" type="text" readonly>
                                    <input class="form-control form-control-sm bg-light-green border-0" v-model="loan.clientIdLoan" name="clientIdLoan" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" type="text" readonly>
                                    <input class="form-control form-control-sm bg-light-green border-0" v-model="loan.clientIdLoan" name="clientIdLoan" v-else type="text" readonly>
                                </div>
                                <div class="col-sm-4 my-1 align-items-end justify-content-end">
                                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Loan Setup</legend>
                                        <select class="custom-select custom-select-sm" id="" v-model="loan.loanMemberRating" name="loanMemberRating" disabled>
                                            <option disabled>(select one)</option>
                                            <option v-for="loanLoanMemberRating in loanLoanMemberRatings" v-bind:value="loanLoanMemberRating.ratingId">{{ loanLoanMemberRating.ratingDesc }}</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="lastName">Last Name</label>
                                    <input class="form-control form-control-sm" v-model="client.lastName" name="lastName" type="text" v-if="this.$route.params.id" readonly>
                                    <input class="form-control form-control-sm" v-model="loan.lastName" name="lastName" type="text" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" readonly>
                                    <input class="form-control form-control-sm" v-model="loan.lastName" name="lastName" type="text" v-else readonly>
                                </div>
                                <div class="col-sm-auto d-none d-sm-block">
                                    <label></label>
                                    <p style="margin: 25px 0 0 -5px; font-weight: bolder;">,</p>
                                </div>
                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="firstName">First Name</label>
                                    <input class="form-control form-control-sm" v-model="client.firstName" name="firstName" v-if="this.$route.params.id" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loan.firstName" name="firstName" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" type="text" readonly>
                                    <input class="form-control form-control-sm" v-model="loan.firstName" name="firstName" v-else type="text" readonly>
                                </div>
                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="middleName">Middle Name</label>
                                    <input class="form-control form-control-sm" v-model="client.middleName" name="middleName" type="text" v-if="this.$route.params.id" readonly>
                                    <input class="form-control form-control-sm" v-model="loan.middleName" name="middleName" type="text" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" readonly>
                                    <input class="form-control form-control-sm" v-model="loan.middleName" name="middleName" type="text" v-else readonly>
                                </div>
                                <div class="col-sm-2 my-1">
                                    <label class="col-form-label col-form-label-sm" for="suffix">Suffix</label>
                                    <input class="form-control form-control-sm" v-model="client.suffix" name="suffix" type="text" v-if="this.$route.params.id" readonly>
                                    <input class="form-control form-control-sm" v-model="loan.suffix" name="suffix" type="text" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" readonly>
                                    <input class="form-control form-control-sm" v-model="loan.suffix" name="suffix" type="text" v-else readonly>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col">
                                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Organization</legend>
                                        <input class="form-control form-control-sm" v-model="client.accountName" name="accountName" type="text" v-if="this.$route.params.id" readonly>
                                        <input class="form-control form-control-sm" v-model="loan.accountName" name="accountName" type="text" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" readonly>
                                        <input class="form-control form-control-sm" v-model="loan.accountName" name="accountName" type="text" v-else readonly>
                                    </fieldset>
                                </div>
                                <div class="col-sm-4">
                                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                                        <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Date Opened</legend>
                                        <input class="form-control form-control-sm" v-model="client.dateOpened" name="dateOpened" type="date" v-if="this.$route.params.id" readonly>
                                        <input class="form-control form-control-sm" v-model="loan.dateOpened" name="dateOpened" type="date" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" readonly>
                                        <input class="form-control form-control-sm" v-model="loan.dateOpened" name="dateOpened" type="date" v-else readonly>
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
                                    <select class="custom-select custom-select-sm" v-model="client.acctType" name="acctType" v-if="this.$route.params.id" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="loan.acctType" name="acctType" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="loan.acctType" name="acctType" v-else disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanType">Joint Type:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" v-model="client.jointType" name="jointType" v-if="this.$route.params.id" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="loan.jointType" name="jointType" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="loan.jointType" name="jointType" v-else disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanType">Client Type:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" v-model="client.clientType" name="clientType" v-if="this.$route.params.id" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="loan.clientType" name="clientType" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="loan.clientType" name="clientType" v-else disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanType">Account Status:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" v-model="client.accountStatus" name="accountStatus" v-if="this.$route.params.id" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAccountStatus in clientAccountStatuses" v-bind:value="clientAccountStatus.acctStatId">{{ clientAccountStatus.acctStatDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="loan.accountStatus" name="accountStatus" v-else-if="this.$route.params.brcode && this.$route.params.slccode && this.$route.params.sltcode && this.$route.params.refno && this.$route.params.clientid" disabled>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAccountStatus in clientAccountStatuses" v-bind:value="clientAccountStatus.acctStatId">{{ clientAccountStatus.acctStatDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="loan.accountStatus" name="accountStatus" v-else disabled>
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
                            <a class="nav-link active" data-toggle="tab" href="#setup" role="tab"> Setup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#advance" role="tab">Advanced</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="setup">
                            <div class="form-row justify-content-between">
                                <div class="col">
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Loan Type:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanSltCode" name="loanSltCode" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanSlType in loanLoanSlTypes" v-bind:value="loanLoanSlType.slTypeSltCode">{{ loanLoanSlType.slTypeMDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Loan Class:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanClass" name="loanClass" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanClass in loanLoanClasses" v-bind:value="loanLoanClass.loanClassId">{{ loanLoanClass.loanClassDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Purpose:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanPurpose" name="loanPurpose":disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanPurpose in loanLoanPurposes" v-bind:value="loanLoanPurpose.loanPurposeId">{{ loanLoanPurpose.loanPurposeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Section:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanIndSection" name="loanIndSection" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanIndSection in loanIndSections" v-bind:value="loanIndSection.indSectionId">{{ loanIndSection.indSectionDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Industry:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanIndustry" name="loanIndustry" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanIndDivision in loanIndDivisions" v-bind:value="loanIndDivision.indDivisionId">{{ loanIndDivision.indDivisionDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                            <strong>Principal:</strong>
                                        </label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loan.loanPamt" name="loanPamt" type="text" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Balance:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm bg-light-pink border-0" name="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Loan Date:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loan.loanTrDate" name="loanTrDate" type="date" readonly>
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
                                                    <input class="form-control form-control-sm" v-model="loan.loanTerms" name="loanTerms" type="number" :readonly="readOnly">
                                                </div>
                                                <div class="col  my-1">
                                                    <select class="custom-select custom-select-sm" id="" v-model="loan.loanTermPerd" name="loanTermPerd" :disabled="selectDisabled">
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
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanPpmtMode" name="loanPpmtMode" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanPaymentMode in loanLoanPaymentModes" v-bind:value="loanLoanPaymentMode.paymentModeId">{{ loanLoanPaymentMode.paymentModeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Status:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanStatus" name="loanStatus" :disabled="selectDisabled">
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
                                            <input class="form-control form-control-sm bg-light-green border-0" v-model="loan.loanRefNo" name="loanRefNo" type="text" :readonly="readOnly">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                            <strong>Interest:</strong>
                                        </label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loan.loanIntRate" name="loanIntRate" type="number" :readonly="readOnly">
                                        </div>
                                        <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Based On:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanAmorType" name="loanAmorType" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanAmorType in loanLoanAmorTypes" v-bind:value="loanLoanAmorType.amorTypeId">{{ loanLoanAmorType.amorTypeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Diminish:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanDimbFreq" name="loanDimbFreq" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanDimFreq in loanLoanDimFreqs" v-bind:value="loanLoanDimFreq.dimFreqId">{{ loanLoanDimFreq.dimFreqDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Payment Mode:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanIpmtMode" name="loanIpmtMode" :disabled="selectDisabled">
                                                <option disabled>(select one)</option>
                                                <option v-for="loanLoanPaymentMode in loanLoanPaymentModes" v-bind:value="loanLoanPaymentMode.paymentModeId">{{ loanLoanPaymentMode.paymentModeDesc }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Prepaid:</label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loan.loanPrepaidPymnts" name="loanPrepaidPymnts" type="number" :readonly="readOnly">
                                        </div>
                                        <span class="col-auto col-form-label col-form-label-sm mt-1">Payments</span>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                            <strong>Penalty:</strong>
                                        </label>
                                        <div class="col my-1">
                                            <input class="form-control form-control-sm" v-model="loan.loanPenRate" name="loanPenRate" type="number" :readonly="readOnly">
                                        </div>
                                        <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Computed:</label>
                                        <div class="col my-1">
                                            <select class="custom-select custom-select-sm" id="" v-model="loan.loanPenMode" name="loanPenMode" :disabled="selectDisabled">
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
                                            <input class="form-control form-control-sm" v-model="loan.loanPenGp" name="loanPenGp" type="number" :readonly="readOnly">
                                        </div>
                                        <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="advance">
                            <div class="form-row justify-content-center">
                                <div class="col-auto">
                                    <div class="form-check form-check-sm my-2">
                                        <input class="form-check-input" v-model="loan.loanIsExcludeSundays" name="loanIsExcludeSundays" type="checkbox">
                                        <label class="form-check-label">EXCLUDE SUNDAYS. Extends the Maturity Date and Excludes Sundays in Interest Computation. Applicable only for Straightline Method.</label>
                                    </div>
                                    <div class="form-check form-check-sm my-2">
                                        <input class="form-check-input" v-model="loan.loanIsExcludeHolidays" name="loanIsExcludeHolidays" type="checkbox">
                                        <label class="form-check-label">EXCLUDE HOLIDAYS. Extends the Maturity Date and Excludes Holidays in Interest Computation. Applicable only for Straightline Method.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <label class="col-auto col-form-label col-form-label-sm mt-1">
                                    <strong>Principal Setup As Basis for Interest Amortization:</strong>
                                </label>
                                <div class="col-sm-3 my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanAmorType" name="loanAmorType" type="text" :readonly="readOnly">
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
                            <a class="nav-link" data-toggle="tab" href="#others" role="tab"> Others</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="duedates">
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Due Date Option:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loan.loanDdFlag" name="loanDdFlag" :disabled="selectDisabled">
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
                                        <input class="form-control form-control-sm" v-model="loan.loanFidDate" name="loanFidDate" type="date" :readonly="readOnly">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">1st Principal Due Date:</label>
                                <div class="col my-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                        <input class="form-control form-control-sm" v-model="loan.loanFpdDate" name="loanFpdDate" type="date" :readonly="readOnly">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Maturity Date:</label>
                                <div class="col my-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                        <input class="form-control form-control-sm" v-model="loan.loanMatDate" name="loanMatDate" type="date" :readonly="readOnly">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Collection Type:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loan.loanCollectType" name="loanCollectType" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="loanLoanCollectType in loanLoanCollectTypes" v-bind:value="loanLoanCollectType.collectTypeId">{{ loanLoanCollectType.collectTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                    <strong>Savings:</strong>
                                </label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanSavAmt" name="loanSavAmt" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                    <strong>Share Capital:</strong>
                                </label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanCbuAmt" name="loanCbuAmt" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                                    <strong>Collection Fee:</strong>
                                </label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanCollFee" name="loanCollFee" type="text" :readonly="readOnly">
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
                                    <select class="custom-select custom-select-sm" id="" v-model="loan.loanMClass" name="loanMClass" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="borrowerClass in borrowerClasses" v-bind:value="borrowerClass.borrowerClassId">{{ borrowerClass.borrowerClassDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Account Officer In-Charge:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanAcctOff" name="loanAcctOff" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Credit Investigator:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanCi" name="loanCi" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mt-2">
                                    <div class="form-check form-check-sm">
                                        <input class="form-check-input" v-model="loan.loanRestRuct" name="loanRestRuct" type="checkbox">
                                        <label class="form-check-label">Restructured</label>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Previous Loan:</label>
                                        <div class="col my-1">
                                            <div class="form-row align-items-center">
                                                <div class="col-sm-2">
                                                    <input class="form-control form-control-sm" v-model="loan.loanXSltCode" name="loanXSltCode" type="text" :readonly="readOnly">
                                                </div>
                                                <span class="col-auto">-</span>
                                                <div class="col">
                                                    <input class="form-control form-control-sm" v-model="loan.loanXRefNo" name="loanXRefNo" type="text" :readonly="readOnly">
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
                                    <select class="custom-select custom-select-sm" id="" v-model="loan.loanSecurity" name="loanSecurity" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="loanLoanSecurity in loanLoanSecurities" v-bind:value="loanLoanSecurity.loanSecurityId">{{ loanLoanSecurity.loanSecurityDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Type of Collateral:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loan.loanCollType" name="loanCollType" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="loanLoanCollateralType in loanLoanCollateralTypes" v-bind:value="loanLoanCollateralType.collateralType">{{ loanLoanCollateralType.collateralTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Appraised Value:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanCollAmt" name="loanCollAmt" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col my-1"><label class="">Description:</label>
                                    <textarea class="form-control form-control-sm" cols="30" id="" v-model="loan.loanCollDesc" name="loanCollDesc" rows="10" :readonly="readOnly"></textarea>
                                </div>
                        </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="others">
                            <div class="form-row">
                                <div class="col my-1">
                                    <label class="">Remarks:</label>
                                    <textarea class="form-control form-control-sm" cols="30" id="" v-model="loan.loanRemarks" name="loanRemarks" rows="10" :readonly="readOnly"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1">Bank:</label>
                                <div class="col my-1">
                                    <select class="custom-select custom-select-sm" id="" v-model="loan.loanBank" name="loanBank" :disabled="selectDisabled">
                                        <option disabled>(select one)</option>
                                        <option v-for="loanLoanBankCode in loanLoanBankCodes" v-bind:value="loanLoanBankCode.bcId">{{ loanLoanBankCode.bcDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Reference Number:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanXxRefno" name="loanXxRefno" type="text" :readonly="readOnly">
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">Credit Limit:</label>
                                <div class="col my-1">
                                    <input class="form-control form-control-sm" v-model="loan.loanCrLimit" name="loanCrLimit" type="text" :readonly="readOnly">
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
                    <router-link to="/loans/loans-master" class="new" :disabled="selectDisabled">
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
            loan: {
                loanBrCode: '',
                loanSlcCode: '',
                loanSltCode: '',
                loanRefNo: '',
                clientIdLoan: '',
                lastName: '',
                firstName: '',
                middleName: '',
                suffix: '',
                acctType: '',
                jointType: '',
                clientType: '',
                accountStatus: '',
                accountName: '',
                dateOpened: '',
                loanStatus: '',
                loanClass: '',
                loanPurpose: '',
                loanIndSection: '',
                loanIndustry: '',
                loanPamt: '',
                loanTrDate: '',
                loanTerms: '',
                loanTermPerd: '',
                loanPpmtMode: '',
                loanRefNo: '',
                loanIntRate: '',
                loanAmorType: '',
                loanDimbFreq: '',
                loanIpmtMode: '',
                loanPrepaidPymnts: '',
                loanPenRate: '',
                loanPenMode: '',
                loanPenGp: '',
                loanIsExcludeSundays: '',
                loanIsExcludeHolidays: '',
                loanDdFlag: '',
                loanFidDate: '',
                loanFpdDate: '',
                loanMatDate: '',
                loanCollectType: '',
                loanSavAmt: '',
                loanCbuAmt: '',
                loanCollfee: '',
                loanMClass: '',
                loanSecurity: '',
                loanCollType: '',
                loanBank: '',
                loanMemberRating: '',
                loanAcctOff: '',
                loanRestRuct: '',
                loanXSltCode: '',
                loanXRefNo: '',
                loanCollAmt: '',
                loanCollDesc: '',
                loanRemarks: '',
                loanXxRefno: '',
                loanCrLimit: '',
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
            loanLoanClasses: [],
            loanLoanPurposes: [],
            loanIndSections: [],
            loanIndDivisions: [],
            loanLoanTermPerds: [],
            loanLoanPaymentModes: [],
            loanLoanCtsTypes: [],
            loanLoanAmorTypes: [],
            loanLoanDimFreqs: [],
            loanLoanDueDateTypes: [],
            loanLoanCollectTypes: [],
            borrowerClasses: [],
            loanLoanSecurities: [],
            loanLoanCollateralTypes: [],
            loanLoanBankCodes: [],
            loanLoanMemberRatings: [],
        }
    },

    mounted() {
        this.brcode = this.$route.params.brcode;
        this.slccode = this.$route.params.slccode;
        this.sltcode = this.$route.params.sltcode;
        this.refno = this.$route.params.refno;
        this.clientid = this.$route.params.clientid;
        if (this.brcode > 0 && this.slccode > 0 && this.sltcode > 0 && this.refno > 0 && this.clientid > 0) {
            this.fetchLoanById(this.brcode, this.slccode, this.sltcode, this.refno, this.clientid);
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
        this.fetchLoanClass();
        this.fetchLoanPurpose();
        this.fetchIndSections();
        this.fetchIndDivisions();
        this.fetchTermPerds();
        this.fetchPaymentModes();
        this.fetchLoanCtsTypes();
        this.fetchAmorTypes();
        this.fetchDimFreqs();
        this.fetchDueDateTypes();
        this.fetchCollectTypes();
        this.fetchBorrowerClass();
        this.fetchLoanSecurities();
        this.fetchLoanCollTypes();
        this.fetchBankCodes();
        this.fetchLoanMemberRatings();
    },

    methods: {
        fetchLoanById(brcode, slccode, sltcode, refno, clientid) {
            fetch(`/api/loan/${brcode}/${slccode}/${sltcode}/${refno}/${clientid}`)
                .then(res => res.json())
                .then(res => {
                    this.loan = res.data[0];
                    console.log(this.loan);
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

        fetchLoanStatus() {
            fetch('/api/slTypes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanSlTypes = res.data;
                    console.log(this.loanLoanSlTypes);
                })
                .catch(err => console.log(err));
        },

        fetchLoanClass() {
            fetch('/api/loanClasses')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanClasses = res.data;
                    console.log(this.loanLoanClasses);
                })
                .catch(err => console.log(err));
        },

        fetchLoanPurpose() {
            fetch('/api/loanPurposes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanPurposes = res.data;
                    console.log(this.loanLoanPurposes);
                })
                .catch(err => console.log(err));
        },

        fetchIndSections() {
            fetch('/api/indSections')
                .then(res => res.json())
                .then(res => {
                    this.loanIndSections = res.data;
                    console.log(this.loanIndSections);
                })
                .catch(err => console.log(err));
        },

        fetchIndDivisions() {
            fetch('/api/indDivisions')
                .then(res => res.json())
                .then(res => {
                    this.loanIndDivisions = res.data;
                    console.log(this.loanIndDivisions);
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

        fetchCollectTypes() {
            fetch('/api/collectTypes')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanCollectTypes = res.data;
                    console.log(this.loanLoanCollectTypes);
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

        fetchLoanSecurities() {
            fetch('/api/loanSecurities')
                .then(res => res.json())
                .then(res => {
                    this.loanLoanSecurities = res.data;
                    console.log(this.loanLoanSecurities);
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

        insertLoan() {
            if (this.edit === false) {
                fetch('/api/loan', {
                    method: 'post',
                    body: JSON.stringify(this.loan),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => {
                    res.json();
                    this.loan.loanBrCode = '',
                    this.loan.loanSltCode = '',
                    this.loan.loanRefNo = '',
                    this.loan.clientIdLoan = '',
                    this.loan.loanStatus = '',
                    this.loan.loanClass = '',
                    this.loan.loanPurpose = '',
                    this.loan.loanIndSection = '',
                    this.loan.loanIndustry = '',
                    this.loan.loanPamt = '',
                    this.loan.loanTrDate = '',
                    this.loan.loanTerms = '',
                    this.loan.loanTermPerd = '',
                    this.loan.loanPpmtMode = '',
                    this.loan.loanRefNo = '',
                    this.loan.loanIntRate = '',
                    this.loan.loanAmorType = '',
                    this.loan.loanDimbFreq = '',
                    this.loan.loanIpmtMode = '',
                    this.loan.loanPrepaidPymnts = '',
                    this.loan.loanPenRate = '',
                    this.loan.loanPenMode = '',
                    this.loan.loanPenGp = '',
                    this.loan.loanIsExcludeSundays = '',
                    this.loan.loanIsExcludeHolidays = '',
                    this.loan.loanDdFlag = '',
                    this.loan.loanFidDate = '',
                    this.loan.loanFpdDate = '',
                    this.loan.loanMatDate = '',
                    this.loan.loanCollectType = '',
                    this.loan.loanSavAmt = '',
                    this.loan.loanCbuAmt = '',
                    this.loan.loanCollfee = '',
                    this.loan.loanMClass = '',
                    this.loan.loanSecurity = '',
                    this.loan.loanCollType = '',
                    this.loan.loanBank = '',
                    this.loan.loanMemberRating = '',
                    this.loan.loanAcctOff = '',
                    this.loan.loanRestRuct = '',
                    this.loan.loanXSltCode = '',
                    this.loan.loanXRefNo = '',
                    this.loan.loanCollAmt = '',
                    this.loan.loanCollDesc = '',
                    this.loan.loanRemarks = '',
                    this.loan.loanXxRefno = '',
                    this.loan.loanCrLimit = '',
                    this.readOnly = true;
                    this.selectDisabled = true;
                    setTimeout(() => {
                        this.successAdd = false;
                    }, 2000),
                    console.log('Loan Added');
                })
                .catch(err => console.log(err));
            } else {
                fetch('/api/loan', {
                    method: 'put',
                    body: JSON.stringify(this.loan),
                    headers: { 'content-type': 'application/json' }
                })
                .then(res => {
                    res.json();
                    this.successEdit = true;
                    this.readOnly = true;
                    this.selectDisabled = true;
                    setTimeout(() => {
                        this.successEdit = false;
                    }, 2000),
                    console.log('Loan Update');
                    this.fetchLoanById(this.$route.params.brcode, this.$route.params.slccode, this.$route.params.sltcode, this.$route.params.refno, this.$route.params.clientid);
                })
                .catch(err => console.log(err));
            }
        },

        editLoan(loan) {
            this.edit = true;
            this.readOnly = false;
            this.selectDisabled = false;
            this.loan.loanBrCode = loan.loanBrCode;
            this.loan.loanSltCode = loan.loanSltCode;
            this.loan.loanRefNo = loan.loanRefNo;
            this.loan.clientIdLoan = loan.clientIdLoan;
            this.loan.loanStatus = loan.loanStatus;
            this.loan.loanClass = loan.loanClass;
            this.loan.loanPurpose = loan.loanPurpose;
            this.loan.loanIndSection = loan.loanIndSection;
            this.loan.loanIndustry = loan.loanIndustry;
            this.loan.loanPamt = loan.loanPamt;
            this.loan.loanTrDate = loan.loanTrDate;
            this.loan.loanTerms = loan.loanTerms;
            this.loan.loanTermPerd = loan.loanTermPerd;
            this.loan.loanPpmtMode = loan.loanPpmtMode;
            this.loan.loanRefNo = loan.loanRefNo;
            this.loan.loanIntRate = loan.loanIntRate;
            this.loan.loanAmorType = loan.loanAmorType;
            this.loan.loanDimbFreq = loan.loanDimbFreq;
            this.loan.loanIpmtMode = loan.loanIpmtMode;
            this.loan.loanPrepaidPymnts = loan.loanPrepaidPymnts;
            this.loan.loanPenRate = loan.loanPenRate;
            this.loan.loanPenMode = loan.loanPenMode;
            this.loan.loanPenGp = loan.loanPenGp;
            this.loan.loanIsExcludeSundays = loan.loanIsExcludeSundays;
            this.loan.loanIsExcludeHolidays = loan.loanIsExcludeHolidays;
            this.loan.loanDdFlag = loan.loanDdFlag;
            this.loan.loanFidDate = loan.loanFidDate;
            this.loan.loanFpdDate = loan.loanFpdDate;
            this.loan.loanMatDate = loan.loanMatDate;
            this.loan.loanCollectType = loan.loanCollectType;
            this.loan.loanSavAmt = loan.loanSavAmt;
            this.loan.loanCbuAmt = loan.loanCbuAmt;
            this.loan.loanCollfee = loan.loanCollfee;
            this.loan.loanMClass = loan.loanMClass;
            this.loan.loanSecurity = loan.loanSecurity;
            this.loan.loanCollType = loan.loanCollType;
            this.loan.loanBank = loan.loanBank;
            this.loan.loanMemberRating = loan.loanMemberRating;
            this.loan.loanAcctOff = loan.loanAcctOff;
            this.loan.loanRestRuct = loan.loanRestRuct;
            this.loan.loanXSltCode = loan.loanXSltCode;
            this.loan.loanXRefNo = loan.loanXRefNo;
            this.loan.loanCollAmt = loan.loanCollAmt;
            this.loan.loanCollDesc = loan.loanCollDesc;
            this.loan.loanRemarks = loan.loanRemarks;
            this.loan.loanXxRefno = loan.loanXxRefno;
            this.loan.loanCrLimit = loan.loanCrLimit;
        },

        deleteLoanById() {
            const brcode = this.$route.params.brcode;
            const slccode = this.$route.params.slccode;
            const sltcode = this.$route.params.sltcode;
            const refno = this.$route.params.refno;
            const clientid = this.$route.params.clientid;
            if (confirm('Are You Sure?')) {
                fetch(`/api/loan/${brcode}/${slccode}/${sltcode}/${refno}/${clientid}`,{
                    method: 'delete'
                })
                .then(res => {
                    res.json();
                    this.loan.loanBrCode = '',
                    this.loan.loanSltCode = '',
                    this.loan.loanRefNo = '',
                    this.loan.clientIdLoan = '',
                    this.loan.loanStatus = '',
                    this.loan.loanClass = '',
                    this.loan.loanPurpose = '',
                    this.loan.loanIndSection = '',
                    this.loan.loanIndustry = '',
                    this.loan.loanPamt = '',
                    this.loan.loanTrDate = '',
                    this.loan.loanTerms = '',
                    this.loan.loanTermPerd = '',
                    this.loan.loanPpmtMode = '',
                    this.loan.loanRefNo = '',
                    this.loan.loanIntRate = '',
                    this.loan.loanAmorType = '',
                    this.loan.loanDimbFreq = '',
                    this.loan.loanIpmtMode = '',
                    this.loan.loanPrepaidPymnts = '',
                    this.loan.loanPenRate = '',
                    this.loan.loanPenMode = '',
                    this.loan.loanPenGp = '',
                    this.loan.loanIsExcludeSundays = '',
                    this.loan.loanIsExcludeHolidays = '',
                    this.loan.loanDdFlag = '',
                    this.loan.loanFidDate = '',
                    this.loan.loanFpdDate = '',
                    this.loan.loanMatDate = '',
                    this.loan.loanCollectType = '',
                    this.loan.loanSavAmt = '',
                    this.loan.loanCbuAmt = '',
                    this.loan.loanCollfee = '',
                    this.loan.loanMClass = '',
                    this.loan.loanSecurity = '',
                    this.loan.loanCollType = '',
                    this.loan.loanBank = '',
                    this.loan.loanMemberRating = '',
                    this.loan.loanAcctOff = '',
                    this.loan.loanRestRuct = '',
                    this.loan.loanXSltCode = '',
                    this.loan.loanXRefNo = '',
                    this.loan.loanCollAmt = '',
                    this.loan.loanCollDesc = '',
                    this.loan.loanRemarks = '',
                    this.loan.loanXxRefno = '',
                    this.loan.loanCrLimit = '',
                    console.log('Loan Removed');
                })
                .catch(err => console.log(err));
            }
        },

        insertNew() {
            this.readOnly = false;
            this.selectDisabled = false;
            this.loan.loanSltCode = '';
            this.loan.loanStatus = '';
            this.loan.loanClass = '';
            this.loan.loanPurpose = '';
            this.loan.loanIndSection = '';
            this.loan.loanIndustry = '';
            this.loan.loanPamt = '';
            this.loan.loanTrDate = new Date().toISOString().slice(0,10);
            this.loan.loanTerms = '';
            this.loan.loanTermPerd = '';
            this.loan.loanPpmtMode = '';
            this.loan.loanRefNo = '';
            this.loan.loanIntRate = '';
            this.loan.loanAmorType = '';
            this.loan.loanDimbFreq = '';
            this.loan.loanIpmtMode = '';
            this.loan.loanPrepaidPymnts = '';
            this.loan.loanPenRate = '';
            this.loan.loanPenMode = '';
            this.loan.loanPenGp = '';
            this.loan.loanIsExcludeSundays = '';
            this.loan.loanIsExcludeHolidays = '';
            this.loan.loanDdFlag = '';
            this.loan.loanFidDate = '';
            this.loan.loanFpdDate = '';
            this.loan.loanMatDate = '';
            this.loan.loanCollectType = '';
            this.loan.loanSavAmt = '';
            this.loan.loanCbuAmt = '';
            this.loan.loanCollfee = '';
            this.loan.loanMClass = '';
            this.loan.loanSecurity = '';
            this.loan.loanCollType = '';
            this.loan.loanBank = '';
            this.loan.loanMemberRating = '';
            this.loan.loanAcctOff = '';
            this.loan.loanRestRuct = '';
            this.loan.loanXSltCode = '';
            this.loan.loanXRefNo = '';
            this.loan.loanCollAmt = '';
            this.loan.loanCollDesc = '';
            this.loan.loanRemarks = '';
            this.loan.loanXxRefno = '';
            this.loan.loanCrLimit = '';
        },

        cancel() {
            this.readOnly = true;
            this.selectDisabled = true;
            this.loan.loanSltCode = '';
            this.loan.lastName = '';
            this.loan.firstName = '';
            this.loan.middleName = '';
            this.loan.suffix = '';
            this.loan.acctType = '';
            this.loan.jointType = '';
            this.loan.clientType = '';
            this.loan.accountStatus = '';
            this.loan.accountName = '';
            this.loan.dateOpened = '';
            this.loan.loanStatus = '';
            this.loan.loanClass = '';
            this.loan.loanPurpose = '';
            this.loan.loanIndSection = '';
            this.loan.loanIndustry = '';
            this.loan.loanPamt = '';
            this.loan.loanTrDate = '';
            this.loan.loanTerms = '';
            this.loan.loanTermPerd = '';
            this.loan.loanPpmtMode = '';
            this.loan.loanRefNo = '';
            this.loan.loanIntRate = '';
            this.loan.loanAmorType = '';
            this.loan.loanDimbFreq = '';
            this.loan.loanIpmtMode = '';
            this.loan.loanPrepaidPymnts = '';
            this.loan.loanPenRate = '';
            this.loan.loanPenMode = '';
            this.loan.loanPenGp = '';
            this.loan.loanIsExcludeSundays = '';
            this.loan.loanIsExcludeHolidays = '';
            this.loan.loanDdFlag = '';
            this.loan.loanFidDate = '';
            this.loan.loanFpdDate = '';
            this.loan.loanMatDate = '';
            this.loan.loanCollectType = '';
            this.loan.loanSavAmt = '';
            this.loan.loanCbuAmt = '';
            this.loan.loanCollfee = '';
            this.loan.loanMClass = '';
            this.loan.loanSecurity = '';
            this.loan.loanCollType = '';
            this.loan.loanBank = '';
            this.loan.loanMemberRating = '';
            this.loan.loanAcctOff = '';
            this.loan.loanRestRuct = '';
            this.loan.loanXSltCode = '';
            this.loan.loanXRefNo = '';
            this.loan.loanCollAmt = '';
            this.loan.loanCollDesc = '';
            this.loan.loanRemarks = '';
            this.loan.loanXxRefno = '';
            this.loan.loanCrLimit = '';
        }
    }
}
</script>

<style>
.loans-master-inquiry {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}

.bg-light-green {
    background-color: #20c997 !important;
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

.bg-light-pink {
    background-color: #ef80ff !important;
}
</style>