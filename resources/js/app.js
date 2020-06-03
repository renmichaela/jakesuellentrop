const Vue = require("vue");

Vue.use(require("vue-cookies"));

Window.$_ = require("lodash");
Window.$axios = require("axios");

Window.$axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

require("./components");

const app = new Vue({
    el: "#app"
});
