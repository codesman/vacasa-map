<template>
    <nav>
        <ul>
            <li v-for="country in countries"><a href="" @click.prevent="loadMap(country.ref)">{{ country.name }}</a></li>
        </ul>
    </nav>
</template>
<style>
</style>
<script>
    export default{
        data(){
            return{
                countries: [
                    {name: 'United States', ref: 'united-states'},
                    {name: 'Europe', ref: 'europe'},
                    {name: 'South America', ref: 'south-america'},
                    {name: 'Central America', ref: 'central-america'},
                    {name: 'Caribbean', ref: 'caribbean'},
                    {name: 'Africa', ref: 'africa'},
                ]
            }
        },
        methods: {
            loadMap: function(map){
                console.log(map)
            }
        }
    }
</script>
