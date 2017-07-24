<template>
    <main class="location-map">
        <div v-html="mapData"></div>
    </main>
</template>
<style>
</style>
<script>
    export default{
        data(){
            return{
                mapData: ''
            }
        },
        mounted: function(){
            let vm = this
            vm.loadMap('united-states')
            
            Event.$on('load-map', function(map){
                vm.loadMap(map)
            })
        },
        created() {
            
        
        },
        methods: {
            loadMap: function(map) {
                let vm = this
            axios.get('/maps/' + map)
              .then(function (response) {
                vm.mapData = response.data
              })
              .catch(function (error) {
                console.log(error);
              });
            }
        }
    }
</script>
