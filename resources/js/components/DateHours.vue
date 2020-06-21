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
                    {
                        id: '8:00',
                        available: true
                    },
                    {
                        id: '8:30',
                        available: true
                    },
                    {
                        id: '9:00',
                        available: true
                    },
                    {
                        id: '9:30',
                        available: true
                    },
                    {
                        id: '10:00',
                        available: true
                    },
                    {
                        id: '10:30',
                        available: true
                    },
                    {
                        id: '11:00',
                        available: true
                    },
                    {
                        id: '11:30',
                        available: true
                    }
                ]
            }
        },
        mounted(){
            console.log(this.hours);
        }
    }
</script>