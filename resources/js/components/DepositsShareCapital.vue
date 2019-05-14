<template>
<div class="share-capital">

    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" tabindex="0" id="menuDropdown-1">Tools</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <router-link v-bind:to="'/deposits/share-capital-search/'+client.clientId+'/share-capital-search-deposit'" class="btn btn-sm btn-outline-primary mr-4" v-if="this.$route.params.id">
                    <i class="fa fa-search mr-1"></i><span>Find</span>
                </router-link>
                <router-link to="/deposits/share-capital-search" class="btn btn-sm btn-outline-primary mr-4" v-else>
                    <i class="fa fa-search mr-1"></i><span>Find</span>
                </router-link>

                <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="insertNew" v-if="this.$route.params.id">
                    <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                </button>
                <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="insertNew" v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                    <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                </button>
                <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
                    <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                </button>
                
                <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="editShareCapital(sharecapital)" v-if=" this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                    <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                </button>
                <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
                    <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                </button>
                
                <button class="btn btn-sm btn-outline-primary mr-4" type="button" @click="deleteShareCapital" v-if=" this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                    <i class="fa fa-trash mr-1"></i><span><u>D</u>elete</span>
                </button>
                <button class="btn btn-sm btn-outline-secondary mr-4" type="button" @click="deleteShareCapital" v-else>
                    <i class="fa fa-trash mr-1"></i><span><u>D</u>elete</span>
                </button>
            </li>
        </ul>
    </nav>

    <div class="alert alert-success" v-if="successAdd" transition="expand">Share Successfully Added.</div>

    <div class="alert alert-success" v-if="successEdit" transition="expand">Share Successfully Updated.</div>
    
    <form @submit.prevent="insertShare">
        <div class="form-row py-2">
            <div class="col">
                <fieldset class="border p-2 bg-light">
                    <h5>Account Info</h5>
                    <div class="form-row align-items-stretch">
                        <div class="col-md-7">
                            <div class="form-row justify-content-between">
                                <div class="col-sm-4 my-1">
                                    <label class="col-form-label col-form-label-sm" for="clientId">Client ID:</label>
                                    <input class="form-control form-control-sm bg-light-green border-0" :value="client.brCode+'-'+this.webId2+'-'+client.chkDgt" name="clientIdSc" type="text" readonly v-if="this.$route.params.id">
                                    <input class="form-control form-control-sm bg-light-green border-0" :value="sharecapital.scBrCode+'-'+this.webId2+'-'+sharecapital.chkDgt" name="clientIdSc" type="text" readonly v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                    <input class="form-control form-control-sm bg-light-green border-0" v-model="sharecapital.clientIdSc" name="clientIdSc" type="text" readonly v-else>
                                </div>
                                <fieldset class="col-sm-3 my-1 border pb-3 px-3 mx-1">
                                    <legend class="col-form-label col-form-label-sm w-auto px-1" for="rating">RATING</legend>
                                    <select class="custom-select custom-select-sm" name="rating">
                                        <option value=""></option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="form-row justify-content-between">
                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="lastName">Last Name</label>
                                    <input class="form-control form-control-sm" v-model="client.lastName" name="lastName" type="text" readonly v-if="this.$route.params.id">
                                    <input class="form-control form-control-sm" v-model="sharecapital.lastName" name="lastName" type="text" readonly v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                    <input class="form-control form-control-sm" v-model="sharecapital.lastName" name="lastName" type="text" readonly v-else>
                                </div>

                                <div class="col-sm-auto d-none d-sm-block">
                                    <label></label>
                                    <p style="margin: 25px 0 0 -5px; font-weight: bolder;">,</p>
                                </div>

                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="firstName">First Name</label>
                                    <input class="form-control form-control-sm" v-model="client.firstName" name="firstName" type="text" readonly v-if="this.$route.params.id">
                                    <input class="form-control form-control-sm" v-model="sharecapital.firstName" name="firstName" type="text" readonly v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                    <input class="form-control form-control-sm" v-model="sharecapital.firstName" name="firstName" type="text" readonly v-else>
                                </div>

                                <div class="col-sm my-1">
                                    <label class="col-form-label col-form-label-sm" for="middleName">Middle Name</label>
                                    <input class="form-control form-control-sm" v-model="client.middleName" name="middleName" type="text" readonly v-if="this.$route.params.id">
                                    <input class="form-control form-control-sm" v-model="sharecapital.middleName" name="middleName" type="text" readonly v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                    <input class="form-control form-control-sm" v-model="sharecapital.middleName" name="middleName" type="text" readonly v-else>
                                </div>
                                
                                <div class="col-sm-1 my-1">
                                    <label class="col-form-label col-form-label-sm" for="suffix">Suffix</label>
                                    <input class="form-control form-control-sm" v-model="client.suffix" name="suffix" type="text" readonly v-if="this.$route.params.id">
                                    <input class="form-control form-control-sm" v-model="sharecapital.suffix" name="suffix" type="text" readonly v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                    <input class="form-control form-control-sm" v-model="sharecapital.suffix" name="suffix" type="text" readonly v-else>
                                </div>
                            </div>

                            <div class="form-row mb-2 justify-content-between">
                                <fieldset class="col-sm my-1 border pb-3 px-3 mx-1">
                                    <legend class="col-form-label col-form-label-sm w-auto px-1" for="orgName">Organization Name</legend>
                                    <input class="form-control form-control-sm" v-model="client.accountName" name="accountName" type="text" readonly v-if="this.$route.params.id">
                                    <input class="form-control form-control-sm" v-model="sharecapital.accountName" name="accountName" type="text" readonly v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                    <input class="form-control form-control-sm" v-model="sharecapital.accountName" name="accountName" type="text" readonly v-else>
                                </fieldset>
                                <fieldset class="col-md-3 col-sm-4 my-1 border pb-3 px-3 mx-1">
                                    <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Date Opened</legend>
                                    <input class="form-control form-control-sm" v-model="client.dateOpened" name="dateOpened" type="date" readonly v-if="this.$route.params.id">
                                    <input class="form-control form-control-sm" v-model="sharecapital.dateOpened" name="dateOpened" type="date" readonly v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                    <input class="form-control form-control-sm" v-model="sharecapital.dateOpened" name="dateOpened" type="date" readonly v-else>
                                </fieldset>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-row">
                                <label class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="acctType">Acct Type:</label>
                                <div class="col-sm-6 my-1">
                                    <select class="custom-select custom-select-sm" v-model="client.acctType" name="acctType" disabled v-if="this.$route.params.id">
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="sharecapital.acctType" name="acctType" disabled v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="sharecapital.acctType" name="acctType" disabled v-else>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctType in clientAcctTypes" v-bind:value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="jointType">Joint Type:</label>
                                <div class="col-sm-6 my-1">
                                    <select class="custom-select custom-select-sm" v-model="client.jointType" name="jntType" disabled v-if="this.$route.params.id">
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="sharecapital.jointType" name="jntType" disabled v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="sharecapital.jointType" name="jntType" disabled v-else>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientJointType in clientJointTypes" v-bind:value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="clientType">Client Type:</label>
                                <div class="col-sm-6 my-1">
                                    <select class="custom-select custom-select-sm" v-model="client.clientType" name="acctType" disabled v-if="this.$route.params.id">
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="sharecapital.clientType" name="acctType" disabled v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="sharecapital.clientType" name="acctType" disabled v-else>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientClientType in clientClientTypes" v-bind:value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="acctStatus">Acct Status:</label>
                                <div class="col-sm-6 my-1">
                                    <select class="custom-select custom-select-sm" v-model="client.accountStatus" name="accountStatus" disabled v-if="this.$route.params.id">
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctStatus in clientAcctStatuses" v-bind:value="clientAcctStatus.acctStatId">{{ clientAcctStatus.acctStatDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="sharecapital.accountStatus" name="accountStatus" disabled v-else-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctStatus in clientAcctStatuses" v-bind:value="clientAcctStatus.acctStatId">{{ clientAcctStatus.acctStatDesc }}</option>
                                    </select>
                                    <select class="custom-select custom-select-sm" v-model="sharecapital.accountStatus" name="accountStatus" disabled v-else>
                                        <option disabled>(select one)</option>
                                        <option v-for="clientAcctStatus in clientAcctStatuses" v-bind:value="clientAcctStatus.acctStatId">{{ clientAcctStatus.acctStatDesc }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div> 
        
        <div class="form-row mt-2">
            <div class="col-md-7 align-items-stretch custom-tabs">
                <ul role="tablist" class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="" role="tab">
                            <span>Se<u>t</u>up</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active">
                        <div class="form-row justify-content-between">
                            <div class="col">
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="depositType">Branch:</label>
                                    <div class="col-sm my-1">
                                        <select class="custom-select custom-select-sm" v-model="sharecapital.scBrCode" name="scBrCode" :disabled="selectDisabled">
                                            <option disabled>(select one)</option>
                                            <option v-for="branch in branches" v-bind:key="branch.id" :value="branch.branchesId">{{ branch.branchesDesc }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="depositType">Deposit Type:</label>
                                    <div class="col-sm my-1">
                                        <select class="custom-select custom-select-sm" v-model="sharecapital.scSltCode" name="scSltCode" :disabled="selectDisabled">
                                            <option disabled>(select one)</option>
                                            <option v-for="depositDepositType in depositDepositTypes" v-bind:value="depositDepositType.slTypeSltCode">{{ depositDepositType.slTypeMDesc }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="accountNum">Account Number:</label>
                                    <div class="col-sm my-1">
                                        <input class="form-control form-control-sm bg-light-green border-0" :value="('00000000'+sharecapital.scRefNo).slice(-8)" name="scRefNo" type="text" readonly v-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc">
                                        <input class="form-control form-control-sm bg-light-green border-0" v-model="sharecapital.scRefNo" name="scRefNo" type="text" readonly v-else>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-between">
                            <div class="col">
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="dateOpened">Date Opened:</label>
                                    <div class="col-sm my-1">
                                        <input class="form-control form-control-sm" v-model="sharecapital.scTrDate" name="scTrDate" type="date" :readonly="readOnly">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="status">Status:</label>
                                    <div class="col-sm my-1">
                                        <select class="custom-select custom-select-sm" v-model="sharecapital.scStatus" name="scStatus" :disabled="selectDisabled">
                                            <option disabled>(select one)</option>
                                            <option v-for="depositDepositStatuses in depositDepositStatuses" v-bind:value="depositDepositStatuses.ctsTypeCode">{{ depositDepositStatuses.ctsTypeDesc }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="form-row justify-content-between">
                            <div class="col align-self-end">
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Minimum Balance:</label>
                                    <div class="col-sm my-1">
                                        <input class="form-control form-control-sm text-right" v-model="sharecapital.scMinBal" name="scMinBal" type="text" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="totalBalance">Total Balance:</label>
                                    <div class="col-sm my-1">
                                        <input class="form-control form-control-sm bg-light-pink border-0 text-right" name="totalBalance" type="text" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="floats">Floats:</label>
                                    <div class="col-sm my-1">
                                        <input class="form-control form-control-sm bg-light-pink border-0 text-right" name="floats" type="text" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="encumbered">Encumbered:</label>
                                    <div class="col-sm my-1">
                                        <input class="form-control form-control-sm bg-light-pink border-0 text-right" name="encumbered" type="text" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="availBalance">Avail. Balance:</label>
                                    <div class="col-sm my-1">
                                        <input class="form-control form-control-sm bg-light-pink border-0 text-right" name="availBalance" type="text" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 align-items-stretch custom-tabs">
                <ul role="tablist" class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="#holdouts" data-toggle="tab" role="tab">
                            <span><u>H</u>oldouts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#remarks" data-toggle="tab" role="tab">
                            <span><u>R</u>emarks</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="holdouts">
                        <div class="form-row justify-content-between">
                            <div class="col-sm my-1">
                                <label class="col-form-label col-form-label-sm" for="clientId">Amount Held:</label>
                                <input class="form-control form-control-sm" name="clientId" type="text" :readonly="readOnly">
                            </div>
                            <div class="col-sm my-1">
                                <label class="col-form-label col-form-label-sm" for="reason">Reason for Hold-out:</label>
                                <select class="custom-select custom-select-sm" v-model="sharecapital.holdReason" name="holdReason" :disabled="selectDisabled">
                                    <option disabled>(select one)</option>
                                    <option v-for="depositHoldCode in depositHoldCodes" v-bind:value="depositHoldCode.holdCodeId">{{ depositHoldCode.holdCodeDesc }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row justify-content-center mt-5 mb-2">
                            <button class="btn btn-sm btn-outline-secondary mr-1" disabled="" type="button">
                                <i class="fa fa-plus mr-1"></i><span>Add</span>
                            </button>
                            <button class="btn btn-sm btn-outline-secondary mr-1" disabled="" type="button">
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
                                        <td>1</td
                                        ><td>30</td
                                        ><td>test</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>30</td>
                                        <td>test</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="remarks">
                        <textarea class="form-control form-control-sm" cols="30" id="" v-model="sharecapital.scRemarks" name="scRemarks" rows="10" :readonly="readOnly"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 20px;">
            <button class="btn btn-secondary mr-1" type="submit" v-if="selectDisabled">
                <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
            </button>
            <button class="btn btn-success mr-1" type="submit" v-else>
                <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
            </button>

            <button class="btn btn-secondary" type="button" v-if="selectDisabled">
                <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
            </button>
            <button class="btn btn-outline-primary" type="button" @click="cancel" v-else>
                <router-link to="/deposits/share-capital">
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
            sharecapital: {
                scBrCode: "", 
                scSlcCode: "", 
                scSltCode: "", 
                scRefNo: "", 
                clientIdSc: "",
                lastName: "",
                firstName: "",
                middleName: "",
                suffix: "",
                chkDgt: "",
                alertLevel: "",
                department: "",
                acctType: "",
                accountName: "",
                jointType: "",
                clientType: "",
                accountStatus: "",
                dateOpened: "", 
                scTrDate: "",
                scStatus: "",
                scMinBal: "", 
                scUpdDateTime: "", 
                scRemarks: "", 
                scUpdUser: "",
                holdReason: "",
            },

            client: {
                brCode: "",
                clientId: "",
                chkDgt: "",
                lastName: "",
                firstName: "",
                middleName: "",
                alertLevel: "",
                department: "",
                acctType: "",
                accountName: "",
                jointType: "",
                clientType: "",
                accountStatus: "",
                referenceId: "",
                dateOpened: ""
            },

            successAdd: "",

            successEdit: "",

            selectDisabled: true,

            readOnly: true,

            edit: false,

            clientAcctTypes: [],
            clientJointTypes: [],
            clientClientTypes: [],
            clientAcctStatuses: [],
            depositDepositTypes: [],
            depositDepositStatuses: [],
            depositHoldCodes: [],
            branches: [],

            webId: "",
            webId2: "",
        }
    },

    mounted() {
        this.scBrCode = this.$route.params.scBrCode;
        this.scSlcCode = this.$route.params.scSlcCode;
        this.scSltCode = this.$route.params.scSltCode;
        this.scRefNo = this.$route.params.scRefNo;
        this.clientIdSc = this.$route.params.clientIdSc;
        if (this.scBrCode > 0 && this.scSlcCode > 0 && this.scSltCode > 0 && this.scRefNo > 0 && this.clientIdSc) {
            this.fetchShareCapital(this.scBrCode, this.scSlcCode, this.scSltCode, this.scRefNo, this.clientIdSc);
        }

        this.paramId = this.$route.params.id;
        if (this.paramId > 0) {
            this.fetchClient(this.paramId);
        }
    },

    created() {
        this.fetchAcctTypes();
        this.fetchJointTypes();
        this.fetchClientTypes();
        this.fetchAcctStatuses();
        this.fetchDepositTypes();
        this.fetchDepositStatus();
        this.fetchDepositHoldCodes();
        this.fetchBranches();
    },

    methods: {
        fetchShareCapital(scBrCode, scSlcCode, scSltCode, scRefNo, clientIdSc){
            fetch(`/api/sc/${scBrCode}/${scSlcCode}/${scSltCode}/${scRefNo}/${clientIdSc}`)
                .then(res => res.json())
                .then(res => {
                    this.sharecapital = res.data[0];
                    this.webId = ("00000000"+this.sharecapital.clientIdSc).slice(-8);
                    this.webId2 = "W"+this.webId;
                    console.log(this.sharecapital);
                })
                .catch(err => console.log(err));
        },

        fetchClient(id) {
            fetch(`/api/client/${id}`)
                .then(res => res.json())
                .then(res => {
                    this.client = res.data[0];
                    this.webId = ("00000000"+this.client.clientId).slice(-8);
                    this.webId2 = "W"+this.webId;
                    console.log(this.client);
                })
                .catch(err => console.log(err));
        },

        fetchBranches() {
            fetch("/api/branches")
                .then(res => res.json())
                .then(res => {
                    this.branches = res.data;
                    console.log(this.branches);
                })
                .catch(err => console.log(err));
        },

        fetchAcctTypes() {
            fetch("/api/acctTypes")
                .then(res => res.json())
                .then(res => {
                    this.clientAcctTypes = res.data;
                    console.log(this.clientAcctTypes);
                })
                .catch(err => console.log(err));
        },

        fetchJointTypes() {
            fetch("/api/jointTypes")
                .then(res => res.json())
                .then(res => {
                    this.clientJointTypes = res.data;
                    console.log(this.clientJointTypes);
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

        fetchAcctStatuses() {
            fetch("/api/acctStatuses")
                .then(res => res.json())
                .then(res => {
                    this.clientAcctStatuses = res.data;
                    console.log(this.clientAcctStatuses);
                })
                .catch(err => console.log(err));
        },

        fetchDepositTypes() {
            fetch("/api/slTypesSc")
                .then(res => res.json())
                .then(res => {
                    this.depositDepositTypes = res.data;
                    console.log(this.depositDepositTypes);
                })
                .catch(err => console.log(err));
        },

        fetchDepositStatus(){
            fetch("/api/ctsTypes")
                .then(res => res.json())
                .then(res => {
                    this.depositDepositStatuses = res.data;
                    console.log(this.depositDepositStatuses);
                })
                .catch(err => console.log(err));
        },

        fetchDepositHoldCodes(){
            fetch("/api/holdCodes")
                .then(res => res.json())
                .then(res => {
                    this.depositHoldCodes = res.data;
                    console.log(this.depositHoldCodes);
                })
                .catch(err => console.log(err));
        },

        insertShare() {
            if (this.edit === false) {
                fetch("/api/sc", {
                    method: "post",
                    body: JSON.stringify(this.sharecapital),
                    headers: { "content-type": "application/json" }
                })
                .then(res => {
                    this.sharecapital.scBrCode = ""; 
                    this.sharecapital.scSlcCode = ""; 
                    this.sharecapital.scSltCode = "";
                    this.sharecapital.scRefNo = "";
                    this.sharecapital.clientIdSc ="",
                    this.sharecapital.lastName ="",
                    this.sharecapital.firstName ="",
                    this.sharecapital.middleName ="",
                    this.sharecapital.suffix = "",
                    this.sharecapital.alertLevel ="",
                    this.sharecapital.department = "",
                    this.sharecapital.acctType = "",
                    this.sharecapital.accountName = "",
                    this.sharecapital.jointType = "",
                    this.sharecapital.clientType = "",
                    this.sharecapital.accountStatus = "",
                    this.sharecapital.dateOpened = "", 
                    this.sharecapital.scTrDate = ""; 
                    this.sharecapital.scStatus = "";
                    this.sharecapital.scMinBal = "";
                    this.sharecapital.scUpdDateTime = ""; 
                    this.sharecapital.scRemarks = ""; 
                    this.sharecapital.scUpdUser = "";
                    this.sharecapital.holdReason = "";
                    this.successAdd = true;
                    this.readOnly = true;
                    this.selectDisabled = true;
                    setTimeout(() => {
                        this.successAdd = false;
                    }, 2000),
                    console.log("Share Capital Added");
                })
                .catch(err => console.log(err));
            } else {
                fetch("/api/sc", {
                    method: "put",
                    body: JSON.stringify(this.sharecapital),
                    headers: { "content-type": "application/json" }
                })
                .then(res => {
                    res.json();
                    this.successEdit = true;
                    this.readOnly = true;
                    this.selectDisabled = true;
                    setTimeout(() => {
                        this.successEdit = false;
                    }, 2000),
                    console.log("Share Capital Updated");
                    this.fetchShareCapital(this.$route.params.scBrCode, this.$route.params.scSlcCode, this.$route.params.scSltCode, this.$route.params.scRefNo, this.$route.params.clientIdSc);
                })
                .catch(err => console.log(err));
            }
        },

        editShareCapital(sharecapital) {
            this.edit = true;
            this.readOnly = false;
            this.selectDisabled = false;
            this.sharecapital.scBrCode = sharecapital.scBrCode; 
            this.sharecapital.scSlcCode = sharecapital.scSlcCode; 
            this.sharecapital.scSltCode = sharecapital.scSltCode;
            this.sharecapital.scRefNo = sharecapital.scRefNo;
            this.sharecapital.scTrDate = sharecapital.scTrDate; 
            this.sharecapital.scStatus = sharecapital.scStatus;
            this.sharecapital.scMinBal = sharecapital.scMinBal;
            this.sharecapital.scUpdDateTime = sharecapital.scUpdDateTime; 
            this.sharecapital.scRemarks = sharecapital.scRemarks; 
            this.sharecapital.scUpdUser = sharecapital.scUpdUser;
            this.sharecapital.holdReason = sharecapital.holdReason;
        },

        deleteShareCapital() {
            const scBrCode = this.$route.params.scBrCode;
            const scSlcCode = this.$route.params.scSlcCode;
            const scSltCode = this.$route.params.scSltCode;
            const scRefNo = this.$route.params.scRefNo;
            const clientIdSc = this.$route.params.clientIdSc;
            if (confirm("Are you sure?")) {
                fetch(`/api/sc/${scBrCode}/${scSlcCode}/${scSltCode}/${scRefNo}/${clientIdSc}`, {
                    method: "delete"
                })
                .then(res => {
                    res.json();
                    this.sharecapital.scBrCode = ""; 
                    this.sharecapital.scSlcCode = ""; 
                    this.sharecapital.scSltCode = ""; 
                    this.sharecapital.scRefNo = "";
                    this.sharecapital.clientIdSc = "",
                    this.sharecapital.lastName = "";
                    this.sharecapital.firstName = "";
                    this.sharecapital.middleName = "";
                    this.sharecapital.suffix = "";
                    this.sharecapital.alertLevel = "";
                    this.sharecapital.department = "";
                    this.sharecapital.acctType = "";
                    this.sharecapital.accountName = "";
                    this.sharecapital.jointType = "";
                    this.sharecapital.clientType = "";
                    this.sharecapital.accountStatus = "";
                    this.sharecapital.dateOpened = ""; 
                    this.sharecapital.scTrDate = "";
                    this.sharecapital.scStatus = "";
                    this.sharecapital.scMinBal = "";
                    this.sharecapital.scUpdDateTime = "";
                    this.sharecapital.scRemarks = "";
                    this.sharecapital.scUpdUser = "";
                    this.sharecapital.holdReason = "";
                    console.log("Share Capital Delete");
                })
                .catch(err => console.log(err));
            }
        },

        insertNew() {
            this.readOnly = false;
            this.selectDisabled = false;
            if (this.$route.params.id) {
                this.sharecapital.clientIdSc = this.$route.params.id;
            } else if(this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc) {
                this.sharecapital.clientIdSc = this.$route.params.clientIdSc;
            }
            this.sharecapital.scSltCode = "";
            this.sharecapital.scRefNo = "";
            this.sharecapital.scTrDate = new Date().toISOString().slice(0, 10); 
            this.sharecapital.scStatus = "";
            this.sharecapital.scMinBal = "";
            this.sharecapital.scUpdDateTime = ""; 
            this.sharecapital.scRemarks = ""; 
            this.sharecapital.scUpdUser = "";
            this.sharecapital.holdReason = "";
        },

        cancel() {
            this.readOnly = true;
            this.selectDisabled = true;
            this.sharecapital.scBrCode = ""; 
            this.sharecapital.scSlcCode = ""; 
            this.sharecapital.scSltCode = ""; 
            this.sharecapital.scRefNo = "";
            this.sharecapital.clientIdSc = "",
            this.sharecapital.lastName = "";
            this.sharecapital.firstName = "";
            this.sharecapital.middleName = "";
            this.sharecapital.suffix = "";
            this.sharecapital.alertLevel = "";
            this.sharecapital.department = "";
            this.sharecapital.acctType = "";
            this.sharecapital.accountName = "";
            this.sharecapital.jointType = "";
            this.sharecapital.clientType = "";
            this.sharecapital.accountStatus = "";
            this.sharecapital.dateOpened = ""; 
            this.sharecapital.scTrDate = "";
            this.sharecapital.scStatus = "";
            this.sharecapital.scMinBal = "";
            this.sharecapital.scUpdDateTime = "";
            this.sharecapital.scRemarks = "";
            this.sharecapital.scUpdUser = "";
            this.sharecapital.holdReason = "";
        }
    }
}
</script>

<style>
.time-deposit {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}

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

.custom-tab > .nav-tabs {
  background-color: #418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link.active {
  color: #fff;
  background-color: #418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link {
  color: #fff;
  background-color: #418cb3;
  border: 0;
}
</style>