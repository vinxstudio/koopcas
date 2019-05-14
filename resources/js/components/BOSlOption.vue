<template>
  <div class="sl-option">
    <div class="form-row justify-content-center">
      <div class="col-sm-10 p-3">
        <div class="form-row my-5">
          <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Sl Class:</label>
          <div class="col">
            <div class="form-row align-items-center">
              <div class="col">
                <select class="custom-select custom-select-sm" id multiple name>
                  <option value="1">Null</option>
                  <option value="2">Accts Payable</option>
                  <option value="3">Accts Receivable</option>
                  <option value="4">Cash and COCI</option>
                  <option value="5">Expense Acct</option>
                  <option value="5">Income Acct</option>
                </select>
              </div>

              <div class="col-auto">
                <i class="fas fa-angle-double-right"></i>
              </div>

              <div class="col">
                <select class="custom-select custom-select-sm bg-warning border-0" id multiple name>
                  <option value="1"></option>
                  <option value="2"></option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row my-5">
          <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Sl Type:</label>
          <div class="col">
            <div class="form-row align-items-center">
              <div class="col">
                <select class="custom-select custom-select-sm" id multiple name></select>
              </div>
              <div class="col-auto">
                <i class="fas fa-angle-double-right"></i>
              </div>
              <div class="col">
                <select class="custom-select custom-select-sm bg-warning border-0" id multiple name>
                  <option value="1"></option>
                  <option value="2"></option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row my-5">
          <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Sl Entry Type:</label>
          <div class="col">
            <div class="form-row align-items-center">
              <div class="col">
                <select class="custom-select custom-select-sm" id multiple name>
                  <option value="1">11-Principal</option>
                  <option value="2">21-Acc Int. Receivable</option>
                  <option value="3">22-Unearned interest</option>
                  <option value="3">23-Interest Paid</option>
                  <option value="3">24-Interest Earned</option>
                  <option value="3">25-Interest Waived</option>
                </select>
              </div>

              <div class="col-auto">
                <i class="fas fa-angle-double-right"></i>
              </div>

              <div class="col">
                <select class="custom-select custom-select-sm bg-warning border-0" id multiple name>
                  <option value="1"></option>
                  <option value="2"></option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row my-5">
          <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Chapter:</label>
          <div class="col">
            <div class="form-row align-items-center">
              <div class="col">
                <select class="custom-select custom-select-sm" id multiple name>
                  <option value="1">Alcantara</option>
                  <option value="2">Alegria</option>
                  <option value="3">Badian</option>
                  <option value="4">Ceylaboo - Dumanjug Branch</option>
                  <option value="5">DSWD - PPT</option>
                  <option value="5">DSWD - SLPA</option>
                  <option value="5">Dumanjug</option>
                </select>
              </div>

              <div class="col-auto">
                <i class="fas fa-angle-double-right"></i>
              </div>

              <div class="col">
                <select class="custom-select custom-select-sm bg-warning border-0" id multiple name>
                  <option value="1"></option>
                  <option value="2"></option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form-row justify-content-center">
      <div class="col-sm-10 p-3">
        <div class="form-row my-5">
          <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client ID:</label>
          <div class="col">
            <textarea
              class="form-control form-control-sm bg-light-yellow border-0"
              cols="30"
              id
              name
              rows="10"
            ></textarea>
          </div>

          <div class="col-sm-auto my-2 my-sm-0">
            <button class="btn btn-sm btn-block btn-outline-primary">
              <i class="fa fa-file mr-1"></i>
              <span>Browse</span>
            </button>
          </div>
        </div>
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

<style>
.bg-light-blue{
    background-color: #6dcff6!important;
}
</style>
