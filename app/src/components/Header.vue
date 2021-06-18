<template>
  <div class="container-website">
    <BurgerMenu />
    <div class="header">
      <img src="@/assets/images/logo.svg" alt="logo" width="80" />
      <div class="nav">
        <a href="#">Temps réel</a>
        <a href="#">Prévision</a>
        <a href="#">Climatologie</a>
        <a href="#">Pédagogie</a>
        <a href="#">Communauté</a>
        <a href="#">Association</a>
        <a href="#">Forums</a>
        <a href="#" class="isActive">HistorIC</a>
      </div>
    </div>
    <router-view class="container" />
  </div>
</template>

<script>
import BurgerMenu from "../components/BurgerMenu";

export default {
  name: "Header",
  components: { BurgerMenu },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.container-website {
  width: 100%;
}

.border_header {
  padding: 1em;
  outline: none;
  border: none;
  box-shadow: -4px -4px 12px rgb(255, 255, 255),
    4px 4px 12px rgba(121, 130, 160, 0.747);
}

.menu {
  display: flex;
  justify-content: space-between;
}

.container {
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.header {
  display: none;
  justify-content: space-between;
  align-items: center;
  padding: 18px 20px;
  width: 100%;
}

a {
  font-size: 0.9em;
  text-transform: uppercase;
  margin: 0 8px;
  font-weight: 800;
  color: var(--primary-color);
  text-shadow: 2px 4px 12px rgba(0, 0, 0, 0.6);
  text-decoration: none;
}

.header .nav a:last-child {
  margin: 0;
}

.header .nav {
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.isActive {
  color: #ffffff;
}

@media screen and (min-width: 1000px) {
  .header {
    display: flex;
  }
}
</style>
