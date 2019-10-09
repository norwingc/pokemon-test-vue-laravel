<template>
     <div class="container card" v-if="!loading">
        <div class="card-body">
            <a href="/" class="btn btn-primary my-4">View all Pokemons</a>
            <h5 class="card-title">{{ pokemon.name }}</h5>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li v-for="(abilitie, index) in pokemon.abilities" :key="index">
                            {{ abilitie.ability.name }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                   <img :src="pokemon.sprites.front_default" alt="">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['index'],
    data(){
        return{
            pokemon: [],
            loading: true
        }
    },
    mounted(){
        this.getPokemon()
    },
    methods:{
        async getPokemon(){
            await axios.get(`https://pokeapi.co/api/v2/pokemon/${this.index}`).then(res => {
                this.pokemon = res.data
            }).finally(() => {
                this.loading = false
            })
        }
    }

}
</script>
