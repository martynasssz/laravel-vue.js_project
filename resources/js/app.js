require("./bootstrap");

import VueRouter from "vue-router";
import router from "./routes";
import Index from "./Index";
import moment from "moment";
import StarRating from "./shared/components/StarRating";
import FatalError from "./shared/components/FatalError";
import ValidationErrors from "./shared/components/ValidationErrors";

window.Vue = require("vue");
// Vue.component(
//    "example-component",
//    require("./components/ExampleComponent.vue").default
// );
// Vue.component("example-2", require("./components/Example2.vue").default);

Vue.use(VueRouter);

Vue.filter("fromNow", value => moment(value).fromNow());

Vue.component("star-rating", StarRating); //register global component
Vue.component("fatal-error", FatalError); 
Vue.component("v-errors", ValidationErrors); 


const app = new Vue({
    el: "#app",
    router,
    components: {
        "index": Index
    }

});