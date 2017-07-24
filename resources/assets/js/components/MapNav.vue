<template>
    <nav>
        <ul>
            <li v-for="country in countries"><a href="" @click.prevent="loadMap(country.ref)">{{ country.name }}</a>
            </li>
        </ul>
    </nav>
</template>
<style>
</style>
<script>
    export default{
        data(){
            return{
                countries: []
            }
        },
        methods: {
            loadMap: function(map){
                Event.$emit('load-map', map)
            },
            loadCountries: function(){
                let vm = this
                axios.get('/countries')
                  .then(function (response) {
                    vm.countries = response.data
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            }
        },
        mounted: function(){
            this.loadCountries()
        }
    }
</script>
