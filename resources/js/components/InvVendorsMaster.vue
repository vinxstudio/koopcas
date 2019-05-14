<template>
  <div class="vendors-master">
    <main class="px-2 h-100">
      <router-outlet></router-outlet>
      <app-inventory>
        <router-outlet></router-outlet>
        <app-vendorsmaster>
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
          <div class="form-row justify-content-center">
            <div class="col">
              <div class="bg-light">
                <fieldset class="border p-2">
                  <div class="row no-gutters">
                    <div class="col">
                      <div class="form-row justify-content-center">
                        <div class="col">
                          <fieldset class="my-1 border pb-3 px-3 mx-1">
                            <legend
                              class="col-form-label col-form-label-sm w-auto px-1"
                              for="dateOpened"
                            >Basic INFO</legend>
                            <div class="form-row align-items-center">
                              <label
                                class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Vendor ID:</b>
                              </label>
                              <div class="col-3 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText1"
                                  type="text"
                                >
                              </div>
                              <div class="col">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    id="defaultCheck1"
                                    style="float: center;"
                                    type="checkbox"
                                    value
                                  >
                                  <label class="form-check-label" for="defaultCheck1">IS ACTIVE</label>
                                </div>
                              </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-row align-items-center">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Company Name:</b>
                              </label>
                              <div class="col-4">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText2"
                                  type="text"
                                >
                              </div>
                              <br>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Cient ID:</b>
                              </label>
                              <div class="col-3 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText3"
                                  type="text"
                                >
                              </div>
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >Press F2:</label>
                              <div class="col-3 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText4"
                                  type="text"
                                >
                              </div>
                            </div>
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Title: (Mr,Mrs,etc)</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText5"
                                  type="text"
                                >
                              </div>
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >Date Created:</label>
                              <div class="col-2 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultDate1"
                                  type="date"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>First Name:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText6"
                                  type="text"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Last Name:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText7"
                                  type="text"
                                >
                              </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Street/Brgy:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText8"
                                  type="text"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>City/Province:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText9"
                                  type="text"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Zip Code:</b>
                              </label>
                              <div class="col-2 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText10"
                                  type="text"
                                >
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <br>
                      <div class="form-row justifi-content-center align-items-stretch">
                        <div class="col align-items-stretch align-items-center">
                          <fieldset class="my-1 border pb-3 px-3 mx-1">
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Phone:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText5"
                                  type="text"
                                >
                              </div>
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Other Contact Info:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaullText11"
                                  type="text"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Alt Phone:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText5"
                                  type="text"
                                >
                              </div>
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Acct. Number:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaullText11"
                                  type="text"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Cellphone:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText5"
                                  type="text"
                                >
                              </div>
                            </div>
                            <div class="form-row">
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Email Address:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaultText5"
                                  type="text"
                                >
                              </div>
                              <label
                                class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                              >
                                <b>Terms:</b>
                              </label>
                              <div class="col-4 my-1">
                                <input
                                  class="form-control form-control-sm"
                                  name="defaullText11"
                                  type="text"
                                >
                              </div>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
            <div class="col-md-4">
              <fieldset class="border p-2 h-100 bg-light">
                <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">Remarks</label>
                <textarea class="form-control form-control-sm" name="remarks" rows="37"></textarea>
              </fieldset>
            </div>
            <br>
          </div>
        </app-vendorsmaster>
      </app-inventory>
    </main>
  </div>
</template>