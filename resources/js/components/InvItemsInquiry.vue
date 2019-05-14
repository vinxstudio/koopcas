<template>
  <div class="items-master">
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
            <a href="#" class="dropdown-item">
              Edit
              <span class="float-right">Ctrl+F2</span>
            </a>
            <a href="#" class="dropdown-item">
              Delete
              <span class="float-right">F4</span>
            </a>
            <a href="#" class="dropdown-item">
              Save
              <span class="float-right">Ctrl+S</span>
            </a>
            <a href="#" class="dropdown-item">
              Exit
              <span class="float-right">Ctrl+X</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Activity Logs
              <span class="float-right">Ctrl+T</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Document</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Set System Date
              <span class="float-right">F5</span>
            </a>
            <a href="#" class="dropdown-item">
              Zoom In/Zoom Out
              <span class="float-right">F8</span>
            </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </a>
          <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
            <i class="fa fa-pencil-square-o mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-4" disabled type="button">
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
            <i class="fa fa-floppy-o mr-1"></i>
            <span>
              <u>S</u>ave
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </button>
        </li>
      </ul>
    </nav>
    <div class="form-row align-items-stretch">
      <div class="col-md-8">
        <div class="bg-light">
          <fieldset class="border p-2">
            <h5>Basic Info</h5>
            <div class="form-row">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="itemId"
              >Item ID:</label>
              <div class="col-sm-4 my-1">
                <input
                  class="form-control form-control-sm bg-light-blue border-0"
                  name="itemId"
                  type="text"
                >
              </div>
            </div>
            <div class="form-row justify-content-between">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="barCode"
              >Bar Code:</label>
              <div class="col-sm-6 my-1">
                <input class="form-control form-control-sm" name="barCode" type="text">
              </div>
              <div class="form-check ml-auto mr-2 mt-1">
                <input
                  class="form-check-input"
                  id="eanStandard"
                  style="margin-top: 10px;"
                  type="checkbox"
                  value
                >
                <label
                  class="form-check-label"
                  for="eanStandard"
                  style="margin-top: 5px;"
                >EAN Standard</label>
              </div>
            </div>
            <div class="form-row">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="description1"
              >Description1:</label>
              <div class="col-sm-8 my-1">
                <input class="form-control form-control-sm" name="description1" type="text">
              </div>
            </div>
            <div class="form-row">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="description2"
              >Receipt Description:</label>
              <div class="col-sm-8 my-1">
                <input class="form-control form-control-sm" name="description2" type="text">
              </div>
            </div>
            <div class="form-row">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="variants"
              >Variants:</label>
              <div class="col-sm-3 my-1">
                <input class="form-control form-control-sm" name="variants" type="text">
              </div>
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="size"
              >Size:</label>
              <div class="col-sm-3 my-1">
                <div class="form-row m-0">
                  <input class="col-3 form-control form-control-sm mr-2" name="size1" type="text">
                  <input class="col form-control form-control-sm" name="size2" type="text">
                </div>
              </div>
            </div>
            <div class="form-row mt-4">
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="dateCreated"
              >Date Created:</label>
              <div class="col-sm-3 my-1">
                <input class="form-control form-control-sm" name="dateCreated" type="date">
              </div>
              <label
                class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                for="status"
              >Status:</label>
              <div class="col-sm-4 my-1">
                <select class="custom-select custom-select-sm" name="status">
                  <option value ng-reflect-value></option>
                </select>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="col-md-4">
        <div class="bg-light h-100">
          <fieldset class="border p-2 h-100">
            <h5 class="text-center">Item Picture</h5>
            <div class="card">
              <div class="card-img-top bg-dark position-relative" style="min-height: 244px;">
                <button
                  class="btn btn-primary btn-sm position-absolute"
                  style="bottom: 5px; right: 5px;"
                >
                  <i class="fa fa-search-plus mr-1"></i> Zoom
                </button>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
    <div class="form-row mt-2 mb-2 align-items-stretch">
      <div class="col-md-8">
        <div class="custom-tabs tab-content-bg-light">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a class="nav-link active" href="#details-tab" data-toggle="tab">
                <span>
                  <u>D</u>etails
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing-tab" data-toggle="tab">
                <span>
                  <u>P</u>ricing
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ordering-tab" data-toggle="tab">
                <span>
                  <u>O</u>rdering
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#transactions-tab" data-toggle="tab">
                <span>
                  <u>T</u>ransactions
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#others-tab" data-toggle="tab">
                <span>Others</span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="details-tab">
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="binLocation"
                >Bin Location:</label>
                <div class="col-sm-6 my-1">
                  <input class="form-control form-control-sm" name="binLocation" type="text">
                </div>
                <div class="form-check ml-auto mr-2 mt-1">
                  <input
                    class="form-check-input"
                    id="consignment"
                    style="margin-top: 10px;"
                    type="checkbox"
                    value
                  >
                  <label
                    class="form-check-label"
                    for="consignment"
                    style="margin-top: 5px;"
                  >Consignment</label>
                </div>
              </div>
              <div class="form-row justify-content-between">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="itemType"
                >Item Type:</label>
                <div class="col-sm-5 my-1">
                  <select class="custom-select custom-select-sm" name="itemType">
                    <option value ng-reflect-value></option>
                  </select>
                </div>
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate font-weight-bold"
                  for="onOrder"
                >On Order:</label>
                <div class="col-sm-3 my-1">
                  <input
                    class="form-control form-control-sm bg-light-blue border-0"
                    name="onOrder"
                    type="text"
                  >
                </div>
              </div>
              <hr>
              <div class="form-row justify-content-between">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="brand"
                >Brand:</label>
                <div class="col-sm-5 my-1">
                  <input class="form-control form-control-sm" name="brand" type="text">
                </div>
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate font-weight-bold"
                  for="onStock"
                >On Stock:</label>
                <div class="col-sm-3 my-1">
                  <input
                    class="form-control form-control-sm bg-light-blue border-0"
                    name="onStock"
                    type="text"
                  >
                </div>
              </div>
              <div class="form-row align-items-stretch">
                <div class="col-md-7">
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="commonName"
                    >Common Name:</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="commonName" type="text">
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                      for="mainGroup"
                    >Main Group (Class):</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="mainGroup" type="text">
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                      for="productGroup"
                    >Product Group (Sub Class):</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="productGroup" type="text">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="bg-dark mt-1" style="min-height: 125px;">
                    <table class="table table-sm table-bordered custom-table">
                      <thead>
                        <tr>
                          <th scope="col">Location</th>
                          <th scope="col">Quantity</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="pricing-tab">
              <div class="tab-pane active" id="details-tab">
                <div class="form-row">
                  <label
                    style="margin-left:450px;color:red"
                  >Average Cost is updated every Purchase of the item.</label>
                </div>
                <div class="form-row">
                  <label
                    class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    for="binLocation"
                  >Retail Price:</label>
                  <div class="col-sm-4 my-1">
                    <input class="form-control form-control-sm" name="binLocation" type="text">
                  </div>
                  <div>
                    <button
                      class="btn btn-outline-default ml-4"
                    >Suggest a price based from Cost and Margin</button>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="form-row align-items-stretch">
                <div class="col-md-7">
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="wholeSalePrice"
                    >Whole Sale Price:</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="wholeSalePrice" type="text">
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                      for="Price3"
                    >Price 3:</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="mainGroup" type="text">
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                      for="Price4"
                    >Price 4:</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="productGroup" type="text">
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="taxCode"
                    >Tax Code:</label>
                    <div class="col-sm-5 my-1">
                      <select class="custom-select custom-select-sm" name="taxCode">
                        <option value></option>
                        <option value></option>
                      </select>
                      <br>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        id="tax1"
                        style="margin-top:10px"
                        type="checkbox"
                        value
                      >
                      <label class="form-check-label" for="tax" style="margin-top:5px">Tax 1</label>
                    </div>
                    <div class="form-check ml-1">
                      <input
                        class="form-check-input"
                        id="tax2"
                        style="margin-top:10px"
                        type="checkbox"
                        value
                      >
                      <label class="form-check-label" for="tax2" style="margin-top:5px">Tax 2</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="ordering-tab">
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="supplierName1"
                >Supplier Name:</label>
                <div class="col-sm-8 my-1">
                  <input class="form-control form-control-sm" name="description2" type="text">
                </div>
              </div>
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="orderCost1"
                >Order Cost:</label>
                <div class="col-sm-3 my-1">
                  <input class="form-control form-control-sm" name="variants" type="text">
                </div>
              </div>
              <hr>
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="supplier2Name"
                >Supplier2 Name:</label>
                <div class="col-sm-8 my-1">
                  <input class="form-control form-control-sm" name="description2" type="text">
                </div>
              </div>
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="orderCost2"
                >Order Cost:</label>
                <div class="col-sm-3 my-1">
                  <input class="form-control form-control-sm" name="variants" type="text">
                </div>
              </div>
              <br>
              <div class="form-row align-items-stretch">
                <div class="col-md-5">
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                      for="orderQuantity"
                    >Order Quantity:</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="mainGroup" type="text">
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                      for="reOrderQuantity"
                    >Re-order Quantity:</label>
                    <div class="col-sm my-1">
                      <input class="form-control form-control-sm" name="productGroup" type="text">
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <button
                    class="btn btn-outline-default bg-dark"
                    style="min-height: 125px; min-width: 250px; margin-left:100px;color:white"
                  >
                    <b>SHOW PURCHASE</b>
                  </button>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="transactions-tab">
              <div class="form-row">
                <label
                  class="col-md-2 col-form-label col-form-label-sm mt-1 text-truncate"
                  for="cutoffDates"
                >Cut-off Dates:</label>
                <div class="col-md-6 my-1">
                  <div class="form-row m-0">
                    <input
                      class="col mr-sm-2 form-control form-control-sm"
                      name="cutoffDates1"
                      type="date"
                    >
                    <input class="col form-control form-control-sm" name="cutoffDates2" type="date">
                  </div>
                </div>
                <div class="col-auto ml-auto my-1">
                  <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                    <i class="fa fa-search-plus mr-1"></i>
                    <span>
                      Q
                      <u>u</u>ery
                    </span>
                  </button>
                  <button class="btn btn-sm btn-outline-primary" type="button">
                    <i class="fa fa-ban mr-1"></i>
                    <span>Clear</span>
                  </button>
                </div>
              </div>
              <div class="bg-dark mt-1" style="min-height: 339px;">
                <table class="table table-sm table-bordered custom-table">
                  <thead>
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">Trans</th>
                      <th scope="col">Qty</th>
                      <th scope="col">Running</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane" id="others-tab">
              <br>
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="itemType"
                >TAGGING For Networking Business System:</label>
                <br>
                <div class="col-sm-5 my-1 ml-2">
                  <select
                    class="custom-select custom-select-sm"
                    name="taggingForNetworkingBusinessSystem"
                  >
                    <option></option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.bg-light-blue {
  background-color: #6cb2eb !important;
}
</style>
