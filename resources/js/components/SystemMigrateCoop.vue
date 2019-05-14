<template>
  <div class="migrate-coop">
    <main class="px-2 h-100">
      <router-outlet></router-outlet>
      <app-system>
        <router-outlet></router-outlet>
        <app-migratemigratecoop>
          <div class="form-row pt-3">
            <div class="col">
              <fieldset class="my-1 border pb-3 px-3 mx-1">
                <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">
                  <strong>* Clean Database (A1)</strong>
                </legend>
                <div class="form-row justify-content-between">
                  <div class="col-sm-auto">
                    <div class="form-row">
                      <div class="col-sm-auto my-2">
                        <button class="btn btn-sm btn-outline-dark-blue btn-block">
                          <span>Select All</span>
                        </button>
                      </div>
                      <div class="col-sm-auto my-2">
                        <button class="btn btn-sm btn-outline-dark-blue btn-block">
                          <span>UnSelect All</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto my-2">
                    <button class="btn btn-sm btn-outline-dark-blue btn-block">
                      <span>Execute</span>
                    </button>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">1. Delete Logs</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">2. Delete Transaction Data</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">3. Delete Setup on Loans/AR/AP/OSL</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">4. Delete Client Master</label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset class="my-1 border pb-3 px-3 mx-1">
                <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">
                  <strong>* Migrate Data - Excel Template (N1)</strong>
                </legend>
                <div class="form-row justify-content-between">
                  <div class="col-sm-auto">
                    <div class="form-row">
                      <div class="col-sm-auto my-2">
                        <button class="btn btn-sm btn-outline-dark-blue btn-block">
                          <span>Select All</span>
                        </button>
                      </div>
                      <div class="col-sm-auto my-2">
                        <button class="btn btn-sm btn-outline-dark-blue btn-block">
                          <span>UnSelect All</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto my-2">
                    <button class="btn btn-sm btn-outline-dark-blue btn-block">
                      <span>Execute</span>
                    </button>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">1. Client Master</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">2. Savings</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">3. Share Capital</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">4. Time Deposit</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">5. Loans</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">6. AP</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">7. AR</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">8. Misc Liability</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">9. Vendors</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">10. Item Unit</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">11. Item Class</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">12. Item Sub Class</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">13. Common Name</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">14. Brand Master</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">15. Items</label>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="col">
              <fieldset class="my-1 border pb-3 px-3 mx-1">
                <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened">
                  <strong>* Migrate Old COA to New COA CODE (R1)</strong>
                </legend>
                <div class="form-row justify-content-between">
                  <div class="col-sm-auto">
                    <div class="form-row">
                      <div class="col-sm-auto my-2">
                        <button class="btn btn-sm btn-outline-dark-blue btn-block">
                          <span>Select All</span>
                        </button>
                      </div>
                      <div class="col-sm-auto my-2">
                        <button class="btn btn-sm btn-outline-dark-blue btn-block">
                          <span>UnSelect All</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto my-2">
                    <button class="btn btn-sm btn-outline-dark-blue btn-block">
                      <span>Execute</span>
                    </button>
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col">
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">1. Read/Import Excel File Template</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">2. Modify KooCAS Tables</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">3. Insert/Update New Code</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">4. Update COA Conso Code</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">5. Update Chart of Accounts</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">6. Sort COA Code by Level</label>
                    </div>
                  </div>
                  <div class="col-sm-auto my-2">
                    <button class="btn btn-dark-blue btn-block">
                      <span>Command 1</span>
                    </button>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-12 my-2">
                    <button class="btn btn-outline-dark-blue btn-block">
                      <span>Generate Reports on Duplicate COA Description</span>
                    </button>
                  </div>
                  <div class="col my-2">
                    <button class="btn btn-outline-dark-blue btn-block">
                      <span>Load HO Template</span>
                    </button>
                  </div>
                  <div class="col my-2">
                    <button class="btn btn-outline-dark-blue btn-block">
                      <span>Load Branch COA</span>
                    </button>
                  </div>
                  <div class="col my-2">
                    <button class="btn btn-outline-dark-blue btn-block">
                      <span>Create Template for Upload</span>
                    </button>
                  </div>
                  <div class="col-12 my-2">
                    <button class="btn btn-outline-dark-blue btn-block">
                      <span>Upload Manually Match Old COA</span>
                    </button>
                  </div>
                </div>
              </fieldset>
              <div class="form-row justify-content-center">
                <div class="col-sm-auto my-2">
                  <button class="btn btn-dark-blue btn-block">
                    <span>De Paul Div Pat Statement</span>
                  </button>
                </div>
                <div class="col-sm-auto my-2">
                  <button class="btn btn-dark-blue btn-block">
                    <span>Transfer Past Due to Current</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </app-migratemigratecoop>
      </app-system>
    </main>
  </div>
</template>