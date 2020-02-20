require("./bootstrap");
window.Vue = require("vue");
import vuetify from "./vuetify";
import router from "./router";
import ExampleComponent from "./components/ExampleComponent";

const app = new Vue({
  el: "#app",
  router,
  vuetify,
  components: {
    "example-component": ExampleComponent
  }
});
