<template>
  <div class="code-storage">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
          <div class="dropdown-menu" style="left: 5px; min-width: 200px; font-size: 13px;">
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
              <span class="float-right">F11</span>
            </a>
            <a href="#" class="dropdown-item">
              Exit
              <span class="float-right">Ctrl+X</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div class="dropdown-menu" style="left: 5px; min-width: 200px; font-size: 13px;">
            <a href="#" class="dropdown-item">Activity Logs</a>
            <a href="#" class="dropdown-item">
              Load Tree View
              <span class="float-right">F5</span>
            </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <router-link to="/back-office/inquiry-search" class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>

          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-4" type="button">
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-save mr-1"></i>
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
    <div class="form-row justify-content-center pt-3">
      <fieldset class="border">
        <div class="col-md-12">
          <div class="form-row">
            <label
              class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            >Description:</label>
            <div class="col my-1">
              <input class="form-control form-control-sm" name type="text">
            </div>
          </div>
          <div class="form-row">
            <label
              class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            >Script:</label>
            <div class="col my-1">
              <textarea class="form-control form-control-sm" cols="30" id name rows="10"></textarea>
            </div>
          </div>
          <div class="form-row">
            <label
              class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            >TESTING ONLY:</label>
            <div class="col my-1">
              <input class="form-control form-control-sm" name type="text">
            </div>
            <div class="col-auto my-1">
              <button class="btn btn-sm btn-outline-primary btn-block h-100">
                <i class="fa fa-play mr-1"></i>
                <span>EXECUTE</span>
              </button>
            </div>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
</template>
