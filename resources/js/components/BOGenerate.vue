<template>
  <div class="generate">
    <div class="col">
      <fieldset class="bg-light border p-4">
        <div class="form-row justify-content-center">
          <div class="col-sm-8">
            <fieldset class="border border-success">
              <div class="col-sm-10">
                <div class="form-row">
                  <p>
                    <font size="4">
                      <b>This Process Should be done only at the</b>
                    </font>
                  </p>
                </div>
                <div class="form-row">
                  <p>
                    <font color="red" size="4">
                      <b>end of a FISCAL YEAR or CLOSING OF BOOKS MONTHLY</b>
                    </font>
                  </p>
                </div>
                <div class="form-row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="form-row">
                  <p>
                    <font size="4">
                      <b>This generate closing entries for</b>
                    </font>
                    <font color="red" size="4">
                      <b>Income and Expense</b>
                    </font>
                  </p>
                </div>
                <div class="form-row">
                  <p>
                    <font size="4">
                      <b>accounts. After Transaction are created, it must be manually posted.</b>
                    </font>
                  </p>
                </div>
                <div class="form-row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="form-row">
                  <p>
                    <font size="4">
                      <b>Be sure you have completed all processing requirements for the</b>
                    </font>
                  </p>
                </div>
                <div class="form-row">
                  <p>
                    <font size="4">
                      <b>current fiscal year and that you have a</b>
                    </font>
                    <font color="red" size="4">
                      <b>BACKUP</b>
                    </font>
                    <font size="4">
                      <b>of the files</b>
                    </font>
                  </p>
                </div>
                <div class="form-row">
                  <p>
                    <font size="4">
                      <b>before proceeding.</b>
                    </font>
                  </p>
                </div>
                <div class="form-row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="form-row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="form-row justify-content-center">
                  <label
                    class="col-sm-4 text-sm-right text-truncate ol-form-label col-form-label-sm mt-1"
                  >
                    <b>Type of CLOSING:</b>
                  </label>
                  <div class="col-sm-3">
                    <select class="custom-select custom-select-sm" id name>
                      <option value="1" ng-reflect-value="1">1</option>
                      <option value="2" ng-reflect-value="2">2</option>
                    </select>
                  </div>
                </div>
                <div class="form-row justify-content-center">
                  <label
                    class="col-form-label col-form-label-sm mt-1 col-sm-4 text-sm-right text-truncate"
                  >
                    <b>Enter Fiscal Year End Date:</b>
                  </label>
                  <div class="col-sm-3">
                    <input class="form-control form-control-sm" name type="date">
                  </div>
                </div>
                <div class="form-row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="form-row justify-content-center">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button
                    class="btn btn-sm btn-outline-primary"
                  >
                    <i class="fa fa-file mr-1"></i>
                    <span>Generate</span>
                  </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button
                    class="btn btn-sm btn-outline-primary"
                  >
                    <i class="fa fa-file mr-1"></i>
                    <span>Cancel</span>
                  </button>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
</template>
