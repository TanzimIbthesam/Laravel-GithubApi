<template>
  <div>
      <!-- <div v-for="project in projects" :key="project">
          {{project.full_name}}
      </div> -->
      <div class="flex flex-col  items-center justify-center mt-32">
          <div class="text-xl font-serif bg-blue-400 max-w-8xl xl:w-2/5 w-full p-6 text-white border boder-gray-500">
                <div class="text-center">React Repository</div>
          
          </div>
           <div class="text-xl font-serif 
            max-w-8xl xl:w-2/5 w-full p-6  border boder-gray-500 xl:ml-0 sm:text-center font-italic rounded-md space-y-4">
                  <div class="flex justify-center">
                      <img style="-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" class="h-48" src="https://avatars.githubusercontent.com/u/69631?v=4">
                  </div>
                <div class="xl:flex xl:flex-row sm:flex sm:flex-col space-x-6 justify-center xl:ml-0 ml-6">
                    <div>Project Name-{{projects.full_name}}</div>
                    <div>Project Stars-{{projects.forks_count}}</div>
                </div>
                <div class="xl:flex xl:flex-row sm:flex sm:flex-col space-x-6 justify-center xl:ml-0 ml-6">
                    <div>License Name-{{projects.license.name}}</div>
                    <div> Stars count-{{projects.stargazers_count}}</div>
                </div>
                
                    <div class="xl:flex xl:flex-row sm:flex sm:flex-col space-x-6 justify-center xl:ml-0 ml-6">
                        <div>
                            Organization-{{projects.organization.login}}
                        </div>
                        <div>
                               Language-{{projects.language}} 
                        </div>
                        
   
                    </div>
                    <div class="xl:flex xl:flex-row sm:flex sm:flex-col space-x-6 justify-center xl:ml-0 ml-6">
                        <div>
                            First repo commited-{{projects.created_at}}
                        </div>
                        <div>
                               Homepage-{{projects.homepage}} 
                        </div>
                        
   
                    </div>
                
          
          </div>
      </div>
     <!-- Project Name-{{projects.full_name}}
     Forks-{{projects.forks_count}}
     License Name-{{projects.license.name}}
    Stars count-{{projects.stargazers_count}}
     Organization-{{projects.organization.login}}
     Language-{{projects.language}} -->
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