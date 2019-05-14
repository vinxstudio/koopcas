<template>
  <div class="items-listing">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 200px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Find
              <span class="float-right">Ctrl+F</span>
            </a>
            <a href="#" class="dropdown-item">
              New
              <span class="float-right">Ctrl+N</span>
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="form-row align-items-stretch p-3">
      <div class="col">
        <div class="custom-tabs tab-content-bg-light">
          <!--ng tabset -->
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a class="nav-link active" href="#basic" data-toggle="tab">Basic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#advance" data-toggle="tab">Advance</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="basic">
              <div class="form-row align-items-stretch">
                <div class="col">
                  <div class="bg-light">
                    <fieldset class="border p-2">
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" id="defaultCheck1" type="checkbox" value>
                          <label class="form-check-label" for="defaultCheck1">Show Totals Only</label>
                        </div>
                      </div>
                      <div class="form-row justify-content-center">
                        <label
                          class="col-form-label col-form-label-sm mt-1 text-truncate"
                          for="CUT-OFF Date"
                        >CUT-OFF Date:</label>
                        <div class="col-sm-5 my-1">
                          <input
                            class="custom-select custom-select-sm"
                            name="transType"
                            type="date"
                          >
                        </div>
                      </div>
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
                                  <b>Date Released:</b>
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
                          <fieldset class="my-1 border pb-3 px-3 mx-1">
                            <br>
                            <div class="form-row">
                              <div class="col-sm-3 text-sm-right">
                                <p class="col-form-label col-form-label-sm mt-1">
                                  <b>Last Trans. Date:</b>
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
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <div class="col-auto jusitfy-content-center">
                  <div class="bg-light h-100">
                    <fieldset class="border p-2 h-100">
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" id="defaultCheck2" type="checkbox" value>
                          <label class="form-check-label" for="defaultCheck2">Below Reorder Point</label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" id="defaultCheck3" type="checkbox" value>
                          <label class="form-check-label" for="defaultCheck3">Cost is Above Price</label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" id="defaultCheck4" type="checkbox" value>
                          <label class="form-check-label" for="defaultCheck4">Item Count Not Zero</label>
                        </div>
                      </div>
                      <div class="col">
                        <input
                          class="form-control form-control-sm"
                          id="defaultText1"
                          name="defaultText1"
                          style="text-align: center"
                          type="text"
                          value="<>0"
                        >
                      </div>
                      <br>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" id="defaultCheck5" type="checkbox" value>
                          <label class="form-check-label" for="defaultCheck5">Group by Item Class</label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" id="defaultCheck6" type="checkbox" value>
                          <label
                            class="form-check-label"
                            for="defaultCheck6"
                          >Group by Item Sub Class</label>
                        </div>
                      </div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" id="defaultCheck6" type="checkbox" value>
                          <label class="form-check-label" for="defaultCheck6">Consignments Only</label>
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
                </div>
              </div>
            </div>
            <div class="tab-pane" id="advance">
              <div class="form-row justify-content-center">
                <div class="col-sm-10 p-3">
                  <div class="form-row my-5">
                    <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">
                      <b>Item Status:</b>
                    </label>
                    <div class="col">
                      <div class="form-row align-items-center">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value ng-reflect-value>Active</option>
                            <option value ng-reflect-value>Disabled</option>
                            <option value ng-reflect-value>Dormant</option>
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
                      <b>Location:</b>
                    </label>
                    <div class="col">
                      <div class="form-row align-items-center">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value ng-reflect-value>Store</option>
                            <option value ng-reflect-value>Warehouse</option>
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
            </div>
          </div>
        </div>
        <!--ng tabset -->
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

<style scoped>
.bg-light-yellow {
  background-color: #ffed4a !important;
}
</style>
