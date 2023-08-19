require("./bootstrap");

import { createApp } from "vue";
import Apply from "./components/Apply.vue";
import Favourite from "./components/Favourite.vue";
const app = createApp({});
app.component("Apply", Apply);
app.component("Favourite", Favourite);
app.mount("#app");
