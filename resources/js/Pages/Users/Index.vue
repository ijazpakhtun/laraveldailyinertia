<template>
    <Header title="User title" description="User page description"></Header>
       <div class="flex justify-between mb-6">

       <div class="flex items-center">
           <h1 class="text-3xl">User</h1>

           <Link href="/users/create" class="text-blue-500 text-sm ml-2">New User</Link>
          
       </div>
          <input type="text" v-model="search" placeholder="Search" class="border px-2 rounded-lg">
            

         </div>
       <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-600">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Name
              </th>
              
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Edit
              </th>
            </tr>
          </thead >
          <tbody>
            <tr class="bg-white border-b" v-for="user in users.data" :key="user.id">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{user.name}}
              </td>
              
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <Link :href="`/user/${user.id}/edit`">Edit</Link>
              </td>
            </tr >
       
      
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
   
    <!-- //paginator -->
    <Pagination :links="users.links" class="mt-6"></Pagination>
   
</template>

<script>
import { Inertia } from '@inertiajs/inertia';
import Pagination from '../../Shared/Pagination.vue';
import debounce from 'lodash/throttle';

   export default {

    components:{
        Pagination
    },

    props:{
       
       users:Object,
       filters:Object,
    },
    data(){
        return{
        search:  this.filters.search || '',
   }
    },

    // watch: {
    //     search(value ) {
    //         Inertia.get(`/users`, { search: value}, { preserveState: true, replace: true });
    // },

    watch:{

      search: debounce(function(value) {
        Inertia.get(`/users`, { search: value}, { preserveState: true, replace: true });

    }, 1000)


   
   
       
    },
  
}

</script>