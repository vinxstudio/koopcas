<<template>
    <div class="other-mod">
        <nav class="navbar navbar-expand-lg p-0">
            <ul class= "navbar-nav mr-auto" style="float:left;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Maintenance</a>
                    <div class="dropdown-menu" style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;">
                        <router-link to="/other-mod/maintenance-accounts-payable" class="dropdown-item">Accounts Payable</router-link>
                        <router-link to="/other-mod/maintenance-subsidiary-ledger" class="dropdown-item">Other S/L</router-link>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Inquiry</a>
                    <div class="dropdown-menu" style="top: 40px; left: 117px; min-width: 340px; font-size: 13px;">
                        <router-link to="/other-mod/inquiry-accounts-payable" class="dropdown-item">A/P Inquiry</router-link>
                        <router-link to="/other-mod/inquiry-subsidiary-ledger" class="dropdown-item">Other S/L Inquiry</router-link>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Special Transaction</a>
                    <div class="dropdown-menu" style="top: 40px; left: 190px; min-width: 340px; font-size: 13px;">
                       <router-link to="/other-mod/st-others-computation" class="dropdown-item">Others Computation</router-link>
                        <router-link to="/other-mod/st-payroll-computation" class="dropdown-item">Payroll Computation</router-link>
                        <router-link to="/other-mod/st-maintenance" class="dropdown-item">Maintenance</router-link>
                        <router-link to="/other-mod/st-setup-annual" class="dropdown-item">Setup Annual CutOff Entries</router-link>
                    </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
                    <div class="dropdown-menu" style="top: 40px; left: 7px; min-width: 340px; font-size: 13px;">
                        <router-link to="/other-mod/report-ap-listing" class="dropdown-item">A/P Listing</router-link>
                        <router-link to="other-mod/other-al-listing" class="dropdown-item">Other A/L Listing</router-link>
                        <router-link to="True Money Transaction Listing" class="dropdown-item">True Money Transaction Listing</router-link> 
                    </div>
                </li>

                <li class="nav-item">
                    <router-link to="/other-mod/tools" class="nav-link">Tools</router-link>
                </li>

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Main Menu</a>
                    <div class="dropdown-menu" style="top: 40px; left: 470px; min-width: 340px; font-size: 13px;">
                        <router-link to="" class="dropdown-item">
                            Client Master   <span class="float-right">F1</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Front Office    <span class="float-right">F2</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Back Office     <span class="float-right">F3</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Loans A/R       <span class="float-right">F4</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Deposits        <span class="float-right">F5</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Inventory       <span class="float-right">F6</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Other Modules   <span class="float-right">F7</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            System1         <span class="float-right">F8</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Setup           <span class="float-right">F9</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            System2         <span class="float-right">F10</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Reports         <span class="float-right">F11</span>
                        </router-link>
                        <router-link to="" class="dropdown-item">
                            Logout          <span class="float-right">F12</span>
                        </router-link>
                        
                    </div>
                </li>

                <li class="nav-item">
                    <router-link to="" class="nav-link">Policy</router-link>
                </li>

                <li class="nav-item">
                    <router-link to="" class="nav-link">Help</router-link>
                </li>
            </ul>
        </nav>

        <div class="bg-home w-100 h-100 d-flex justify-content-center">
            <h1 class="display-1 text-white mb-0 text-center">
                <p style="font-size: 2.488rem;" class="font-weight-normal mb-2">Welcome to</p>
                KoopCAS 3.0
            </h1>
        </div>
    </div>
</template>

<style>
.other-mod {
  text-align: center;
  width: 100%;
  height: 541px;
  border: 1px solid #fff;
}
</style>