<template>
   <div class="master-listing">
      <div class="mt-3">
         <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
            <ul role="tablist" class="nav nav-tabs nav-fill">
               <li class="nav-item">
                  <a class="nav-link active" href="#basic" data-toggle="tab">
                  <span>Basic</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#groupings" data-toggle="tab">
                  <span>Groupings</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#info" data-toggle="tab">
                  <span>Info</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#closed-options" data-toggle="tab">
                  <span>Closed Options</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#others" data-toggle="tab">
                  <span>Others</span>
                  </a>
               </li>
            </ul>
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="basic">
                  <div class="form-row">
                     <div class="col">
                        <div class="form-row justify-content-end">
                           <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">CUT-OFF DATE:</label>
                           <div class="col my-1"><input class="form-control form-control-sm" name="cutOffDate" v-model="clientList.cutOffDate" type="date"></div>
                        </div>
                        <div class="form-row">
                           <div class="col-sm-3 text-sm-right">
                              <p class="col-form-label col-form-label-sm mt-1">Date Opened:</p>
                           </div>
                           <div class="col">
                              <div class="form-row">
                                 <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
                                 <div class="col my-1"><input class="form-control form-control-sm" name="dateOpenedFrom" v-model="clientList.dateOpenedFrom" type="date"></div>
                              </div>
                              <div class="form-row">
                                 <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                                 <div class="col my-1"><input class="form-control form-control-sm" name="dateOpenedTo" v-model="clientList.dateOpenedTo" type="date"></div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-sm-3 text-sm-right">
                              <p class="col-form-label col-form-label-sm mt-1">Birthday:</p>
                           </div>
                           <div class="col">
                              <div class="form-row">
                                 <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">from</label>
                                 <div class="col my-1"><input class="form-control form-control-sm" name="bdayFrom" v-model="clientList.bdayFrom" type="date"></div>
                              </div>
                              <div class="form-row">
                                 <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                                 <div class="col my-1"><input class="form-control form-control-sm" name="bdayTo" v-model="clientList.bdayTo" type="date"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
                           <ul role="tablist" class="nav nav-tabs nav-fill">
                              <li class="nav-item">
                                 <a class="nav-link active" href="#number-filters" data-toggle="tab" >
                                 <span>Number Filters</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#basic-groupings" data-toggle="tab">
                                 <span>Grouping</span>
                                 </a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane active" id="number-filters">
                                 <div class="form-row">
                                    <div class="col-12">
                                       <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox"><label class="form-check-label">Balance Not ZERO</label></div>
                                    </div>
                                    <div class="col"><input class="form-control form-control-sm" name="balance" v-model="clientList.balance" type="text"></div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="basic-groupings" >
                                 <div class="form-check form-check-sm"><input class="form-check-input" id="geoGrp" type="checkbox"><label class="form-check-label">Group by Geo Groups</label></div>
                                 <div class="form-check form-check-sm"><input class="form-check-input" id="genderGrp" type="checkbox"><label class="form-check-label">Group by Gender</label></div>
                                 <div class="form-check form-check-sm"><input class="form-check-input" id="clientTypeGrp" type="checkbox"><label class="form-check-label">Group by Client Type</label></div>
                                 <div class="form-check form-check-sm"><input class="form-check-input" id="clientStatGrp" type="checkbox"><label class="form-check-label">Group by Client Status</label></div>
                              </div>
                           </div>
                        </ngb-tabset>
                        <fieldset class="border p-2 mt-2">
                           <span>Type of Report:</span>
                           <div class="form-check form-check-sm"><input @change="checkOptionType" class="form-check-input" id="sigSpace" name="optnReportType" type="radio" value="option1"><label class="form-check-label">With Signature Space</label></div>
                           <div class="form-check form-check-sm">
                              <input @change="checkOptionType" class="form-check-input" type="radio" id="withAddress" name="optnReportType" value="option2"><label class="form-check-label">With Address</label>
                              <select class="custom-select custom-select-sm my-1" id="address" name="address" v-model="clientList.withAddress" :disabled="selectDisabled">
                                 <option></option>
                                 <option>Residential</option>
                                 <option>Provincial</option>
                                 <option>Business</option>
                                 <option>Business - Spouse</option>
                              </select>
                           </div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="radio" value="option3"><label class="form-check-label">Wide Format</label><sub class="d-block mt-1 mb-3">(Address, Gender, Date Opened, etc.)</sub></div>
                           <div class="form-check form-check-sm"><input class="form-check-input" type="radio" value="option4"><label class="form-check-label">Subsidiary Ledger</label></div>
                        </fieldset>
                     </div>
                  </div>
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Class:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterSLC(index,SLClass)" v-for="(SLClass,index) in SLClasses" v-bind:key="SLClass.id" :value="SLClass.slClassId">{{SLClass.slClassDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="reverseFilterSLC(index,SLClassFilter)" v-for="(SLClassFilter,index) in SLClassFilters" v-bind:key="SLClassFilter.id" :value="SLClassFilter.slClassId">{{SLClassFilter.slClassDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Type:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="" v-if="this.SLTypes">
                                       <option @click="filterSelect(SLTypes,SLTypeFilters,index,SLType)" v-for="(SLType,index) in SLTypes" v-bind:key="SLType.id" :value="SLType.slTypeSltCode">{{SLType.slTypeSlcCode}}-{{SLType.slTypeMDesc2}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="filterSelect(SLTypeFilters,SLTypes,index,SLTypeFilter)" v-for="(SLTypeFilter,index) in SLTypeFilters" v-bind:key="SLTypeFilter.id" :value="SLTypeFilter.slTypeSltCode">{{SLTypeFilter.slTypeSlcCode}}-{{SLTypeFilter.slTypeMDesc2}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row justify-content-center">
                     <div class="col-sm-auto my-2"><button @click="generateClientList" class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                     <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
               <div class="tab-pane" id="groupings">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Sectoral:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterSelect(sectorals,sectoralFilters,index,sectoral)" v-for="(sectoral,index) in sectorals" v-bind:key="sectoral.id" :value="sectoral.sectorId">{{sectoral.sectorDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="filterSelect(sectoralFilters,sectorals,index, sectoralFilter)" v-for="(sectoralFilter,index) in sectoralFilters" v-bind:key="sectoralFilter.id" :value="sectoralFilter.sectorId">{{sectoralFilter.sectorDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Occupational:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterSelect(occupationals,occupationalFilters,index,occupational)" v-for="(occupational,index) in occupationals" v-bind:key="occupational.id" :value="occupational.occuId">{{occupational.occuDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="filterSelect(occupationalFilters,occupationals,index,occupationalFilter)" v-for="(occupationalFilter,index) in occupationalFilters" v-bind:key="occupationalFilter.id" :value="occupationalFilter.occuId">{{occupationalFilter.occuDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Geographical:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterSelect(geographicals,geographicalFilters,index,geographical)" v-for="(geographical,index) in geographicals" v-bind:key="geographical.id" :value="geographical.geoId">{{geographical.geoDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="filterSelect(geographicalFilters,geographicals,index,geographicalFilter)" v-for="(geographicalFilter,index) in geographicalFilters" v-bind:key="geographicalFilter.id" :value="geographicalFilter.geoId">{{geographicalFilter.geoDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row justify-content-center">
                     <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                     <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
               <div class="tab-pane" id="info">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client Type:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterSelect(clientTypes,clientTypeFilters,index,clientType)" v-for="(clientType,index) in clientTypes" v-bind:key="clientType.id" :value="clientType.clientTypeId">{{clientType.clientTypeDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="filterSelect(clientTypeFilters,clientTypes,index,clientTypeFilter)" v-for="(clientTypeFilter,index) in clientTypeFilters" v-bind:key="clientTypeFilter.id" :value="clientTypeFilter.clientTypeId">{{clientTypeFilter.clientTypeDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Gender:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterSelect(genders,genderFilters,index,gender)" v-for="(gender,index) in genders" v-bind:key="gender.id" :value="gender.genderId">{{gender.genderDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="filterSelect(genderFilters,genders,index,genderFilter)" v-for="(genderFilter,index) in genderFilters" v-bind:key="genderFilter.id" :value="genderFilter.genderId">{{genderFilter.genderDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Civil Status:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterSelect(civilStatuses,civilStatusFilters,index,civilStatus)" v-for="(civilStatus,index) in civilStatuses" v-bind:key="civilStatus.id" :value="civilStatus.civilStatId">{{civilStatus.civilStatDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="filterSelect(civilStatusFilters,civilStatuses,index,civilStatusFilter)" v-for="(civilStatusFilter,index) in civilStatusFilters" v-bind:key="civilStatusFilter.id" :value="civilStatusFilter.civilStatId">{{civilStatusFilter.civilStatDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row justify-content-center">
                     <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                     <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
               <div class="tab-pane" id="closed-options">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client Status:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterClientStatus(index,clientStatus)" v-for="(clientStatus,index) in clientStatuses" v-bind:key="clientStatus.id" :value="clientStatus.acctStatId">{{clientStatus.acctStatDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="reverseClientStatus(index,clientStatusFilter)" v-for="(clientStatusFilter,index) in clientStatusFilters" v-bind:key="clientStatusFilter.id" :value="clientStatusFilter.acctStatId">{{clientStatusFilter.acctStatDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-row my-5" v-if="clientStatClosed">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Client Status:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterSelect(closedReasons,closedReasonFilters,index,closedReason)" v-for="(closedReason,index) in closedReasons" v-bind:key="closedReason.id" :value="closedReason.closedReasonId">{{closedReason.closedReasonDesc}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="filterSelect(closedReasonFilters,closedReasons,index,closedReasonFilter)" v-for="(closedReasonFilter,index) in closedReasonFilters" v-bind:key="closedReasonFilter.id" :value="closedReasonFilter.closedReasonId">{{closedReasonFilter.closedReasonDesc}}</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row justify-content-center">
                     <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                     <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
               <div class="tab-pane" id="others">
                  <div class="form-row justify-content-center">
                     <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">DOSRI Tag:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm" id="" multiple="" name="">
                                       <option @click="filterDosri(index,dosriTag)" v-for="(dosriTag,index) in dosriTags" v-bind:key="dosriTag.did" :value="dosriTag.id">{{dosriTag.desc1}}</option>
                                    </select>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-angle-double-right"></i></div>
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option @click="reverseDosri(index,dosriTagFilter)" v-for="(dosriTagFilter,index) in dosriTagFilters" v-bind:key="dosriTagFilter.did" :value="dosriTagFilter.id">{{dosriTagFilter.desc1}}</option>
                                    </select>
                                 </div>
                              </div>
                              <div class = "form-row mt-2" v-if="relatedInterests">
                                 <label class = "col-sm-1 col-form-label col-form-label-sm text-truncate">Related To:</label>
                                 <div class="col-sm-3"><input class="form-control form-control-sm" type="text" name="relatedTo" v-model="relatedTo"></div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row my-5">
                           <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">Restriction Group:</label>
                           <div class="col">
                              <div class="form-row align-items-center">
                                 <div class="col">
                                    <select class="custom-select custom-select-sm bg-light-yellow border-0" id="" multiple="" name="">
                                       <option value="1" ng-reflect-value="1"></option>
                                       <option value="2" ng-reflect-value="2"></option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row justify-content-center">
                     <div class="col-sm-auto my-2"><button class="btn btn-dark-blue btn-block p-3"><i class="fa fa-save mr-1"></i><span>OK</span></button></div>
                     <div class="col-sm-auto my-2"><button class="btn btn-outline-dark-blue btn-block p-3"><i class="fa fa-ban mr-1"></i><span>Cancel</span></button></div>
                  </div>
               </div>
            </div>
         </ngb-tabset>
      </div>
   </div>
</template>
<script>
import jsPDF from "jspdf";

export default {
   data() {
      return {
         clientList:{
            cutOffDate:"",
            dateOpenedFrom:"",
            dateOpenedTo:"",
            bdayFrom:"",
            bdayTo:"",
            balance:"",
            withAddress:""
         },

         reportList:{},

         clientStatClosed: false,
         relatedInterests:false,
         selectDisabled:false,

         SLTypes:[],
         SLTypeAdds:[],
         SLClasses:[],            
         sectorals:[],
         occupationals:[],
         geographicals:[],
         clientTypes:[],
         genders:[],
         civilStatuses:[],
         clientStatuses:[],
         dosriTags:[],
         closedReasons:[],

         SLTypeFilters:[],
         SLClassFilters:[],
         sectoralFilters:[],
         occupationalFilters:[],            
         geographicalFilters:[],
         clientTypeFilters:[],
         genderFilters:[],
         civilStatusFilters:[],
         clientStatusFilters:[],
         dosriTagFilters:[],
         closedReasonFilters:[]
      }
   },

   created() {
      this.fetchSLClass();
      this.fetchSectors();
      this.fetchOccupationals();
      this.fetchGeographicals(18);
      this.fetchClientTypes();
      this.fetchGenders();
      this.fetchCivilStats();
      this.fetchClientStats();
      this.fetchDosriTags();
   },

   methods: {
      fetchSLClass() {
         fetch(`/api/slclassClientCISA`)
            .then(res => res.json())
            .then(res => {
               this.SLClasses = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchSLTypes(brCode,slcCode) {
         fetch(`/api/slTypeClient/${brCode}/${slcCode}`)
            .then(res => res.json())
            .then(res => {
               if(this.SLTypes.length == 0){
                  this.SLTypes = res.data;
               }else{
                  this.SLTypes = this.SLTypes.concat(res.data);
               }
            })
         .catch(err => console.log(err));
      },

      fetchSectors(){
         fetch(`/api/sectors`)
            .then(res => res.json())
            .then(res => {
               this.sectorals = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchOccupationals(){
         fetch(`/api/occupations`)
            .then(res => res.json())
            .then(res => {
               this.occupationals = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchGeographicals(branchCode){
         fetch(`/api/geoByBranch/${branchCode}`)
            .then(res => res.json())
            .then(res => {
               this.geographicals = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchClientTypes(){
         fetch(`/api/clientTypes`)
            .then(res => res.json())
            .then(res => {
               this.clientTypes = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchGenders(){
         fetch(`/api/genders`)
            .then(res => res.json())
            .then(res => {
               this.genders = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchCivilStats(){
         fetch(`/api/civilStats`)
            .then(res => res.json())
            .then(res => {
               this.civilStatuses = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchClientStats(){
         fetch(`/api/acctStatuses`)
            .then(res => res.json())
            .then(res => {
               this.clientStatuses = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchDosriTags(){
         fetch(`/api/dosritags`)
            .then(res => res.json())
            .then(res => {
               this.dosriTags = res.data;
            })
         .catch(err => console.log(err));
      },

      fetchClosedReasons(){
         fetch(`/api/closed-reasons`)
            .then(res => res.json())
            .then(res => {
               this.closedReasons = res.data;
            })
         .catch(err => console.log(err));
      },

      filterSLC(index,object){
         this.SLClassFilters.push(object);
         this.SLClasses.splice(index,1);
         this.fetchSLTypes(18,object.slClassId);
      },

      filterClientStatus(index,object){
         this.clientStatusFilters.push(object);
         this.clientStatuses.splice(index,1);
         if(object.acctStatDesc == "Closed"){
            this.fetchClosedReasons();
            this.clientStatClosed = true;
         }
      },

      filterSelect(arr1,arr2,index,object){
         arr2.push(object);
         arr1.splice(index,1);
      },

      filterDosri(index,object){
         this.dosriTagFilters.push(object);
         this.dosriTags.splice(index,1);
         if(object.desc1 == "Related Interests"){
            this.relatedInterests = true;
         }
      },

      reverseDosri(index,object){
         this.dosriTags.push(object);
         this.dosriTagFilters.splice(index,1);
         if(object.desc1 == "Related Interests"){
            this.relatedInterests = false;
         }
      },

      reverseClientStatus(index,object){
         this.clientStatuses.push(object);
         this.clientStatusFilters.splice(index,1);
         if(object.acctStatDesc == "Closed"){
            this.clientStatClosed = false;
         }
      },

      reverseFilterSLC(index,object){
         this.SLClasses.push(object);
         this.SLClassFilters.splice(index,1);
         this.SLTypes = this.SLTypes.filter(function(SLType){
            return SLType.slTypeSlcCode != object.slClassId;
         });
      },

      generateClientList(){
         var brCode = 18;
         var WHEREClause = "WHERE (slsum.TRANSFERDATE IS NULL OR slsum.TRANSFERDATE <='"+this.clientList.cutOffDate+"') AND client.ClientIDBrCode="+brCode+" AND ";

         var filterDOSRIRelatedTo ="";
         var ReportTypeofBalance = "";
         var HavingClause = "";
         var addressStatement = "";
         if(document.getElementById('withAddress').checked){
            switch(this.clientList.withAddress){
               case "Residantial":
                  addressStatement = " CAST(CONCAT(IF(client.ResAddStreet IS NOT NULL,client.ResAddStreet,''),' ',IF(client.ResAddBarangay IS NOT NULL,client.ResAddBarangay,''),' ',IF(client.ResAddCity IS NOT NULL,client.ResAddCity,''),' ',IF(client.ResAddProvince IS NOT NULL,client.ResAddProvince,'')) AS CHAR) ";
                  break;
               case "Provincial":
                  addressStatement = " CAST(CONCAT(IF(client.ProvAddStreet IS NOT NULL,client.ProvAddStreet,''),' ',IF(client.ProvAddBarangay IS NOT NULL,client.ProvAddBarangay,''),' ',IF(client.ProvAddCity IS NOT NULL,client.ProvAddCity,''),' ',IF(client.ProvAddProvince IS NOT NULL,client.ProvAddProvince,'')) AS CHAR) ";
                  break;
               case "Business":
                  addressStatement = " CAST(CONCAT(IF(client.BusAddStreet IS NOT NULL,client.BusAddStreet,''),' ',IF(client.BusAddBarangay IS NOT NULL,client.BusAddBarangay,''),' ',IF(client.BusAddCity IS NOT NULL,client.BusAddCity,''),' ',IF(client.BusAddProvince IS NOT NULL,client.BusAddProvince,'')) AS CHAR) ";
                  break;
               case "Business - Spouse":
                  addressStatement = " CAST(CONCAT(IF(client.SpBusAddStreet IS NOT NULL,client.SpBusAddStreet,''),' ',IF(client.SpBusAddBarangay IS NOT NULL,client.SpBusAddBarangay,''),' ',IF(client.SpBusAddCity IS NOT NULL,client.SpBusAddCity,''),' ',IF(client.SpBusAddProvince IS NOT NULL,client.SpBusAddProvince,'')) AS CHAR) ";
                  break;
               default:
            }
         }else{
            addressStatement = " CAST(CONCAT(IF(client.ResAddStreet IS NOT NULL,client.ResAddStreet,''),' ',IF(client.ResAddBarangay IS NOT NULL,client.ResAddBarangay,''),' ',IF(client.ResAddCity IS NOT NULL,client.ResAddCity,''),' ',IF(client.ResAddProvince IS NOT NULL,client.ResAddProvince,'')) AS CHAR) ";  
         }
         //if(summaryOfClosedAccounts === false)
         if(this.SLClassFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0;i < this.SLClassFilters.length;i++){
               WHEREClause = WHEREClause + "slsum.SLC_CODE="+this.SLClassFilters[i].slClassId+" OR ";
               //ReportTypeofBalance = ReportTypeofBalance & listSLClassFilter.Text & " & "
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length-4) + ") AND ";
         }
         //if(summaryOfClosedAccounts === false)
         if(this.SLTypeFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0; i < this.SLTypeFilters.length;i++){
               WHEREClause = WHEREClause + "slsum.SLT_CODE=" + this.SLTypeFilters[i].slTypeSltCode + " OR ";
               //ReportTypeofBalance = ReportTypeofBalance & listSLTypeFilter.Text & " & "
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length-4) + ") AND ";
         }

         // If Right(ReportTypeofBalance, 3) = " & " Then ReportTypeofBalance = Left(ReportTypeofBalance, Len(ReportTypeofBalance) - 3) & " Balance"

         if(this.clientTypeFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0; i < this.clientTypes.length; i++){
               WHEREClause = WHEREClause + "client.ClientType="+this.clientTypeFilters[i].clientTypeId+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4) + ") AND ";    
         }

         if(this.genderFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0;i < this.genderFilters.length;i++){
               WHEREClause = WHEREClause + "client.Gender ="+this.genderFilters[i].genderId+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4) + ") AND ";
         }

         if(this.civilStatusFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0; i < this.civilStatusFilters.length;i++){
               WHEREClause = WHEREClause + "client.CivilStatus='"+this.civilStatusFilters[i].civilStatId+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4) + ") AND ";
         }
        
         if(this.clientStatusFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0; i < this.clientStatusFilters.length; i++){
               WHEREClause = WHEREClause + "client.AccountStatus="+this.clientStatusFilters[i].acctStatId+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4) + ") AND ";
         }
        
         if(this.closedReasonFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0; i < this.closedReasonFilters.length; i++){
               WHEREClause = WHEREClause + "client.ClosedReason="+this.closedReasonFilters[i].closedReasonId+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4) + ") AND ";
         }

         if(this.occupationalFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0; i < this.occupationalFilters.length;i++){
               WHEREClause = WHEREClause + "client.Occupational="+this.occupationalFilters[i].occuId+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4) + ") AND ";
         }

         if(this.sectoralFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0;i < this.sectoralFilters.length; i++){
               WHEREClause = WHEREClause + "client.Sectoral="+this.sectoralFilters[i].sectorId+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4) + ") AND ";
         }
        
         if(this.geographicalFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0;i < this.geographicalFilters.length;i++){
               WHEREClause = WHEREClause + "client.Geographical="+this.geographicalFilters[i].geoId+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4) + ") AND ";
         }

         if(this.dosriTagFilters.length > 0){
            WHEREClause = WHEREClause + "(";
            for(let i = 0;i < this.dosriTagFilters.length;i++){
               WHEREClause = WHEREClause + "client.DOSRITag="+this.dosriTagFilters[i].id+" OR ";
            }
            WHEREClause = WHEREClause.substr(0,WHEREClause.length - 4)+") AND ";
         }

         if(this.relatedInterests != ""){
            filterDOSRIRelatedTo = " AND (client.DOSRIRelatedTo LIKE '%" + this.relatedInterests +"%')";
         }

         if(this.clientList.dateOpenedFrom && this.clientList.dateOpenedTo){
            WHEREClause = WHEREClause + " client.DateOpened>='" +this.clientList.dateOpenedFrom+ "' AND client.DateOpened <='" +this.clientList.dateOpenedTo+"' AND ";
         }else{
            alert("Both FROM and TO Date Opened Filter must be filled!");
         }
         console.log('WHERE:'+WHEREClause);
      },

      checkOptionType(){
         if(document.getElementById('sigSpace').checked){
            this.selectDisabled=true;
         }else{
            this.selectDisabled=false;
         }
      }
   }
}
</script>

<style>
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
</style>