<template>
  <div class="environment-workstation-parameters">
    <div class="pt-3">
      <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
        <ul role="tablist" class="nav nav-tabs nav-fill">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#connection" role="tab">
              <span>Connection</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#printing" role="tab" id="ngb-tab-37">
              <span>Printing</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pos" role="tab" id="ngb-tab-38">
              <span>Priority System/POS</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tallyinstallation" role="tab">
              <span>Tally Installation</span>
            </a>
          </li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="connection">
            <fieldset class="my-1 border pb-3 px-3 mx-1">
              <legend
                class="col-form-label col-form-label-sm w-auto px-1"
                for="dateOpened"
              >Connection</legend>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Server Host/IP Address:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">localhost, 192.168.1.2, 10.0.0.2</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Server Port:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">3306</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Database Name:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">kcascpmpc01</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Branch Code:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">1</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Branch Name:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">Head Office</i>
                </span>
              </div>
            </fieldset>
          </div>

          <div role="tabpanel" class="tab-pane" id="printing">
            <fieldset class="my-1 border pb-3 px-3 mx-1">
              <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">Printing</legend>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Normal Printing EMulation:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">Epson or IBM</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Passbook Printing Emulation:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">Epson or IBM</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Loan Passbook TopLeft Margin:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">TopMargin, LeftMargin</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Savings Passbook TopLeft Margin:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">TopMargin, LeftMargin</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Deposit Slip Passbook TopLeft Margin:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">TopMargin, LeftMargin</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Withdrawal Slip Passbook TopLeft Margin:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">TopMargin, LeftMargin</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Passbook Name Passbook TopLeft Margin:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">TopMargin, LeftMargin</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Cash Voucher Passbook TopLeft Margin:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">TopMargin, LeftMargin</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Check1 Printing TopLeft Margin:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">TopMargin, LeftMargin</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Check2 Printing TopLeft Margin:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">TopMargin, LeftMargin</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Passbook Printing PORT:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">LPT1,LPT1,COM1, COM2, c:/text1.txt</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Normal Printing PORT:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">LPT1,LPT1,COM1, COM2, c:/text1.txt</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Savings Passbook LastLine:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">LastLine Number</i>
                </span>
              </div>
            </fieldset>
          </div>

          <div role="tabpanel" class="tab-pane" id="pos">
            <fieldset class="my-1 border pb-3 px-3 mx-1">
              <legend
                class="col-form-label col-form-label-sm w-auto px-1"
                for="dateOpened"
              >Priority System</legend>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Video Path:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">c:/Videos</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Running Text URL:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">http://</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Terminal Description:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">Terminal 1</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >InfoText Speed</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">10</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Queuing Workstation</label>
              </div>
            </fieldset>
            <fieldset class="my-1 border pb-3 px-3 mx-1">
              <legend
                class="col-form-label col-form-label-sm w-auto px-1"
                for="dateOpened"
              >POS Information</legend>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Serial Number:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">ABC123</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Match ID Number:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">ABC123</i>
                </span>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Is TextBased Printing:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="text">
                </div>
                <span class="col-auto col-form-label col-form-label-sm my-1">
                  <i class="text-secondary">0 - False, 1 - True (Graphic Based Printing)</i>
                </span>
              </div>
            </fieldset>
          </div>

          <div role="tabpanel" class="tab-pane" id="tallyinstallation">
            <div class="form-row">
              <label
                class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
              >Printer Name:</label>
              <div class="col my-1">
                <input class="form-control form-control-sm" name type="text">
              </div>
            </div>
            <div class="form-row">
              <label
                class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
              >Port:</label>
              <div class="col my-1">
                <select class="custom-select custom-select-sm" id name>
                  <option value="1" ng-reflect-value="1">1</option>
                  <option value="2" ng-reflect-value="2">2</option>
                </select>
              </div>
            </div>
            <div class="form-row justify-content-center">
              <div class="col-sm-auto my-2">
                <button class="btn btn-dark-blue btn-block">
                  <i class="fa fa-print mr-1"></i>
                  <span>Add Printer</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </ngb-tabset>
      <div class="form-row justify-content-center">
        <div class="col-sm-auto my-2">
          <button class="btn btn-dark-blue btn-block p-3">
            <i class="fa fa-save mr-1"></i>
            <span>Save</span>
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
  </div>
</template>



<style>
.time-deposit {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.bg-light-green {
  background-color: #20c997 !important;
}

.bg-light-blue {
  background-color: #6dcff6 !important;
}

.bg-light-pink {
  background-color: #ef80ff !important;
}

.bg-light-yellow {
  background-color: #fff9c4 !important;
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