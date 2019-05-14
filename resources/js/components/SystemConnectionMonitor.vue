<template>
  <div class="connection-monitor">
    <main class="px-2 h-100">
      <router-outlet></router-outlet>
      <app-system>
        <router-outlet></router-outlet>
        <app-connectionmonitor>
          <div class="pt-3">
            <div class="form-row align-items-end">
              <div class="col">
                <span>MAINTENANCE MODE</span>
              </div>
              <div class="col-sm-6">
                <p>DELETE - closes specific connection only</p>
                <p>CTRL+DELTE - closes all connections from a specific PC</p>
              </div>
              <div class="col">
                <div class="form-check form-check-sm">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Update Every 5 Seconds</label>
                </div>
              </div>
            </div>
            <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
              <ul role="tablist" class="nav nav-tabs nav-fill">
                <!--bindings={
  "ng-reflect-ng-for-of": "[object Object]"
                }-->
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    href
                    role="tab"
                    id="ngb-tab-0"
                    aria-controls="ngb-tab-0-panel"
                    aria-expanded="true"
                    aria-disabled="false"
                  >
                    <!--bindings={
  "ng-reflect-ng-template-outlet": "[object Object]"
                    }-->
                    <span>Summary</span>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <!--bindings={
  "ng-reflect-ng-for-of": "[object Object]"
                }-->
                <!--bindings={
  "ng-reflect-ng-if": "true"
                }-->
                <div
                  role="tabpanel"
                  class="tab-pane active"
                  aria-labelledby="ngb-tab-0"
                  id="ngb-tab-0-panel"
                  aria-expanded="true"
                >
                  <!--bindings={
  "ng-reflect-ng-template-outlet": "[object Object]"
                  }-->
                  <table class="table table-sm table-bordered custom-table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ConnID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Complete Name</th>
                        <th scope="col">Function</th>
                        <th scope="col">Host Machine</th>
                        <th scope="col">Last Action Date</th>
                        <th scope="col">Last Action Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3</td>
                        <td>admin</td>
                        <td>James Glenn Abadilla</td>
                        <td>4</td>
                        <td>34</td>
                        <td>54</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>admin</td>
                        <td>James Glenn Abadilla</td>
                        <td>4</td>
                        <td>34</td>
                        <td>54</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!---->
              </div>
            </ngb-tabset>
            <div class="form-row justify-content-between">
              <div class="col-sm-auto my-2">
                <span>TOtal Users Connected: 1 USER</span>
              </div>
              <div class="col-sm-auto my-2">
                <button class="btn btn-outline-dark-blue btn-block p-3">
                  <i class="fa fa-ban mr-1"></i>
                  <span>Exit</span>
                </button>
              </div>
            </div>
          </div>
        </app-connectionmonitor>
      </app-system>
    </main>
  </div>
</template>