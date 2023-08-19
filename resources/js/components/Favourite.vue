
<script >

export default {

  data(){
    return {
        'save':true
    }
  },
}
</script>
<template>

          <button v-if="save"  class="btn btn-secondary" style="width: 60%; margin-top: 1rem;">Save Job</button>
          <button v-else type="submit" class="btn btn-alert" style="width: 60%;">Unsave Job</button>
</template>
