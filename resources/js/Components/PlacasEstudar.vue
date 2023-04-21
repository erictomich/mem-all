<script setup>
import { reactive, ref } from 'vue'

const caminhoImg = ref('/img/placas/');

const actualCard = ref(0);

const descriptionIsVisible = ref(false);

const totalCards = ref(0);

const deck = reactive({
    cards: [
        { 
            codigoIdentificador: '',
            img: '',
            nome: '',
            descricao: ''
        }

    ]  
})

const carregarCards = async () => {
    const response = await fetch('/cards');
    const data = await response.json();
    deck.cards = data.cards;
    totalCards.value = deck.cards.length;
    console.log(deck.cards)
};

// Carrega os cards ao criar o componente
carregarCards();

const nextCard = () => { 
    console.log('actualCard', actualCard.value)
    console.log('totalCards', totalCards.value)
    if(actualCard.value + 1 > totalCards.value - 1) {
        actualCard.value = 0 
    } else {
        actualCard.value++; 
    }

    descriptionIsVisible.value = false
}

const showDescription = () => {
    descriptionIsVisible.value = true;
}

const hideDescription = () => {
    descriptionIsVisible.value = false;
}

const avancarDificil = () => {
    const card = deck.cards[actualCard.value];

    // // Remove o primeiro elemento da matriz cards
     deck.cards.splice(actualCard.value, 1);

    // // Adiciona o elemento removido em duas posições após a posição atual
     deck.cards.splice(actualCard.value+3, 1, card);

}

</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <img :src="caminhoImg+deck.cards[actualCard].img" :alt="deck.cards[actualCard].nome">
            <p>actual card: {{  actualCard }}</p>

        </div>
        <div class="p-6" v-if="descriptionIsVisible">
            {{ deck.cards[actualCard].nome }} <br>
            {{ deck.cards[actualCard].descricao }}
        </div>
        <hr>
        <div>
            <button class="block" @click="showDescription" v-if="!descriptionIsVisible">show description</button>
            <br>
            <button @click="nextCard">Avançar</button>
            <br>
            <button @click="avancarDificil">Avançar Dificil</button>
        </div>
    </div>
</template>
