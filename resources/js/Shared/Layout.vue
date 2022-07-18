<template>
<section class=" p-6 bg-blue-500">
    <header class="flex justify-between ">

        <h1 class="font-bold text-large">My App</h1>
         <p>welcome ! {{username}}</p>
       <Nav></Nav>
    </header>
  </section>
  <section class="p-6">

   
    <div class="container mx-auto">


       <slot></slot>

       </div>
  </section>
   
</template>
<script>
    import Nav from './Nav.vue';
   export default {
      name: 'Layout',
      components: {
         Nav
      
        },

        computed:{

            username(){
                return this.$page.props.auth.user.username;
            }
        }
      
      }

</script> 

<style scoped>

    .navbg{
        background-color: rgb(183, 50, 9);
      }
     

</style>