<template>
  <div class="physical-listing">
    <div class="form-row align-items-stretch p-3">
      <div class="col">
        <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <!--bindings={
  "ng-reflect-ng-for-of": "[object Object],[object Object"
            }-->
            <li class="nav-item">
              <a
                class="nav-link active"
                href
                role="tab"
                id="ngb-tab-7"
                aria-controls="ngb-tab-7-panel"
                aria-expanded="true"
                aria-disabled="false"
              >Basic
                <!--bindings={
  "ng-reflect-ng-template-outlet": null
                }-->
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href
                role="tab"
                id="ngb-tab-8"
                aria-expanded="false"
                aria-disabled="false"
              >Advance
                <!--bindings={
  "ng-reflect-ng-template-outlet": null
                }-->
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <!--bindings={
  "ng-reflect-ng-for-of": "[object Object],[object Object"
            }-->
            <!--bindings={
  "ng-reflect-ng-if": "true"
            }-->
            <div
              role="tabpanel"
              class="tab-pane active"
              aria-labelledby="ngb-tab-7"
              id="ngb-tab-7-panel"
              aria-expanded="true"
            >
              <!--bindings={
  "ng-reflect-ng-template-outlet": "[object Object]"
              }-->
              <div class="form-row align-items-stretch">
                <div class="col">
                  <div class="bg-light">
                    <fieldset class="border p-2">
                      <div class="form-row">
                        <div class="col">
                          <fieldset class="my-1 border pb-3 px-3 mx-1">
                            <legend
                              class="col-form-label col-form-label-sm w-auto px-1"
                              for="dateOpened"
                            >Setup Dates</legend>
                            <div class="form-row">
                              <div class="col-sm-3 text-sm-right">
                                <p class="col-form-label col-form-label-sm mt-1">
                                  <b>P.I. Date:</b>
                                </p>
                              </div>
                              <div class="col">
                                <div class="form-row">
                                  <label
                                    class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                                  >from</label>
                                  <div class="col my-1">
                                    <input class="form-control form-control-sm" name type="date">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label
                                    class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                                  >to</label>
                                  <div class="col my-1">
                                    <input class="form-control form-control-sm" name type="date">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <br>
                          <br>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="form-row justify-content-center">
                <div class="col-sm-10 p-3">
                  <div class="form-row my-5">
                    <label
                      class="col-sm-1 col-form-label col-form-label-sm text-truncate"
                    >Item Class:</label>
                    <div class="col">
                      <div class="form-row align-items-center">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value="1" ng-reflect-value="1">1</option>
                            <option value="2" ng-reflect-value="2">2</option>
                          </select>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-angle-double-right"></i>
                        </div>
                        <div class="col">
                          <select
                            class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
                            id
                            multiple
                            name
                          >
                            <option value="1" ng-reflect-value="1"></option>
                            <option value="2" ng-reflect-value="2"></option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row my-5">
                    <label
                      class="col-sm-1 col-form-label col-form-label-sm text-truncate"
                    >Item Sub Class:</label>
                    <div class="col">
                      <div class="form-row align-items-center">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value="1" ng-reflect-value="1">1</option>
                            <option value="2" ng-reflect-value="2">2</option>
                          </select>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-angle-double-right"></i>
                        </div>
                        <div class="col">
                          <select
                            class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
                            id
                            multiple
                            name
                          >
                            <option value="1" ng-reflect-value="1"></option>
                            <option value="2" ng-reflect-value="2"></option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="form-row my-5">
                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Stauts:</label>
                    <div class="col">
                      <div class="form-row align-items-center">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value="1" ng-reflect-value="1">1</option>
                            <option value="2" ng-reflect-value="2">2</option>
                          </select>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-angle-double-right"></i>
                        </div>
                        <div class="col">
                          <select
                            class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
                            id
                            multiple
                            name
                          >
                            <option value="1" ng-reflect-value="1"></option>
                            <option value="2" ng-reflect-value="2"></option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!---->
            <!--bindings={
  "ng-reflect-ng-if": "false"
            }-->
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
      <div class="col-sm-auto my-2">
        <button class="btn btn-outline-dark-blue btn-block p-3">
          <i class="fa fa-ban mr-1"></i>
          <span>Cancel</span>
        </button>
      </div>
    </div>
  </div>
</template>