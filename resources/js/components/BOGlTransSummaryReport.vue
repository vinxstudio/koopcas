<template>
<div class="trans-summary-report">
      <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
      </ul>
    </nav>
  <div class="form-row my-3">
      <div class="col-sm-12">
        <fieldset class="bg-light border p-2">
          <div class="form-row justify-content-between">
            <div class="col-sm-12">
                                      <div class="form-row">
                                              <label class="col-sm-4 text-sm-right text-truncate ol-form-label col-form-label-sm mt-1"><b>Cut-Off Date:</b></label>
                                      </div>
                              </div>
                              <div class="col-sm-6">
                                              <div class="form-row">
                                                              <label class="col-sm-4 text-sm-right text-truncate ol-form-label col-form-label-sm mt-1"><b>From:</b></label>
                                                              <div class="col-sm-6 my-1">
                                                              <input type="date" class="form-control form-control-sm" name="">
                                                              </div>
                                                      </div>
                                                      <div class="form-row">
                                                              <label class="col-sm-4 text-sm-right text-truncate col-form-label col-form-label-sm mt-1"><b>To:</b></label>
                                                              <div class="col-sm-6 my-1">
                                                              <input type="date" class="form-control form-control-sm" name="">
                                                              </div>
                                                      </div>
                              </div>
            <div class="col-sm-6">
              <div class="form-row">
                                              <label class="col-sm-4 text-sm-right text-truncate ol-form-label col-form-label-sm mt-1"><b>Department:</b></label>
                                              <div class="col my-1">
                                                      <input class="form-control form-control-sm" type="number" name="">
                                              </div>
                                      </div>
                              </div>
                              <div class="form-row">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                              </div>
                              <div class="col-sm-12">
                                      <div class="form-row justify-content-center">
                                              <div class="col-auto">
                                                      <p>GL Acct Code:</p>
                                                      <button class="btn btn-sm btn-outline-primary">
                                                              <i class="fa fa-file mr-1"></i>
                                                              <span>Browse</span>
                                                      </button>
                                              </div>
                                      <div class="col-sm-6">
                                              <div class="form-row justify-content-center">
                                                      <div class="col">
                                                              <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                                              </select>
                                                      </div>
                                              </div>
                                      <div class="form-row">
                                              <div class="form-check justify-content-center">
                                                      <input class="form-check-input" type="checkbox" value="" id="1">
                                                      <label class="form-check-label" for="1">Group By Acct Code</label>
                                              </div>
                                      </div>
                                      </div>
                                      </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-row">
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-row justify-content-center">
                                      <div class="col-auto">
                                        <p>Trans. Type:</p>
                                        <input class="form-check-input" type="checkbox" value="" id="2">
                                        <label class="form-check-label" for="2">Group By Month</label>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="" id="3">
                                            <label class="form-check-label" for="3">Group By Date</label>
                                        </div>
                                        
                                      </div>
                                      <div class="col">
                                        <div class="form-row align-items-center">
                                          <div class="col">
                                            <select class="custom-select custom-select-sm" name="" id="" multiple="">
                                              <option value="1">Accrued Interest</option>
                                              <option value="2">adj Qty</option>
                                              <option value="3">Balance Forward</option>
                                              <option value="4">Bank Deposit</option>
                                              <option value="5">Begin Qty</option>
                                              <option value="6">Bills Payment</option>
                                              <option value="7">Cash Receipt</option>
                                            </select>
                                          </div>
                                          <div class="col-auto">
                                            <i class="fas fa-angle-double-right"></i>
                                          </div>
                                          <div class="col">
                                            <select class="custom-select custom-select-sm bg-warning border-0" name="" id="" multiple="">
                                              <option value="1"></option>
                                              <option value="2"></option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-row">
                                  &nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-row">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                  </div>
                                </div>
                              <div class="col-sm-4">
                                  <div class="form-row">
                                      <button class="btn btn-sm btn-outline-primary">
                                              <i class="fa fa-file mr-1"></i>
                                              <span>Ok</span>
                                      </button>
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="form-row">
                                      <button class="btn btn-sm btn-outline-primary">
                                              <i class="fa fa-file mr-1"></i>
                                              <span>Cancel</span>
                                      </button>
                              </div>
                              </div>
          </div>
              </fieldset>
      </div>
      </div>	
</div>

</template>