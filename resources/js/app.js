require("./bootstrap");

import { createApp } from "vue";
import Apply from "./components/Apply.vue";
import Favourite from "./components/Favourite.vue";
import Search from "./components/Search.vue";
const app = createApp({});
app.component("Apply", Apply);
app.component("Favourite", Favourite);
app.component("Search", Search);
app.mount("#app");
