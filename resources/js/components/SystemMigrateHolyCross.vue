<template>
  <div class="migration-holy-cross">
    <div class="form-row pt-3">
      <div class="col-sm-8">
        <div class="form-row">
          <div class="col-sm-auto">
            <label class="col-form-label col-form-label-sm">
              <strong>Root Directory</strong>
            </label>
          </div>
          <div class="col text-sm-right text-center">
            <div class="form-check form-check-sm form-check-inline">
              <input checked class="form-check-input" name="naem" type="radio" value="option1">
              <label class="form-check-label">Head Office</label>
            </div>
            <div class="form-check form-check-sm form-check-inline">
              <input class="form-check-input" name="naem" type="radio" value="option1">
              <label class="form-check-label">Mindanao</label>
            </div>
            <div class="form-check form-check-sm form-check-inline">
              <input class="form-check-input" name="naem" type="radio" value="option1">
              <label class="form-check-label">Plaridel</label>
            </div>
            <div class="form-check form-check-sm form-check-inline">
              <input class="form-check-input" name="naem" type="radio" value="option1">
              <label class="form-check-label">Malanday</label>
            </div>
            <div class="form-check form-check-sm form-check-inline">
              <input class="form-check-input" name="naem" type="radio" value="option1">
              <label class="form-check-label">Caloocan</label>
            </div>
            <div class="form-check form-check-sm form-check-inline">
              <input class="form-check-input" name="naem" type="radio" value="option1">
              <label class="form-check-label">Punturin</label>
            </div>
            <div class="form-check form-check-sm form-check-inline">
              <input class="form-check-input" name="naem" type="radio" value="option1">
              <label class="form-check-label">Malinta</label>
            </div>
          </div>
          <div class="col-12 my-1">
            <input class="form-control form-control-sm" name type="text">
          </div>
        </div>
        <div class="form-row">
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>1. Import COA DBF Table to MYQL</span>
            </button>
          </div>
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>2. Client Master</span>
            </button>
          </div>
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>3. Loans/AR Setup</span>
            </button>
          </div>
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>4. Import Transaction Tables DBF to MYQL</span>
            </button>
          </div>
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>5. Import All Transaction to KoopCAS</span>
            </button>
          </div>
        </div>
        <div class="form-row">
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>6. Import Beginning Balance GL to MYSQL</span>
            </button>
          </div>
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>7. Import Beginning Balance to MYSQL</span>
            </button>
          </div>
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>8. Import Trial Balance</span>
            </button>
          </div>
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>9. Import SL Beginning Balance to KoopCAS</span>
            </button>
          </div>
          <div class="col my-2">
            <button class="btn btn-dark-blue btn-block">
              <span>Update Client Type</span>
            </button>
          </div>
        </div>
        <div class="form-row justify-content-between">
          <div class="col-sm-auto my-2">
            <button class="btn btn-dark-blue btn-block" disabled>
              <span>7. Savings/Time Deposit/Share Capital Setup</span>
            </button>
          </div>
          <div class="col-sm-auto my-2">
            <button class="btn btn-outline-dark-blue btn-block">
              <span>Add Index FK on Table</span>
            </button>
          </div>
        </div>
        <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#checkduplicates" role="tab">
                <span>Check for Duplicates</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#uploadimage" role="tab">
                <span>Upload Image</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#batchslsetup" role="tab">
                <span>Batch SL Setup</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#cleardata" role="tab">
                <span>Clear Data</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#migratecitrus" role="tab">
                <span>Migrate Citrus</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#changetransaction" role="tab">
                <span>Change Transaction</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#comakerimport" role="tab">
                <span>Comaker Import</span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="checkduplicates">
              <div class="form-row">
                <div class="col">
                  <div class="form-row justify-content-between">
                    <div class="col my-2">
                      <button class="btn btn-info btn-block">
                        <span>Check for Duplicate Member Code</span>
                      </button>
                    </div>
                    <div class="col my-2">
                      <button class="btn btn-info btn-block">
                        <span>Check Not EQUAL Total Debit and Credit</span>
                      </button>
                    </div>
                    <div class="col my-2">
                      <button class="btn btn-info btn-block">
                        <span>Check Duplicate Exp Document Number</span>
                      </button>
                    </div>
                  </div>
                  <textarea class="form-control form-control-sm" cols="30" id name rows="10"></textarea>
                </div>
                <div class="col">
                  <button class="btn btn-outline-dark-blue btn-block my-2">
                    <span>Add Index FK on Table</span>
                  </button>
                  <table class="table table-sm table-bordered custom-table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Document Date</th>
                        <th scope="col">Document Number</th>
                        <th scope="col">Source Table</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>e</td>
                        <td>v</td>
                        <td>s</td>
                      </tr>
                      <tr>
                        <td>e</td>
                        <td>v</td>
                        <td>s</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="uploadimage">
              <div class="form-row">
                <div class="col">
                  <div class="form-row">
                    <div class="col my-2">
                      <button class="btn btn-outline-dark-blue btn-block">
                        <span>Upload Image</span>
                      </button>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col">
                      <select class="custom-select custom-select-sm" id multiple name>
                        <option value="1" ng-reflect-value="1">1</option>
                        <option value="2" ng-reflect-value="2">2</option>
                      </select>
                    </div>
                    <div class="col bg-dark">
                      <p class="text-white">IMG</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-row">
                    <div class="col">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate"
                      >Image Type</label>
                      <select class="custom-select custom-select-sm" id name>
                        <option value="1" ng-reflect-value="1">1</option>
                        <option value="2" ng-reflect-value="2">2</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col my-2">
                      <button class="btn btn-outline-dark-blue btn-block">
                        <span>Image Save to Disk</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="batchslsetup">
              <div class="form-row">
                <div class="col">
                  <div class="form-row">
                    <div class="col">
                      <select class="custom-select custom-select-sm" id multiple name>
                        <option value="1" ng-reflect-value="1">1</option>
                        <option value="2" ng-reflect-value="2">2</option>
                      </select>
                    </div>
                    <div class="col my-2">
                      <button class="btn btn-outline-dark-blue btn-block">
                        <span>Command1</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <input class="form-control form-control-sm" name type="text">
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="cleardata">
              <div class="form-row justify-content-between">
                <div class="col-sm-auto">
                  <button class="btn btn-info btn-block my-2">
                    <span>Delete Logs</span>
                  </button>
                  <button class="btn btn-info btn-block my-2">
                    <span>Delete Transaction Log HCSCCO</span>
                  </button>
                  <button class="btn btn-info btn-block my-2">
                    <span>Delete Imported Date</span>
                  </button>
                  <button class="btn btn-info btn-block my-2">
                    <span>Delete Setup on Loans/AR/AP</span>
                  </button>
                  <button class="btn btn-info btn-block my-2">
                    <span>Delete Client Master</span>
                  </button>
                </div>
                <div class="col-sm-auto my-2">
                  <button class="btn btn-outline-dark-blue btn-block">
                    <span>Update DB</span>
                  </button>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="migratecitrus">
              <div class="form-row justify-content-between">
                <div class="col">
                  <div class="form-row">
                    <div class="col-sm-auto">
                      <button class="btn btn-outline-dark-blue btn-block my-2">
                        <span>Connect Citrus DB</span>
                      </button>
                      <button class="btn btn-outline-dark-blue btn-block my-2">
                        <span>Import Client Master</span>
                      </button>
                      <button class="btn btn-outline-dark-blue btn-block my-2">
                        <span>Import Loan Setup</span>
                      </button>
                      <button class="btn btn-outline-dark-blue btn-block my-2">
                        <span>Import Citrus Transaction to KoopCAS DB</span>
                      </button>
                      <button class="btn btn-outline-dark-blue btn-block my-2">
                        <span>Export Image</span>
                      </button>
                    </div>
                    <div class="col">
                      <fieldset class="my-1 border pb-3 px-3 mx-1">
                        <legend
                          class="col-form-label col-form-label-sm w-auto px-1"
                          for="dateOpened"
                        >
                          <div class="form-check form-check-sm">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                              <strong>Import Citrus Transaction</strong>
                            </label>
                          </div>
                        </legend>
                        <button class="btn btn-dark-blue btn-block">
                          <span>Import Citrus Transactions to KoopCAS</span>
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <input class="form-control form-control-sm" name type="text">
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="changetransaction">
              <div class="form-row">
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >TR YEAR</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >TR CODE</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >TR MODULE</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >TR CTLNO</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >TR DATE</label>
                  <input class="form-control form-control-sm" name type="date">
                </div>
                <div class="col"></div>
              </div>
              <div class="form-row">
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >TR YEAR</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >TR CODE</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >TR MODULE</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto my-2 align-self-center">
                  <button class="btn btn-dark-blue btn-block">
                    <span>Update TRCODE</span>
                  </button>
                </div>
                <div class="col"></div>
              </div>
              <div class="form-row">
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >ENC</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >APPROVED</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col-sm-auto">
                  <label
                    class="col-form-label col-form-label-sm bg-secondary d-block my-2 text-center"
                  >POSTED</label>
                  <input class="form-control form-control-sm" name type="number">
                </div>
                <div class="col"></div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="comakerimport">
              <fieldset class="my-1 border pb-3 px-3 mx-1">
                <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">
                  <strong>Comaker</strong>
                </legend>
                <div class="form-row justify-content-center">
                  <div class="col-sm-auto">
                    <button class="btn btn-outline-dark-blue btn-block my-2">
                      <span>Import Comaker MySQL</span>
                    </button>
                    <button class="btn btn-outline-dark-blue btn-block my-2">
                      <span>Import Comaker to KoopCAS</span>
                    </button>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </ngb-tabset>
      </div>
      <div class="col">
        <fieldset class="my-1 border pb-3 px-3 mx-1">
          <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">
            <div class="form-check form-check-sm">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">
                <strong>Start to this Year and Month</strong>
              </label>
            </div>
          </legend>
          <div class="form-row">
            <div class="col">
              <label class="col-form-label col-form-label-sm">Current Year</label>
              <input class="form-control form-control-sm" name type="number">
            </div>
            <div class="col">
              <label class="col-form-label col-form-label-sm">Current Month</label>
              <input class="form-control form-control-sm" name type="number">
            </div>
          </div>
        </fieldset>
        <fieldset class="my-1 border pb-3 px-3 mx-1">
          <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">
            <div class="form-check form-check-sm">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">
                <strong>Start on this Transaction Date and Document Number</strong>
              </label>
            </div>
          </legend>
          <div class="form-row">
            <div class="col">
              <label class="col-form-label col-form-label-sm">Transaction Date</label>
              <input class="form-control form-control-sm" name type="date">
            </div>
            <div class="col">
              <label class="col-form-label col-form-label-sm">Document Number</label>
              <input class="form-control form-control-sm" name type="number">
            </div>
          </div>
        </fieldset>
        <fieldset class="my-1 border pb-3 px-3 mx-1">
          <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">
            <div class="form-check form-check-sm">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">
                <strong>Balance Forward</strong>
              </label>
            </div>
          </legend>
          <div class="form-row">
            <div class="col">
              <label class="col-form-label col-form-label-sm">Cut-Off Date</label>
              <input class="form-control form-control-sm" name type="date">
            </div>
            <div class="col align-self-center">
              <button class="btn btn-outline-dark-blue btn-block">
                <span>Update Explanation</span>
              </button>
            </div>
          </div>
        </fieldset>
        <fieldset class="my-1 border p-2 mx-1">
          <div class="form-check form-check-sm">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              <strong>Create New Outstanding Balance Log</strong>
            </label>
          </div>
          <div class="form-check form-check-sm">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              <strong>Create New Transaction Import Error Log</strong>
            </label>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</template>