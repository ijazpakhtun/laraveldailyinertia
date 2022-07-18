<template>


            <Link  class="link" :class="{'active' :active}"><slot /></Link>




</template>

<script>
 
    export default {
        components: {
        
        },
        props:{
            active:Boolean,
     }
    }

</script>

<style scoped>


</style>

