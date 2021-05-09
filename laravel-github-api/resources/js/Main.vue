<template>
<div class="flex flex-col justify-center items-center" >
    
    
    <div class="flex flex-col">
        <div class="text-2xl font-sans  bg-blue-600 px-8 py-1 text-white font-medium">Repositories of Bitfumes</div>
        <div class="text-xl font-serif"> Search term -{{search}}</div>
        
         <input type="text" 
    v-model="search" 
    class="px-6 py-1 border border-gray-300"
    
    ><br>
    </div>
   
  
        
          
              <div v-if="search">
                    <Spinner v-if="isLoading "/>
                    <div  v-for="todo in searchTodos" :key="todo.id">
                        <div class="flex flex-col justify-center items-center border border-gray-600">
                        <div class="text-2xl font-serif font-medium">Name- {{todo.name}}</div>
                              <div>StarsCount-{{todo.stargazers_count}}</div>
                              <div class="text-2xl font-serif font-medium">
                                   Created At- {{todo.created_at}}
                   
                              </div>
                              <div class="text-2xl font-serif font-medium">Url-{{todo.owner.login}}</div>
                              <div class="text-2xl font-serif font-medium">Forks -{{todo.forks_count}}</div>
                               <div class="text-2xl font-serif font-medium">Github-{{todo.owner.url}}</div>
                              <div class="text-2xl font-serif font-medium">Forks-{{todo.forks_count}}</div>
                              <div class="text-2xl font-serif font-medium">Language-{{todo.language}}</div>
                        </div>
               
                  </div>

             
              

              

       
        
               
       

     </div>
     </div>
     
      

     
      
    
     
  
  
</template>

<script>
import Spinner from './Spinner'

export default {
    components:{
        Spinner
        

    },
    data(){
        return{
            todos:[
                //  {title:'Hello World',greeting:'Hi'},
                //    {title:'Two',greeting:'Hi'},
            ],
            search:'',
            isLoading:false
            
        }
    },
    

 
 computed:{
     searchTodos(){
        
       return  this.todos.filter(todo=>todo.name.includes(this.search))
     }
  },
created() {
     this.isLoading=true,
     setTimeout(()=>{
     
     this.isLoading=false
     
  },4000)
   
  
    
     
  
     axios.get(`https://api.github.com/users/Bitfumes/repos`)
     .then((res)=>{
          
            this.todos=res.data
            
    
       
    
      
      
     
     })
    
     
   
 
     

    
     
     
     
    
  },
  

}
</script>

<style>

</style>