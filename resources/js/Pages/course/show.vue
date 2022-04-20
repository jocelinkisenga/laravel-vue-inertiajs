<template>
<app-layout>
    <template #header>
        {{course.title}}
    </template>
<div class="py-6"  v-bind:key="course.id">
    <div class="mx-6 bg-white rounded shadow p-4">
        <div class="flex justify-between items-center">
            <div class="text-3xl">{{course.title}}</div>
            <div>{{course.episodes_count}} episodes</div>
        </div>
        
        <div class="text-sm text-gray-400">{{course.description}}</div>
        <a href="/courses/{{course.id}}" class="bg-indigo-500 text-white px-2 py-3 mt-3 inline-block rounded hover:bg-indigo-800" >voir la formations</a>
    </div> 
</div>
</app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout';

export default {
    components: {
        AppLayout
    },
       
     data (){
         return {
             courseshow : this.course
         }
     },

     props: ['course'],

    mounted (){
        //console.log(this.courselist);
    }
}
</script>
