<template>
   <div class="bo-inquiry-search">
      <h1>G/L Account Search</h1>
      <form>
         <div class="form-row mb-4 mt-2 align-items-center">
            <label
               class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold"
               for="search"
               >
            <u>S</u>earch
            </label>
            <div class="col-sm-3 mr-3">
               <input
                  class="form-control form-control-sm"
                  name="search"
                  placeholder="Enter Account Number"
                  type="text"
                  ng-reflect-name="clientId"
                  >
            </div>
            <label
               class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold"
               for="status"
               >Status</label>
            <div class="col-auto">
               <button
                  class="btn btn-sm btn-outline-primary mr-1"
                  type="button"
                  >
               <i class="fa fa-search mr-1"></i>
               <u>G</u>o
               </button>

            <router-link
              to="/back-office/inquiry"
              class="btn btn-sm btn-outline-primary mr-4" >
              <i class="fa fa-search mr-1"></i>
              <span>Cancel</span>
            </router-link>

            </div>
         </div>
      </form>
      <table
         class="table table-sm table-bordered table-hover custom-table"
         >
         <!-- <thead>
            <tr>
               <th scope="col">BR</th>
               <th scope="col">SLC CODE</th>
               <th scope="col">SLT CODE</th>
               <th scope="col">REF NO</th>
               <th scope="col">TR DATE</th>
               <th scope="col">Amount</th> -->
               <!-- <th scope="col">View Deposits</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>
                  <router-link
                     to=""
                     >View Deposits</router-link>
               </td>
            </tr>

            -query for the coa inquiry search
            SELECT COAID AS ID, COADesc AS Desc1, CAST(CONCAT(COAacct_tag,COAacct_lvl) AS CHAR) AS Lvl, COAacct_sum AS acct_sum FROM coa  WHERE COABR_CODE =  18
       
            -Loan Example Query
            SELECT * FROM loan JOIN client ON loan.clientIDLoan = client.ClientID JOIN clienttype ON clienttype.ClientTypeID = client.ClientType JOIN 
            acctstat ON client.AccountStatus = acctstat,AcctStatID

            -BOInquiry model
            SELECT * FROM coa JOIN glaccttype ON coa.COAglaccttype = glaccttype.GLAcctTypeID JOIN acctlevel coa.COAacct_tag = acctlevel.AcctLevelID 


       
         </tbody> -->
      </table>
      <table class="table table-sm table-bordered table-hover custom-table">
         <thead>
            <tr>
               <th scope="col">Account Code</th>
               <th scope="col">Account Description</th>
               <th scope="col">Levels </th>
               <th scope="col">Summary Account</th>
               <th scope="col">Branch Code</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>
                  <router-link to="">Get G/L Account Data</router-link>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</template>
<script></script>
<style>
   .bo-inquiry-search {
   width: 100%;
   padding-left: 15px;
   padding-right: 15px;
   }
</style>