<template>
  <div class="inv-brand-master">
    <br>
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
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
    <br>
    <div class="form-row justify-content-center">
      <div class="col">
        <div class="bg-light">
          <fieldset class="border p-2">
            <div class="row no-gutters">
              <div class="col">
                <div class="form-row">
                  <label
                    class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                  >Long Description:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-2 text-sm-right col-form-label col-form-label-sm mt-1"
                  >Short Description:</label>
                  <div class="col-4 my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</template>