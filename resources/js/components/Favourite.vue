
<script >
import axios from 'axios';


export default {
    props: ["jobid", 'favourited'],

  data(){
    return {
   show:true
    }
  },
  methods: {
    save(){
        axios.post('/save/'+this.jobid ).then(response=>this.show = true).catch(error=>alert('error'))
    },
    unsave(){
        axios.post('/unsave/' + this.jobid ).then(response=>this.show = false).catch(error=>alert('error'))

    }
  },
  mounted() {
   this.show= this.jobFavourited ? true:false;


  },
  computed: {
    jobFavourited(){
        return this.favourited
    }
  },
}
</script>
<template>

          <button v-if="show" @click.prevent="unsave()" class="btn btn-danger" style="width: 60%; margin-top: 1rem;">Unsave Job</button>
          <button v-else  @click.prevent="save()" class="btn btn-secondary" style="width: 60%; margin-top: 1rem;">Save Job</button>
</template>
