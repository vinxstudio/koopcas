<template>
  <div>
    <nav class="navbar">
      <router-link to="/home" class="navbar-brand">
        <img :src="'/images/logo-long.png'" alt="Cebu People's Multi-purpose Cooperative" style="width: 200px;">
      </router-link>
      <ul class="nav" style="float: right !important;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">Welcome, {{username}} </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="" @click="logout()">F12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
          </div>
        </li>
      </ul>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark-blue py-0" style="background-color: #418cb3;">
        <button class="navbar-toggler" type="button" aria-controls="navbar-menu"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbar-menu" class="collapse navbar-collapse">
          <div class="w-100">
            <ul class="navbar-nav justify-content-between">
              <li class="nav-item">
                <router-link to="/client" class="nav-link" active-class="active">
                      <img :src="'/images/menu/menu-item-1.png'" alt="Clients">
                      <p>F1 - Clients</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/front-office" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-3.png'" alt="Front Office">
                    <p>F2 - Front Office</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/back-office" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-2.png'" alt="Back Office">
                    <p>F3 - Back Office</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/loans" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-5.png'" alt="Loans A/R">
                    <p>F4 - Loans A/R</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/deposits" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-4.png'" alt="Deposits">
                    <p>F5 - Deposits</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/inventory" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-6.png'" alt="Inventory">
                    <p>F6 - Inventory</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/other-mod" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-7.png'" alt="Other Mod.">
                    <p>F7 - Other Mod.</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/setup" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-8.png'" alt="Setup">
                    <p>F8 - Setup</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/system" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-9.png'" alt="System">
                    <p>F9 - System</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/reports" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-10.png'" alt="Reports">
                    <p>F11 - Reports</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/play-to-save" class="nav-link" active-class="active">
                    <img :src="'/images/menu/menu-item-11.png'" alt="Play">
                    <p>F12 - P2S</p>
                </router-link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>

</template>

<script>
export default {

  data() {
    return {
       username : localStorage.getItem("username"),
    }
  },

  methods: {
    logout() {
      this.$router.push('/');
      location.reload();
    }
  }

}
</script>

<style>

</style>