<template>
    <div>
        Rows is {{ rows }}
        <div v-if="loading">
           Data is loading... 
        </div>
        <div v-else>
          <bookable-list-item           
            :item-title="bookable.title" 
            :item-content="bookable.content" 
            :price="1000"
            v-for="(bookable, index) in bookables"
            :key="index" >
         </bookable-list-item> 
        </div>                 
    </div>
</template>  

<script>
import BookableListItem from "./BookableListItem";
export default {  
    components:{  //register component
        BookableListItem
    },
    data(){
        return {
            bookables: null,
            loading: false,
            columns: 3            
        };
    },
    computed: {
        rows() {
          return this.bookables == null
           ? 0 
           : Math.ceil(this.bookables.length / this.columns);  
        }
    },
    created() {
        this.loading = true;
        setTimeout(() => {
            this.bookables = [{
                id: 1,
                title: "Cheap villa!!!",
                content: "A very cheap villa"
            },
            {
                title: "Cheap villa 2",
                content: "A very cheap villa 2"
            },
            {
                title: "Cheap villa 2",
                content: "A very cheap villa 2"
            },
            {
                title: "Cheap villa 2",
                content: "A very cheap villa 2"
            },
            {
                title: "Cheap villa 2",
                content: "A very cheap villa 2"
            },
            {
                title: "Cheap villa 2",
                content: "A very cheap villa 2"
            },
            {
                title: "Cheap villa 2",
                content: "A very cheap villa 2"
            }            
            ];   
            this.loading = false;         
        }, 2000);
    } 
};
</script>