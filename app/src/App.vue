<template>
  <Header />
</template>

<script>
import Header from "./components/Header";

export default {
  name: "App",
  components: {
    Header,
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap");
#app {
  font-family: "Poppins", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  height: 100%;
  width: 100vw;
}

html,
body {
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
}

p {
  margin: 0;
}

* {
  box-sizing: border-box;
}

h2 {
  font-size: 1.5em;
  text-transform: uppercase;
  color: var(--primary-color);
  text-shadow: 2px 4px 12px rgba(0, 0, 0, 0.6);
}

:root {
  --background-color: #394356;
  --primary-color: #91ade3;
  --secondary-color: #30cfd0;
  --shadow-neumorphism-outside: 8px 10px 16px #222834, -8px -10px 16px #505e78;
  --shadow-neumorphism-inside: inset 8px 10px 16px #222834,
    inset -8px -10px 16px #505e78;
  background-color: var(--background-color);
  color: #ffffff;
  min-height: 100vh;
  max-width: 100vw;
}

.btn {
  position: relative;
  padding: 10px 20px;
  box-shadow: var(--shadow-neumorphism-outside);
  outline: none;
  border: none;
  font-size: 16px;
  border-radius: 50px;
  min-width: 150px;
  cursor: pointer;
  margin-bottom: 20px;
}

.btn:hover,
.btn-icon:hover {
  box-shadow: var(--shadow-neumorphism-inside);
}

.btn-icon {
  position: relative;
  width: 45px;
  height: 45px;
  padding: 10px;
  border-radius: 50px;
  box-shadow: var(--shadow-neumorphism-outside);
  outline: none;
  border: none;
  font-size: 16px;
  cursor: pointer;
  margin-bottom: 20px;
}

.input-text {
  position: relative;
  width: 220px;
  height: 45px;
  padding: 5px 15px;
  border-radius: 50px;
  font-size: 20px;
  font-weight: 500;
  outline: none;
  border: none;
  background: var(--background-color);
  box-shadow: var(--shadow-neumorphism-inside);
  margin-bottom: 20px;
}

::placeholder {
  text-align: center;
  font-weight: 500;
  text-transform: capitalize;
  color: #8a92a5;
}

.border {
  border-radius: 50px;
  outline: none;
  border: none;
  box-shadow: var(--shadow-neumorphism-outside);
  padding: 1em;
}

.type-filter p {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 0.7em;
  margin-top: 0.5em;
}
</style>
