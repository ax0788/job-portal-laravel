
<script >

export default {
    props: ["jobid"],

  data(){
    return {
        'show':true
    }
  },
  methods: {
    formSubmit(e){
        e.preventDefault();
        axios.post('/applications/' + this.jobid, {

        }).then((response)=> {
            this.show = false
        }).catch((error)=>{
                    alert('error')
                });
    }
  }
}
</script>
<template>

        <form @submit="formSubmit">
          <button v-if="show" type="submit" class="btn btn-success" style="width: 60%;">Apply</button>
          <div v-else class="alert alert-success">Application sent sucessfully</div>
          </form>
</template>
