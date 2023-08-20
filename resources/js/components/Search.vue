<script>
import axios from "axios";

export default {
    props: [],

    data() {
        return {
            keyword: '',
            results: [],
        };
    },
    methods: {
        searchJobs() {
            this.results = [];
            if(this.keyword.length>1){
        axios.get('/job/search',{params:{keyword:this.keyword}}).then(response=>{
            this.results = response.data;
        });
    }
        },
    },
    mounted() {},
    computed: {},
};
</script>
<template>
    <input
        type="text"
        v-model="keyword"
        placeholder="Search for Jobs..." v-on:keyup="searchJobs"
        class="form-control border-0"  />
        <ul class="list-group" v-if="results.length">
            <li class="list-group-item search-item" v-for="result in results">
                <a style="color:#000;"  :href=" '/job/' + result.id +'/'+result.slug+'/'  ">{{result.title}}
                    <br>
                </a>
                </li>
        </ul>
</template>

<style>
 ul .search-item:hover{
    background-color: #757474f5 !important;
}
 ul .search-item a:hover{
    color: #fafafa !important;
    font-family:700 !important;}

</style>
