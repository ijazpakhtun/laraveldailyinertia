<template>
    <Header title="Create User" description="Create a user for this website" ></Header>
    <h1>User Create</h1>


  <form @submit.prevent="create" method="POST" action="{{ route('user.store') }}" class="max-w-md mx-auto mt-8">
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
        </label>
        <input v-model="form.name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 id="name"
                  type="text"
                   name="name" 
                  
                   >
        <div v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-xs mt-1"></div>


             <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Email 
                
             </label>
        <input v-model="form.email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 id="email"
                  type="text"
                   name="email" 
                  
                  >

                <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></div>

             <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Password
                
             </label>
        <input v-model="form.password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 id="password"
                  type="text"
                   name="password" 
                  
                >

              <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></div>

          <div class="mb-6">

            <button :disabled="form.processing" type="submit" class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Create
            </button>

            <button type="reset" @click="resetForm" class="mt-5 bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Reset</button>
          </div>






        

        
    
    </div>
  </form>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';
import {useForm} from '@inertiajs/inertia-vue3';
import { resetTracking } from '@vue/reactivity';
   export default {
    
       data(){
           return{
           form: useForm({
               name: '',
               email: '',
               password: '',
               
               }),


           }
           
        },

        methods:{

            create(){
               
                
                this.form.post('/users');
            },

            resetForm(){
                
                
                this.form.reset();
                this.form.clearErrors()
            }
        }
   }

</script>