<template>
  <div class="advanced">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
      </ul>
    </nav>

    <div class="form-row mt-2 mb-2 align-items-stretch">
      <div class="col">
        <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <!--bindings={
  "ng-reflect-ng-for-of": "[object Object]"
            }-->
            <li class="nav-item">
              <a
                class="nav-link active"
                href
                role="tab"
                id="ngb-tab-1"
                aria-controls="ngb-tab-1-panel"
                aria-expanded="true"
                aria-disabled="false"
              >
                <!--bindings={
  "ng-reflect-ng-template-outlet": "[object Object]"
                }-->
                <span>
                  <u>A</u>dvance
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
              aria-labelledby="ngb-tab-1"
              id="ngb-tab-1-panel"
              aria-expanded="true"
            >
              <!--bindings={
  "ng-reflect-ng-template-outlet": "[object Object]"
              }-->
              <div class="form-row align-items-center">
                <label
                  class="col-sm-3 text-right col-form-label col-form-label-sm mt-1"
                >Client Name:</label>
                <div class="col-sm-4">
                  <input class="form-control form-control-sm" type="text">
                </div>
              </div>
              <br>
              <div class="form-row align-items-center">
                <label
                  class="col-sm-3 text-right col-form-label col-form-label-sm mt-1"
                >And/Or Name:</label>
                <div class="col-sm-4">
                  <input class="form-control form-control-sm" type="text">
                </div>
              </div>
              <br>
              <div class="form-row justify-content-center">
                <div class="col-auto">
                  <p>Document:</p>
                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fa fa-file mr-1"></i>
                    <span>Browse</span>
                  </button>
                </div>
                <div class="col-sm-3">
                  <textarea
                    class="form-control form-control-sm bg-warning border-0"
                    cols="30"
                    id
                    name
                    rows="10"
                  ></textarea>
                </div>
                <div class="col-sm-3">
                  <textarea class="form-control" cols="30" id name rows="10">                                        DEFAULT
                                        </textarea>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-angle-double-right"></i>
                  </div>
                </div>
                <div class="col-sm-3">
                  <textarea
                    class="form-control form-control-sm bg-warning border-0"
                    cols="30"
                    id
                    name
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <br>
              <div class="form-row align-items-center">
                <label class="col-sm-3 text-right col-form-label col-form-label-sm mt-1">DEBIT AMT:</label>
                <div class="col-sm-2">
                  <input class="form-control form-control-sm" type="text">
                </div>
              </div>
              <br>
              <div class="form-row align-items-center">
                <label class="col-sm-3 text-right col-form-label col-form-label-sm mt-1">CREDIT AMT:</label>
                <div class="col-sm-2">
                  <input class="form-control form-control-sm" type="text">
                </div>
              </div>
              <br>
              <div class="form-row align-items-center">
                <label
                  class="col-sm-3 text-right col-form-label col-form-label-sm mt-1"
                >Restriction Group:</label>
                <div class="col-sm-3">
                  <textarea
                    class="form-control form-control-sm bg-warning border-0"
                    cols="30"
                    id
                    name
                    rows="10"
                  >                                                                DEFAULT
                                                            </textarea>
                </div>
              </div>
            </div>
            <!---->
          </div>
        </ngb-tabset>
      </div>
    </div>

    <div class="form-row justify-content-center">
      <div class="col-sm-auto my-2">
        <button class="btn btn-dark-blue btn-block p-3">
          <i class="fa fa-save mr-1"></i>
          <span>OK</span>
        </button>
      </div>
      <br>
      <div class="col-sm-auto my-2">
        <button class="btn btn-outline-dark-blue btn-block p-3">
          <i class="fa fa-ban mr-1"></i>
          <span>Cancel</span>
        </button>
      </div>
    </div>
  </div>
</template>