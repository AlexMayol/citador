<template>
    <div>
        <div class="row" v-for="hour of hours" :key="hour.id">
            <span>{{ hour.id}}</span>
            <span v-bind:style="hour.available == false ? 'background-color:red' : 'background-color:green'">&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                hours: [
                ]
            }
        },
        methods:{
            async getHours(){
                let result = await axios.get('api/available_hours', { params: { date: '2020-07-19'}} )
                    this.hours = result.data;
            }
        },
        mounted(){
            this.getHours();
        }
    }
</script>
