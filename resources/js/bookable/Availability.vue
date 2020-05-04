<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h6>

        <div class="form-row">
           <div class="form-group col-md-6">
               <label for="from">From</label>
               <input 
                 type="text" 
                 name="from" 
                 class="form-control form-control-sm" 
                 placeholder="Start date"
                 v-model="from"
                 >
           </div>

            <div class="form-group col-md-6">
               <label for="to">To</label>
               <input type="text" name="to" class="form-control form-control-sm" placeholder="End date" v-model="to">
           </div>
        </div>

        <button class="btn btn-secondary btn-block">Check!</button>
    </div>
</template>

<script>
export default {
    data() {  //add method data
        return {   //return javascript object
            from: null,       //property //intitially it is null
            to: null          //property //intitially it is null
        }
    }
}
</script>

<style scoped>
    label {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: gray;
        font-weight: bolder;
    }
    
</style>