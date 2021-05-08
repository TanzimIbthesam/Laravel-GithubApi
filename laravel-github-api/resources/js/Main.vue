<template>
  <div>
      <!-- <div v-for="project in projects" :key="project">
          {{project.full_name}}
      </div> -->
     Project Name-{{projects.full_name}}
     Forks-{{projects.forks_count}}
     License Name-{{projects.license.name}}
    Stars count-{{projects.stargazers_count}}
     Organization-{{projects.organization.login}}
     Language-{{projects.language}}
  </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
              projects:{},
            

        }
    },
   
    created(){
        

     axios.get('https://api.github.com/repos/facebook/react')
      
    
       .then(response=>this.projects=response.data)
       //.then(response=>console.log(response.data))
    // .then((console.log(this.projects)))
    .catch(err=>console.log(err))

   
     },
      computed:{
         filterSingleRepo(){
             this.projects.filter((p)=>{
                 return p.name='flutter';
             })

         }
     },
     

}
</script>

<style>

</style>