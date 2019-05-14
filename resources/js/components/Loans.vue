<template>
    <div class="loans">
        <nav class="navbar navbar-expand-lg p-0">
            <ul class= "navbar-nav mr-auto" style="float:left;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Maintenance</a>
                    <div class="dropdown-menu" style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;">
                        <router-link to="/loans/loans-application-module" class="dropdown-item">Loans Application Module</router-link>
                        <router-link to="/loans/loans-master" class="dropdown-item">Loan Master</router-link>
                        <router-link to="/loans/loan-ar-master" class="dropdown-item">A/R Master</router-link>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Inquiry</a>
                    <div class="dropdown-menu" style="top: 40px; left: 117px; min-width: 340px; font-size: 13px;">
                        <router-link to="/loans/loans-master-inquiry" class="dropdown-item">Loans Master Inquiry</router-link>
                        <router-link to="/loans/armaster-inquiry" class="dropdown-item">A/R Master Inquiry</router-link>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Batch Process</a>
                    <div class="dropdown-menu" style="top: 40px; left: 190px; min-width: 340px; font-size: 13px;">
                        <router-link to="/loans/batch-edit-loan-setup" class="dropdown-item">Batch Edit Loan Setup</router-link>
                        <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Update Loan Status
                            <div class="dropdown-menu" aria-labelledby="dropdownmenu" style="left: 338px; top: 33px;">
                                <router-link to="/loans/generate" class="dropdown-item">Generate</router-link>
                                <router-link to="/loans/maintenance" class="dropdown-item">Maintenance</router-link>
                            </div>
                        </div>
                        <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Unearned Amortization
                            <div class="dropdown-menu" style="left: 338px; top: 60px;">
                                <router-link to="/loans/unearned-interest" class="dropdown-item">Unearned Interest</router-link>
                                <router-link to="/loans/unearned-collection-fee" class="dropdown-item">Unearned Collection Fee</router-link>
                                <router-link to="/loans/batch-process-maintenance" class="dropdown-item">Maintenance</router-link>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
                    <div class="dropdown-menu" style="top: 40px; left: 7px; min-width: 340px; font-size: 13px;">
                        <router-link to="loans/analysis-of-receivables" class="dropdown-item">Analysis of Receivables</router-link>
                        <router-link to="loans/aging-of-receivables" class="dropdown-item">Aging of Receivables</router-link>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
                    <div class="dropdown-menu" style="top: 40px; left: 390px; min-width: 340px; font-size: 13px;">
                        <router-link to="/loans/amortization-sched-cal" class="dropdown-item">Amortization Schedule Calculator</router-link>
                        <router-link to="/loans/override" class="dropdown-item">Override</router-link>
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
.loans {
    text-align: center;
    width: 100%;
    height: 541px;
    border: 1px solid #fff;
}
</style>