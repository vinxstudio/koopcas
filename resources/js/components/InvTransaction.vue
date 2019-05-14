<template>
  <div class="inventory-transaction">
    <div class="form-row mt-2 mb-2 align-items-stretch">
      <div class="col">
        <ngb-tabset class="custom-tabs">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a class="nav-link active" href="#basic" data-toggle="tab">
                <span>
                  <u>B</u>asic
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#item-info" data-toggle="tab">
                <span>
                  <u>I</u>tem Info
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#client-info" data-toggle="tab">
                <span>
                  <u>C</u>lient Info
                </span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="basic">
              <div class="form-row mt-2 mb-2 align-items-stretch">
                <div class="col">
                  <fieldset class="my-1 border pb-3 px-3 mx-1">
                    <legend
                      class="col-form-label col-form-label-sm w-auto px-1"
                      for="dateOpened"
                    >Setup Dates</legend>
                    <div class="form-row">
                      <div class="col mt-2">
                        <div class="form-check form-check-sm">
                          <input class="form-check-input" id="mycheck1" type="checkbox">
                          <label class="form-check-label" for="mycheck1">Show Totals Only</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-sm-3 text-sm-right">
                        <p class="col-form-label col-form-label-sm mt-1">Transaction Date:</p>
                      </div>
                      <div class="col">
                        <div class="form-row">
                          <label
                            class="col-sm-1 text-right col-form-label col-form-label-sm mt-1"
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
                    <div class="col mt-2">
                      <div class="form-check form-check-sm">
                        <input class="form-check-input" id="mycheck2" type="checkbox">
                        <label class="form-check-label" for="mycheck2">Consignment Items Only</label>
                      </div>
                    </div>
                    <br>
                    <ngb-tabset class="custom-tabs" ng-reflect-justify="fill">
                      <ul role="tablist" class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                          <a class="nav-link active" href="#number-filters" data-toggle="tab">
                            <span>
                              <u>N</u>umber Filters
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#grouping" data-toggle="tab">
                            <span>
                              <u>G</u>rouping
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#option" data-toggle="tab">
                            <span>
                              <u>O</u>ption
                            </span>
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="number-filters">
                          <div class="col">
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-1 text-right col-form-label col-form-label-sm mt-1"
                              >Quantity:</label>
                            </div>
                            <div class="col my-1 justify-content-center">
                              <input
                                class="form-control form-control-sm"
                                name
                                type="text"
                                value="<>0"
                              >
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="grouping">
                          <div class="col">
                            <div class="form-row">
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck3" type="checkbox">
                                  <label class="form-check-label" for="mycheck3">Group By Location</label>
                                </div>
                              </div>
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck4" type="checkbox">
                                  <label class="form-check-label" for="mycheck4">Group By Item Class</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck5" type="checkbox">
                                  <label
                                    class="form-check-label"
                                    for="mycheck5"
                                  >Group By Item Sub CLass</label>
                                </div>
                              </div>
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck1" type="checkbox">
                                  <label class="form-check-label" for="mycheck1">Group By Item</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck6" type="checkbox">
                                  <label
                                    class="form-check-label"
                                    for="mycheck1"
                                  >Group By Transaction Type</label>
                                </div>
                              </div>
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck1" type="checkbox">
                                  <label
                                    class="form-check-label"
                                    for="mycheck6"
                                  >Group By Transaction Date</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck7" type="checkbox">
                                  <label class="form-check-label" for="mycheck7">Group By Client</label>
                                </div>
                              </div>
                              <div class="col mt-2">
                                <div class="form-check form-check-sm">
                                  <input class="form-check-input" id="mycheck8" type="checkbox">
                                  <label
                                    class="form-check-label"
                                    for="mycheck8"
                                  >Group By Ctrl Number</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="option">
                          <div class="col align-content-stretch align-content-center">
                            <div class="form-row">
                              <label
                                class="col-sm-1 text-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <label
                                class="col-sm-1 text-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  id="Radio1"
                                  name="inlineRadioOptions"
                                  type="radio"
                                  value="option1"
                                >
                                <label class="form-check-label" for="Radio1">Overall</label>
                              </div>
                            </div>
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-1 text-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <label
                                class="col-sm-1 text-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  id="Radio2"
                                  name="inlineRadioOptions"
                                  type="radio"
                                  value="option1"
                                >
                                <label class="form-check-label" for="Radio2">Top</label>
                              </div>
                              <div class="col-4">
                                <input class="form-control form-control-sm" name type="text">
                              </div>
                              <label
                                class="col col-form-label col-form-label-sm mt-1"
                              >By Total Price:</label>
                            </div>
                            <br>
                            <div class="form-row">
                              <label
                                class="col-sm-1 text-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <label
                                class="col-sm-1 text-right col-form-label col-form-label-sm mt-1"
                              ></label>
                              <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  id="Radio3"
                                  name="inlineRadioOptions"
                                  type="radio"
                                  value="option1"
                                >
                                <label class="form-check-label" for="Radio3">Top</label>
                              </div>
                              <div class="col-4">
                                <input class="form-control form-control-sm" name type="text">
                              </div>
                              <label
                                class="col col-form-label col-form-label-sm mt-1"
                              >By Total Quantity:</label>
                            </div>
                            <br>
                            <p>NOTE: PLace Negative to get Top from the lowest. Ex: -100</p>
                          </div>
                        </div>
                      </div>
                    </ngb-tabset>
                    <div class="form-row justify-content-center">
                      <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                          <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">
                            <b>Transaction Type:</b>
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
                                  <option value ng-reflect-value>Adj Qty</option>
                                  <option value ng-reflect-value>Begin Qty</option>
                                  <option value ng-reflect-value>Commisions</option>
                                  <option value ng-reflect-value>PI Count</option>
                                  <option value ng-reflect-value>Receiving Journal</option>
                                  <option value ng-reflect-value>Receiving Voucher</option>
                                  <option value ng-reflect-value>Return Journal</option>
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
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row my-5">
                          <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">
                            <b>Posting Tag:</b>
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
                                  class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
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
                  </fieldset>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="item-info">
              <div class="bg-light">
                <div class="form-row">
                  <fieldset class="col border p-2">
                    <div class="form-row">
                      <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                          <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">
                            <b>Item Class:</b>
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
                                  class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
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
                          <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">
                            <b>Item Sub Class:</b>
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
                                  class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
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
                          <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">
                            <b>Item Status:</b>
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
                                  class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
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
                          <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">
                            <b>Location:</b>
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
                                  class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
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
                  </fieldset>
                  <div class="col-md-4">
                    <fieldset class="border p-2 h-100 bg-light">
                      <div class="form-row align-items-center">
                        <label
                          class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                        >Item:</label>
                        <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                        <ul class="navbar-nav mr-5">
                          <li class="nav-item">
                            <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                              <i class="fa fa-search mr-1"></i>
                              <span>
                                <u>B</u>rowse
                              </span>
                            </button>
                          </li>
                        </ul>
                      </div>
                      <textarea class="form-control form-control-sm" name="remarks" rows="27"></textarea>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="client-info">
              <div class="bg-light">
                <div class="form-row">
                  <fieldset class="col border p-2">
                    <div class="form-row">
                      <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                          <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">
                            <b>Item Class:</b>
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
                                  <option value ng-reflect-value>Adj Qty</option>
                                  <option value ng-reflect-value>Begin Qty</option>
                                  <option value ng-reflect-value>Commisions</option>
                                  <option value ng-reflect-value>PI Count</option>
                                  <option value ng-reflect-value>Receiving Journal</option>
                                  <option value ng-reflect-value>Receiving Voucher</option>
                                  <option value ng-reflect-value>Return Journal</option>
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
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row my-5">
                          <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">
                            <b>Item Sub Class:</b>
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
                                  class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
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
                          <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">
                            <b>Item Status:</b>
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
                                  class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
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
                          <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">
                            <b>Location:</b>
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
                                  class="custom-select custom-select-sm bg-light-yellow border-0 h-100"
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
                  </fieldset>
                  <div class="col-md-4">
                    <fieldset class="border p-2 h-100 bg-light">
                      <div class="form-row align-items-center">
                        <label
                          class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                        >Client ID:</label>
                        <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"></label>
                        <ul class="navbar-nav mr-5">
                          <li class="nav-item">
                            <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                              <i class="fa fa-search mr-1"></i>
                              <span>
                                <u>B</u>rowse
                              </span>
                            </button>
                          </li>
                        </ul>
                      </div>
                      <textarea class="form-control form-control-sm" name="remarks" rows="27"></textarea>
                    </fieldset>
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