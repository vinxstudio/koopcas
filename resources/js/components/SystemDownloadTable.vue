<template>
  <div class="download-table">
    <main class="px-2 h-100">
      <router-outlet></router-outlet>
      <app-system>
        <router-outlet></router-outlet>
        <app-databasedownload>
          <div class="form-row justify-content-center pt-3">
            <div class="col-sm-4">
              <div class="form-row">
                <div class="col">
                  <span>Select Table:</span>
                </div>
                <div class="col">
                  <div class="form-check form-check-sm">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Transfer Client Records</label>
                  </div>
                </div>
              </div>
              <div class="form-row align-items-center">
                <div class="col">
                  <select class="custom-select custom-select-sm" id multiple name>
                    <option value="1" ng-reflect-value="1">1</option>
                    <option value="2" ng-reflect-value="2">2</option>
                  </select>
                </div>
                <div class="col-auto">
                  <i class="fas fa-angle-double-right"></i>
                </div>
                <div class="col">
                  <select
                    class="custom-select custom-select-sm bg-light-yellow border-0"
                    id
                    multiple
                    name
                  >
                    <option value="1" ng-reflect-value="1"></option>
                    <option value="2" ng-reflect-value="2"></option>
                  </select>
                </div>
              </div>
              <div class="form-row justify-content-center">
                <div class="col-sm-auto my-2">
                  <button class="btn btn-dark-blue btn-block p-3">
                    <i class="fa fa-key mr-1"></i>
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
          </div>
        </app-databasedownload>
      </app-system>
    </main>
  </div>
</template>