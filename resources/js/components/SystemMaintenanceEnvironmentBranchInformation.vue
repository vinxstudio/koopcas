<template>
  <div class="environment-branch-information">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
      </ul>
    </nav>
    <div class="pt-3">
      <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
        <ul role="tablist" class="nav nav-tabs nav-fill">
          <li class="nav-item">
            <a class="nav-link active" href="#general" data-toggle="tab">
              <span>General</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pos-info" data-toggle="tab">
              <span>POS Info</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#rebates-info" data-toggle="tab">
              <span>Rebates Info</span>
            </a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="general">
            <div class="form-row">
              <div class="col-sm-7">
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Branch Name:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Address:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row mt-3">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Manager/OIC:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Purchase Order Contact Person:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Contact Numbers:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="number">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Email Address:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="email">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >TIN:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="number">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >CDA REG NO:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Acronym:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-row">
                  <div class="col">
                    <div class="bg-dark m-3 text-white text-center">
                      <p>IMG</p>
                      <img alt src>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label
                      class="col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >PN Location:</label>
                    <textarea class="form-control form-control-sm" cols="30" id name rows="10"></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label
                      class="col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >PN Subscribed and Sworn AT:</label>
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="pos-info">test1</div>

          <div class="tab-pane" id="rebates-info">test2</div>
        </div>
      </ngb-tabset>
    </div>
  </div>
</template>



<style>
.time-deposit {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.bg-light-green {
  background-color: #20c997 !important;
}

.bg-light-blue {
  background-color: #6dcff6 !important;
}

.bg-light-pink {
  background-color: #ef80ff !important;
}

.bg-light-yellow {
  background-color: #fff9c4 !important;
}

.custom-tab > .nav-tabs {
  background-color: #418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link.active {
  color: #fff;
  background-color: #418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link {
  color: #fff;
  background-color: #418cb3;
  border: 0;
}
</style>