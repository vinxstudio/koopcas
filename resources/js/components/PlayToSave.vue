<template>
  <div class="playtosave">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto" style="float:left;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Play To Save</a>
          <div class="dropdown-menu" style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;">
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Play To Save Registration
              <div class="dropdown-menu" aria-labelledby="dropdownmenu" style="left: 338px; top: 5px;">
                <router-link to="/play-to-save/p2s-three-digit-registration" class="dropdown-item">Play To Save 3-Digit Entry</router-link>
                <router-link to="/play-to-save/p2s-six-digit-registration" class="dropdown-item">Play To Save 6-Digit Entry</router-link>
              </div>
            </div>
            <router-link to="/play-to-save/p2s-sixdigit-num" class="dropdown-item">Play To Save Six Digit Number of the Day</router-link>
            <router-link to="/play-to-save/p2s-threedigit-num" class="dropdown-item">Play To Save Three Digit Number of the Day</router-link>
            <router-link to="/play-to-save/p2s-sixdigit-winner" class="dropdown-item">Play To Save Six Digit Winners</router-link>
            <router-link to="/play-to-save/p2s-threedigit-winner" class="dropdown-item">Play To Save Three Digit Winners</router-link>
            <router-link to="/play-to-save/p2s-stabs" class="dropdown-item">Play To Save Stabs/Tickets</router-link>
            <router-link to="/play-to-save/p2s-stabs-all" class="dropdown-item">Play To Save All Stabs/Tickets</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Inquiry</a>
          <div class="dropdown-menu" style="top: 40px; left: 117px; min-width: 340px; font-size: 13px;">
            <router-link to="/play-to-save/p2s-digit-numbers" class="dropdown-item">Play To Save Digit Numbers of the Day</router-link>
            <router-link to="/play-to-save/p2s-sixdigit-winner" class="dropdown-item">Play To Save Six Digit Winners</router-link>
            <router-link to="/play-to-save/p2s-threedigit-winner" class="dropdown-item">Play To Save Three Digit Winners</router-link>
          </div>
        </li>
        <li class="nav-item">
          <router-link to class="nav-link">Policy</router-link>
        </li>
        <li class="nav-item">
          <router-link to class="nav-link">Help</router-link>
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
.playtosave {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
