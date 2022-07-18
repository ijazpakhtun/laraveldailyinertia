<template>
    <teleport to="Head">
  
    <title >{{title}} - My App</title>
    <meta type="description" head-key="description"  :content="`${description}`">

    </teleport>
   
    
</template>

<script>
import Head from '@inertiajs/inertia-vue3'
export default {
    components: {
        Head,
    },
    props:{

        title:String,
        description:String,
    }
        
    }

</script>