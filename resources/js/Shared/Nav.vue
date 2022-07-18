<template>
       
   <nav class="ml-6">
        <ul class="flex list-disk space-x-4 list-inside">
            <li>
                <NavLink href="/" :active ="$page.component=='Home'">Home</NavLink>
            </li>

            <li>
                <NavLink href="/users" :active ="$page.component=='User'">User</NavLink>
            </li>
            
            <li>
                <NavLink href="/settings" :active ="$page.component=='Settings'">Settings</NavLink>
            </li>
            <li>
                 <NavLink href="/logout" >Logout</NavLink>
            </li>
           
  
   
        </ul>
  
    </nav>

</template>

<script>


 import NavLink from './NavLink'
    export default {
        components: {
         NavLink,
        }
    }

</script>

<style scoped>
 

    .link{ 
         color: rgb(119, 9, 183);
            text-decoration: none;
           
        }

    .link:hover{ 
        
        text-decoration: underline;
        color: rgb(255, 255, 255);
            
      
      }

      .active{
    color: rgb(255, 255, 255);
    text-decoration: underline;
    font-weight: bold;
}

</style>