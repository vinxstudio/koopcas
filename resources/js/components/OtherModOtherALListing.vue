<template>
  <div class="other-al-listing">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
        <!---->
      </ul>
    </nav>

    <div class="form-row mt-2 mb-2 align-items-stretch justify-content-center">
      <div class="col-9">
        <ngb-tabset class="custom-tabs" ng-reflect-justify="fill">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#basic"
                data-toggle="tab"
                role="tab"
                id="ngb-tab-27"
                aria-controls="ngb-tab-27-panel"
                aria-expanded="true"
                aria-disabled="false"
              >
                <span>
                  <u>B</u>asic
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#clientinfo"
                data-toggle="tab"
                role="tab"
                id="ngb-tab-28"
                aria-expanded="false"
                aria-disabled="false"
              >
                <span>
                  <u>C</u>lient Info
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#advance"
                data-toggle="tab"
                role="tab"
                id="ngb-tab-29"
                aria-expanded="false"
                aria-disabled="false"
              >
                <span>
                  <u>A</u>dvance
                </span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div
              role="tabpanel"
              class="tab-pane active"
              aria-labelledby="ngb-tab-27"
              id="basic"
              aria-expanded="true"
            >
              <div class="form-row pt-3 no-gutters">
                <div class="col align-items-stretch">
                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="customCheck1" type="checkbox">
                      <label class="custom-control-label" for="customCheck1">Show Totals Only</label>
                    </div>
                  </div>
                  <br>
                  <div class="form-row align-items-center align-items-stretch">
                    <label
                      class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >CUT-OFF DATE:</label>
                    <div class="col-sm-4">
                      <input class="form-control form-control-sm" type="date">
                    </div>
                  </div>
                  <br>
                  <fieldset class="border p-2">
                    <legend class="col-form-label col-form-label-sm w-auto px-1">Setup Dates</legend>
                    <div class="form-row align-items-center">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Date Setup:</label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="fromdate"
                        >From:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="fromdate" type="date">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row align-items-center">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      ></label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="tomdate"
                        >To:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="tomdate" type="date">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row align-items-center">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Maturity Date:</label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="fromdate"
                        >From:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="fromdate" type="date">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row align-items-center">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      ></label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="todate"
                        >To:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="todate" type="date">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <br>
                  <fieldset class="border p-2">
                    <div class="form-row align-items-center align-items-stretch">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Last Trans Date:</label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="fromdate"
                        >From:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="fromdate" type="date">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row align-items-center align-items-stretch">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      ></label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="todate"
                        >To:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="todate" type="date">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
                <div class="col">
                  <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
                    <ul role="tablist" class="nav nav-tabs nav-fill">
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          href="#numberfilters"
                          role="tab"
                          data-toggle="tab"
                          id="ngb-tab-30"
                          aria-controls="ngb-tab-30-panel"
                          aria-expanded="true"
                          aria-disabled="false"
                        >
                          <span>Number Filters</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          href="#grouping"
                          role="tab"
                          data-toggle="tab"
                          id="ngb-tab-31"
                          aria-expanded="false"
                          aria-disabled="false"
                        >
                          <span>Grouping</span>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div
                        role="tabpanel"
                        class="tab-pane active"
                        aria-labelledby="ngb-tab-30"
                        id="numberfilters"
                        aria-expanded="true"
                      >
                        <div class="col">
                          <div class="custom-control custom-checkbox justify-content-center">
                            <input class="custom-control-input" id="customCheck2" type="checkbox">
                            <label class="custom-control-label" for="customCheck2">Balance Not ZERO</label>
                          </div>
                          <div class="col justify-content-center">
                            <input
                              class="form-control form-control-sm"
                              style="text-align: center"
                              type="text"
                              value="<>0"
                            >
                          </div>
                          <br>
                          <br>
                          <br>
                          <br>
                          <label class="col-form-label col-form-label-sm">Deposits Amount:</label>
                          <div class="col justify-content-center">
                            <input class="form-control form-control-sm" type="text">
                          </div>
                          <br>
                          <label class="col-form-label col-form-label-sm">Share Capital Amount:</label>
                          <div class="col justify-content-center">
                            <input class="form-control form-control-sm" type="text">
                          </div>
                        </div>
                      </div>
                      <div
                        role="tabpanel"
                        class="tab-pane"
                        aria-labelledby="ngb-tab-30"
                        id="grouping"
                        aria-expanded="true"
                      >
                        <div class="col">
                          <div class="custom-control custom-checkbox justify-content-center">
                            <input class="custom-control-input" id="slclass" type="checkbox">
                            <label class="custom-control-label" for="slclass">BGroup by SL Class</label>
                          </div>
                          <div class="custom-control custom-checkbox justify-content-center">
                            <input class="custom-control-input" id="sltype" type="checkbox">
                            <label class="custom-control-label" for="sltype">BGroup by SL Type</label>
                          </div>
                          <div class="custom-control custom-checkbox justify-content-center">
                            <input class="custom-control-input" id="chapter" type="checkbox">
                            <label class="custom-control-label" for="chapter">BGroup by Chapter</label>
                          </div>
                          <div class="custom-control custom-checkbox justify-content-center">
                            <input class="custom-control-input" id="gender" type="checkbox">
                            <label class="custom-control-label" for="gender">BGroup by Gender</label>
                          </div>
                          <div class="custom-control custom-checkbox justify-content-center">
                            <input class="custom-control-input" id="clientid" type="checkbox">
                            <label class="custom-control-label" for="clientid">BGroup by Client ID</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </ngb-tabset>
                </div>
              </div>
              <div class="form-row justify-content-center">
                <div class="col-sm-10 p-3">
                  <div class="form-row my-5">
                    <label
                      class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                    >
                      <b>SL Type:</b>
                    </label>
                    <div class="col">
                      <div class="form-row align-items-center">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value ng-reflect-value>26-A/P - CFP</option>
                            <option value ng-reflect-value>26-A/P - COSPP</option>
                            <option value ng-reflect-value>26-A/P - GLAFI</option>
                            <option value ng-reflect-value>26-A/P - GPP</option>
                            <option value ng-reflect-value>26-A/P - KASAPI</option>
                            <option value ng-reflect-value>26-A/P - Pioneer</option>
                          </select>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-angle-double-right"></i>
                        </div>
                        <div class="col">
                          <select
                            class="custom-select custom-select-sm bg-warning border-0 h-100"
                            id
                            multiple
                            name
                          >
                            <option value ng-reflect-value></option>
                            <option value ng-reflect-value></option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row my-5">
                    <label
                      class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                    >
                      <b>SL Status:</b>
                    </label>
                    <div class="col">
                      <div class="form-row align-items-center align-items-stretch">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value ng-reflect-value>Cancelled</option>
                            <option value ng-reflect-value>G/L Acct Error</option>
                            <option value ng-reflect-value>Pending</option>
                            <option value ng-reflect-value>Posted</option>
                            <option value ng-reflect-value>Reversed</option>
                            <option value ng-reflect-value>S/L Info Error</option>
                          </select>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-angle-double-right"></i>
                        </div>
                        <div class="col">
                          <select
                            class="custom-select custom-select-sm bg-warning border-0 h-100"
                            id
                            multiple
                            name
                          >
                            <option value ng-reflect-value></option>
                            <option value ng-reflect-value></option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              role="tabpanel"
              class="tab-pane"
              aria-labelledby="ngb-tab-35"
              id="clientinfo"
              aria-expanded="true"
            >
              <div class="bg-light">
                <div class="form-row">
                  <fieldset class="col border p-2">
                    <div class="form-row">
                      <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Client Type:</b>
                          </label>
                          <div class="col">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value>Receiving Voucher</option>
                                  <option value ng-reflect-value>Return Journal</option>
                                </select>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-angle-double-right"></i>
                              </div>
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm bg-warning border-0 h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row my-5">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Gender:</b>
                          </label>
                          <div class="col">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-angle-double-right"></i>
                              </div>
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm bg-warning border-0 h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row my-5">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Civil Status:</b>
                          </label>
                          <div class="col">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value>Cancelled</option>
                                  <option value ng-reflect-value>G/L Acct Error</option>
                                  <option value ng-reflect-value>Pending</option>
                                  <option value ng-reflect-value>Posted</option>
                                  <option value ng-reflect-value>Reversed</option>
                                  <option value ng-reflect-value>S/L Info Error</option>
                                </select>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-angle-double-right"></i>
                              </div>
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm bg-warning border-0 h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row my-5">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Chapter:</b>
                          </label>
                          <div class="col">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value>Cancelled</option>
                                  <option value ng-reflect-value>G/L Acct Error</option>
                                  <option value ng-reflect-value>Pending</option>
                                  <option value ng-reflect-value>Posted</option>
                                  <option value ng-reflect-value>Reversed</option>
                                  <option value ng-reflect-value>S/L Info Error</option>
                                </select>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-angle-double-right"></i>
                              </div>
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm bg-warning border-0 h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Client ID:</b>
                          </label>
                          <div class="col">
                            <textarea
                              class="form-control form-control-sm bg-warning border-0"
                              cols="30"
                              id="textarea1"
                              name
                              rows="10"
                            ></textarea>
                          </div>
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <button class="btn btn-sm btn-outline-primary mr-4" type="button">
                                <i class="fa fa-search mr-1"></i>
                                <span>
                                  B
                                  <u>r</u>owse
                                </span>
                              </button>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </div>

            <div
              role="tabpanel"
              class="tab-pane"
              aria-labelledby="ngb-tab-36"
              id="advance"
              aria-expanded="true"
            >
              <div class="col">
                <div class="form-row align-items-stretch align-items-center justify-content-center">
                  <label class="col-form-label col-form-label-sm">Remarks:</label>
                  <div class="col">
                    <input class="form-control form-control-sm" type="text">
                  </div>
                </div>
                <br>
                <div class="form-row align-items-center">
                  <label class="col-form-label col-form-label-sm">Birthday:</label>
                  <div class="col form-row align-items-center">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="fromdate"
                    >From:</label>
                    <div class="col-sm-3">
                      <input class="form-control form-control-sm" name="fromdate" type="date">
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-row align-items-center">
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <div class="col form-row align-items-center">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="todate"
                    >To:</label>
                    <div class="col-sm-3">
                      <input class="form-control form-control-sm" name="todate" type="date">
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-row align-items-stretch align-items-center justify-content-center">
                  <label class="col-form-label col-form-label-sm">Age:</label>
                  <div class="col">
                    <input class="form-control form-control-sm" type="text">
                  </div>
                </div>
                <div class="form-row my-5">
                  <label class="col-form-label col-form-label-sm text-sm-right text-truncate">
                    <b>Principal Payment Mode:</b>
                  </label>
                  <div class="col">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select class="custom-select custom-select-sm h-100" id multiple name>
                          <option value ng-reflect-value>Cancelled</option>
                          <option value ng-reflect-value>G/L Acct Error</option>
                          <option value ng-reflect-value>Pending</option>
                          <option value ng-reflect-value>Posted</option>
                          <option value ng-reflect-value>Reversed</option>
                          <option value ng-reflect-value>S/L Info Error</option>
                        </select>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-angle-double-right"></i>
                      </div>
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm bg-warning border-0 h-100"
                          id
                          multiple
                          name
                        >
                          <option value ng-reflect-value></option>
                          <option value ng-reflect-value></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row my-5">
                  <label class="col col-form-label col-form-label-sm text-sm-right text-truncate">
                    <b></b>
                  </label>
                  <label
                    class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                  >
                    <b>Restriction Group:</b>
                  </label>
                  <div class="col">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm bg-warning border-0 h-100"
                          id
                          multiple
                          name
                        >
                          <option value ng-reflect-value></option>
                          <option value ng-reflect-value></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
