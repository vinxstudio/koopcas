<template>
  <div class="purchase-inquiry">
    <main class="px-2 h-100">
      <router-outlet></router-outlet>
      <app-inventory>
        <router-outlet></router-outlet>
        <app-purchaseinquiry>
          <app-toolbar>
            <nav class="navbar navbar-expand-lg p-0" id="toolbar">
              <ul class="navbar-nav mr-auto">
                <!--bindings={
  "ng-reflect-ng-for-of": "[object Object]"
                }-->
                <!--bindings={
  "ng-reflect-ng-if-else": "[object Object]"
                }-->
                <li class="nav-item">
                  <a class="nav-link" tabindex="0" id="menuDropdown-0"></a>
                </li>
                <!---->
              </ul>
            </nav>
          </app-toolbar>
          <app-toolbar>
            <nav class="navbar navbar-expand-lg p-0" id="toolbar">
              <ul class="navbar-nav mr-auto">
                <!--bindings={
  "ng-reflect-ng-for-of": "[object Object]"
                }-->
                <!--bindings={
  "ng-reflect-ng-if-else": "[object Object]"
                }-->
                <li class="nav-item">
                  <a class="nav-link" tabindex="0" id="menuDropdown-0"></a>
                </li>
                <!---->
              </ul>
              <ul class="navbar-nav mr-5">
                <li class="nav-item">
                  <a class="btn btn-sm btn-outline-primary mr-4">
                    <i class="fa fa-search mr-1"></i>
                    <span>Find</span>
                  </a>
                  <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                    <i class="fa fa-file mr-1"></i>
                    <span>
                      Ne
                      <u>w</u>
                    </span>
                  </button>
                  <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                    <i class="fa fa-edit mr-1"></i>&nbsp;
                    <span>
                      Ed
                      <u>it</u>
                    </span>
                  </button>
                  <button class="btn btn-sm btn-outline-primary mr-4" type="button">
                    <i class="fa fa-save mr-1"></i>&nbsp;
                    <span>
                      <u>D</u>elete
                    </span>
                  </button>
                  <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                    <i class="fa fa-save mr-1"></i>&nbsp;
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
                  <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                    <i class="fa fa-angle-up mr-1"></i>
                    <span>
                      Page
                      <u>U</u>p
                    </span>
                  </button>
                  <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                    <i class="fa fa-angle-down mr-1"></i>
                    <span>
                      Page
                      <u>D</u>own
                    </span>
                  </button>
                </li>
              </ul>
            </nav>
          </app-toolbar>
          <app-toolbar>
            <nav class="navbar navbar-expand-lg p-0" id="toolbar">
              <ul class="navbar-nav mr-auto">
                <!--bindings={
  "ng-reflect-ng-for-of": "[object Object]"
                }-->
                <!--bindings={
  "ng-reflect-ng-if-else": "[object Object]"
                }-->
                <li class="nav-item">
                  <a class="nav-link" tabindex="0" id="menuDropdown-0"></a>
                </li>
                <!---->
              </ul>
            </nav>
          </app-toolbar>
          <div class="form-row align-items-stretch">
            <div class="col">
              <div class="bg-light">
                <fieldset class="border p-2">
                  <div class="form-row align-items-center">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="POStatus"
                    >PO Status:</label>
                    <div class="col-7 my-1">
                      <select class="custom-select custom-select-sm" name="POStatus">
                        <option value ng-reflect-value></option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row align-items-center">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="controlNo1"
                    >Control No.:</label>
                    <div class="col-sm-5 my-1">
                      <div class="form-row align-items-stretch">
                        <input
                          class="col-4 mr-sm-2 form-control form-control-sm"
                          name="controlNo1"
                          type="text"
                        >
                        <span class="mr-sm-2"></span>
                        <label
                          class="col-sm-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        >Encoded By:</label>
                        <input class="col-sm-4 form-control form-control-sm" name type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="client1"
                    >Vendor.....</label>
                    <div class="col my-1">
                      <div class="form-row m-0">
                        <input
                          class="col-1 mr-sm-2 form-control form-control-sm"
                          name="client1"
                          type="text"
                        >
                        <input
                          class="col-7 mr-sm-2 form-control form-control-sm"
                          name="client1"
                          type="text"
                        >
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
                    >P.O. Date:</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="transDate" type="date">
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="batchNo"
                    >Required Date:</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="batchNo" type="date">
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
          <br>
          <div class="col">
            <ngb-tabset>
              <ul role="tablist" class="nav nav-tabs justify-content-start">
                <!--bindings={
  "ng-reflect-ng-for-of": "[object Object]"
                }-->
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    href
                    role="tab"
                    id="ngb-tab-0"
                    aria-controls="ngb-tab-0-panel"
                    aria-expanded="true"
                    aria-disabled="false"
                  >
                    <!--bindings={
  "ng-reflect-ng-template-outlet": "[object Object]"
                    }-->
                    <span>
                      <u>D</u>etails
                    </span>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <!--bindings={
  "ng-reflect-ng-for-of": "[object Object]"
                }-->
                <!--bindings={
  "ng-reflect-ng-if": "true"
                }-->
                <div
                  role="tabpanel"
                  class="tab-pane active"
                  aria-labelledby="ngb-tab-0"
                  id="ngb-tab-0-panel"
                  aria-expanded="true"
                >
                  <!--bindings={
  "ng-reflect-ng-template-outlet": "[object Object]"
                  }-->
                  <div class="bg-dark" style="min-height: 339px;">
                    <table class="table table-sm table-bordered custom-table">
                      <thead>
                        <tr>
                          <th scope="col">Barcode</th>
                          <th scope="col">Item Description</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Unit Cost</th>
                          <th scope="col">Total Cost</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="credit"
                    >
                      <b>Total Purchase Price:</b>
                    </label>
                    <div class="col-sm-3 my-1">
                      <input class="form-control form-control-sm" name="credit" type="text">
                    </div>
                  </div>
                </div>
                <!---->
              </div>
            </ngb-tabset>
          </div>
          <br>
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
        </app-purchaseinquiry>
      </app-inventory>
    </main>
  </div>
</template>