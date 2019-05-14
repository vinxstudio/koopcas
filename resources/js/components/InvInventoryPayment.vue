<template>
  <div class="inventory-payment">
    <main class="px-2 h-100">
      <router-outlet></router-outlet>
      <app-inventory>
        <router-outlet></router-outlet>
        <app-inventorypayment>
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
                    <span>Ne
                      <u>w</u>
                    </span>
                  </button>
                  <button class="btn btn-sm btn-outline-primary mr-4" type="button">
                    <i class="fa fa-edit mr-1"></i>&nbsp;
                    <span>Ed
                      <u>it</u>
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
                    <span>Canc
                      <u>e</u>l
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
          <div class="form-row justify-content-center">
            <div class="col">
              <div class="bg-light">
                <fieldset class="border p-2">
                  <div class="row no-gutters">
                    <div class="col">
                      <div class="form-row">
                        <div class="col">
                          <fieldset class="my-1 border pb-3 px-3 mx-1">
                            <div class="form-row">
                              <div class="col">
                                <br>
                                <div class="form-row">
                                  <label
                                    class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                                  >Trans Type</label>
                                  <div class="col my-1">
                                    <select class="custom-select custom-select-sm">
                                      <option value ng-reflect-value></option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label
                                    class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                                  >Short Desc</label>
                                  <div class="col my-1">
                                    <input class="form-control form-control-sm" name type="text">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label
                                    class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                                  >Long Desc</label>
                                  <div class="col my-1">
                                    <input class="form-control form-control-sm" name type="text">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label
                                    class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                                  >SL CLass</label>
                                  <div class="col my-1">
                                    <select class="custom-select custom-select-sm"></select>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label
                                    class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                                  >SL Type</label>
                                  <div class="col my-1">
                                    <select class="custom-select custom-select-sm"></select>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <label
                                    class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                                  >COA</label>
                                  <div class="col my-1">
                                    <input class="form-control form-control-sm" name type="text">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                        <div
                          class="col-3 aligns-items-stretch align-items-center justify-content-center"
                        >
                          <fieldset class="border p-2 h-30 bg-light">
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck1" type="checkbox">
                                  <label class="form-check-label" for="mycheck1">
                                    <b>Locked</b>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck2" type="checkbox">
                                  <label class="form-check-label" for="mycheck2">
                                    <b>New SL Only</b>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck3" type="checkbox">
                                  <label class="form-check-label" for="mycheck3">
                                    <b>Must have SL</b>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck4" type="checkbox">
                                  <label class="form-check-label" for="mycheck4">
                                    <b>Request Client ID</b>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <textarea
                      class="form-control form-control-sm bg-warning border-0"
                      cols="30"
                      id="textarea1"
                      name
                      rows="10"
                    ></textarea>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
        </app-inventorypayment>
      </app-inventory>
    </main>
  </div>
</template>