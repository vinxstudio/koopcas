<template>
  <div class="inventory">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto" style="float:left;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Maintenance</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Items
              <div class="dropdown-menu" style="left: 338px; top: -3px;">
                <router-link to="inventory/items-master" class="dropdown-item">Items Master</router-link>
                <router-link to="inventory/items-inquiry" class="dropdown-item">Items Inquiry</router-link>
                <router-link to="inventory/items-listing" class="dropdown-item">Item Listing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Vendors
              <div class="dropdown-menu" style="left: 338px; top: 33px;">
                <router-link to="inventory/vendors-master" class="dropdown-item">Vendors Master</router-link>
                <router-link to="inventory/vendors-inquiry" class="dropdown-item">Vendors Inquiry</router-link>
                <router-link to="inventory/vendors-listing" class="dropdown-item">Vendors Listing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Purchase Orders
              <div class="dropdown-menu" style="left: 338px; top: 60px;">
                <router-link
                  to="inventory/purchase-master"
                  class="dropdown-item"
                >Purchase Orders Master</router-link>
                <router-link
                  to="inventory/purchase-inquiry"
                  class="dropdown-item"
                >Purchase Orders Inquiry</router-link>
                <router-link
                  to="inventory/purchase-listing"
                  class="dropdown-item"
                >Purchase Orders Listing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Physical Inventory
              <div class="dropdown-menu" style="left: 338px; top: 90px;">
                <router-link
                  to="inventory/physical-master"
                  class="dropdown-item"
                >Physical Inventory Master</router-link>
                <router-link
                  to="inventory/physical-inquiry"
                  class="dropdown-item"
                >Physical Inventory Inquiry</router-link>
                <router-link
                  to="inventory/physical-listing"
                  class="dropdown-item"
                >Physical Invertory Listing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Stocks Transfer
              <div class="dropdown-menu" style="left: 338px; top: 120px;">
                <router-link
                  to="inventory/stocks-master"
                  class="dropdown-item"
                >Stocks Transfer Master</router-link>
                <router-link
                  to="inventory/stocks-inquiry"
                  class="dropdown-item"
                >Stock Transfer Inventory Inquiry</router-link>
                <router-link
                  to="inventory/stocks-listing"
                  class="dropdown-item"
                >Stock Transfer Listing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Inventory
              <div class="dropdown-menu" style="left: 338px; top: 150px;">
                <router-link to="inventory/inventory-payment" class="dropdown-item">Payment Method</router-link>
                <router-link to="inventory/inventory-item" class="dropdown-item">Item Method</router-link>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Transactions</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 110px; min-width: 340px; font-size: 13px;"
          >
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Receiving (ITEM IN)
              <div class="dropdown-menu" style="left: 338px; top: -3px;">
                <router-link
                  to="inventory/receiving-voucher"
                  class="dropdown-item"
                >Receiving (ITEM IN) Voucher</router-link>
                <router-link
                  to="inventory/receiving-vinquiry"
                  class="dropdown-item"
                >Receiving (ITEM IN) Vouchers Inquiry</router-link>
                <router-link to class="dropdown-item">Receiving (ITEM IN) Journal</router-link>
                <router-link to class="dropdown-item">Receiving (ITEM IN) Journal Inquiry</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Return (ITEM OUT)
              <div class="dropdown-menu" style="left: 338px; top: 40px;">
                <router-link to class="dropdown-item">Return (ITEM OUT) Voucher</router-link>
                <router-link to class="dropdown-item">Return (ITEM OUT) Voucher Inquiry</router-link>
                <router-link to class="dropdown-item">Return (ITEM OUT) Journal</router-link>
                <router-link to class="dropdown-item">Return (ITEM OUT) Journal Inquiry</router-link>
              </div>
            </div>
            <div
              class="dropdown-item dropdown-toggle"
              data-toggle="dropdown"
            >Production (ITEM IN/OUT)
              <div class="dropdown-menu" style="left: 338px; top: 60px;">
                <router-link to class="dropdown-item">Production (ITEM IN/OUT) Journal</router-link>
                <router-link to class="dropdown-item">Production (ITEM IN/OUT) Journal Inquiry</router-link>
              </div>
            </div>
            <div
              class="dropdown-item dropdown-toggle"
              data-toggle="dropdown"
            >Sales/Return (ITEM IN/OUT)
              <div class="dropdown-menu" style="left: 338px; top: 90px;">
                <router-link to class="dropdown-item">Sales Receipt (Item Out Inquiry)</router-link>
                <router-link to class="dropdown-item">Return Receipt (Item In Inquiry)</router-link>
              </div>
            </div>
            <router-link to class="dropdown-item">Adjustments</router-link>
            <router-link to="/inventory/transaction" class="dropdown-item">Transactions Listing</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Lookup Data</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 220px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/inventory/brand-master" class="dropdown-item">Brand Master</router-link>
            <router-link to="/inventory/common-master" class="dropdown-item">Common Name Master</router-link>
            <router-link to="/inventory/item-class-master" class="dropdown-item">Item Class Master</router-link>
            <router-link to="/inventory/item-sub-master" class="dropdown-item">Item Sub Class Master</router-link>
            <router-link to="/inventory/item-unit-master" class="dropdown-item">Item Unit Master</router-link>
            <router-link
              to="/inventory/item-location-master"
              class="dropdown-item"
            >Item Location Master</router-link>
            <router-link to="/inventory/points-master" class="dropdown-item">Points System Master</router-link>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 7px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/inventory/override/" class="dropdown-item">Override</router-link>
          </div>
        </li>
      </ul>
    </nav>

    <div class="bg-home w-100 h-100 d-flex justify-content-center">
      <h1 class="display-1 text-white mb-0 text-center">
        <p style="font-size: 2.488rem;" class="font-weight-normal mb-2">Welcome to</p>KoopCAS 3.0
      </h1>
    </div>
  </div>
</template>

<style>
.loans {
  text-align: center;
  width: 100%;
  height: 541px;
  border: 1px solid #fff;
}
</style>