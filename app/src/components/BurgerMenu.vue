<template>
  <header @click="openSidebar" id="sidebar" :class="{ menuIsOpen: menuIsOpen }">
    <div class="hamburger">
      <div class="top"></div>
      <div class="mid"></div>
      <div class="bottom"></div>
    </div>
    <nav>
      <ul>
        <img src="@/assets/images/logo.svg" alt="logo">
        <li><a href="#">Temps réel</a></li>
        <li><a href="#">Prévision</a></li>
        <li><a href="#">Climatologie</a></li>
        <li><a href="#">Pédagogie</a></li>
        <li><a href="#">Communauté</a></li>
        <li><a href="#">Association</a></li>
        <li><a href="#">Forum</a></li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'BurgerMenu',
  data() {
    return {
      menuIsOpen: false
    }
  },
  methods: {
    openSidebar: function() {
      this.menuIsOpen = this.menuIsOpen ? false : true
      console.log(this.menuIsOpen)
    }
  }
}
</script>

<style scoped>
header#sidebar {
  position: absolute;
  z-index: 999;
  background-color: var(--background-color);
  box-shadow: var(--shadow-neumorphism-outside);
  min-width: 250px;
  transform: translateX(-100%);
  transition: 0.2s;
  height: 100vh;
}

header#sidebar.menuIsOpen {
  position: fixed;
  transform: translateX(0);
}

header#sidebar .hamburger {
  width: 30px;
  height: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  position: absolute;
  right: -45px;
  top: 15px;
}

header#sidebar .hamburger .top,
header#sidebar .hamburger .mid,
header#sidebar .hamburger .bottom {
  width: 25px;
  height: 3px;
  background-color: var(--primary-color);
}

header#sidebar.menuIsOpen .hamburger .top {
  transform: rotate(45deg);
  position: relative;
  top: 9px;
  width: 30px;
}

header#sidebar.menuIsOpen .hamburger .mid {
  opacity: 0;
}

header#sidebar.menuIsOpen .hamburger .bottom {
  transform: rotate(-45deg);
  position: relative;
  top: -12px;
  width: 30px;
}

nav ul {
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
}

nav ul img {
  margin: 20px 0;
  width: 80px;
  align-self: center;
}

nav ul li {
  margin: 8px 0;
  padding-left: 50px;
}

nav ul li a {
  text-decoration: none;
  font-size: 1.1em;
  font-weight: 500;
  color: var(--primary-color);
}

@media screen and (min-width: 1000px) {
  #sidebar {
    display: none !important;
  }
}
</style>
