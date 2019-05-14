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
          <router-link
            to="/inventory/inv-master-search"
            class="btn btn-sm btn-outline-primary mr-4"
          >
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>

          <button class="btn btn-sm btn-outline-primary mr-1 new" type="button" @click="insertNew">
            <router-link to="/inventory/items-master" class="new">
              <i class="fa fa-file mr-1"></i>
              <span>
                Ne
                <u>w</u>
              </span>
            </router-link>
          </button>
          
          <button
            class="btn btn-sm btn-outline-primary mr-1"
            v-if="this.$route.params.id"
            type="button"
            @click="editItem(barCode)"
          >
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else disabled>
            <i class="fa fa-pencil-alt mr-1"></i>
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
        </li>
      </ul>
    </nav>

    <div
      class="alert alert-success"
      v-if="successAdd"
      transition="expand"
    >An Item Successfully Added.</div>

    <div
      class="alert alert-success"
      v-if="successEdit"
      transition="expand"
    >An Item Successfully Updated.</div>

    <form @submit.prevent="insertItems">
      <div class="form-row align-items-stretch">
        <div class="col-md-8">
          <div class="bg-light">
            <fieldset class="border p-2">
              <h5>Basic Info</h5>
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="id"
                >Item ID:</label>
                <div class="col-sm-4 my-1">
                  <input
                    class="form-control form-control-sm bg-light-blue border-0"
                    name="itemId"
                    type="text"
                    v-model="invmaster.id"
                    readonly
                  >
                </div>
              </div>
              <div class="form-row justify-content-between">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="barCode"
                >Bar Code:</label>
                <div class="col-sm-6 my-1">
                  <input
                    class="form-control form-control-sm"
                    name="barCode"
                    v-model="this.$route.params.id"
                    type="text"
                    readonly
                  >
                </div>
                <div class="form-check ml-auto mr-2 mt-1">
                  <input
                    class="form-check-input"
                    id="eanStandard"
                    style="margin-top: 10px;"
                    type="checkbox"
                    value
                    :disabled="selectDisabled"
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
                  <input
                    class="form-control form-control-sm"
                    v-model="invmaster.desc1"
                    name="description1"
                    type="text"
                    :readonly="readOnly"
                  >
                </div>
              </div>
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="description2"
                >Receipt Description:</label>
                <div class="col-sm-8 my-1">
                  <input
                    class="form-control form-control-sm"
                    v-model="invmaster.desc2"
                    name="description2"
                    type="text"
                    :readonly="readOnly"
                  >
                </div>
              </div>
              <div class="form-row">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="variants"
                >Variants:</label>
                <div class="col-sm-3 my-1">
                  <input
                    class="form-control form-control-sm"
                    v-model="invmaster.variants"
                    name="variants"
                    type="text"
                    :readonly="readOnly"
                  >
                </div>
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="size"
                >Size:</label>
                <div class="col-sm-3 my-1">
                  <div class="form-row m-0">
                    <input
                      class="col-3 form-control form-control-sm mr-2"
                      v-model="invmaster.itemSize"
                      name="size1"
                      type="text"
                      :readonly="readOnly"
                    >

                    <div class="col-lg-8">
                      <select
                        class="col form-control form-control-sm"
                        name="itemType"
                        id
                        v-model="invmaster.itemUnitId"
                        :disabled="selectDisabled"
                      >
                        <option
                          v-for="invItemUnit in invItemUnits"
                          v-bind:value="invItemUnit.id"
                        >{{ invItemUnit.desc1 }}</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row mt-4">
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="dateCreated"
                >Date Created:</label>
                <div class="col-sm-3 my-1">
                  <input
                    class="form-control form-control-sm"
                    name="dateCreated"
                    v-model="invmaster.trDate"
                    type="date"
                  >
                </div>
                <label
                  class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for="status"
                >Status:</label>
                <div class="col-sm-4 my-1">
                  <select
                    class="custom-select custom-select-sm"
                    name="status"
                    id
                    v-model="invmaster.itemStatus"
                    :disabled="selectDisabled"
                  >
                    <option
                      v-for="invItemStatus in invItemStatuses"
                      v-bind:value="invItemStatus.id"
                    >{{ invItemStatus.desc1 }}</option>
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
                    <input
                      class="form-control form-control-sm"
                      v-model="invmaster.binLocation"
                      name="binLocation"
                      type="text"
                      :readonly="readOnly"
                    >
                  </div>
                  <div class="form-check ml-auto mr-2 mt-1">
                    <input
                      class="form-check-input"
                      id="consignment"
                      style="margin-top: 10px;"
                      type="checkbox"
                      value
                      :disabled="selectDisabled"
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
                    <select
                      class="custom-select custom-select-sm"
                      name="itemType"
                      id
                      v-model="invmaster.itemType"
                      :disabled="selectDisabled"
                    >
                      <option
                        v-for="invItemType in invItemTypes"
                        v-bind:value="invItemType.id"
                      >{{ invItemType.desc1 }}</option>
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
                      :readonly="readOnly"
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
                    <select
                      class="custom-select custom-select-sm"
                      name="itemType"
                      id
                      v-model="invmaster.brandId"
                      :disabled="selectDisabled"
                    >
                      <option
                        v-for="invItemBrand in invItemBrands"
                        v-bind:value="invItemBrand.id"
                      >{{ invItemBrand.desc1 }}</option>
                    </select>
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
                      :readonly="readOnly"
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
                      <div class="col-sm-8 my-1">
                        <select
                          class="custom-select custom-select-sm"
                          name="itemType"
                          id
                          v-model="invmaster.commonNameId"
                          :disabled="selectDisabled"
                        >
                          <option
                            v-for="invItemCommonName in invItemCommonNames"
                            v-bind:value="invItemCommonName.id"
                          >{{ invItemCommonName.desc1 }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                        for="mainGroup"
                      >Main Group (Class):</label>
                      <div class="col-sm-8 my-1">
                        <select
                          class="custom-select custom-select-sm"
                          name="itemType"
                          id
                          v-model="invmaster.itemClassesId"
                          :disabled="selectDisabled"
                        >
                          <option
                            v-for="invItemClass in invItemClasses"
                            v-bind:value="invItemClass.id"
                          >{{ invItemClass.desc1 }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                        for="productGroup"
                      >Product Group (Sub Class):</label>
                      <div class="col-sm-8 my-1">
                        <select
                          class="custom-select custom-select-sm"
                          name="itemType"
                          id
                          v-model="invmaster.itemSubClassId"
                          :disabled="selectDisabled"
                        >
                          <option
                            v-for="invItemSubClass in invItemSubClasses"
                            v-bind:value="invItemSubClass.id"
                          >{{ invItemSubClass.desc1 }}</option>
                        </select>
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
                      <input
                        class="form-control form-control-sm"
                        v-model="invmaster.retailPrice"
                        name="binLocation"
                        type="text"
                        :readonly="readOnly"
                      >
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
                        <input
                          class="form-control form-control-sm"
                          v-model="invmaster.wholeSalePrice"
                          name="wholeSalePrice"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                        for="Price3"
                      >Price 3:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm"
                          name="mainGroup"
                          v-model="invmaster.price3"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                        for="Price4"
                      >Price 4:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm"
                          name="productGroup"
                          v-model="invmaster.price4"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="taxCode"
                      >Tax Code:</label>
                      <div class="col-sm-5 my-1">
                        <select
                          class="custom-select custom-select-sm"
                          name="taxCode"
                          :disabled="selectDisabled"
                        >
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
                          :disabled="selectDisabled"
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
                          :disabled="selectDisabled"
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
                  <div class="col-sm-5 my-1">
                    <select
                      class="custom-select custom-select-sm"
                      name="itemType"
                      id
                      v-model="invmaster.vendorId"
                      :disabled="selectDisabled"
                    >
                      <option
                        v-for="invItemVendor in invItemVendors"
                        v-bind:value="invItemVendor.id"
                      >{{ invItemVendor.companyName }}</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    for="orderCost1"
                  >Order Cost:</label>
                  <div class="col-sm-3 my-1">
                    <input
                      class="form-control form-control-sm"
                      name="variants"
                      type="text"
                      :readonly="readOnly"
                    >
                  </div>
                </div>
                <hr>
                <div class="form-row">
                  <label
                    class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    for="supplier2Name"
                  >Supplier2 Name:</label>
                  <div class="col-sm-5 my-1">
                    <select
                      class="custom-select custom-select-sm"
                      name="itemType"
                      id
                      v-model="invmaster.brandId"
                      :disabled="selectDisabled"
                    >
                      <option
                        v-for="invItemBrand in invItemBrands"
                        v-bind:value="invItemBrand.id"
                      >{{ invItemBrand.desc1 }}</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    for="orderCost2"
                  >Order Cost:</label>
                  <div class="col-sm-3 my-1">
                    <input
                      class="form-control form-control-sm"
                      name="variants"
                      type="text"
                      :readonly="readOnly"
                    >
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
                        <input
                          class="form-control form-control-sm"
                          name="mainGroup"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right"
                        for="reOrderQuantity"
                      >Re-order Quantity:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm"
                          name="productGroup"
                          type="text"
                          :readonly="readOnly"
                        >
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
                        readonly
                      >
                      <input
                        class="col form-control form-control-sm"
                        name="cutoffDates2"
                        type="date"
                        readonly
                      >
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
                      :disabled="selectDisabled"
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
      <div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 20px;">
        <button class="btn btn-secondary mr-1" type="submit" v-if="selectDisabled">
          <i class="fa fa-save mr-1"></i>
          <span>
            <u>S</u>ave
          </span>
        </button>
        
        <button class="btn btn-success mr-1" type="submit" v-else :disabled="selectDisabled">
          <i class="fa fa-save mr-1"></i>
          <span>
            <u>S</u>ave
          </span>
        </button>
        
        <button class="btn btn-secondary" type="button" v-if="selectDisabled">
          <i class="fa fa-times-circle mr-1"></i>
          <span>
            Canc
            <u>e</u>l
          </span>
        </button>
        <button
          class="btn btn-outline-primary"
          type="button"
          v-else
          :disabled="selectDisabled"
          @click="cancel"
        >
          <router-link to="/inventory/items-master" class="new" :disabled="selectDisabled">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </router-link>
        </button>
      </div>

      <!--SL TYPE MODAL-->
      <!--END OF SL TYPE MODAL-->
    </form>
  </div>
</template>
<script>
export default {
  data() {
    return {
      invmaster: {
        id: "",
        brCode: "",
        upc: "",
        desc1: "",
        desc2: "",
        alternateLookUp: "",
        trDate: "",
        itemType: "",
        itemStatus: "",
        depId: "",
        catId: "",
        vendorId: "",
        vendorId2: "",
        attribute: "",
        binLocation: "",
        isTaxable1: "",
        isTaxable2: "",
        avgCost: "",
        orderCost: "",
        orderCost2: "",
        orderQty: "",
        retailPrice: "",
        wholeSalePrice: "",
        grossMargin: "",
        reOrderQty: "",
        taxId: "",
        isConsignment: "",
        remarks: "",
        tagging: "",
        productId: "",
        variants: "",
        itemSize: "",
        itemUnitId: "",
        brandId: "",
        commonNameId: "",
        itemClassesId: "",
        itemSubClassId: "",
        price3: "",
        price4: "",
        // orderlevel: "",
        VAT: "",
        isVatAdded: ""
      },

      // //input field Objects
      // itemUnit: {},

      // itemBrand: {},

      // itemCommonName: {},

      // itemItemClass: {},

      // itemSubClass: {},

      // itemVendor: {},

      // events
      paramId: "",

      selectDisabled: true,

      readOnly: true,

      edit: false,

      // DROP DOWNS
      invItemStatuses: [],
      invItemTypes: [],
      invItemUnits: [],
      invItemBrands: [],
      invItemCommonNames: [],
      invItemClasses: [],
      invItemSubClasses: [],
      invItemVendors: []
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    console.log(this.paramId);
    if (this.paramId > 0) {
      this.fetchItemMaster(this.paramId);
    }
  },

  created() {
    this.fetchItemStatus();
    this.fetchItemTypes();
    this.fetchItemUnit();
    this.fetchItemBrand();
    this.fetchItemCommonName();
    this.fetchItemClass();
    this.fetchItemSubClass();
    this.fetchItemVendor();
  },

  methods: {
    fetchItemMaster(id) {
      fetch(`/api/invItems/${id}`)
        .then(res => res.json())
        .then(res => {
          this.invmaster = res.data[0];
          console.log(res.data);
        })
        .catch(err => console.log(err));
    },

    fetchItemBrand() {
      fetch("/api/invBrands")
        .then(res => res.json())
        .then(res => {
          this.invItemBrands = res.data;
          console.log(this.invItemBrands);
        })
        .catch(err => console.log(err));
    },

    fetchItemUnit() {
      fetch("/api/invItemUnits")
        .then(res => res.json())
        .then(res => {
          this.invItemUnits = res.data;
          console.log(this.invItemUnits);
        })
        .catch(err => console.log(err));
    },

    fetchItemCommonName() {
      fetch("/api/invCommonNames")
        .then(res => res.json())
        .then(res => {
          this.invItemCommonNames = res.data;
          console.log(this.invItemCommonNames);
        })
        .catch(err => console.log(err));
    },

    fetchItemClass() {
      fetch("/api/invItemClasses")
        .then(res => res.json())
        .then(res => {
          this.invItemClasses = res.data;
          console.log(this.invItemClasses);
        })
        .catch(err => console.log(err));
    },

    fetchItemSubClass() {
      fetch("/api/invItemSubClasses")
        .then(res => res.json())
        .then(res => {
          this.invItemSubClasses = res.data;
          console.log(this.invItemSubClasses);
        })
        .catch(err => console.log(err));
    },

    fetchItemVendor() {
      fetch("/api/invVendors")
        .then(res => res.json())
        .then(res => {
          this.invItemVendors = res.data;
          console.log(this.invItemVendors);
        })
        .catch(err => console.log(err));
    },

    fetchItemStatus() {
      fetch("/api/invItemStatuses")
        .then(res => res.json())
        .then(res => {
          this.invItemStatuses = res.data;
          console.log(this.invItemStatuses);
        })
        .catch(err => console.log(err));
    },

    fetchItemTypes() {
      fetch("/api/invItemTypes")
        .then(res => res.json())
        .then(res => {
          this.invItemTypes = res.data;
          console.log(this.invItemTypes);
        })
        .catch(err => console.log(err));
    },

    // inserting api
    insertItems() {
      if (this.edit === false) {
        fetch("/api/invItems", {
          method: "post",
          body: JSON.stringify(this.invmaster),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            // (this.invmaster.id = ""),
            (this.invmaster.brCode = ""),
              // (this.invmaster.upc = ""),
              (this.invmaster.desc1 = ""),
              (this.invmaster.desc2 = ""),
              (this.invmaster.alternateLookUp = ""),
              (this.invmaster.trDate = ""),
              (this.invmaster.itemType = ""),
              (this.invmaster.itemStatus = ""),
              (this.invmaster.depId = ""),
              (this.invmaster.catId = ""),
              (this.invmaster.vendorId = ""),
              (this.invmaster.vendorId2 = ""),
              (this.invmaster.attribute = ""),
              (this.invmaster.binLocation = ""),
              (this.invmaster.isTaxable1 = ""),
              (this.invmaster.isTaxable2 = ""),
              (this.invmaster.avgCost = ""),
              (this.invmaster.orderCost = ""),
              (this.invmaster.orderCost2 = ""),
              (this.invmaster.orderQty = ""),
              (this.invmaster.retailPrice = ""),
              (this.invmaster.wholeSalePrice = ""),
              (this.invmaster.grossMargin = ""),
              (this.invmaster.reOrderQty = ""),
              (this.invmaster.taxId = ""),
              (this.invmaster.isConsignment = ""),
              (this.invmaster.remarks = ""),
              (this.invmaster.tagging = ""),
              (this.invmaster.productId = ""),
              (this.invmaster.variants = ""),
              (this.invmaster.itemSize = ""),
              (this.invmaster.itemUnitId = ""),
              (this.invmaster.brandId = ""),
              (this.invmaster.commonNameId = ""),
              (this.invmaster.itemClassesId = ""),
              (this.invmaster.itemSubClassId = ""),
              (this.invmaster.price3 = ""),
              (this.invmaster.price4 = ""),
              // (this.invmaster.orderlevel = ""),
              (this.invmaster.VAT = ""),
              (this.invmaster.isVatAdded = ""),
              (this.readOnly = true),
              (this.selectDisabled = true),
              (this.successAdd = true),
              setTimeout(() => {
                // this.successAdd = false;
              }, 2000),
              console.log("Added New Item");
          })
          .catch(err => console.log(err));
      } else {
        fetch("/api/invItems", {
          method: "put",
          body: JSON.stringify(this.invmaster),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            // this.successEdit = true;
            this.readOnly = true;
            this.selectDisabled = true;
            setTimeout(() => {
              // this.successEdit = false;
            }, 2000),
              console.log("Update Item");
            this.fetchItemMaster(this.$route.params.id);
          })
          .catch(err => console.log(err));
      }
    },

    editItem(invmaster) {
      this.edit = true;
      this.readOnly = false;
      this.selectDisabled = false;
      this.invmaster.id = invmaster.id;
      this.invmaster.brCode = invmaster.brCode;
      this.invmaster.desc1 = invmaster.desc1;
      this.invmaster.desc2 = invmaster.desc2;
      this.invmaster.alternateLookUp = invmaster.alternateLookUp;
      this.invmaster.trDate = invmaster.trDate;
      this.invmaster.itemType = invmaster.itemType;
      this.invmaster.itemStatus = invmaster.itemStatus;
      this.invmaster.depId = invmaster.depId;
      this.invmaster.catId = invmaster.catId;
      this.invmaster.vendorId = invmaster.vendorId;
      this.invmaster.vendorId2 = invmaster.vendorId2;
      this.invmaster.attribute = invmaster.attribute;
      this.invmaster.binLocation = invmaster.binLocation;
      this.invmaster.isTaxable1 = invmaster.isTaxable1;
      this.invmaster.isTaxable2 = invmaster.isTaxable2;
      this.invmaster.avgCost = invmaster.brCode;
      this.invmaster.orderCost = invmaster.brCode;
      this.invmaster.orderCost2 = invmaster.brCode;
      this.invmaster.orderQty = invmaster.brCode;
      this.invmaster.retailPrice = invmaster.brCode;
      this.invmaster.wholeSalePrice = invmaster.brCode;
      this.invmaster.grossMargin = invmaster.brCode;
      this.invmaster.reOrderQty = invmaster.brCode;
      this.invmaster.taxId = invmaster.brCode;
      this.invmaster.isConsignment = invmaster.brCode;
      this.invmaster.remarks = invmaster.brCode;
      this.invmaster.tagging = invmaster.brCode;
      this.invmaster.productId = invmaster.brCode;
      this.invmaster.variants = invmaster.brCode;
      this.invmaster.itemSize = invmaster.brCode;
      this.invmaster.itemUnitId = invmaster.brCode;
      this.invmaster.brandId = invmaster.brCode;
      this.invmaster.commonNameId = invmaster.brCode;
      this.invmaster.itemClassesId = invmaster.brCode;
      this.invmaster.itemSubClassId = invmaster.brCode;
      this.invmaster.price3 = invmaster.brCode;
      this.invmaster.price4 = invmaster.brCode;
      this.invmaster.orderlevel = invmaster.brCode;
      this.invmaster.VAT = invmaster.brCode;
      this.invmaster.isVatAdded = invmaster.brCode;
    },

    insertNew() {
      (this.$route.params.id = ""), (this.selectDisabled = false);
      this.readOnly = false;
      (this.invmaster.id = ""),
        (this.invmaster.brCode = ""),
        (this.invmaster.upc = ""),
        (this.invmaster.desc1 = ""),
        (this.invmaster.desc2 = ""),
        (this.invmaster.alternateLookUp = ""),
        (this.invmaster.trDate = ""),
        (this.invmaster.itemType = ""),
        (this.invmaster.itemStatus = ""),
        (this.invmaster.depId = ""),
        (this.invmaster.catId = ""),
        (this.invmaster.vendorId = ""),
        (this.invmaster.vendorId2 = ""),
        (this.invmaster.attribute = ""),
        (this.invmaster.binLocation = ""),
        (this.invmaster.isTaxable1 = ""),
        (this.invmaster.isTaxable2 = ""),
        (this.invmaster.avgCost = ""),
        (this.invmaster.orderCost = ""),
        (this.invmaster.orderCost2 = ""),
        (this.invmaster.orderQty = ""),
        (this.invmaster.retailPrice = ""),
        (this.invmaster.wholeSalePrice = ""),
        (this.invmaster.grossMargin = ""),
        (this.invmaster.reOrderQty = ""),
        (this.invmaster.taxId = ""),
        (this.invmaster.isConsignment = ""),
        (this.invmaster.remarks = ""),
        (this.invmaster.tagging = ""),
        (this.invmaster.productId = ""),
        (this.invmaster.variants = ""),
        (this.invmaster.itemSize = ""),
        (this.invmaster.itemUnitId = ""),
        (this.invmaster.brandId = ""),
        (this.invmaster.commonNameId = ""),
        (this.invmaster.itemClassesId = ""),
        (this.invmaster.itemSubClassId = ""),
        (this.invmaster.price3 = ""),
        (this.invmaster.price4 = ""),
        // (this.invmaster.orderlevel = ""),
        (this.invmaster.VAT = ""),
        (this.invmaster.isVatAdded = "");
    },

    cancel() {
      this.selectDisabled = true;
      this.readOnly = true;
      (this.invmaster.id = ""),
        (this.invmaster.brCode = ""),
        (this.invmaster.upc = ""),
        (this.invmaster.desc1 = ""),
        (this.invmaster.desc2 = ""),
        (this.invmaster.alternateLookUp = ""),
        (this.invmaster.trDate = ""),
        (this.invmaster.itemType = ""),
        (this.invmaster.itemStatus = ""),
        (this.invmaster.depId = ""),
        (this.invmaster.catId = ""),
        (this.invmaster.vendorId = ""),
        (this.invmaster.vendorId2 = ""),
        (this.invmaster.attribute = ""),
        (this.invmaster.binLocation = ""),
        (this.invmaster.isTaxable1 = ""),
        (this.invmaster.isTaxable2 = ""),
        (this.invmaster.avgCost = ""),
        (this.invmaster.orderCost = ""),
        (this.invmaster.orderCost2 = ""),
        (this.invmaster.orderQty = ""),
        (this.invmaster.retailPrice = ""),
        (this.invmaster.wholeSalePrice = ""),
        (this.invmaster.grossMargin = ""),
        (this.invmaster.reOrderQty = ""),
        (this.invmaster.taxId = ""),
        (this.invmaster.isConsignment = ""),
        (this.invmaster.remarks = ""),
        (this.invmaster.tagging = ""),
        (this.invmaster.productId = ""),
        (this.invmaster.variants = ""),
        (this.invmaster.itemSize = ""),
        (this.invmaster.itemUnitId = ""),
        (this.invmaster.brandId = ""),
        (this.invmaster.commonNameId = ""),
        (this.invmaster.itemClassesId = ""),
        (this.invmaster.itemSubClassId = ""),
        (this.invmaster.price3 = ""),
        (this.invmaster.price4 = ""),
        // (this.invmaster.orderlevel = ""),
        (this.invmaster.VAT = ""),
        (this.invmaster.isVatAdded = "");
      // // brandId: "",
      // (this.invmaster.brandDesc1 = ""),
      // (this.invmaster.brandDesc2 = ""),
      // // commonNameId: "",
      // (this.invmaster.commonNameDesc1 = ""),
      // (this.invmaster.commonNameDesc2 = ""),
      // // itemUnitID: "",
      // (this.invmaster.itemUnitDesc1 = ""),
      // (this.invmaster.itemUnitDesc2 = ""),
      // // invVendorID: "",
      // (this.invmaster.invVendorCompanyName = ""),
      // // invItemClassID: "",
      // (this.invmaster.invItemClassDesc1 = ""),
      // (this.invmaster.invItemClassDesc2 = ""),
      // // invItemSubClassID: "",
      // (this.invmaster.invItemSubClassDesc1 = ""),
      // (this.invmaster.invItemSubClassDesc2 = ""),
      // // invItemStatusId: "",
      // (this.invmaster.invItemStatusDesc1 = ""),
      // (this.invmaster.invItemStatusDesc2 = ""),
      // // invItemTypeId:"",
      // (this.invmaster.invItemTypeDesc1 = ""),
      // (this.invmaster.invItemTypeDesc2 = "");
    }
  }
};
</script>
<style scoped>
.bg-light-blue {
  background-color: #6cb2eb !important;
}
</style>