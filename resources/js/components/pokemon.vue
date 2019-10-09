<template>
    <div class="container pokemons">
        <div class="row">
            <div class="col-md-4 pokemon" v-for="(pokemon, index) in pokemons" :key="index" @click="goToPokemon(pokemon, index)">
                {{ pokemon.name }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                pokemons: []
            }
        },
        mounted() {
            this.getPokemons();
        },
        methods:{
            async getPokemons(){
                await axios.get(`https://pokeapi.co/api/v2/pokemon/`).then(res => {
                    this.pokemons = res.data.results
                })
            },
            goToPokemon(pokemon, index){
                location.href = `/pokemon/view/${(index+1)}`;
            }
        }
    }
</script>
