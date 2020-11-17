<template>
   <div>
   <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-12">Your Achievements</h1>
   <input
      placeholder="Your Laracasts API Token"
      v-model="token"
      class="border p-2 rounded w-full mb-8"
      @keyup.enter="fetchAchievements"
    />
    <p class="text-red italic text-sm" v-if="message" v-text="message"></p>
   <ul>
      <li
         v-for="achievement in achievements"
         v-text="achievement.name"
      ></li>
   </ul>
   </div>
</template>


<script>
    export default {
      data(){
         return {achievements: [], token: '', message: ''};
      },
      methods:{
         fetchAchievements(){
         //axios.get(`http://localhost:8000/api/achievements?api_token=${this.token}`).then(console.log);
         axios.get(`http://localhost:8000/api/achievements?api_token=${this.token}`)
         .catch(error=>{
            //console.log(error.response);
            this.message=error.response.data.message;
            this.achievements=[];
         })
         .then(({data}) => {
            this.achievements=data;
            this.message= null;
         });
      }
      }
    };
</script>