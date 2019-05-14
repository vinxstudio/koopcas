<template>
  <div class="conso-chart-of-accounts">
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
    <div class="form-row" style="height:500px">
      <div class="col-md-4">
        <fieldset class="border p-2 h-100 bg-light">
          <botreebrowser-app :node="root" @onClick="nodeWasClicked"></botreebrowser-app>
        </fieldset>
      </div>
      <div class="col-md-8">
        <div class="form-row">
          <label
            class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountType"
          >Account Type:</label>
          <div class="col-sm-4 my-1">
            <select class="custom-select custom-select-sm" name="accountType">
              <option value ng-reflect-value></option>
            </select>
          </div>
          <div class="col-auto my-1 align-self-center ml-auto">
            <div class="form-check form-check-sm">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">DISABLED</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="summaryAcct"
          >Summary Account:</label>
          <div class="col my-1">
            <select class="custom-select custom-select-sm" name="summaryAcct">
              <option value ng-reflect-value></option>
            </select>
          </div>
          <div class="col-auto my-1">
            <button class="btn btn-sm btn-block btn-outline-primary h-100">
              <i class="fa fa-search mx-1"></i>
            </button>
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountCode"
          >Account Code:</label>
          <div class="col">
            <div class="form-row">
              <div class="col-sm-4 my-1">
                <input class="form-control form-control-sm" name="accountCode1" type="text">
              </div>
              <div class="col my-1">
                <input class="form-control form-control-sm" name="accountCode2" type="text">
              </div>
            </div>
          </div>
        </div>
        <div class="form-row justify-content-between">
          <label
            class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountLevel"
          >Account Level:</label>
          <div class="col my-1">
            <select class="custom-select custom-select-sm" name="accountLevel">
              <option value ng-reflect-value></option>
            </select>
          </div>
          <label
            class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="balanceType"
          >Balance Type:</label>
          <div class="col my-1">
            <select class="custom-select custom-select-sm" name="balanceType">
              <option value ng-reflect-value></option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="consoAcct"
          >Conso Account:</label>
          <div class="col-auto my-1 align-self-center ml-auto">
            <div class="form-check form-check-sm">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">Can Transact GL Only</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.conso-chart-of-accounts {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.bg-light-blue {
  background-color: #6dcff6 !important;
}
</style>