<template>
    <div class="card" style="width: 449px;">
        <!-- <div class="card-header">{{ capitalizeFirstLetter("house direction") }}</div> -->
        <div class="menu">
            <button type="button" class="btn-icon" @click="setModel('/images/1.png', 'model')">
                <img :src="'/images/1.png'" />
            </button>
            <button type="button" class="btn-icon" @click="setModel('/images/2.png', 'model')">
                <img :src="'/images/2.png'" />
            </button>
            <button type="button" class="btn-icon" @click="setModel('/images/3.png', 'model')">
                <img :src="'/images/3.png'" />
            </button>
            <button type="button" class="btn-icon" @click="setModel('/images/4.png', 'model')">
                <img :src="'/images/4.png'" />
            </button>
        </div>
        
        <div class="stage">
            <v-stage :config="configKonva">
                <v-layer>
                    <v-image :config="{ name: 'house', x: 170, y: 60, image: model, draggable: true }" @transform="handleTransform" />
                    <v-image :config="{ x: 170, y: 240, width: 40, height: 40, image: sun }" />
                    <v-image :config="{ x: 290, y: 190, width: 100, height: 100, image: direction }" />
                    <v-transformer ref="transformer" :config="{ resizeEnabled: false }" />
                </v-layer>
            </v-stage>
        </div>
    </div>
    <div>{{ Math.round(rotation) }}°</div>
</template>
<script setup>
import { ref, onMounted, nextTick } from 'vue'

const configKonva = ref(
    {
        width: 449,
        height: 300
    }
);

const transformer = ref(null);

const model = ref();
const sun = ref();
const direction = ref();

const rotation = ref(0);

function setModel(src, target) {
    const image = new window.Image();
    image.src = src;
    image.onload = async () => {
        switch (target) {
            case 'model':
                model.value = image;
                break;
            case 'sun':
                sun.value = image;
                break
            case 'direction':
                direction.value = image;
                break
        }
        await nextTick();
        updateTransformer();
    }

}
function handleTransform(e) {
    rotation.value = e.target.rotation()
}

function updateTransformer() {
    const transformerNode = transformer.value.getNode();
    const stage = transformerNode.getStage();
    const selectedNode = stage.findOne('.house');

    if (selectedNode) {
        transformerNode.nodes([selectedNode]);
    }
}

onMounted(() => {
    setModel('/images/1.png', 'model')
    setModel('/images/sun.png', 'sun')
    setModel('/images/direction.png', 'direction')
})

</script>
<style>
.stage .konvajs-content {
    margin: auto;
    border: 1px solid #ccc;
    background-color: #fff
}
</style>
<style lang="scss" scoped>
.menu {
    display: grid;
    grid-template-columns: auto auto auto auto;

    .btn-icon {
        border: 1px solid #ccc;
        background-color: #fff;

        img {
            height: 50px;
        }
    }
}
</style>