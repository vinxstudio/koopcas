<template>
  <div class="maintenance">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
          <div class="dropdown-menu" style="left: 5px; min-width: 200px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Find
              <span class="float-right">Ctrl+F</span>
            </a>
            <a href="#" class="dropdown-item">
              New
              <span class="float-right">Ctrl+N</span>
            </a>
            <a href="#" class="dropdown-item">
              Edit
              <span class="float-right">Ctrl+F2</span>
            </a>
            <a href="#" class="dropdown-item">
              Delete
              <span class="float-right">Ctrl+D</span>
            </a>
            <a href="#" class="dropdown-item">
              Save
              <span class="float-right">F11</span>
            </a>
            <a href="#" class="dropdown-item">
              Exit
              <span class="float-right">Ctrl+X</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Document</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Tag Cancelled
              <span class="float-right">Shift+F3</span>
            </a>
            <a href="#" class="dropdown-item">
              Tag Approved
              <span class="float-right">Ctrl+A</span>
            </a>
            <a href="#" class="dropdown-item">
              Post
              <span class="float-right">Ctrl+F11</span>
            </a>
            <a href="#" class="dropdown-item">
              Reverse
              <span class="float-right">Shift+F11</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Other</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Set System Date
              <span class="float-right">F5</span>
            </a>
            <a href="#" class="dropdown-item">
              S/L Account Summary
              <span class="float-right">F7</span>
            </a>
            <a href="#" class="dropdown-item">
              View SL Setup
              <span class="float-right">F8</span>
            </a>
            <a href="#" class="dropdown-item">
              Client Master Maintenance
              <span class="float-right">Ctrl+F8</span>
            </a>
            <a href="#" class="dropdown-item">
              SL Master Maintenance
              <span class="float-right">Shift+F8</span>
            </a>
            <a href="#" class="dropdown-item">
              Chart of Accounts Inquiry
              <span class="float-right">Shift+Ctrl+F8</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Activity Logs
              <span class="float-right">Ctrl+T</span>
            </a>
            <a href="#" class="dropdown-item">
              Zoom Transaction Grid
              <span class="float-right">F4</span>
            </a>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Payroll
              <div class="dropdown-menu" style="left: 339px; top: 60px; min-width: 200px">
                <a href="#" class="dropdown-item">Download Payroll</a>
                <a href="#" class="dropdown-item">Upload Payroll</a>
                <a href="#" class="dropdown-item">Payroll Listing by SL</a>
                <a href="#" class="dropdown-item">Payroll Listing By Name</a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Print</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Document
              <span class="float-right">Ctrl+F9</span>
            </a>
            <a href="#" class="dropdown-item">
              Print Receipt Details
              <span class="float-right">Ctrl+R</span>
            </a>
            <a href="#" class="dropdown-item">
              Print Voucher
              <span class="float-right">Ctrl+P</span>
            </a>
            <a href="#" class="dropdown-item">
              Print Formatted Voucher
              <span class="float-right">Ctrl+W</span>
            </a>
            <a href="#" class="dropdown-item">
              Print Purchase Order Certificate
              <span class="float-right">Ctrl+Z</span>
            </a>
            <a href="#" class="dropdown-item">
              Check Format 1
              <span class="float-right">Shift+F9</span>
            </a>
            <a href="#" class="dropdown-item">
              Check Format 2
              <span class="float-right">Shift+Ctrl+F9</span>
            </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <button class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary mr-4" type="button">
            <i class="fa fa-times mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-save mr-1"></i>
            <span>
              <u>S</u>ave
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary mr-4" type="button">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-arrow-up mr-1"></i>
            <span>
              Page
              <u>U</u>p
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-arrow-down mr-1"></i>
            <span>
              Page D
              <u>o</u>wn
            </span>
          </button>
        </li>
      </ul>
    </nav>
    <div class="form-row align-items-stretch">
      <div class="col-6">
        <div class="bg-light">
          <fieldset class="border p-2">
            <div class="form-row justify-content-between">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="transType"
              >Trans. Type:</label>
              <div class="col-sm-5 my-1">
                <select class="custom-select custom-select-sm" name="transType">
                  <option value></option>
                </select>
              </div>

              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="dept"
              >Dept:</label>
              <div class="col-sm-3 my-1">
                <select class="custom-select custom-select-sm" name="dept">
                  <option value></option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="controlNo1"
              >Control No.:</label>
              <span class="col-auto mt-1 font-weight-bold">-</span>
            </div>

            <div class="form-row">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="client1"
              >Client:</label>
              <div class="col my-1">
                <div class="form-row m-0">
                  <input
                    class="col-4 mr-sm-2 form-control form-control-sm"
                    name="client1"
                    type="text"
                  >
                </div>
              </div>
            </div>

            <div class="form-row">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="client1"
              >And/Or:</label>
              <div class="col offset-md-2 offset-sm-3 my-1">
                <div class="form-row m-0">
                  <span class="mr-sm-2"></span>
                  <input class="col offset-4 form-control form-control-sm" name type="text">
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="col-3">
        <div class="bg-light h-100">
          <fieldset class="border p-2 h-100">
            <div class="form-row">
              <label
                class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="refNumber"
              >Ref. Number:</label>
              <div class="col-sm my-1">
                <input class="form-control form-control-sm" name="refNumber" type="text">
              </div>
            </div>
            <div class="form-row">
              <label
                class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="transDate"
              >Trans. Date:</label>
              <div class="col-sm my-1">
                <input class="form-control form-control-sm" name="transDate" type="date">
              </div>
            </div>
            <div class="form-row">
              <label
                class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="batchNo"
              >Batch No.:</label>
              <div class="col-sm my-1">
                <input class="form-control form-control-sm" name="batchNo" type="text">
              </div>
            </div>
          </fieldset>
        </div>
      </div>

      <div class="col text-center">
        <h4>Press F4 to Enlarge</h4>
        <h4>Transaction Grid</h4>
      </div>
    </div>

    <div class="form-row mt-2 mb-2 align-items-stretch">
      <div class="col">
        <ngb-tabset class="custom-tabs">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a
                class="nav-link active"
                href
                role="tab"
                id="glslentries-tab"
                aria-expanded="true"
                aria-disabled="false"
                aria-controls="glslentries-tab-panel"
              >
                <span>
                  <u>G</u>L/SL Entries
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href
                role="tab"
                id="slentries-tab"
                aria-expanded="false"
                aria-disabled="false"
              >
                <span>
                  <u>S</u>/L Entries
                </span>
              </a>
            </li>
          </ul>

          <div class="tab-content">
            <div
              role="tabpanel"
              class="tab-pane active"
              aria-labelledby="glslentries-tab"
              id="glslentries-tab-panel"
              aria-expanded="true"
            >
              <div class="form-row">
                <table class="table table-sm table-bordered table-hover custom-table">
                  <thead>
                    <tr>
                      <th scope="col">P</th>
                      <th scope="col">SC</th>
                      <th scope="col">ST</th>
                      <th scope="col">SE</th>
                      <th scope="col">SN</th>
                      <th scope="col">G/L Acct.</th>
                      <th scope="col">Acct. Description</th>
                      <th scope="col">Debit</th>
                      <th scope="col">Credit</th>
                      <th scope="col">ClientID</th>
                      <th scope="col">Name of Client</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <br>
              <div class="form-row">
                <label
                  class="col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="transType"
                >Difference:</label>
                <input class="form-control d-control" name type="text">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="transType"
                >Debit:</label>
                <input class="form-control d-control" name type="text">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="transType"
                >Credit:</label>
                <input class="form-control d-control" name type="text">
              </div>
            </div>
          </div>
        </ngb-tabset>
      </div>
    </div>

    <div class="form-row align-items-stretch">
      <div class="col">
        <div class="bg-light">
          <fieldset class="border p-2">
            <h5 align="top-left">Explanation</h5>
            <textarea class="col form-control"></textarea>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.bg-light-blue {
  background-color: #6dcff6 !important;
}
</style>
