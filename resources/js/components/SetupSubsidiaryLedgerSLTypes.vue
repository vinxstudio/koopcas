<template>
  <div class="sl-types">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
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
              <span class="float-right">F4</span>
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
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div class="dropdown-menu" style="left: 5px; min-width: 200px; font-size: 13px;">
            <a href="#" class="dropdown-item">Activity Logs</a>
            <a href="#" class="dropdown-item">
              Load Tree View
              <span class="float-right">F5</span>
            </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <router-link to="/back-office/inquiry-search" class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>

          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-4" type="button">
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-save mr-1"></i>
            <span>
              <u>S</u>ave
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </button>
        </li>
      </ul>
    </nav>

    <div class="form-row">
      <div class="col-md-4">
        <fieldset class="border p-2 h-100 bg-light">
          <botreebrowser-app :node="root" @onClick="nodeWasClicked"></botreebrowser-app>
        </fieldset>
      </div>

      <div class="col-md-8">
        <div class="form-row">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountType"
          >S/L Class:</label>
          <div class="col-md-4 my-1">
            <select class="custom-select custom-select-sm" name="slClass">
              <option value="1"></option>
            </select>
          </div>
          <div class="form-check ml-auto mr-2 mt-2">
            <input
              class="form-check-input"
              id="disabled"
              style="margin-top: 10px;"
              type="checkbox"
              value
            >
            <label
              class="form-check-label"
              for="disabled"
              style="margin-top: 5px;"
            >Include in Statement Account</label>
          </div>
          <div class="form-check ml-auto mr-2 mt-2">
            <input
              class="form-check-input"
              id="disabled"
              style="margin-top: 10px;"
              type="checkbox"
              value
            >
            <label class="form-check-label" for="disabled" style="margin-top: 5px;">DISABLED</label>
          </div>
        </div>
        <div class="form-row justify-content-between">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountLevel"
          >S/L Type Code:</label>
          <div class="col-md my-1">
            <input class="form-control form-control-sm" name type="text">
          </div>
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="balanceType"
          >Priority:</label>
          <div class="col-md my-1">
            <input class="form-control form-control-sm" name type="text">
          </div>
        </div>

        <div class="form-row justify-content-between">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountLevel"
          >Short Description:</label>
          <div class="col-sm my-1">
            <input class="form-control form-control-sm" name type="text">
          </div>
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="balanceType"
          >Old SLT Code:</label>
          <div class="col-sm my-1">
            <input class="form-control form-control-sm" name type="text">
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountType"
          >Long Description:</label>
          <div class="col-md-5 my-1">
            <input class="form-control form-control-sm" name type="text">
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountType"
          >General Class:</label>
          <div class="col-md-5 my-1">
            <input class="form-control form-control-sm" name type="text">
          </div>
        </div>

        <fieldset class="border py-2 px-3 my-2">
          <fieldset class="border py-1 px-1 my-1">
            <center>
              <h4>
                <b>G/L Controlling Accounts</b>
              </h4>
            </center>
          </fieldset>
          <h5 class="mt-4 font-weight-bold">S/L Entry:</h5>
          <div class="bg-dark" style="min-height: 250px;">
            <table class="table table-sm table-bordered custom-table">
              <thead>
                <tr>
                  <th scope="col">BR</th>
                  <th scope="col">ID</th>
                  <th scope="col">SL</th>
                  <th scope="col">S/L Entry</th>
                  <th scope="col">G/L-Acct</th>
                  <th scope="col">G/L Acct Title</th>
                  <th scope="col">Remarks</th>
                  <th scope="col">Balance Type</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <h5 class="mt-4 font-weight-bold">Sub Accounts:</h5>
          <div class="bg-dark" style="min-height: 250px;">
            <table class="table table-sm table-bordered custom-table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">S/L Sub-Account</th>
                  <th scope="col">G/L-Acct</th>
                  <th scope="col">G/L Acct Title</th>
                  <th scope="col">Remarks</th>
                  <th scope="col">Balance Type</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
.sl-types {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.bg-light-blue {
  background-color: #6dcff6 !important;
}
</style>