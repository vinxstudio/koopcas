<template >
  <div class="clients">
    <!--Upper Half -->
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 200px; font-size: 13px;">
            <router-link to="/client/search" class="dropdown-item">Find
              <!-- <span class="float-right">Ctrl+F</span> -->
            </router-link>

            <button class="dropdown-item" type="button" @click="insertNew">New
              <!-- <span class="float-right">Ctrl+N</span> --> <router-link to="/client" class="new"></router-link>
            </button>

            <button class="dropdown-item" v-if="this.$route.params.id" type="button" @click="ediClient(client, cisaclient)">Edit
              <!-- <span class="float-right">Ctrl+F2</span> -->
            </button>

            <button class="dropdown-item" v-else disabled type="button">Edit
              <!-- <span class="float-right">Ctrl+F2</span> -->
            </button>

            <button class="dropdown-item" v-if="this.$route.params.id" type="button">Delete
              <!-- <span class="float-right">F4</span> -->
            </button>

            <button class="dropdown-item" type="button" v-else disabled>Delete
              <!-- <span class="float-right">F4</span> -->
            </button>

            <button class="dropdown-item" type="submit" v-if="selectDisabled">Save
              <!-- <span class="float-right">Ctrl+S</span> -->
            </button>

            <button class="dropdown-item" type="submit" v-else :disabled="selectDisabled">Save
              <!-- <span class="float-right">Ctrl+S</span> -->
            </button>

            <router-link to="/home" class="dropdown-item">Exit
              <!-- <span class="float-right">Ctrl+X</span> -->
            </router-link>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Edit</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">Present Address <span class="float-right">Ctrl+A</span></a>

            <router-link v-bind:to="'/client/'+client.clientId+'/beneficiaries'" @click="editClient(client, cisaclient, cisaBusiness, cisaMembers)" :disabled="selectDisabled" class="dropdown-item">
              Beneficiaries <span class="float-right">Ctrl+B</span>
            </router-link>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Modules</a>

          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <router-link to="/client/master-list" class="dropdown-item">Client Master List
              <!-- <span class="float-right">F3</span> -->
            </router-link>

            <router-link to="/client/statement-of-account" class="dropdown-item" v-if="this.$route.params.id">
              Account Summary <!-- <span class="float-right">Ctrl+F6</span> -->
            </router-link>

            <button class="dropdown-item" type="button" v-else disabled>Account Summary</button>

            <router-link to="/client/statement-of-account" class="dropdown-item" v-if="this.$route.params.id">
              Statement of Account <!-- <span class="float-right">Shift+F6</span> -->
            </router-link>
            
            <button class="dropdown-item" type="button" v-else disabled>Statement of Account</button>

            <a href="#" class="dropdown-item">S/L Account Balance <!-- <span class="float-right">Shift+F11</span> --></a>
            
            <router-link v-bind:to="'/client/'+client.clientId+'/sl-account-summary'" class="dropdown-item" v-if="this.$route.params.id">S/L Account Summary</router-link>

            <button class="dropdown-item" type="button" v-else disabled>S/L Account Summary</button>

            <a href="#" class="dropdown-item">Loan Int/Pen. Worksheet</a>

            <a href="#" class="dropdown-item">A/R Int/Pen. Worksheet</a>

            <router-link to="/loans/loans-master" class="dropdown-item">Loan Master</router-link>

            <router-link to="/loans/loans-application-module" class="dropdown-item">Loan Application</router-link>

            <button class="dropdown-item" data-toggle="modal" data-target="#otherAccountsMaster">Other Accounts Master</button>

            <router-link v-bind:to="'/client/'+client.clientId+'/comakertoinquiry'" class="dropdown-item" v-if="this.$route.params.id">CO-Maker to Inquiry</router-link>

            <button class="dropdown-item" type="button" v-else disabled>CO-Maker to Inquiry</button>

            <router-link to="/client/transfer-sl-accounts" class="dropdown-item" v-if="this.$route.params.id">Transfer S/L Accounts</router-link>

            <button class="dropdown-item" type="button" v-else disabled>Transfer S/L Accounts</button>
            <!-- <a href="#" class="dropdown-item">C.I.S.A Requirements</a> -->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <router-link v-bind:to="'/client/'+client.clientId+'/activitylogs'" class="dropdown-item" v-if="this.$route.params.id">
              Activity Logs <!-- <span class="float-right">F5</span> -->
            </router-link>

            <button class="dropdown-item" type="button" v-else disabled>Activity Logs</button>

            <router-link v-bind:to="'/client/'+client.clientId+'/generation-verification-code'" class="dropdown-item" v-if="this.$route.params.id">
              Generation Verification Code <!-- <span class="float-right">F7</span> -->
            </router-link>

            <button class="dropdown-item" type="button" v-else disabled>Generation Verification Code</button>

            <a href="#" class="dropdown-item">Fingerprint <!-- <span class="float-right">Ctrl+F8</span> --></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">System</a>

          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <button class="dropdown-item" data-toggle="modal" data-target="#systemDate">Set System Date</button>

            <button class="dropdown-item" data-toggle="modal" data-target="#zoomInZoomOut">Zoom In/Zoom Out Image</button>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto" style="float:right;">
        <li class="nav-item">
          <router-link to="/client/search" class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i> <span>Find</span>
          </router-link>

          <button class="btn btn-sm btn-outline-primary mr-1 new" type="button" @click="insertNew">
            <router-link to="/client" class="new">
              <i class="fa fa-file mr-1"></i> <span>Ne<u>w</u></span>
            </router-link>
          </button>

          <button class="btn btn-sm btn-outline-primary mr-1" v-if="this.$route.params.id" type="button" @click="editClient(client, cisaclient, cisaBusiness, cisaMembers)">
            <i class="fa fa-pencil-alt mr-1"></i> <span><u>E</u>dit</span>
          </button>

          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else disabled>
            <i class="fa fa-pencil-alt mr-1"></i> <span><u>E</u>dit</span>
          </button>

          <button class="btn btn-sm btn-outline-primary mr-1" v-if="this.$route.params.id" type="button">
            <i class="fa fa-trash mr-1"></i> <span><u>D</u>elete</span>
          </button>

          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else disabled>
            <i class="fa fa-trash mr-1"></i> <span><u>D</u>elete</span>
          </button>
        </li>
      </ul>
    </nav>

    <div class="alert alert-success" v-if="successAdd" transition="expand">Client Successfully Added.</div>

    <div class="alert alert-success" v-if="successEdit" transition="expand">Client Successfully Updated.</div>

    <form @submit.prevent="insertClient">
      <div class="form-row align-items-stretch">
        <div class="col-md-8" style="text-align:left;">
          <div class="bg-light">
            <fieldset class="border p-2">
              <h5>Account Info</h5>
              <div>
                <div class="form-row justify-content-between">
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="clientId">Client ID:</label>
                  <div class="col-sm my-1">
                    <input type="text" name="clientId" :value="client.brCode+'-'+this.webId2+'-'+client.chkDgt" class="form-control" v-if="this.$route.params.id" readonly>
                    <input type="text" class="form-control form-control-sm" v-model="client.clientId" name="clientId" readonly v-else>
                    <input type="hidden" :value="client.clientId" ref="cisaclient" name="cisaclient">
                  </div>
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Reference ID:</label>
                  <div class="col-sm my-1">
                    <input type="number" class="form-control" v-model="client.referenceId" name="referenceId" readonly>
                  </div>
                </div>

                <div class="form-row justify-content-between">
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="alertLevel" >Alert Level:</label>
                  <div class="col-sm my-1">
                    <select class="custom-select custom-select-sm" v-model="client.alertLevel" name="alertLevel" :disabled="selectDisabled">
                      <option disabled>(select one)</option>
                      <option v-for="clientAlertLevel in clientAlertLevels" v-bind:key="clientAlertLevel.id" :value="clientAlertLevel.alertLevelId">{{ clientAlertLevel.alertLevelDesc }}</option>
                    </select>
                  </div>
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="department">Department:</label>
                  <div class="col-sm my-1">
                    <select class="custom-select custom-select-sm" v-model="client.department" name="department" :disabled="selectDisabled">
                      <option disabled>(select one)</option>
                      <option v-for="clientDepartment in clientDepartments" v-bind:key="clientDepartment.id" :value="clientDepartment.deptId">{{ clientDepartment.deptDesc }}</option>
                    </select>
                  </div>
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="department">Branch:</label>
                  <div class="col-sm my-1">
                    <select class="custom-select custom-select-sm" v-model="client.brCode" name="brCode" :disabled="selectDisabled">
                      <option disabled>(select one)</option>
                      <option v-for="branch in branches" v-bind:key="branch.id" :value="branch.branchesId">{{ branch.branchesDesc }}</option>
                    </select>
                  </div>
                </div>

                <div class="form-row justify-content-between">
                  <div class="col-sm my-1">
                    <label class="col-form-label col-form-label-sm">Last Name:</label>
                    <div class="col-sm my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.lastName" name="lastName" :readonly="readOnly">
                    </div>
                  </div>

                  <div class="col-sm-auto d-none d-sm-block">
                    <label></label>
                    <p style="margin: 25px 0 0 -5px; font-weight: bolder">,</p>
                  </div>

                  <div class="col-sm my-1">
                    <label class="col-form-label col-form-label-sm">First Name:</label>
                    <div class="col-sm my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.firstName" name="firstName" :readonly="readOnly">
                    </div>
                  </div>

                  <div class="col-sm my-1">
                    <label class="col-form-label col-form-label-sm">Middle Name:</label>
                    <div class="col-sm my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.middleName" name="middleName" :readonly="readOnly">
                    </div>
                  </div>

                  <div class="col-sm-2 my-1">
                    <label class="col-form-label col-form-label-sm">Suffix:</label>
                    <div class="col-sm my-1">
                      <input type="text" class="form-control" v-model="client.suffix" name="suffix" :readonly="readOnly">
                    </div>
                  </div>
                </div>

                <div class="form-row mb-2 justify-content-between">
                  <fieldset class="col-sm my-1 border pb-3 px-3 mx-1">
                    <legend class="col-form-label col-form-label-sm w-auto px-1">Account Name</legend>
                    <input class="form-control form-control-sm" v-model="client.accountName" name="accountName" :readonly="readOnly">
                  </fieldset>
                  <fieldset class="col-md-3 col-sm-4 my-1 border pb-3 px-3 mx-1">
                    <legend class="col-form-label col-form-label-sm w-auto px-1">Date Opened</legend>
                    <input type="date" class="form-control form-control-sm" v-model="client.dateOpened" name="dateOpened" readonly>
                  </fieldset>
                </div>

                <div class="form-row">
                  <div class="col-md-4 mr-md-2">
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="acctType">Acct. Type:</label>
                      <div class="col-md-8 col-sm-9 my-1">
                        <select class="custom-select custom-select-sm" v-model="client.acctType" name="acctType" :disabled="selectDisabled">
                          <option disabled>(select one)</option>
                          <option v-for="clientAcctType in clientAcctTypes" v-bind:key="clientAcctType.id" :value="clientAcctType.acctTypeId">{{ clientAcctType.acctTypeDesc }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="jointType">Joint Type:</label>
                      <div class="col-md-8 col-sm-9 my-1">
                        <select class="custom-select custom-select-sm" v-model="client.jointType" name="jointType" :disabled="selectDisabled">
                          <option disabled>(select one)</option>
                          <option v-for="clientJointType in clientJointTypes" v-bind:Key="clientJointType.id" :value="clientJointType.jntTypeId">{{ clientJointType.jntTypeDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto my-1 mr-md-5">
                    <router-link v-bind:to="'/client/'+client.clientId+'/joints'" class="btn btn-secondary btn-block h-100 px-5" style="padding-top:35px;" @click="editClient(client, cisaclient, cisaBusiness, cisaMembers)" :disabled="selectDisabled">
                      <span class="h-100"><u>J</u>oints</span>
                    </router-link>
                  </div>

                  <div class="col-md-4">
                    <div class="form-row">
                      <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Client Type:</label>
                      <div class="col-md-8 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="clientType">
                        <select class="custom-select custom-select-sm" v-model="client.clientType" name="clientType" :disabled="selectDisabled">
                          <option disabled>(select one)</option>
                          <option v-for="clientClientType in clientClientTypes" v-bind:key="clientClientType.id" :value="clientClientType.clientTypeId">{{ clientClientType.clientTypeDesc }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Client Status:</label>
                      <div class="col-md-8 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="clientStatus">
                        <select class="custom-select custom-select-sm" v-model="client.accountStatus" name="accountStatus" :disabled="selectDisabled">
                          <option disabled>(select one)</option>
                          <option v-for="clientAccountStatus in clientAccountStatuses" v-bind:key="clientAccountStatus.id" :value="clientAccountStatus.acctStatId">{{ clientAccountStatus.acctStatDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>

        <div class="col-md-3">
          <fieldset class="border p-2 h-100 bg-light">
            <h5>Images</h5>
            <ul role="tablist" class="nav nav-tabs justify-content-start">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#image"><span>I<u>m</u>age</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#signature"><span>Sign<u>a</u>ture</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#sketch"><span>S<u>k</u>etch</span></a>
              </li>
            </ul>
            <div class="tab-content" style="height: 71%;">
              <div class="tab-pane container active" id="image">
                <center>
                  <div v-if="url">
                    <img :src="url" style="max-width:100%;max-height:100%">
                  </div>
                  <div v-else-if="noImgData == false && image.imageId">
                    <img :src="'/clientImages/'+client.clientId+'/img/'+image.imageRemarks" style="max-width:100%;max-height:100%">
                  </div>
                  <div v-else></div>
                </center>
                <div class="custom-file browse-only" style="width: 100px; left: 40%;">
                  <input class="custom-file-input" id="image-file" title="Choose file to upload" type="file" @change="imageChanged" :disabled="selectDisabled">
                  <label class="custom-file-label" for="image-file" :disabled="selectDisabled"></label>
                </div>
              </div>
              <div class="tab-pane container" id="signature">
                <center>
                  <div v-if="surl">
                    <img :src="surl" style="max-width:100%;max-height:100%">
                  </div>
                  <div v-else-if="noImgData == false && image.imageId">
                    <img :src="'/clientImages/'+client.clientId+'/sig/'+simage.imageRemarks" style="max-width:100%;max-height:100%">
                  </div>
                  <div v-else></div>
                </center>
                <div class="custom-file browse-only" style="width: 100px; left: 40%;">
                  <input class="custom-file-input" id="image-file" title="Choose file to upload" type="file" @change="signatureChanged" :disabled="selectDisabled">
                  <label class="custom-file-label" for="image-file" :disabled="selectDisabled"></label>
                </div>
              </div>
              <div class="tab-pane container" id="sketch">
                <center>
                  <div v-if="sketchUrl">
                    <img :src="sketchUrl" style="max-width:100%;max-height:100%">
                  </div>
                  <div v-else-if="noImgData == false && sketchImage.imageId">
                    <img :src="'/clientImages/'+client.clientId+'/skt/'+sketchImage.imageRemarks" style="max-width:100%;max-height:100%">
                  </div>
                  <div v-else></div>
                </center>
                <div class="custom-file browse-only" style="width: 100px; left: 40%;">
                  <input class="custom-file-input" id="image-file" title="Choose file to upload" type="file" @change="sketchChanged" :disabled="selectDisabled">
                  <label class="custom-file-label" for="image-file" :disabled="selectDisabled"></label>
                </div>
              </div>
            </div>
          </fieldset>
        </div>

        <div class="col-md-1">
          <div class="d-flex align-items-start flex-column">
            <router-link v-bind:to="'/client/'+client.clientId+'/beneficiaries'" @click="editClient(client, cisaclient, cisaBusiness, cisaMembers)" :disabled="selectDisabled" class="btn btn-secondary btn-block mb-1 wp-normal">Beneficiaries</router-link>
            <router-link v-bind:to="'/client/'+client.clientId+'/personal-references'" @click="editClient(client, cisaclient, cisaBusiness, cisaMembers)" :disabled="selectDisabled" class="btn btn-secondary btn-block mb-1 wp-normal">Personal References</router-link>
            <router-link v-bind:to="'/client/'+client.clientId+'/credit-bank-references'" @click="editClient(client, cisaclient, cisaBusiness, cisaMembers)" :disabled="selectDisabled" class="btn btn-secondary btn-block mb-1 wp-normal">Credit/Bank References</router-link>
            <button class="btn btn-secondary btn-block mb-1 wp-normal">Fingerprint</button>
            <button class="btn btn-secondary btn-block mb-1 wp-normal">Other Member Info</button>
            <button class="btn btn-secondary btn-block mb-1 wp-normal">Clear</button>
          </div>
        </div>
      </div>

      <div class="form-row mt-2 mb-2 align-items-stretch">
        <div class="col-md-9">
          <div class="custom-tabs tab-content-bg-light">
            <ul role="tablist" class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a class="nav-link active" href="#personal" data-toggle="tab" role="tab">Personal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#employment" data-toggle="tab">Employment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#education" data-toggle="tab">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact" data-toggle="tab">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#idnumbers" data-toggle="tab">ID Numbers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#spouseinfo" data-toggle="tab">Spouse Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cisa" data-toggle="tab">CISA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#groups" data-toggle="tab">Groups</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#history" data-toggle="tab">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#closed" data-toggle="tab">Closed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#others" data-toggle="tab">Others</a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="personal" class="tab-pane active">
                <div class="form-row">
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Age:</label>
                  <div class="col-sm my-1">
                    <input type="number" style="width:150px;" class="form-control form-control-sm" name="age" v-model="client.age" readonly>
                  </div>
                </div>

                <div class="form-row">
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Date Of birth:</label>
                  <div class="col-sm my-1">
                    <input type="date" v-model="client.dateOfBirth" class="form-control form-control-sm" name="dateOfBirth" :readonly="readOnly">
                  </div>
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Gender:</label>
                  <select class="col-sm my-1 form-control form-control-sm" v-model="client.gender" name="gender" :disabled="selectDisabled">
                    <option disabled>(select one)</option>
                    <option v-for="clientGender in clientGenders" v-bind:key="clientGender.id" :value="clientGender.genderId">{{ clientGender.genderDesc }}</option>
                  </select>
                  <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Civil Status:</label>
                  <select class="col-sm my-1 form-control form-control-sm" v-model="client.civilStatus" name="civilStatus" :disabled="selectDisabled">
                    <option disabled>(select one)</option>
                    <option v-for="clientCivilStatus in clientCivilStatuses" v-bind:key="clientCivilStatus.id" :value="clientCivilStatus.civilStatId">{{ clientCivilStatus.civilStatDesc }}</option>
                  </select>
                </div>

                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-row">
                      <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Height:</label>
                      <div class="col-sm-auto my-1 mr-3">
                        <input type="number" class="form-control form-control-sm" v-model="client.height" name="height" style="width:100px;" :readonly="readOnly">
                      </div>
                      <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Weight:</label>
                      <div class="col-sm my-1">
                        <input type="number" class="form-control form-control-sm" v-model="client.weight" name="weight" style="width:100px;" :readonly="readOnly">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-row">
                      <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Religion:</label>
                      <div class="col-sm my-1">
                        <select class="form-control form-control-sm" v-model="client.religion" name="religion" :disabled="selectDisabled">
                          <option disabled>(select one)</option>
                          <option v-for="clientReligion in clientReligions" v-bind:key="clientReligion.id" :value="clientReligion.religionId">{{ clientReligion.religionDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-row">
                      <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Profession:</label>
                      <div class="col-sm my-1">
                        <select class="form-control form-control-sm" v-model="client.profession" name="profession" :disabled="selectDisabled">
                          <option disabled>(select one)</option>
                          <option v-for="clientProfession in clientProfessions" v-bind:key="clientProfession.id" :value="clientProfession.professionId">{{ clientProfession.professionDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-row">
                      <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Mailing Address:</label>
                      <div class="col-sm my-1">
                        <select class="form-control form-control-sm" v-model="client.mailingAddress" name="mailingAddress" :disabled="selectDisabled">
                          <option disabled>(select one)</option>
                          <option v-for="clientMailingAddress in clientMailingAddresses" v-bind:key="clientMailingAddress.id" :value="clientMailingAddress.mailingAddressId">{{ clientMailingAddress.mailingAddressDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-row">
                      <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">DOSRI Tag:</label>
                      <div class="col-sm my-1">
                        <select class="form-control form-control-sm" v-model="client.dosriTag" name="dosriTag" :disabled="selectDisabled">
                          <option disabled>(select one)</option>
                          <option v-for="clientDosriTag in clientDosriTags" v-bind:key="clientDosriTag.dId" :value="clientDosriTag.id">{{ clientDosriTag.desc1 }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="employment" class="tab-pane">
                <div class="form-group">
                  <div class="form-row justify-content-between" style="text-align:left;">
                    <div class="col-sm-9 my-1">
                      <label class="col-sm-auto col-form-label col-form-label-sm text-sm-left">Employer Name:</label>
                      <input type="text" class="form-control form-control-sm" v-model="client.employerName" name="employerName" :readonly="readOnly">
                    </div>
                    <div class="col-sm-3 my-1">
                      <label class="col-sm-auto col-form-label col-form-label-sm text-sm-left">Employer Code:</label>
                      <select class="form-control form-control-sm" v-model="client.employerCode" name="employerCode" :disabled="selectDisabled">
                        <option disabled>(select none)</option>
                        <option v-for="clientEmployerCode in clientEmployerCodes" v-bind:key="clientEmployerCode.id" :value="clientEmployerCode.empCodeId">{{ clientEmployerCode.empCodeDesc }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Employment ID:</label>
                    <div class="col-sm my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.employmentId" name="employmentId" :readonly="readOnly">
                    </div>
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"># of Employees:</label>
                    <div class="col-sm my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.numberOfEmployees" name="numberOfEmployees" :readonly="readOnly">
                    </div>
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Date Hired:</label>
                    <div class="col-sm my-1">
                      <input type="date" class="form-control form-control-sm" v-model="client.dateHired" name="dateHired" :readonly="readOnly">
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Job Title:</label>
                    <div class="col-sm my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.jobTitle" name="jobTitle" :readonly="readOnly">
                    </div>
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Nature:</label>
                    <div class="col-sm my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.nature" name="nature" :readonly="readOnly">
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Job Status:</label>
                    <div class="col-sm my-1">
                      <select class="form-control form-control-sm" v-model="client.jobStatus" name="jobStatus" :disabled="selectDisabled">
                        <option disabled>(select one)</option>
                      </select>
                    </div>
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Employment Level:</label>
                    <div class="col-sm-3 my-1">
                      <select class="form-control form-control-sm" v-model="client.employmentLevel" name="employmentLevel" :disabled="selectDisabled">
                        <option disabled>(select one)</option>
                        <option v-for="clientEmpLevel in clientEmpLevels" v-bind:key="clientEmpLevel.id" :value="clientEmpLevel.busLevelId">{{ clientEmpLevel.busLevelDesc }}</option>
                      </select>
                    </div>
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Since:</label>
                    <div class="col-sm-1 my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.since" name="since" :readonly="readOnly">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Other Income:</label>
                        <div class="col-md-8 col-sm-9 my-1">
                          <textarea class="form-control form-control-sm" v-model="client.otherIncome" name="otherIncome" rows="3" :readonly="readOnly"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Monthly Salary:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.monthlySalary" name="monthlySalary" :readonly="readOnly">
                        </div>
                      </div>
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Profession:</label>
                        <div class="col-sm my-1">
                          <select class="form-control form-control-sm" v-model="client.profession" name="profession" :disabled="selectDisabled">
                            <option disabled>(select one)</option>
                            <option v-for="clientProfession in clientProfessions" v-bind:key="clientProfession.id" :value="clientProfession.professionId">{{ clientProfession.professionDesc }}</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Occupation:</label>
                        <div class="col-sm my-1">
                          <select class="form-control form-control-sm" v-model="client.occupation" name="occupation" :disabled="selectDisabled">
                            <option disabled>(select one)</option>
                            <option v-for="clientOccupation in clientOccupations" v-bind:key="clientOccupation.id" :value="clientOccupation.occuId">{{ clientOccupation.occuDesc }}</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="education" class="tab-pane">
                <div class="form-group">
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Education:</label>
                        <div class="col-sm my-1">
                          <select class="form-control form-control-sm" v-model="client.education" name="education" :disabled="selectDisabled">
                            <option disabled>(select one)</option>
                            <option v-for="clientEducation in clientEducations" v-bind:key="clientEducation.id" :value="clientEducation.educAttainedId">{{ clientEducation.educAttainedDesc }}</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">School Last Attended:</label>
                        <div class="col-sm my-1">
                          <input type="date" class="form-control form-control-sm" v-model="client.schoolLastAttended" name="schoolLastAttended" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">School:</label>
                    <div class="col-sm-4 my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.school" name="school" :readonly="readOnly">
                    </div>
                  </div>
                  <div class="form-row">
                    <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Section:</label>
                    <div class="col-sm-4 my-1">
                      <input type="text" class="form-control form-control-sm" v-model="client.section" name="section" :readonly="readOnly">
                    </div>
                  </div>
                </div>
              </div>

              <div id="contact" class="tab-pane">
                <div class="form-group">
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Home Tel. No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.homeTelNo" name="homeTelNo" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Province Tel. No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.provinceTelNo" name="provinceTelNo" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Cellphone No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.cellphoneNo" name="cellphoneNo" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Other Contact No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.otherContactNo" name="otherContactNo" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Employer/Business Tel. No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.employerTelNo" name="employerTelNo" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Email Address:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.emailAddress" name="emailAddress" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Spouse Tel. / Cell No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.spouseCellNo" name="spouseCellNo" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">SMS Broadcast No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.smsBroadcastNo" name="smsBroadcastNo" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="idnumbers" class="tab-pane">
                <div class="form-group">
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">ATM BANK:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.atmBank" name="atmBank" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">TIN:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.tin" name="tin" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">ATM No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.atmNo" name="atmNo" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">CTC No.</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.ctcno" name="ctcno" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">SSS:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.sss" name="sss" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Driver's License:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.driversLicense" name="driversLicense" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">GSIS:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.gsis" name="gsis" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">NSO:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.nso" name="nso" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">PhilHealth:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.philHealth" name="philHealth" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Voter's ID:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.votersId" name="votersId" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Pag-IBIG:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.pagIbig" name="pagIbig" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-row">
                        <label class="col-md-4 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Other ID:</label>
                        <div class="col-sm my-1">
                          <input type="text" class="form-control form-control-sm" v-model="client.otherId" name="otherId" :readonly="readOnly">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="spouseinfo" class="tab-pane">
                <ul role="tablist" class="nav nav-tabs justify-content-start">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#spousepersonalinfo">Personal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#spouseemployment">Business Employment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#spouseaddress">Business/Office Address</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane container active" id="spousepersonalinfo">
                    <div class="form-group">
                      <div class="form-row justify-content-between">
                        <div class="col-sm my-1">
                          <label class="col-form-label col-form-label-sm" for="lastName">Last Name</label>
                          <input type="text" class="form-control form-control-sm" v-model="client.spLName" name="spLName" :readonly="readOnly">
                        </div>
                        <div class="col-sm-auto d-none d-sm-block">
                          <label></label>
                          <p style="margin: 25px 0 0 -5px; font-weight: bolder;">,</p>
                        </div>
                        <div class="col-sm my-1">
                          <label class="col-form-label col-form-label-sm" for="firstName">First Name</label>
                          <input type="text" class="form-control form-control-sm" v-model="client.spFName" name="spFName" :readonly="readOnly">
                        </div>
                        <div class="col-sm my-1">
                          <label class="col-form-label col-form-label-sm" for="middleName">Middle Name</label>
                          <input type="text" class="form-control form-control-sm" v-model="client.spMName" name="spMName" :readonly="readOnly">
                        </div>
                        <div class="col-sm-1 my-1">
                          <label class="col-form-label col-form-label-sm" for="suffix">Suffix</label>
                          <input type="text" class="form-control form-control-sm" v-model="client.spSuffix" name="spSuffix" :readonly="readOnly">
                        </div>
                      </div>
                      <div class="form-row justify-content-between">
                        <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="dateOfBirth">Date of Birth:</label>
                        <div class="col-sm my-1">
                          <input type="date" class="form-control form-control-sm" v-model="client.spDateOfBirth" name="spDateOfBirth" :readonly="readOnly">
                        </div>
                        <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="educationalAttainment">Educational Attainment:</label>
                        <div class="col-sm my-1">
                          <select class="custom-select custom-select-sm" v-model="client.spEducAttained" name="spEducAttained" :disabled="selectDisabled">
                            <option disabled>(select one)</option>
                            <option v-for="clientEducation in clientEducations" v-bind:key="clientEducation.eduId" :value="clientEducation.educAttainedId">{{ clientEducation.educAttainedDesc }}</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row justify-content-between">
                        <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="gender">Gender:</label>
                        <div class="col-sm my-1">
                          <select class="custom-select custom-select-sm" v-model="client.spGender" name="spGender" :disabled="selectDisabled">
                            <option disabled>(select one)</option>
                            <option v-for="clientGender in clientGenders" v-bind:key="clientGender.gId" :value="clientGender.genderId">{{ clientGender.genderDesc }}</option>
                          </select>
                        </div>
                        <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="degree">Degree:</label>
                        <div class="col-sm my-1">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            v-model="client.spDegree"
                            name="spDegree"
                            :readonly="readOnly"
                          >
                        </div>
                      </div>
                      <div class="form-row justify-content-between">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="occupation"
                        >Occupation:</label>
                        <div class="col-sm my-1">
                          <select
                            class="custom-select custom-select-smd"
                            v-model="client.spOccupational"
                            name="spOccupational"
                            :disabled="selectDisabled"
                          >
                            <option disabled>(select one)</option>
                            <option
                              v-for="clientOccupation in clientOccupations"
                              v-bind:key="clientOccupation.oId"
                              :value="clientOccupation.occuId"
                            >{{ clientOccupation.occuDesc }}</option>
                          </select>
                        </div>
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="monthlyIncome"
                        >Monthly Salary/Income:</label>
                        <div class="col-sm my-1">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            v-model="client.spMonthlyIncome"
                            name="spMonthlyIncome"
                            :readonly="readOnly"
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane container" id="spouseemployment">
                    <fieldset>
                      <div class="form-row">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="businessName"
                        >Employer Name:</label>
                        <div class="col-md-4 col-sm-6 my-1">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            v-model="client.spBusinessName"
                            name="spBusinessName"
                            :readonly="readOnly"
                          >
                        </div>
                      </div>
                      <div class="form-row">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="since"
                        >Since:</label>
                        <div class="col-md-2 my-1">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            v-model="client.spSince"
                            name="spSince"
                            :readonly="readOnly"
                          >
                        </div>
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="numberOfEmployees"
                        >No. of Employees:</label>
                        <div class="col-md-2 my-1">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            v-model="client.spNumberOfEmployees"
                            name="spNumberOfEmployees"
                            :readonly="readOnly"
                          >
                        </div>
                      </div>
                      <div class="form-row">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="jobTitle"
                        >Job Title:</label>
                        <div class="col-md-2 my-1">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            v-model="client.spJobTitle"
                            name="spJobTitle"
                            :readonly="readOnly"
                          >
                        </div>
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="nature"
                        >Nature:</label>
                        <div class="col-md-2 my-1">
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            v-model="client.spNature"
                            name="spNature"
                            :readonly="readOnly"
                          >
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-sm-4">
                          <div class="form-row">
                            <label
                              class="col col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                              for="jobStatus"
                            >Job Status:</label>
                            <div class="col my-1">
                              <input
                                type="text"
                                class="form-control form-control-sm"
                                v-model="client.spJobStatus"
                                name="spJobStatus"
                                :readonly="readOnly"
                              >
                            </div>
                          </div>
                          <div class="form-row">
                            <label
                              class="col col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                              for="empLevel"
                            >Emp. Level:</label>
                            <div class="col my-1">
                              <select
                                class="custom-select custom-select-sm"
                                v-model="client.spEmpLevel"
                                name="spEmpLevel"
                                :disabled="selectDisabled"
                              >
                                <option disabled>(select one)</option>
                                <option
                                  v-for="clientEmpLevel in clientEmpLevels"
                                  v-bind:key="clientEmpLevel.eId"
                                  :value="clientEmpLevel.busLevelId"
                                >{{ clientEmpLevel.busLevelDesc }}</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <label
                              class="col col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                              for="hired"
                            >Hired:</label>
                            <div class="col my-1">
                              <input
                                type="date"
                                class="form-control form-control-sm"
                                v-model="client.spHired"
                                name="spHired"
                                :readonly="readOnly"
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-row">
                            <label
                              class="col col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                              for="otherIncome"
                            >Other Income:</label>
                            <div class="col my-1">
                              <textarea
                                class="form-control form-control-sm"
                                v-model="client.spOtherIncome"
                                name="spOtherIncome"
                                rows="5"
                                :readonly="readOnly"
                              ></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="tab-pane container" id="spouseaddress">
                    <div class="form-row">
                      <div class="col-sm-4">
                        <fieldset>
                          <div class>
                            <div class="form-row">
                              <label
                                class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                                for="streetNo"
                              >Street No:</label>
                              <div class="col-sm col-md-4 my-1">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                  v-model="client.sPouseStrNo"
                                  name="sPouseStrNo"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                                for="streetName"
                              >Street Name:</label>
                              <div class="col-sm my-1">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                  v-model="client.spBusAddStreet"
                                  name="spBusAddStreet"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                                for="barangay"
                              >Barangay:</label>
                              <div class="col-sm col-md-6 my-1">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                  v-model="client.spBusAddBarangay"
                                  name="spBusAddBarangay"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                                for="barangay"
                              >City/Town:</label>
                              <div class="col-sm col-md-6 my-1">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                  v-model="client.spBusAddCity"
                                  name="spBusAddCity"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                                for="province"
                              >Province:</label>
                              <div class="col-sm col-md-6 my-1">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                  v-model="client.spBusAddProvince"
                                  name="spBusAddProvince"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                                for="zipcode"
                              >ZIP Code:</label>
                              <div class="col-sm-6 col-md-3 my-1">
                                <input
                                  type="text"
                                  class="form-control form-control-sm"
                                  v-model="client.spBusAddZipCode"
                                  name="spBusAddZipCode"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="cisa" class="tab-pane">
                <fieldset>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for
                    >Title:</label>
                    <select
                      class="col-sm-4 my-1 form-control form-control-sm"
                      v-model="client.cisaClientTitle"
                      name="cisaClientTitle"
                      :disabled="selectDisabled"
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="clientClientTitle in clientClientTitles"
                        v-bind:key="clientClientTitle.id"
                        :value="clientClientTitle.clTitleCode"
                      >{{ clientClientTitle.description }}</option>
                    </select>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for
                    >Birth Place:</label>
                    <div class="col-sm my-1">
                      <input
                        class="form-control form-control-sm"
                        v-model="client.cisaBirthPlace"
                        name="cisaBirthPlace"
                        type="text"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <ul role="tablist" class="nav nav-tabs nav-justified justify-content-start">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#cisapersonal">Personal</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#cisaemployment">
                        <u>E</u>mployment
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#cisaidnumbers">
                        <u>I</u>D Numbers
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#cisabusiness">
                        <u>B</u>usiness
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#cisadependants">
                        <u>D</u>ependents
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane container active" id="cisapersonal">
                      <div class="row">
                        <div class="col-sm-6">
                          <fieldset class="col-sm my-1 border pb-3 px-3 mx-1">
                            <legend
                              class="col-form-label col-form-label-sm w-auto px-1"
                            >Mother's Maiden Name</legend>

                            <div class="form-group">
                              <label for>Last Name</label>
                              <input
                                type="text"
                                class="form-control"
                                v-model="client.cisaMothersLname"
                                name="cisaMothersLname"
                                :readonly="readOnly"
                              >
                            </div>

                            <div class="form-group">
                              <label for>First Name</label>
                              <input
                                type="text"
                                class="form-control"
                                v-model="client.cisaMothersFname"
                                name="cisaMothersFname"
                                :readonly="readOnly"
                              >
                            </div>

                            <div class="form-group">
                              <label for>Middle Name</label>
                              <input
                                type="text"
                                class="form-control"
                                v-model="client.cisaMothersMname"
                                name="cisaMothersMname"
                                :readonly="readOnly"
                              >
                            </div>
                          </fieldset>
                        </div>

                        <div class="col-sm-6">
                          <fieldset class="col-sm my-1 border pb-3 px-3 mx-1">
                            <legend
                              class="col-form-label col-form-label-sm w-auto px-1"
                            >Father's Name</legend>

                            <div class="form-group">
                              <label for>Last Name</label>
                              <input
                                type="text"
                                class="form-control"
                                v-model="client.cisaFathersLname"
                                name="cisaFathersFname"
                                :readonly="readOnly"
                              >
                            </div>

                            <div class="form-group">
                              <label for>First Name</label>
                              <input
                                type="text"
                                class="form-control"
                                v-model="client.cisaFathersFname"
                                name="cisaFathersFname"
                                :readonly="readOnly"
                              >
                            </div>

                            <div class="form-group">
                              <label for>Middle Name</label>
                              <input
                                type="text"
                                class="form-control"
                                v-model="client.cisaFathersMname"
                                name="cisaFathersMname"
                                :readonly="readOnly"
                              >
                            </div>

                            <div class="form-group">
                              <label for>Name Extension e.g (JR, SR, III)</label>
                              <input
                                type="text"
                                class="form-control"
                                v-model="client.cisaFathersNameExtnt"
                                name="cisaFathersNameExtnt"
                                :readonly="readOnly"
                              >
                            </div>
                          </fieldset>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane container" id="cisaemployment">
                      <div class="row">
                        <div class="col-sm">
                          <div class="form-group">
                            <label for>Employment PSIC:</label>
                            <textarea
                              v-model="client.cisaPsicCode"
                              name="cisaPsicCode"
                              class="form-control"
                              cols="10"
                              rows="5"
                              style="resize: none;"
                              :readonly="readOnly"
                            ></textarea>
                          </div>

                          <div class="form-group">
                            <label for>Occupation PSOC:</label>
                            <textarea
                              v-model="client.cisaPsocCode"
                              name="cisaPsocCode"
                              class="form-control"
                              cols="10"
                              rows="5"
                              style="resize: none;"
                              :readonly="readOnly"
                            ></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane container" id="cisaidnumbers">
                      <ul role="tablist" class="nav nav-tabs nav-justified justify-content-start">
                        <li class="nav-item">
                          <a
                            class="nav-link active"
                            data-toggle="tab"
                            href="#secondaryid1"
                          >Secondary ID 1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#secondaryid2">Secondary ID 2</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#secondaryid3">Secondary ID 3</a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane container active" id="secondaryid1">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Presented ID:</label>
                                <select
                                  v-model="cisaclient.cmSecId1Type"
                                  name="cmSecId1Type"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(selec one)</option>
                                  <option
                                    v-for="clientCisaSecondaryId in clientCisaSecondaryIds"
                                    v-bind:key="clientCisaSecondaryId.id"
                                    :value="clientCisaSecondaryId.idTypeCode"
                                  >{{ clientCisaSecondaryId.idTypeDesc }}</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>ID Number:</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId1Num"
                                  name="cmSecId1Num"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Date Issue</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId1IssueDate"
                                  name="cmSecId1IssueDate"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Expiry Date:</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId1ExpiryDate"
                                  name="cmSecId1ExpiryDate"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                              <div class="form-group">
                                <label for>Issue Country</label>
                                <select
                                  v-model="cisaclient.cmSecId1Country"
                                  name="cmSecId1Country"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="clientCisaCountry in clientCisaCountries"
                                    v-bind:key="clientCisaCountry.cId"
                                    :value="clientCisaCountry.countryId"
                                  >{{ clientCisaCountry.countryDesc }} ({{ clientCisaCountry.countryCode }})</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                              <div class="form-group">
                                <label for>Issue By:</label>
                                <textarea
                                  v-model="cisaclient.cmSecId1IssuedBy"
                                  name="cmSecId1IssuedBy"
                                  class="form-control"
                                  id
                                  cols="10"
                                  rows="2"
                                  style="resize: none;"
                                  :readonly="readOnly"
                                ></textarea>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane container" id="secondaryid2">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Presented ID:</label>
                                <select
                                  v-model="cisaclient.cmSecId2Type"
                                  name="cmSecId2Type"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(selec one)</option>
                                  <option
                                    v-for="clientCisaSecondaryId in clientCisaSecondaryIds"
                                    v-bind:key="clientCisaSecondaryId.sId"
                                    :value="clientCisaSecondaryId.idTypeCode"
                                  >{{ clientCisaSecondaryId.idTypeDesc }}</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>ID Number:</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId2Num"
                                  name="cmSecId2Num"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Date Issue</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId2IssueDate"
                                  name="cmSecId2IssueDate"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Expiry Date:</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId2ExpiryDate"
                                  name="cmSecId2ExpiryDate"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                              <div class="form-group">
                                <label for>Issue Country</label>
                                <select
                                  v-model="cisaclient.cmSecId2Country"
                                  name="cmSecId2Country"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="clientCisaCountry in clientCisaCountries"
                                    v-bind:key="clientCisaCountry.ccId"
                                    :value="clientCisaCountry.countryId"
                                  >{{ clientCisaCountry.countryDesc }} ({{ clientCisaCountry.countryCode }})</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                              <div class="form-group">
                                <label for>Issue By:</label>
                                <textarea
                                  v-model="cisaclient.cmSecId2IssuedBy"
                                  name="cmSecId2IssuedBy"
                                  class="form-control"
                                  id
                                  cols="10"
                                  rows="2"
                                  style="resize: none;"
                                  :readonly="readOnly"
                                ></textarea>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane container" id="secondaryid3">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Presented ID:</label>
                                <select
                                  v-model="cisaclient.cmSecId3Type"
                                  name="cmSecId3Type"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(selec one)</option>
                                  <option
                                    v-for="clientCisaSecondaryId in clientCisaSecondaryIds"
                                    v-bind:key="clientCisaSecondaryId.csId"
                                    :value="clientCisaSecondaryId.idTypeCode"
                                  >{{ clientCisaSecondaryId.idTypeDesc }}</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>ID Number:</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId3Num"
                                  name="cmSecId3Num"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Date Issue</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId3IssueDate"
                                  name="cmSecId3IssueDate"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Expiry Date:</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  v-model="cisaclient.cmSecId3ExpiryDate"
                                  name="cmSecId3ExpiryDate"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                              <div class="form-group">
                                <label for>Issue Country</label>
                                <select
                                  v-model="cisaclient.cmSecId3Country"
                                  name="cmSecId3Country"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="clientCisaCountry in clientCisaCountries"
                                    v-bind:key="clientCisaCountry.id"
                                    :value="clientCisaCountry.countryId"
                                  >{{ clientCisaCountry.countryDesc }} ({{ clientCisaCountry.countryCode }})</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm">
                              <div class="form-group">
                                <label for>Issue By:</label>
                                <textarea
                                  v-model="cisaclient.cmSecId3IssuedBy"
                                  name="cmSecId3IssuedBy"
                                  class="form-control"
                                  id
                                  cols="10"
                                  rows="2"
                                  style="resize: none;"
                                  :readonly="readOnly"
                                ></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane container" id="cisabusiness">
                      <div class="form-group">
                        <label for>Trade Name</label>
                        <input
                          type="text"
                          class="form-control"
                          v-model="cisaBusiness.soleTraderName"
                          name="soleTraderName"
                          :readonly="readOnly"
                        >
                      </div>
                      <ul role="tablist" class="nav nav-tabs nav-justified justify-content-start">
                        <li class="nav-item">
                          <a
                            class="nav-link active"
                            data-toggle="tab"
                            href="#mainaddress"
                          >Main Address</a>
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            data-toggle="tab"
                            href="#additionaladdress"
                          >Additional Address</a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane container active" id="mainaddress">
                          <div class="row">
                            <div class="col-sm-2">
                              <div class="form-group">
                                <label for>Street No:</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMStreetNo"
                                  name="soleTraderMStreetNo"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label for>Postal Code</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMPostalCode"
                                  name="soleTraderMPostalCode"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for>Subdivision</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMSubd"
                                  name="soleTraderMSubd"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for>Barangay</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMBrgy"
                                  name="soleTraderMBrgy"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for>City</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMCity"
                                  name="soleTraderMCity"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-8">
                              <div class="form-group">
                                <label for>Province</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMProv"
                                  name="soleTraderMProv"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>House Type</label>
                                <select
                                  v-model="cisaBusiness.soleTraderMHouseType"
                                  name="soleTraderMHouseType"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="clientCisaHousetype in clientCisaHousetypes"
                                    v-bind:key="clientCisaHousetype.id"
                                    :value="clientCisaHousetype.houseTypeId"
                                  >{{ clientCisaHousetype.houseTypeDesc }}</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for>Contact Type</label>
                                <select
                                  v-model="cisaBusiness.soleTraderMContactType"
                                  name="soleTraderMContactType"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="cisaContactType in cisaContactTypes"
                                    v-bind:key="cisaContactType.id"
                                    :value="cisaContactType.contactTypeCode"
                                  >{{ cisaContactType.contactDescription }}</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for>Contact Number</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMContactValue"
                                  name="soleTraderMContactValue"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Occupied Since</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMOccupiedSince"
                                  name="soleTraderMOccupiedSince"
                                  :readonly="readOnly"
                                >
                              </div>

                              <div class="form-group">
                                <label for>ID Type</label>
                                <select
                                  v-model="cisaBusiness.soleTraderMIdType"
                                  name="soleTraderMIdType"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="cisaPrimaryId in cisaPrimaryIds"
                                    v-bind:value="cisaPrimaryId.idTypeCode"
                                  >{{ cisaPrimaryId.idTypeDesc }}</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for>ID Number</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderMIdNum"
                                  name
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane container" id="additionaladdress">
                          <div class="row">
                            <div class="col-sm-2">
                              <div class="form-group">
                                <label for>Street No:</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderAStreetNo"
                                  name="soleTraderAStreetNo"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label for>Postal Code</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderAPostalCode"
                                  name="soleTraderAPostalCode"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for>Subdivision</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderASubd"
                                  name="soleTraderASubd"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for>Barangay</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderABrgy"
                                  name="soleTraderABrgy"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for>City</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderACity"
                                  name="soleTraderACity"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-8">
                              <div class="form-group">
                                <label for>Province</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderAProv"
                                  name="soleTraderAProv"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>House Type</label>
                                <select
                                  v-model="cisaBusiness.soleTraderAHouseType"
                                  name="soleTraderAHouseType"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="clientCisaHousetype in clientCisaHousetypes"
                                    v-bind:value="clientCisaHousetype.houseTypeId"
                                  >{{ clientCisaHousetype.houseTypeDesc }}</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for>Contact Type</label>
                                <select
                                  v-model="cisaBusiness.soleTraderAContactType"
                                  name="soleTraderAContactType"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="cisaContactType in cisaContactTypes"
                                    v-bind:value="cisaContactType.contactTypeCode"
                                  >{{ cisaContactType.contactDescription }}</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for>Contact Number</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderAContactValue"
                                  name="soleTraderAContactValue"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for>Occupied Since</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderAOccupiedSince"
                                  name="soleTraderAOccupiedSince"
                                  :readonly="readOnly"
                                >
                              </div>

                              <div class="form-group">
                                <label for>ID Type</label>
                                <select
                                  v-model="cisaBusiness.soleTraderAIdType"
                                  name="soleTraderAIdType"
                                  class="form-control"
                                  :disabled="selectDisabled"
                                >
                                  <option disabled>(select one)</option>
                                  <option
                                    v-for="cisaPrimaryId in cisaPrimaryIds"
                                    v-bind:value="cisaPrimaryId.idTypeCode"
                                  >{{ cisaPrimaryId.idTypeDesc }}</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for>ID Number</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  v-model="cisaBusiness.soleTraderAIdNum"
                                  name="soleTraderAIdNum"
                                  :readonly="readOnly"
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane container" id="cisadependants">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for>First Name</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="cisaMembers.fName"
                              name="fName"
                              :readonly="readOnly"
                            >
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for>Middle Name</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="cisaMembers.mName"
                              name="mName"
                              :readonly="readOnly"
                            >
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for>Last Name</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="cisaMembers.lName"
                              vname="lName"
                              :readonly="readOnly"
                            >
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for>Extension Name</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="cisaMembers.nameExtnt"
                              name="nameExtnt"
                              :readonly="readOnly"
                            >
                          </div>
                        </div>
                      </div>

                      <div class="d-flex justify-content-center mb-4">
                        <button
                          class="btn btn-sm btn-outline-primary mr-1"
                          type="button"
                          @click="addDependants"
                        >
                          <i class="fa fa-plus mr-1"></i>
                          <span>Add</span>
                        </button>
                        <button class="btn btn-sm mr-1 btn-outline-secondary" type="button">
                          <i class="fa fa-pencil-alt mr-1"></i>
                          <span>Update</span>
                        </button>
                        <button class="btn btn-sm mr-1 btn-outline-secondary" type="button">
                          <i class="fa fa-ban mr-1"></i>
                          <span>Clear</span>
                        </button>
                      </div>

                      <table class="table table-sm table-bordered table-hover custom-table">
                        <thead>
                          <tr>
                            <td scope="col">First Name</td>
                            <td scope="col">Middle Name</td>
                            <td scope="col">Last Name</td>
                            <td scope="col">Name Extension</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="cisaDependant in cisaDependants" v-bind:key="cisaDependant.id">
                            <td>{{ cisaDependant.fName }}</td>
                            <td>{{ cisaDependant.mName }}</td>
                            <td>{{ cisaDependant.lName }}</td>
                            <td>{{ cisaDependant.nameExtnt }}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </fieldset>
              </div>

              <div id="groups" class="tab-pane">
                <fieldset>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="sectoral"
                    >Sectoral:</label>
                    <div class="col-md-4 col-sm-5 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.sectoral"
                        name="sectoral"
                        :disabled="selectDisabled"
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientSectoral in clientSectorals"
                          v-bind:value="clientSectoral.sectorId"
                        >{{ clientSectoral.sectorDesc }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="occupational"
                    >Occupational:</label>
                    <div class="col-md-4 col-sm-5 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.occupational"
                        name="occupational"
                        :disabled="selectDisabled"
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientOccupation in clientOccupations"
                          v-bind:value="clientOccupation.occuId"
                        >{{ clientOccupation.occuDesc }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="geographical"
                    >Geographical:</label>
                    <div class="col-md-8 col-sm-9 my-1">
                      <!-- <input type="text" class="form-control form-control-sm" v-model="client.geographical" name="geographical" placeholder="N/A" :readonly="readOnly"> -->
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.geographical"
                        name="geographical"
                        :disabled="selectDisabled"
                      >
                        <option
                          v-for="clientGeographical in clientGeographicals"
                          v-bind:value="clientGeographical.geoId"
                        >{{ clientGeographical.geoDesc }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="subGroup"
                    >Sub Group:</label>
                    <div class="col-md-4 col-sm-5 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.subGroup"
                        name="subGroup"
                        :disabled="selectDisabled"
                      >
                        <option disabled>(select one)</option>
                        <option v-bind:value="99">99</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="restriction"
                    >Restriction:</label>
                    <div class="col-md-4 col-sm-5 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.restriction"
                        name="restriction"
                        :disabled="selectDisabled"
                      >
                        <option disabled>(select one)</option>
                        <option value="1">Default</option>
                      </select>
                    </div>
                  </div>
                </fieldset>
              </div>

              <div id="history" class="tab-pane">
                <table class="table table-sm table-bordered custom-table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Description</th>
                      <th scope="col">Date</th>
                      <th scope="col">Username</th>
                      <th scope="col">Remarks</th>
                      <th scope="col">PR</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>

              <div id="closed" class="tab-pane">
                <fieldset>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="dateClosed"
                    >Date Closed:</label>
                    <div class="col-md-4 col-sm-5 my-1">
                      <input
                        type="date"
                        class="form-control form-control-sm"
                        v-model="client.dateClosed"
                        name="dateClosed"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="reason"
                    >Reason:</label>
                    <div class="col-md-4 col-sm-5 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.reason"
                        name="reason"
                        :disabled="selectDisabled"
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientClosedReason in clientClosedReasons"
                          v-bind:value="clientClosedReason.closedReasonId"
                        >{{ clientClosedReason.closedReasonDesc }}</option>
                      </select>
                    </div>
                  </div>
                </fieldset>
              </div>

              <div id="others" class="tab-pane">
                <fieldset>
                  <div class="form-row justify-content-between">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="shareCapitalPledge"
                    >Share Capital Pledge:</label>
                    <div class="col-sm my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.shareCapitalPledge"
                        name="shareCapitalPledge"
                        :readonly="readOnly"
                      >
                    </div>
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="recruitedBy"
                    >Recruited By:</label>
                    <div class="col-sm my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.recruitedBy"
                        name="recruitedBy"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="savingsDepositPledge"
                    >Savings Deposit Pledge:</label>
                    <div class="col-sm-4 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.shareDepositPledge"
                        name="shareDepositPledge"
                        :readonly="readOnly"
                      >
                    </div>
                    <div class="col-sm-4 offset-sm-2 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm bg-info"
                        v-model="client.isShowTotalPoints"
                        name="isShowTotalPoints"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm-8 my-1">
                      <label class="col-form-label col-form-label-sm" for></label>
                      <textarea class="form-control form-control-sm" name rows="8"></textarea>
                    </div>
                    <div class="col-sm-4 my-1">
                      <label
                        class="col-form-label col-form-label-sm"
                        for="mealAllowance"
                      >Meal Allowance:</label>
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.mealAllowance"
                        name="mealAllowance"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <fieldset class="border p-1 h-100 bg-light">
            <h5>Addresses</h5>
            <ul role="tablist" class="nav nav-tabs justify-content-start">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#present">
                  <span>
                    Presen
                    <u>t</u>
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#provincial">
                  <span>
                    Pro
                    <u>v</u>incial
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#address-employment">
                  <span>Employment</span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane container active" id="present">
                <div class="form-group">
                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Street No.:</label>
                    <div class="col-sm col-md-4 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddStrNo"
                        name="resAddStrNo"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Street Name:</label>
                    <div class="col-sm my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddStreet"
                        name="resAddStreet"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Barangay:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddBarangay"
                        name="resAddBarangay"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >City/Town:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddCity"
                        name="resAddCity"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Province:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddProvince"
                        name="resAddProvince"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >ZIP Code:</label>
                    <div class="col-sm col-md-3 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddZipCode"
                        name="resAddZipCode"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <label
                    class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Since:</label>
                  <div class="col-sm col-md-8 my-1">
                    <input
                      type="date"
                      class="form-control form-control-sm"
                      v-model="client.resSince"
                      name="resSince"
                      :readonly="readOnly"
                    >
                  </div>
                </div>

                <div class="form-row">
                  <label
                    class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Type:</label>
                  <div class="col-sm col-md-6 my-1">
                    <select
                      class="custom-select custom-select-sm"
                      v-model="client.resType"
                      name="type"
                      :disabled="selectDisabled"
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="clientResType in clientResTypes"
                        v-bind:value="clientResType.resTypeId"
                      >{{ clientResType.resTypeDesc }}</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="tab-pane container" id="provincial">
                <div class="form-group">
                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Street No.:</label>
                    <div class="col-sm col-md-4 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.provAddStrNo"
                        name="provAddStrNo"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Street Name:</label>
                    <div class="col-sm my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.provAddStreet"
                        name="provAddStreet"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Barangay:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.provAddBarangay"
                        name="provAddBarangay"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >City/Town:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.provAddCity"
                        name="provAddCity"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Province:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.provAddProvince"
                        name="provAddProvince"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >ZIP Code:</label>
                    <div class="col-sm col-md-3 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.provAddZipCode"
                        name="provAddZipCode"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <label
                    class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Since:</label>
                  <div class="col-sm col-md-8 my-1">
                    <input
                      type="date"
                      class="form-control form-control-sm"
                      v-model="client.provSince"
                      name="provSince"
                      :readonly="readOnly"
                    >
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Type:</label>
                  <div class="col-sm col-md-6 my-1">
                    <select
                      class="custom-select custom-select-sm"
                      v-model="client.provType"
                      name="resType"
                      :disabled="selectDisabled"
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="clientResType in clientResTypes"
                        v-bind:value="clientResType.resTypeId"
                      >{{ clientResType.resTypeDesc }}</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="tab-pane container" id="address-employment">
                <div class="form-group">
                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Street No.:</label>
                    <div class="col-sm col-md-4 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.busAddStrNo"
                        name="busAddStrNo"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Street Name:</label>
                    <div class="col-sm my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.busAddStreet"
                        name="busAddStreet"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Barangay:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.busAddBarangay"
                        name="busAddBarangay"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >City/Town:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.busAddCity"
                        name="busAddCity"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Province:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.busAddProvince"
                        name="busAddProvince"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >ZIP Code:</label>
                    <div class="col-sm col-md-3 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.busAddZipCode"
                        name="busAddZipCode"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>

      <div class="d-flex justify-content-center" style="margin-bottom: 20px;">
        <button class="btn mr-1 btn-secondary" type="submit" v-if="selectDisabled">
          <i class="fa fa-save mr-1"></i>
          <span>
            <u>S</u>ave
          </span>
        </button>
        <button class="btn mr-1 btn-success" type="submit" v-else :disabled="selectDisabled">
          <i class="fa fa-save mr-1"></i>
          <span>
            <u>S</u>ave
          </span>
        </button>
        
        <button class="btn btn-secondary" type="button" v-if="selectDisabled">
          <i class="fa fa-times-circle mr-1"></i>
          <span>
            Canc
            <u>e</u>l
          </span>
        </button>
        <button
          class="btn btn-outline-primary new"
          type="button"
          v-else
          :disabled="selectDisabled"
          @click="cancel"
        >
          <router-link to="/client" class="new" :disabled="selectDisabled">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </router-link>
        </button>
      </div>
      <!--MODALS-->
      <!--Other Accounts Master MODAL-->
      <div class="modal" id="otherAccountsMaster">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <table class="table table-sm table-bordered table-hover custom-table">
                <thead>
                  <tr>
                    <th scope="col">Other Accounts Master</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Accts Payable</td>
                    <td>
                      <router-link
                        to="/other-mod/maintenance-accounts-payable"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Accts Receivable</td>
                    <td>
                      <router-link
                        to="/loans/loan-ar-master"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Expense Acct</td>
                    <td>
                      <router-link
                        to="/other-mod/maintenance-subsidiary-ledger"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Income Acct</td>
                    <td>
                      <router-link
                        to="/other-mod/maintenance-subsidiary-ledger"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Inventory</td>
                    <td>
                      <router-link
                        to="/other-mod/maintenance-subsidiary-ledger"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Loans Receivable</td>
                    <td>
                      <router-link to="#" class="btn btn-primary" data-dismiss="modal">GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Misc. Liability</td>
                    <td>
                      <router-link
                        to="/other-mod/maintenance-subsidiary-ledger"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Other Asset</td>
                    <td>
                      <router-link
                        to="/other-mod/maintenance-subsidiary-ledger"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Savings Deposit</td>
                    <td>
                      <router-link
                        to="/deposits/savings-deposit"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Share Capital</td>
                    <td>
                      <router-link
                        to="/deposits/share-capital"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                  <tr>
                    <td>Time Deposit</td>
                    <td>
                      <router-link
                        to="/deposits/time-deposit"
                        class="btn btn-primary"
                        data-dismiss="modal"
                      >GO</router-link>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!--MODALS-->
      <!--Other Accounts Master MODAL-->
      <div class="modal" id="zoomInZoomOut">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <center>
                <img v-if="url" :src="url" style="max-width:100%;max-height:100%">
                <img
                  v-else-if="noImgData == false && image.imageId"
                  :src="'/clientImages/'+client.clientId+'/'+image.imageRemarks"
                  style="max-width:100%;max-height:100%"
                >
              </center>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!--MODALS-->
      <!--Other Accounts Master MODAL-->
      <div class="modal" id="systemDate">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <fieldset class="my-1 border pb-3 px-3 mx-1">
                <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened"></legend>
                <label class="text-sm-right text-truncate">Enter System Date:</label>
                <div class="col">
                  <input
                    class="form-control form-control-sm"
                    type="date"
                    name="sdTrDate"
                    v-model="client.sdTrDate"
                  >
                </div>
              </fieldset>
              <div class="form-row justify-content-center">
                <div class="col-auto">
                  <button class="btn btn-sm justify-content-center btn-outline-primary mr-1">
                    <i class="fa fa-key mr-1"></i>
                    <span>
                      <u>O</u>k
                    </span>
                  </button>
                  <button class="btn btn-sm justify-content-center btn-outline-primary mr-1">
                    <i class="fa fa-times-circle mr-1"></i>
                    <span>
                      <u>C</u>ancel
                    </span>
                  </button>
                </div>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!--MODALS-->
      <!--Other Accounts Master MODAL-->
      <div class="modal" id="presentAddress">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div class="col">
                <div class="form-group">
                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Street No.:</label>
                    <div class="col-sm col-md-4 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddStrNo"
                        name="resAddStrNo"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Street Name:</label>
                    <div class="col-sm my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddStreet"
                        name="resAddStreet"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Barangay:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddBarangay"
                        name="resAddBarangay"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >City/Town:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddCity"
                        name="resAddCity"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Province:</label>
                    <div class="col-sm col-md-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddProvince"
                        name="resAddProvince"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >ZIP Code:</label>
                    <div class="col-sm col-md-3 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        v-model="client.resAddZipCode"
                        name="resAddZipCode"
                        :readonly="readOnly"
                      >
                    </div>
                  </div>
                </div>

                <hr>

                <div class="form-row">
                  <label
                    class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Since:</label>
                  <div class="col-sm col-md-8 my-1">
                    <input
                      type="date"
                      class="form-control form-control-sm"
                      v-model="client.resSince"
                      name="resSince"
                      :readonly="readOnly"
                    >
                  </div>
                </div>

                <div class="form-row">
                  <label
                    class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Type:</label>
                  <div class="col-sm col-md-6 my-1">
                    <select
                      class="custom-select custom-select-sm"
                      v-model="client.resType"
                      name="type"
                      :disabled="selectDisabled"
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="clientResType in clientResTypes"
                        v-bind:value="clientResType.resTypeId"
                      >{{ clientResType.resTypeDesc }}</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
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
        dateOpened: "",
        suffix: "",
        dateOfBirth: "",
        height: "",
        weight: "",
        age: "",
        gender: "",
        civilStatus: "",
        religion: "",
        profession: "",
        mailingAddress: "",
        dosriTag: "",
        employerName: "",
        employerCode: "",
        employmentId: "",
        numberOfEmployees: "",
        dateHired: "",
        jobTitle: "",
        nature: "",
        jobStatus: "",
        employmentLevel: "",
        since: "",
        monthlySalary: "",
        profession: "",
        occupation: "",
        education: "",
        school: "",
        section: "",
        homeTelNo: "",
        provinceTelNo: "",
        cellphoneNo: "",
        employerTelNo: "",
        otherContactNo: "",
        spouseCellNo: "",
        emailAddress: "",
        smsBroadcastNo: "",
        tin: "",
        ctcno: "",
        sss: "",
        philHealth: "",
        pagIbig: "",
        atmBank: "",
        atmNo: "",
        gsis: "",
        nso: "",
        votersId: "",
        otherId: "",
        driversLicense: "",
        otherId: "",
        spFName: "",
        spMName: "",
        spLName: "",
        spSuffix: "",
        spGender: "",
        spDateOfBirth: "",
        spOccupational: "",
        spEducAttained: "",
        spBusinessName: "",
        spJobTitle: "",
        spJobStatus: "",
        spSince: "",
        spHired: "",
        spEmpLevel: "",
        spNature: "",
        spNumberOfEmployees: "",
        spOtherIncome: "",
        spDegree: "",
        spMonthlyIncome: "",
        sPouseStrNo: "",
        spBusAddStreet: "",
        spBusAddBarangay: "",
        spBusAddCity: "",
        spBusAddProvince: "",
        spBusAddZipCode: "",
        resAddStrNo: "",
        resAddStreet: "",
        resAddBarangay: "",
        resAddCity: "",
        resAddProvince: "",
        resAddZipCode: "",
        resSince: "",
        resType: "",
        provAddStrNo: "",
        provAddStreet: "",
        provAddBarangay: "",
        provAddCity: "",
        provAddProvince: "",
        provAddZipCode: "",
        provSince: "",
        provType: "",
        busAddStrNo: "",
        busAddStreet: "",
        busAddBarangay: "",
        busAddCity: "",
        busAddProvince: "",
        busAddZipCode: "",
        sectoral: "",
        occupational: "",
        geographical: "",
        restriction: "",
        subGroup: "",
        dateClosed: "",
        reason: "",
        shareCapitalPledge: "",
        shareDepositPledge: "",
        recruitedBy: "",
        mealAllowance: "",
        isShowTotalPoints: "",
        cisaClientTitle: "",
        cisaMothersFname: "",
        cisaMothersLname: "",
        cisaMothersMname: "",
        cisaFathersFname: "",
        cisaFathersLname: "",
        cisaFathersNameExtnt: "",
        cisaFathersMname: "",
        cisaPsocCode: "",
        cisaPsicCode: "",
        cisaContactType: "",
        cisaContactNum: "",
        cisaBirthPlace: "",
        isCisaUpdated: "",
        sdTrDate: ""
      },

      cisaclient: {
        cmSecIdClientId: "",
        cmSecIdBrCode: 18,
        cmSecId1Type: "",
        cmSecId1Num: "",
        cmSecId1IssueDate: "",
        cmSecId1Country: "",
        cmSecId1ExpiryDate: "",
        cmSecId1IssuedBy: "",
        cmSecId2Type: "",
        cmSecId2Num: "",
        cmSecId2IssueDate: "",
        cmSecId2Country: "",
        cmSecId2ExpiryDate: "",
        cmSecId2IssuedBy: "",
        cmSecId3Type: "",
        cmSecId3Num: "",
        cmSecId3IssueDate: "",
        cmSecId3Country: "",
        cmSecId3ExpiryDate: "",
        cmSecId3IssuedBy: ""
      },

      cisaBusiness: {
        soleTraderId: "",
        soleTraderClientID: "",
        soleTraderBrCode: "",
        soleTraderName: "",
        soleTraderMStreetNo: "",
        soleTraderMPostalCode: "",
        soleTraderMSubd: "",
        soleTraderMBrgy: "",
        soleTraderMCity: "",
        soleTraderMProv: "",
        soleTraderMHouseType: "",
        soleTraderMOccupiedSince: "",
        soleTraderMIdType: "",
        soleTraderMIdNum: "",
        soleTraderMContactType: "",
        soleTraderMContactValue: "",
        soleTraderAStreetNo: "",
        soleTraderAPostalCode: "",
        soleTraderASubd: "",
        soleTraderABrgy: "",
        soleTraderACity: "",
        soleTraderAProv: "",
        soleTraderAHouseType: "",
        soleTraderAOccupiedSince: "",
        soleTraderAIdType: "",
        soleTraderAIdNum: "",
        soleTraderAContactType: "",
        soleTraderAContactValue: ""
      },

      cisaMembers: {
        memberBrCode: "",
        memberClientId: "",
        fName: "",
        mName: "",
        lName: "",
        nameExtnt: ""
      },

      image: {
        imageId: "",
        imageBrCode: "",
        imageClientId: "",
        itemID: "",
        imageType: "",
        imageFileSize: "",
        imageFile: "",
        imageRemarks: "",
        imageDateTimeAdded: ""
      },

      simage: {
      },

      sketchImage:{},

      imageTemp: {},
      sigTemp:{},
      sktTemp:{},

      noImgData: false,

      sImg: true,

      url: "",

      surl: "",

      sketchUrl:"",

      paramId: "",

      birthDate: "",

      edit: false,

      readOnly: true,

      selectDisabled: true,

      successAdd: "",

      successEdit: "",

      clientAlertLevels: [],
      clientDepartments: [],
      clientAcctTypes: [],
      clientJointTypes: [],
      clientClientTypes: [],
      clientAccountStatuses: [],
      clientGenders: [],
      clientCivilStatuses: [],
      clientReligions: [],
      clientProfessions: [],
      clientMailingAddresses: [],
      clientDosriTags: [],
      clientEmployerCodes: [],
      clientEmpLevels: [],
      clientOccupations: [],
      clientEducations: [],
      clientSectorals: [],
      clientClosedReasons: [],
      images: [],
      clientGeographicals: [],
      clientResTypes: [],
      clientClientTitles: [],
      clientCisaSecondaryIds: [],
      clientCisaCountries: [],
      clientCisaHousetypes: [],
      cisaContactTypes: [],
      cisaPrimaryIds: [],
      cisaDependants: [],
      branches: [],

      webId: "",
      webId2: "",
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
      this.fetchCisaClient(this.paramId);
      this.fetchCisaBusiness(this.paramId);
      this.fetchCisaDependants(this.paramId);
      this.fetchImage(this.paramId);
    }
  },

  created() {
    this.fetchAlertLevels();
    this.fetchDepartments();
    this.fetchAcctTypes();
    this.fetchJointTypes();
    this.fetchClientTypes();
    this.fetchClientStatuses();
    this.fetchClientGenders();
    this.fetchClientCivilStatuses();
    this.fetchClientReligions();
    this.fetchClientProfessions();
    this.fetchClientMailingAddresses();
    this.fetchClientDosriTags();
    this.fetchClientEmployerCodes();
    this.fetchClientEmpLevels();
    this.fetchClientOccupations();
    this.fetchClientEducations();
    this.fetchClientSectorals();
    this.fetchClosedReasons();
    this.fetchClientGeographicals();
    this.fetchClientResTypes();
    this.fetchClientTitles();
    this.fetchCisaSecondaryIds();
    this.fetchCisaCountries();
    this.fetchCisaHouseTypes();
    this.fetchCisaContactTypes();
    this.fetchCisaPrimaryIds();
    this.fetchBranches();
  },

  methods: {
    fetchClient(id) {
      fetch(`/api/client/${id}`)
        .then(res => res.json())
        .then(res => {
          this.client = res.data[0];
          this.client.age = moment().diff(this.client.dateOfBirth, "years");
          this.webId = ("00000000"+this.client.clientId).slice(-8);
          this.webId2 = "W"+this.webId;
          console.log(this.client);
        })
        .catch(err => console.log(err));
    },

    fetchCisaClient(id) {
      fetch(`/api/cisaCmSecndryId/${id}`)
        .then(res => res.json())
        .then(res => {
          if(typeof res.data[0] != "undefined"){
          this.cisaclient = res.data[0];
          console.log(this.cisaclient);
          }
        })
        .catch(err => console.log(err));
    },

    fetchCisaBusiness(id) {
      fetch(`/api/cisaSoleTrader/${id}`)
        .then(res => res.json())
        .then(res => {
          if(typeof res.data[0] != "undefined"){
          this.cisaBusiness = res.data[0];
          console.log(this.cisaBusiness);
          }
        })
        .catch(err => console.log(err));
    },

    fetchCisaDependants(id) {
      fetch(`/api/cisaMembersNames/${id}`)
        .then(res => res.json())
        .then(res => {
          this.cisaDependants = res.data[0];
          console.log(this.cisaDependants);
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

    fetchAlertLevels() {
      fetch("/api/alertLevels")
        .then(res => res.json())
        .then(res => {
          this.clientAlertLevels = res.data;
          console.log(this.clientAlertLevels);
        })
        .catch(err => console.log(err));
    },

    fetchDepartments() {
      fetch("/api/departments")
        .then(res => res.json())
        .then(res => {
          this.clientDepartments = res.data;
          console.log(this.clientDepartments);
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

    fetchClientStatuses() {
      fetch("/api/acctStatuses")
        .then(res => res.json())
        .then(res => {
          this.clientAccountStatuses = res.data;
          console.log(this.clientAccountStatuses);
        })
        .catch(err => console.log(err));
    },

    fetchClientGenders() {
      fetch("/api/genders")
        .then(res => res.json())
        .then(res => {
          this.clientGenders = res.data;
          console.log(this.clientGenders);
        })
        .catch(err => console.log(err));
    },

    fetchClientCivilStatuses() {
      fetch("/api/civilStats")
        .then(res => res.json())
        .then(res => {
          this.clientCivilStatuses = res.data;
          console.log(this.clientCivilStatuses);
        })
        .catch(err => console.log(err));
    },

    fetchClientReligions() {
      fetch("/api/religions")
        .then(res => res.json())
        .then(res => {
          this.clientReligions = res.data;
          console.log(this.clientReligions);
        })
        .catch(err => console.log(err));
    },

    fetchClientProfessions() {
      fetch("/api/professions")
        .then(res => res.json())
        .then(res => {
          this.clientProfessions = res.data;
          console.log(this.clientProfessions);
        })
        .catch(err => console.log(err));
    },

    fetchClientMailingAddresses() {
      fetch("/api/mailingAddresses")
        .then(res => res.json())
        .then(res => {
          this.clientMailingAddresses = res.data;
          console.log(this.clientMailingAddresses);
        })
        .catch(err => console.log(err));
    },

    fetchClientDosriTags() {
      fetch("/api/dosritags")
        .then(res => res.json())
        .then(res => {
          this.clientDosriTags = res.data;
          console.log(this.clientDosriTags);
        })
        .catch(err => console.log(err));
    },

    fetchClientEmployerCodes() {
      fetch("/api/empCodes")
        .then(res => res.json())
        .then(res => {
          this.clientEmployerCodes = res.data;
          console.log(this.clientEmployerCodes);
        })
        .catch(err => console.log(err));
    },

    fetchClientEmpLevels() {
      fetch("/api/empLevels")
        .then(res => res.json())
        .then(res => {
          this.clientEmpLevels = res.data;
          console.log(this.clientEmpLevels);
        })
        .catch(err => console.log(err));
    },

    fetchClientOccupations() {
      fetch("/api/occupations")
        .then(res => res.json())
        .then(res => {
          this.clientOccupations = res.data;
          console.log(this.clientOccupations);
        })
        .catch(err => console.log(err));
    },

    fetchClientEducations() {
      fetch("/api/educAttains")
        .then(res => res.json())
        .then(res => {
          this.clientEducations = res.data;
          console.log(this.clientEducations);
        })
        .catch(err => console.log(err));
    },

    fetchClientSectorals() {
      fetch("/api/sectors")
        .then(res => res.json())
        .then(res => {
          this.clientSectorals = res.data;
          console.log(this.clientSectorals);
        })
        .catch(err => console.log(err));
    },

    fetchClosedReasons() {
      fetch("/api/closed-reasons")
        .then(res => res.json())
        .then(res => {
          this.clientClosedReasons = res.data;
          console.log(this.clientClosedReasons);
        })
        .catch(err => console.log(err));
    },

    fetchClientGeographicals() {
      fetch("/api/geos")
        .then(res => res.json())
        .then(res => {
          this.clientGeographicals = res.data;
          console.log(this.clientGeographicals);
        })
        .catch(err => console.log(err));
    },

    fetchClientResTypes() {
      fetch("/api/resTypes")
        .then(res => res.json())
        .then(res => {
          this.clientResTypes = res.data;
          console.log(this.clientResTypes);
        })
        .catch(err => console.log(err));
    },

    fetchClientTitles() {
      fetch("/api/cisaClientTitles")
        .then(res => res.json())
        .then(res => {
          this.clientClientTitles = res.data;
          console.log(this.clientClientTitles);
        })
        .catch(err => console.log(err));
    },

    fetchCisaCountries() {
      fetch("/api/cisaCountries")
        .then(res => res.json())
        .then(res => {
          this.clientCisaCountries = res.data;
          console.log(this.clientCisaCountries);
        })
        .catch(err => console.log(err));
    },

    fetchCisaSecondaryIds() {
      fetch("/api/cisaSecondaryIds")
        .then(res => res.json())
        .then(res => {
          this.clientCisaSecondaryIds = res.data;
          console.log(this.clientCisaSecondaryIds);
        })
        .catch(err => console.log(err));
    },

    fetchCisaHouseTypes() {
      fetch("/api/cisaHouseTypes")
        .then(res => res.json())
        .then(res => {
          this.clientCisaHousetypes = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchCisaContactTypes() {
      fetch("/api/cisaContactTypes")
        .then(res => res.json())
        .then(res => {
          this.cisaContactTypes = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchCisaPrimaryIds() {
      fetch("/api/cisaPrimaryIds")
        .then(res => res.json())
        .then(res => {
          this.cisaPrimaryIds = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchImage(id) {
      fetch(`/api/images/clientId=${id}`)
        .then(res => res.json())
        .then(res => {
          if(res.data.length > 0){
            for(let i = 0; i < res.data.length;i++){
              if(res.data[i].imageType == "img"){
                this.image = res.data[i];
              }else if(res.data[i].imageType == "sig"){
                this.simage = res.data[i];
              }else if(res.data[i].imageType == "skt"){
                this.sketchImage = res.data[i];
              }
              
              if(res.data[i].imageType != "sig" && res.data[i].imageType == "img" || res.data[i].imageType == "skt"){
                this.sImg = false;
              }
            }
          }else{
            this.noImgData = true;
          }
        })
      .catch(err => console.log(err));
    },

    addDependants() {
      this.cisaDependants.push(this.$data.cisaMembers);
    },

    insertClient() {
      if (this.edit === false) {
        fetch("/api/client", {
          method: "post",
          body: JSON.stringify(this.client),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            this.client.brCode = "",
            (this.client.clientId = ""),
            (this.client.lastName = ""),
            (this.client.firstName = ""),
            (this.client.middleName = ""),
            (this.client.alertLevel = ""),
            (this.client.department = ""),
            (this.client.acctType = ""),
            (this.client.jointType = ""),
            (this.client.clientType = ""),
            (this.client.accountName = ""),
            (this.client.accountStatus = ""),
            (this.client.referenceId = ""),
            (this.client.dateOpened = ""),
            (this.client.suffix = ""),
            (this.client.dateOfBirth = ""),
            (this.client.height = ""),
            (this.client.weight = ""),
            (this.client.age = ""),
            (this.client.gender = ""),
            (this.client.civilStatus = ""),
            (this.client.religion = ""),
            (this.client.profession = ""),
            (this.client.mailingAddress = ""),
            (this.client.dosriTag = ""),
            (this.client.employerName = ""),
            (this.client.employerCode = ""),
            (this.client.employmentId = ""),
            (this.client.numberOfEmployees = ""),
            (this.client.dateHired = ""),
            (this.client.jobTitle = ""),
            (this.client.nature = ""),
            (this.client.jobStatus = ""),
            (this.client.employmentLevel = ""),
            (this.client.since = ""),
            (this.client.monthlySalary = ""),
            (this.client.profession = ""),
            (this.client.occupation = ""),
            (this.client.education = ""),
            (this.client.school = ""),
            (this.client.section = ""),
            (this.client.homeTelNo = ""),
            (this.client.provinceTelNo = ""),
            (this.client.cellphoneNo = ""),
            (this.client.employerTelNo = ""),
            (this.client.otherContactNo = ""),
            (this.client.spouseCellNo = ""),
            (this.client.emailAddress = ""),
            (this.client.smsBroadcastNo = ""),
            (this.client.tin = ""),
            (this.client.ctcno = ""),
            (this.client.sss = ""),
            (this.client.philHealth = ""),
            (this.client.pagIbig = ""),
            (this.client.atmBank = ""),
            (this.client.atmNo = ""),
            (this.client.gsis = ""),
            (this.client.nso = ""),
            (this.client.votersId = ""),
            (this.client.otherId = ""),
            (this.client.driversLicense = ""),
            (this.client.otherId = ""),
            (this.client.spFName = ""),
            (this.client.spMName = ""),
            (this.client.spLName = ""),
            (this.client.spSuffix = ""),
            (this.client.spGender = ""),
            (this.client.spDateOfBirth = ""),
            (this.client.spOccupational = ""),
            (this.client.spEducAttained = ""),
            (this.client.spBusinessName = ""),
            (this.client.spJobTitle = ""),
            (this.client.spJobStatus = ""),
            (this.client.spSince = ""),
            (this.client.spHired = ""),
            (this.client.spEmpLevel = ""),
            (this.client.spNature = ""),
            (this.client.spNumberOfEmployees = ""),
            (this.client.spOtherIncome = ""),
            (this.client.spDegree = ""),
            (this.client.spMonthlyIncome = ""),
            (this.client.sPouseStrNo = ""),
            (this.client.spBusAddStreet = ""),
            (this.client.spBusAddBarangay = ""),
            (this.client.spBusAddCity = ""),
            (this.client.spBusAddProvince = ""),
            (this.client.spBusAddZipCode = ""),
            (this.client.resAddStrNo = ""),
            (this.client.resAddStreet = ""),
            (this.client.resAddBarangay = ""),
            (this.client.resAddCity = ""),
            (this.client.resAddProvince = ""),
            (this.client.resAddZipCode = ""),
            (this.client.resSince = ""),
            (this.client.provAddStrNo = ""),
            (this.client.provAddStreet = ""),
            (this.client.provAddBarangay = ""),
            (this.client.provAddCity = ""),
            (this.client.provAddProvince = ""),
            (this.client.provAddZipCode = ""),
            (this.client.busAddStrNo = ""),
            (this.client.busAddStreet = ""),
            (this.client.busAddBarangay = ""),
            (this.client.busAddCity = ""),
            (this.client.busAddProvince = ""),
            (this.client.busAddZipCode = ""),
            (this.client.sectoral = ""),
            (this.client.occupational = ""),
            (this.client.geographical = ""),
            (this.client.restriction = ""),
            (this.client.subGroup = ""),
            (this.client.dateClosed = ""),
            (this.client.reason = ""),
            (this.client.shareCapitalPledge = ""),
            (this.client.shareDepositPledge = ""),
            (this.client.recruitedBy = ""),
            (this.client.mealAllowance = ""),
            (this.client.isShowTotalPoints = ""),
            (this.client.cisaClientTitle = ""),
            (this.client.cisaMothersFname = ""),
            (this.client.cisaMothersLname = ""),
            (this.client.cisaMothersMname = ""),
            (this.client.cisaFathersFname = ""),
            (this.client.cisaFathersLname = ""),
            (this.client.cisaFathersNameExtnt = ""),
            (this.client.cisaFathersMname = ""),
            (this.client.cisaPsocCode = ""),
            (this.client.cisaPsicCode = ""),
            (this.client.cisaContactType = ""),
            (this.client.cisaContactNum = ""),
            (this.client.cisaBirthPlace = ""),
            (this.client.isCisaUpdated = ""),
            (this.selectDisabled = true),
            (this.readOnly = true),
            (this.successAdd = true),
            setTimeout(() => {
              this.successAdd = false;
            }, 2000),
            console.log("Client Added");
          })
          .catch(err => console.log(err));

        fetch("/api/cisaCmSecndryId", {
          method: "post",
          body: JSON.stringify(this.cisaclient),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            (this.cisaclient.cmSecIdClientId = ""),
              (this.cisaclient.cmSecIdBrCode = ""),
              (this.cisaclient.cmSecId1Type = ""),
              (this.cisaclient.cmSecId1Num = ""),
              (this.cisaclient.cmSecId1IssueDate = ""),
              (this.cisaclient.cmSecId1Country = ""),
              (this.cisaclient.cmSecId1ExpiryDate = ""),
              (this.cisaclient.cmSecId1IssuedBy = ""),
              (this.cisaclient.cmSecId2Type = ""),
              (this.cisaclient.cmSecId2Num = ""),
              (this.cisaclient.cmSecId2IssueDate = ""),
              (this.cisaclient.cmSecId2Country = ""),
              (this.cisaclient.cmSecId2ExpiryDate = ""),
              (this.cisaclient.cmSecId2IssuedBy = ""),
              (this.cisaclient.cmSecId3Type = ""),
              (this.cisaclient.cmSecId3Num = ""),
              (this.cisaclient.cmSecId3IssueDate = ""),
              (this.cisaclient.cmSecId3Country = ""),
              (this.cisaclient.cmSecId3ExpiryDate = ""),
              (this.cisaclient.cmSecId3IssuedBy = ""),
              (this.selectDisabled = true),
              (this.readOnly = true),
              (this.successAdd = true),
              setTimeout(() => {
                this.successAdd = false;
              }, 2000),
              console.log("Cisa Added");
          })
          .catch(err => console.log(err));

        fetch("/api/cisaSoleTrader", {
          method: "post",
          body: JSON.stringify(this.cisaBusiness),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            (this.cisaBusiness.soleTraderId = ""),
              (this.cisaBusiness.soleTraderClientID = ""),
              (this.cisaBusiness.soleTraderBrCode = ""),
              (this.cisaBusiness.soleTraderName = ""),
              (this.cisaBusiness.soleTraderMStreetNo = ""),
              (this.cisaBusiness.soleTraderMPostalCode = ""),
              (this.cisaBusiness.soleTraderMSubd = ""),
              (this.cisaBusiness.soleTraderMBrgy = ""),
              (this.cisaBusiness.soleTraderMCity = ""),
              (this.cisaBusiness.soleTraderMProv = ""),
              (this.cisaBusiness.soleTraderMHouseType = ""),
              (this.cisaBusiness.soleTraderMOccupiedSince = ""),
              (this.cisaBusiness.soleTraderMIdType = ""),
              (this.cisaBusiness.soleTraderMIdNum = ""),
              (this.cisaBusiness.soleTraderMContactType = ""),
              (this.cisaBusiness.soleTraderMContactValue = ""),
              (this.cisaBusiness.soleTraderAStreetNo = ""),
              (this.cisaBusiness.soleTraderAPostalCode = ""),
              (this.cisaBusiness.soleTraderASubd = ""),
              (this.cisaBusiness.soleTraderABrgy = ""),
              (this.cisaBusiness.soleTraderACity = ""),
              (this.cisaBusiness.soleTraderAProv = ""),
              (this.cisaBusiness.soleTraderAHouseType = ""),
              (this.cisaBusiness.soleTraderAOccupiedSince = ""),
              (this.cisaBusiness.soleTraderAIdType = ""),
              (this.cisaBusiness.soleTraderAIdNum = ""),
              (this.cisaBusiness.soleTraderAContactType = ""),
              (this.cisaBusiness.soleTraderAContactValue = ""),
              (this.selectDisabled = true),
              (this.readOnly = true),
              (this.successAdd = true),
              setTimeout(() => {
                this.successAdd = false;
              }, 2000),
              console.log("Cisa Added");
          })
          .catch(err => console.log(err));

        fetch("/api/cisaMembersName", {
          method: "post",
          body: JSON.stringify(this.cisaMembers),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            (this.cisaMembers.memberBrCode = ""),
              (this.cisaMembers.memberClientId = ""),
              (this.cisaMembers.fName = ""),
              (this.cisaMembers.mName = ""),
              (this.cisaMembers.lName = ""),
              (this.cisaMembers.nameExtnt = ""),
              (this.selectDisabled = true),
              (this.readOnly = true),
              (this.successAdd = true),
              setTimeout(() => {
                this.successAdd = false;
              }, 2000),
              console.log("Cisa Added");
          })
          .catch(err => console.log(err));
        
        if(this.url){
          fetch("/api/imageInsert", {
            method: "post",
            body: JSON.stringify(this.imageTemp),
            headers: { "content-type": "application/json" }
          })
          .then(res => {
            this.image = {};
            this.url = "";
          })
          .catch(err => console.log(err));
        }

        if(this.surl){
          fetch("/api/imageInsert", {
            method: "post",
            body: JSON.stringify(this.sigTemp),
            headers: { "content-type": "application/json" }
          })
          .then(res => {
            this.simage = {};
            this.surl = "";
          })
          .catch(err => console.log(err));
        }

        if(this.sketchUrl){
          fetch("/api/imageInsert", {
            method: "post",
            body: JSON.stringify(this.sketchImage),
            headers: { "content-type": "application/json" }
          })
          .then(res => {
            this.sketchImage = {};
            this.sketchUrl = "";
          })
          .catch(err => console.log(err));
        }
      } else {
        fetch("/api/client", {
          method: "put",
          body: JSON.stringify(this.client),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            (this.successEdit = true),
              (this.selectDisabled = true),
              (this.readOnly = true),
              setTimeout(() => {
                this.successEdit = false;
              }, 2000),
              console.log("Client Updated"),
              this.fetchClient(this.$route.params.id);
            this.fetchCisaClient(this.$route.params.id);
          })
          .catch(err => console.log(err));

        fetch("/api/cisaCmSecndryId", {
          method: "put",
          body: JSON.stringify(this.cisaclient),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            (this.successEdit = true),
              (this.selectDisabled = true),
              (this.readOnly = true),
              setTimeout(() => {
                this.successEdit = false;
              }, 2000),
              console.log("Cisa Client Updated"),
              this.fetchCisaClient(this.$route.params.id);
          })
          .catch(err => console.log(err));

        fetch("/api/cisaSoleTrader", {
          method: "put",
          body: JSON.stringify(this.cisaBusiness),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            (this.successEdit = true),
              (this.selectDisabled = true),
              (this.readOnly = true),
              setTimeout(() => {
                this.successEdit = false;
              }, 2000),
              console.log("Cisa Business Updated"),
              this.fetchCisaBusiness(this.$route.params.id);
          })
          .catch(err => console.log(err));
        if(this.url){
          if(this.image.imageId){
            fetch("/api/imageUpdate", {
              method: "put",
              body: JSON.stringify(this.imageTemp),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("Image Updated");
            })
            .catch(err => console.log(err));
          }else{
            fetch("/api/imageInsert", {
              method: "post",
              body: JSON.stringify(this.imageTemp),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              this.image = {};
            })
            .catch(err => console.log(err));
          }
        }
        
        if(this.surl){
          if(this.simage.imageId){
            fetch("/api/imageUpdate", {
              method: "put",
              body: JSON.stringify(this.sigTemp),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("Image Updated");
            })
            .catch(err => console.log(err));
          }else{
            fetch("/api/imageInsert", {
              method: "post",
              body: JSON.stringify(this.simage),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("Image Updated");
            })
            .catch(err => console.log(err));
          }
        }

        if(this.sketchUrl){
          if(this.sketchImage.imageId){
            fetch("/api/imageUpdate", {
              method: "put",
              body: JSON.stringify(this.sketchImage),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("Image Updated");
            })
            .catch(err => console.log(err));
          }else{
            fetch("/api/imageInsert", {
              method: "post",
              body: JSON.stringify(this.sketchImage),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("Image Updated");
            })
            .catch(err => console.log(err));
          }
        }
      }
    },

    editClient(client, cisaclient, cisaBusiness, cisaMembers) {
      this.edit = true;
      this.selectDisabled = false;
      this.readOnly = false;
      this.client.clientId = client.clientId;
      this.client.lastName = client.lastName;
      this.client.firstName = client.firstName;
      this.client.middleName = client.middleName;
      this.client.alertLevel = client.alertLevel;
      this.client.department = client.department;
      this.client.acctType = client.acctType;
      this.client.jointType = client.jointType;
      this.client.clientType = client.clientType;
      this.client.accountStatus = client.accountStatus;
      this.client.referenceId = client.referenceId;
      this.client.dateOpened = client.dateOpened;
      this.client.suffix = client.suffix;
      this.client.dateOfBirth = client.dateOfBirth;
      this.client.height = client.height;
      this.client.weight = client.weight;
      this.client.age = client.age;
      this.client.gender = client.gender;
      this.client.civilStatus = client.civilStatus;
      this.client.religion = client.religion;
      this.client.profession = client.profession;
      this.client.mailingAddress = client.mailingAddress;
      this.client.dosriTag = client.dosriTag;
      this.client.employerName = client.employerName;
      this.client.employerCode = client.employerCode;
      this.client.employmentId = client.employmentId;
      this.client.numberOfEmployees = client.numberOfEmployees;
      this.client.dateHired = client.dateHired;
      this.client.jobTitle = client.jobTitle;
      this.client.nature = client.nature;
      this.client.jobStatus = client.jobStatus;
      this.client.employmentLevel = client.employmentLevel;
      this.client.since = client.since;
      this.client.monthlySalary = client.monthlySalary;
      this.client.profession = client.profession;
      this.client.occupation = client.occupation;
      this.client.education = client.education;
      this.client.school = client.school;
      this.client.section = client.section;
      this.client.homeTelNo = client.homeTelNo;
      this.client.provinceTelNo = client.provinceTelNo;
      this.client.cellphoneNo = client.cellphoneNo;
      this.client.employerTelNo = client.employerTelNo;
      this.client.otherContactNo = client.otherContactNo;
      this.client.spouseCellNo = client.spouseCellNo;
      this.client.emailAddress = client.emailAddress;
      this.client.smsBroadcastNo = client.smsBroadcastNo;
      this.client.tin = client.tin;
      this.client.ctcno = client.ctcno;
      this.client.sss = client.sss;
      this.client.philHealth = client.philHealth;
      this.client.pagIbig = client.pagIbig;
      this.client.atmBank = client.atmBank;
      this.client.atmNo = client.atmNo;
      this.client.gsis = client.gsis;
      this.client.nso = client.nso;
      this.client.votersId = client.votersId;
      this.client.otherId = client.otherId;
      this.client.driversLicense = client.driversLicense;
      this.client.otherId = client.otherId;
      this.client.spFName = client.spFName;
      this.client.spMName = client.spMName;
      this.client.spLName = client.spLName;
      this.client.spSuffix = client.spSuffix;
      this.client.spGender = client.spGender;
      this.client.spDateOfBirth = client.spDateOfBirth;
      this.client.spOccupational = client.spOccupational;
      this.client.spEducAttained = client.spEducAttained;
      this.client.spBusinessName = client.spBusinessName;
      this.client.spJobTitle = client.spJobTitle;
      this.client.spJobStatus = client.spJobStatus;
      this.client.spSince = client.spSince;
      this.client.spHired = client.spHired;
      this.client.spEmpLevel = client.spEmpLevel;
      this.client.spNature = client.spNature;
      this.client.spNumberOfEmployees = client.spNumberOfEmployees;
      this.client.spOtherIncome = client.spOtherIncome;
      this.client.spDegree = client.spDegree;
      this.client.spMonthlyIncome = client.spMonthlyIncome;
      this.client.sPouseStrNo = client.sPouseStrNo;
      this.client.spBusAddStreet = client.spBusAddStreet;
      this.client.spBusAddBarangay = client.spBusAddBarangay;
      this.client.spBusAddCity = client.spBusAddCity;
      this.client.spBusAddProvince = client.spBusAddProvince;
      this.client.spBusAddZipCode = client.spBusAddZipCode;
      this.client.resAddStrNo = client.resAddStrNo;
      this.client.resAddStreet = client.resAddStreet;
      this.client.resAddBarangay = client.resAddBarangay;
      this.client.resAddCity = client.resAddCity;
      this.client.resAddProvince = client.resAddProvince;
      this.client.resAddZipCode = client.resAddZipCode;
      this.client.resSince = client.resSince;
      this.client.resType = client.resType;
      this.client.provAddStrNo = client.provAddStrNo;
      this.client.provAddStreet = client.provAddStreet;
      this.client.provAddBarangay = client.provAddBarangay;
      this.client.provAddCity = client.provAddCity;
      this.client.provAddProvince = client.provAddProvince;
      this.client.provAddZipCode = client.provAddZipCode;
      this.client.provSince = client.provSince;
      this.client.provType = client.provType;
      this.client.busAddStrNo = client.busAddStrNo;
      this.client.busAddStreet = client.busAddStreet;
      this.client.busAddBarangay = client.busAddBarangay;
      this.client.busAddCity = client.busAddCity;
      this.client.busAddProvince = client.busAddProvince;
      this.client.busAddZipCode = client.busAddZipCode;
      this.client.sectoral = client.sectoral;
      this.client.occupational = client.occupational;
      this.client.geographical = client.geographical;
      this.client.restriction = client.restriction;
      this.client.subGroup = client.subGroup;
      this.client.dateClosed = client.dateClosed;
      this.client.reason = client.reason;
      this.client.shareCapitalPledge = client.shareCapitalPledge;
      this.client.shareDepositPledge = client.shareDepositPledge;
      this.client.recruitedBy = client.recruitedBy;
      this.client.mealAllowance = client.mealAllowance;
      this.client.isShowTotalPoints = client.isShowTotalPoint;
      this.client.cisaClientTitle = client.cisaClientTitle;
      this.client.cisaMothersFname = client.cisaMothersFname;
      this.client.cisaMothersLname = client.cisaMothersLname;
      this.client.cisaMothersMname = client.cisaMothersMname;
      this.client.cisaFathersFname = client.cisaFathersFname;
      this.client.cisaFathersLname = client.cisaFathersLname;
      this.client.cisaFathersNameExtnt = client.cisaFathersNameExtnt;
      this.client.cisaFathersMname = client.cisaFathersMname;
      this.client.cisaPsocCode = client.cisaPsocCode;
      this.client.cisaPsicCode = client.cisaPsicCode;
      this.client.cisaContactType = client.cisaContactType;
      this.client.cisaContactNum = client.cisaContactNum;
      this.client.cisaBirthPlace = client.cisaBirthPlace;
      this.client.isCisaUpdated = client.isCisaUpdated;
      this.cisaclient.cmSecIdClientId = cisaclient.cmSecIdClientId;
      this.cisaclient.cmSecIdBrCode = cisaclient.cmSecIdBrCode;
      this.cisaclient.cmSecId1Type = cisaclient.cmSecId1Type;
      this.cisaclient.cmSecId1Num = cisaclient.cmSecId1Num;
      this.cisaclient.cmSecId1IssueDate = cisaclient.cmSecId1IssueDate;
      this.cisaclient.cmSecId1Country = cisaclient.cmSecId1Country;
      this.cisaclient.cmSecId1ExpiryDate = cisaclient.cmSecId1ExpiryDate;
      this.cisaclient.cmSecId1IssuedBy = cisaclient.cmSecId1IssuedBy;
      this.cisaclient.cmSecId2Type = cisaclient.cmSecId2Type;
      this.cisaclient.cmSecId2Num = cisaclient.cmSecId2Num;
      this.cisaclient.cmSecId2IssueDate = cisaclient.cmSecId2IssueDate;
      this.cisaclient.cmSecId2Country = cisaclient.cmSecId2Country;
      this.cisaclient.cmSecId2ExpiryDate = cisaclient.cmSecId2ExpiryDate;
      this.cisaclient.cmSecId2IssuedBy = cisaclient.cmSecId2IssuedBy;
      this.cisaclient.cmSecId3Type = cisaclient.cmSecId3Type;
      this.cisaclient.cmSecId3Num = cisaclient.cmSecId3Num;
      this.cisaclient.cmSecId3IssueDate = cisaclient.cmSecId3IssueDate;
      this.cisaclient.cmSecId3Country = cisaclient.cmSecId3Country;
      this.cisaclient.cmSecId3ExpiryDate = cisaclient.cmSecId3ExpiryDate;
      this.cisaclient.cmSecId3IssuedBy = cisaclient.cmSecId3IssuedBy;
      this.cisaBusiness.soleTraderId = cisaBusiness.soleTraderId;
      this.cisaBusiness.soleTraderClientID = cisaBusiness.soleTraderClientID;
      this.cisaBusiness.soleTraderBrCode = cisaBusiness.soleTraderBrCode;
      this.cisaBusiness.soleTraderName = cisaBusiness.soleTraderName;
      this.cisaBusiness.soleTraderMStreetNo = cisaBusiness.soleTraderMStreetNo;
      this.cisaBusiness.soleTraderMPostalCode =
        cisaBusiness.soleTraderMPostalCode;
      this.cisaBusiness.soleTraderMSubd = cisaBusiness.soleTraderMSubd;
      this.cisaBusiness.soleTraderMBrgy = cisaBusiness.soleTraderMBrgy;
      this.cisaBusiness.soleTraderMCity = cisaBusiness.soleTraderMCity;
      this.cisaBusiness.soleTraderMProv = cisaBusiness.soleTraderMProv;
      this.cisaBusiness.soleTraderMHouseType =
        cisaBusiness.soleTraderMHouseType;
      this.cisaBusiness.soleTraderMOccupiedSince =
        cisaBusiness.soleTraderMOccupiedSince;
      this.cisaBusiness.soleTraderMIdType = cisaBusiness.soleTraderMIdType;
      this.cisaBusiness.soleTraderMIdNum = cisaBusiness.soleTraderMIdNum;
      this.cisaBusiness.soleTraderMContactType =
        cisaBusiness.soleTraderMContactType;
      this.cisaBusiness.soleTraderMContactValue =
        cisaBusiness.soleTraderMContactValue;
      this.cisaBusiness.soleTraderAStreetNo = cisaBusiness.soleTraderAStreetNo;
      this.cisaBusiness.soleTraderAPostalCode =
        cisaBusiness.soleTraderAPostalCode;
      this.cisaBusiness.soleTraderASubd = cisaBusiness.soleTraderASubd;
      this.cisaBusiness.soleTraderABrgy = cisaBusiness.soleTraderABrgy;
      this.cisaBusiness.soleTraderACity = cisaBusiness.soleTraderACity;
      this.cisaBusiness.soleTraderAProv = cisaBusiness.soleTraderAProv;
      this.cisaBusiness.soleTraderAHouseType =
        cisaBusiness.soleTraderAHouseType;
      this.cisaBusiness.soleTraderAOccupiedSince =
        cisaBusiness.soleTraderAOccupiedSince;
      this.cisaBusiness.soleTraderAIdType = cisaBusiness.soleTraderAIdType;
      this.cisaBusiness.soleTraderAIdNum = cisaBusiness.soleTraderAIdNum;
      this.cisaBusiness.soleTraderAContactType =
        cisaBusiness.soleTraderAContactType;
      this.cisaBusiness.soleTraderAContactValue =
        cisaBusiness.soleTraderAContactValue;
      this.cisaMembers.memberBrCode = cisaMembers.memberBrCode;
      this.cisaMembers.memberClientId = cisaMembers.memberClientId;
      this.cisaMembers.fName = cisaMembers.fName;
      this.cisaMembers.mName = cisaMembers.mName;
      this.cisaMembers.lName = cisaMembers.lName;
      this.cisaMembers.nameExtnt = cisaMembers.nameExtnt;
    },

    insertNew() {
      this.selectDisabled = false;
      this.readOnly = false;
      this.client.clientId = "";
      this.client.lastName = "";
      this.client.firstName = "";
      this.client.middleName = "";
      this.client.alertLevel = "";
      this.client.department = "";
      this.client.acctType = "";
      this.client.jointType = "";
      this.client.clientType = "";
      this.client.accountName = "";
      this.client.accountStatus = "";
      this.client.referenceId = "";
      this.client.dateOpened = new Date().toISOString().slice(0, 10);
      this.client.suffix = "";
      this.client.dateOfBirth = "";
      this.client.height = "";
      this.client.weight = "";
      this.client.age = "";
      this.client.gender = "";
      this.client.civilStatus = "";
      this.client.religion = "";
      this.client.profession = "";
      this.client.mailingAddress = "";
      this.client.dosriTag = "";
      this.client.employerName = "";
      this.client.employerCode = "";
      this.client.employmentId = "";
      this.client.numberOfEmployees = "";
      this.client.dateHired = "";
      this.client.jobTitle = "";
      this.client.nature = "";
      this.client.jobStatus = "";
      this.client.employmentLevel = "";
      this.client.since = "";
      this.client.monthlySalary = "";
      this.client.profession = "";
      this.client.occupation = "";
      this.client.education = "";
      this.client.school = "";
      this.client.section = "";
      this.client.homeTelNo = "";
      this.client.provinceTelNo = "";
      this.client.cellphoneNo = "";
      this.client.employerTelNo = "";
      this.client.otherContactNo = "";
      this.client.spouseCellNo = "";
      this.client.emailAddress = "";
      this.client.smsBroadcastNo = "";
      this.client.tin = "";
      this.client.ctcno = "";
      this.client.sss = "";
      this.client.philHealth = "";
      this.client.pagIbig = "";
      this.client.atmBank = "";
      this.client.atmNo = "";
      this.client.gsis = "";
      this.client.nso = "";
      this.client.votersId = "";
      this.client.otherId = "";
      this.client.driversLicense = "";
      this.client.otherId = "";
      this.client.spFName = "";
      this.client.spMName = "";
      this.client.spLName = "";
      this.client.spSuffix = "";
      this.client.spGender = "";
      this.client.spDateOfBirth = "";
      this.client.spOccupational = "";
      this.client.spEducAttained = "";
      this.client.spBusinessName = "";
      this.client.spJobTitle = "";
      this.client.spJobStatus = "";
      this.client.spSince = "";
      this.client.spHired = "";
      this.client.spEmpLevel = "";
      this.client.spNature = "";
      this.client.spNumberOfEmployees = "";
      this.client.spOtherIncome = "";
      this.client.spDegree = "";
      this.client.spMonthlyIncome = "";
      this.client.sPouseStrNo = "";
      this.client.spBusAddStreet = "";
      this.client.spBusAddBarangay = "";
      this.client.spBusAddCity = "";
      this.client.spBusAddProvince = "";
      this.client.spBusAddZipCode = "";
      this.client.resAddStrNo = "";
      this.client.resAddStreet = "";
      this.client.resAddBarangay = "";
      this.client.resAddCity = "";
      this.client.resAddProvince = "";
      this.client.resAddZipCode = "";
      this.client.resSince = "";
      this.client.resType = "";
      this.client.provAddStrNo = "";
      this.client.provAddStreet = "";
      this.client.provAddBarangay = "";
      this.client.provAddCity = "";
      this.client.provAddProvince = "";
      this.client.provAddZipCode = "";
      this.client.provSince = "";
      this.client.provType = "";
      this.client.busAddStrNo = "";
      this.client.busAddStreet = "";
      this.client.busAddBarangay = "";
      this.client.busAddCity = "";
      this.client.busAddProvince = "";
      this.client.busAddZipCode = "";
      this.client.sectoral = "";
      this.client.occupational = "";
      this.client.geographical = "";
      this.client.restriction = "";
      this.client.subGroup = "";
      this.client.dateClosed = "";
      this.client.reason = "";
      this.client.shareCapitalPledge = "";
      this.client.shareDepositPledge = "";
      this.client.recruitedBy = "";
      this.client.mealAllowance = "";
      this.client.isShowTotalPoints = "";
      this.cisaclient.cmSecIdClientId = "";
      this.cisaclient.cmSecIdBrCode = "";
      this.cisaclient.cmSecId1Type = "";
      this.cisaclient.cmSecId1Num = "";
      this.cisaclient.cmSecId1IssueDate = "";
      this.cisaclient.cmSecId1Country = "";
      this.cisaclient.cmSecId1ExpiryDate = "";
      this.cisaclient.cmSecId1IssuedBy = "";
      this.cisaclient.cmSecId2Type = "";
      this.cisaclient.cmSecId2Num = "";
      this.cisaclient.cmSecId2IssueDate = "";
      this.cisaclient.cmSecId2Country = "";
      this.cisaclient.cmSecId2ExpiryDate = "";
      this.cisaclient.cmSecId2IssuedBy = "";
      this.cisaclient.cmSecId3Type = "";
      this.cisaclient.cmSecId3Num = "";
      this.cisaclient.cmSecId3IssueDate = "";
      this.cisaclient.cmSecId3Country = "";
      this.cisaclient.cmSecId3ExpiryDate = "";
      this.cisaclient.cmSecId3IssuedBy = "";
      this.cisaBusiness.soleTraderId = "";
      this.cisaBusiness.soleTraderClientID = "";
      this.cisaBusiness.soleTraderBrCode = "";
      this.cisaBusiness.soleTraderName = "";
      this.cisaBusiness.soleTraderMStreetNo = "";
      this.cisaBusiness.soleTraderMPostalCode = "";
      this.cisaBusiness.soleTraderMSubd = "";
      this.cisaBusiness.soleTraderMBrgy = "";
      this.cisaBusiness.soleTraderMCity = "";
      this.cisaBusiness.soleTraderMProv = "";
      this.cisaBusiness.soleTraderMHouseType = "";
      this.cisaBusiness.soleTraderMOccupiedSince = "";
      this.cisaBusiness.soleTraderMIdType = "";
      this.cisaBusiness.soleTraderMIdNum = "";
      this.cisaBusiness.soleTraderMContactType = "";
      this.cisaBusiness.soleTraderMContactValue = "";
      this.cisaBusiness.soleTraderAStreetNo = "";
      this.cisaBusiness.soleTraderAPostalCode = "";
      this.cisaBusiness.soleTraderASubd = "";
      this.cisaBusiness.soleTraderABrgy = "";
      this.cisaBusiness.soleTraderACity = "";
      this.cisaBusiness.soleTraderAProv = "";
      this.cisaBusiness.soleTraderAHouseType = "";
      this.cisaBusiness.soleTraderAOccupiedSince = "";
      this.cisaBusiness.soleTraderAIdType = "";
      this.cisaBusiness.soleTraderAIdNum = "";
      this.cisaBusiness.soleTraderAContactType = "";
      this.cisaBusiness.soleTraderAContactValue = "";
      this.cisaMembers.memberBrCode = "";
      this.cisaMembers.memberClientId = "";
      this.cisaMembers.fName = "";
      this.cisaMembers.mName = "";
      this.cisaMembers.lName = "";
      this.cisaMembers.nameExtnt = "";
    },

    cancel() {
      this.selectDisabled = true;
      this.readOnly = true;
      (this.client.clientId = ""),
        (this.client.lastName = ""),
        (this.client.firstName = ""),
        (this.client.middleName = ""),
        (this.client.alertLevel = ""),
        (this.client.department = ""),
        (this.client.acctType = ""),
        (this.client.jointType = ""),
        (this.client.clientType = ""),
        (this.client.accountName = ""),
        (this.client.accountStatus = ""),
        (this.client.referenceId = ""),
        (this.client.dateOpened = ""),
        (this.client.suffix = ""),
        (this.client.dateOfBirth = ""),
        (this.client.height = ""),
        (this.client.weight = ""),
        (this.client.age = ""),
        (this.client.gender = ""),
        (this.client.civilStatus = ""),
        (this.client.religion = ""),
        (this.client.profession = ""),
        (this.client.mailingAddress = ""),
        (this.client.dosriTag = ""),
        (this.client.employerName = ""),
        (this.client.employerCode = ""),
        (this.client.employmentId = ""),
        (this.client.numberOfEmployees = ""),
        (this.client.dateHired = ""),
        (this.client.jobTitle = ""),
        (this.client.nature = ""),
        (this.client.jobStatus = ""),
        (this.client.employmentLevel = ""),
        (this.client.since = ""),
        (this.client.monthlySalary = ""),
        (this.client.profession = ""),
        (this.client.occupation = ""),
        (this.client.education = ""),
        (this.client.school = ""),
        (this.client.section = ""),
        (this.client.homeTelNo = ""),
        (this.client.provinceTelNo = ""),
        (this.client.cellphoneNo = ""),
        (this.client.employerTelNo = ""),
        (this.client.otherContactNo = ""),
        (this.client.spouseCellNo = ""),
        (this.client.emailAddress = ""),
        (this.client.smsBroadcastNo = ""),
        (this.client.tin = ""),
        (this.client.ctcno = ""),
        (this.client.sss = ""),
        (this.client.philHealth = ""),
        (this.client.pagIbig = ""),
        (this.client.atmBank = ""),
        (this.client.atmNo = ""),
        (this.client.gsis = ""),
        (this.client.nso = ""),
        (this.client.votersId = ""),
        (this.client.otherId = ""),
        (this.client.driversLicense = ""),
        (this.client.otherId = ""),
        (this.client.spFName = ""),
        (this.client.spMName = ""),
        (this.client.spLName = ""),
        (this.client.spSuffix = ""),
        (this.client.spGender = ""),
        (this.client.spDateOfBirth = ""),
        (this.client.spOccupational = ""),
        (this.client.spEducAttained = ""),
        (this.client.spBusinessName = ""),
        (this.client.spJobTitle = ""),
        (this.client.spJobStatus = ""),
        (this.client.spSince = ""),
        (this.client.spHired = ""),
        (this.client.spEmpLevel = ""),
        (this.client.spNature = ""),
        (this.client.spNumberOfEmployees = ""),
        (this.client.spOtherIncome = ""),
        (this.client.spDegree = ""),
        (this.client.spMonthlyIncome = ""),
        (this.client.sPouseStrNo = ""),
        (this.client.spBusAddStreet = ""),
        (this.client.spBusAddBarangay = ""),
        (this.client.spBusAddCity = ""),
        (this.client.spBusAddProvince = ""),
        (this.client.spBusAddZipCode = ""),
        (this.client.resAddStrNo = ""),
        (this.client.resAddStreet = ""),
        (this.client.resAddBarangay = ""),
        (this.client.resAddCity = ""),
        (this.client.resAddProvince = ""),
        (this.client.resAddZipCode = ""),
        (this.client.resSince = ""),
        (this.client.provAddStrNo = ""),
        (this.client.provAddStreet = ""),
        (this.client.provAddBarangay = ""),
        (this.client.provAddCity = ""),
        (this.client.provAddProvince = ""),
        (this.client.provAddZipCode = ""),
        (this.client.busAddStrNo = ""),
        (this.client.busAddStreet = ""),
        (this.client.busAddBarangay = ""),
        (this.client.busAddCity = ""),
        (this.client.busAddProvince = ""),
        (this.client.busAddZipCode = ""),
        (this.client.sectoral = ""),
        (this.client.occupational = ""),
        (this.client.geographical = ""),
        (this.client.restriction = ""),
        (this.client.subGroup = ""),
        (this.client.dateClosed = ""),
        (this.client.reason = ""),
        (this.client.shareCapitalPledge = ""),
        (this.client.shareDepositPledge = ""),
        (this.client.recruitedBy = ""),
        (this.client.mealAllowance = ""),
        (this.client.isShowTotalPoints = "");
    },

    imageChanged(event) {
      var fileReader = new FileReader();
      this.imageTemp = this.image;
      this.imageTemp.imageId = this.image.imageId;
      this.imageTemp.imageBrCode = 18;
      this.imageTemp.imageType = "img";
      this.imageTemp.imageDateTimeAdded = this.client.dateOpened;
      this.imageTemp.imageClientId = this.client.clientId;

      //display image after selecting
      const file = event.target.files[0];
      this.url = URL.createObjectURL(file);
      fileReader.readAsDataURL(event.target.files[0]);

      this.image.imageFileSize = event.target.files[0].size;
      fileReader.onload = event => {
        this.image.imageFile = event.target.result;
      };
    },

    signatureChanged(event) {
      var fileReader = new FileReader();
      this.sigTemp = this.simage;
      this.sigTemp.imageId = this.simage.imageId;
      this.sigTemp.imageBrCode = 18;
      this.sigTemp.imageType = "sig";
      this.sigTemp.imageDateTimeAdded = this.client.dateOpened;
      this.sigTemp.imageClientId = this.client.clientId;

      //display image after selecting
      const file = event.target.files[0];
      this.surl = URL.createObjectURL(file);
      fileReader.readAsDataURL(event.target.files[0]);

      this.simage.imageFileSize = event.target.files[0].size;
      fileReader.onload = event => {
        this.simage.imageFile = event.target.result;
      };
    },

    sketchChanged(event){
      var fileReader = new FileReader();
      this.sketchImage.imageBrCode = 18;
      this.sketchImage.imageType = "skt";
      this.sketchImage.imageDateTimeAdded = this.client.dateOpened;
      this.sketchImage.imageClientId = this.client.clientId;

      //display image after selecting
      const file = event.target.files[0];
      this.sketchUrl = URL.createObjectURL(file);
      fileReader.readAsDataURL(event.target.files[0]);

      this.sketchImage.imageFileSize = event.target.files[0].size;
      fileReader.onload = event => {
        this.sketchImage.imageFile = event.target.result;
      };
    },
  }
};
</script>

<style>
.clients {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
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

.new:hover,
.new {
  background-color: #fff;
}

a[disabled],
a[disabled]:hover {
  pointer-events: none;
}
</style>  