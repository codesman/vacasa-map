<template>
    <nav>
        <ul>
            <li v-for="country in countries"><a :class="{ active: isActive(country.ref) }" href="" @click.prevent="loadMap(country.ref)">{{ country.name }}</a>
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
                countries: [],
                active: ''
            }
        },
        methods: {
            setActive: function (ref) {
                this.active = ref
            },
            isActive: function(ref){
                return this.active === ref
            },
            loadMap: function(ref){
                Event.$emit('load-map', ref)
                this.setActive(ref)
            },
            loadCountries: function(){
                let vm = this
                axios.get('/countries')
                  .then(function (response) {
                    vm.countries = response.data
                    vm.active = vm.countries[0].ref
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
