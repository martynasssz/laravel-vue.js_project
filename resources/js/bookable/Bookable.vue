<template>
    <div>
        xxx
    </div>
</template>

<script>
export default {
    data(){ //get data from server
       return {  //return an object
            bookable: null
       }; 
    },
    created() { //create lifcycle hook
        axios
          .get(`/api/bookables/${this.$route.params.id}`)
          .then(response => (this.bookable = response.data));
    }
};
</script>