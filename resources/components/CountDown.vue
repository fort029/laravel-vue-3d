<template>
    <div class="card bg-white" style="width: 449px; height:356px">
        <div class="flip-clock">
            <h3>Time left until the weekend</h3>
            <template v-for="data in timeData" :key="data.label">
                <span class="flip-clock__piece" :id="data.elementId">
                    <div>
                        <span class="flip-clock__card flip-card">
                            <b class="flip-card__top">{{ twoDigits(data.current) }}</b>
                            <b class="flip-card__bottom" :data-value="twoDigits(data.current)"></b>
                            <b class="flip-card__back" :data-value="twoDigits(data.previous)"></b>
                            <b class="flip-card__back-bottom" :data-value="twoDigits(data.previous)"></b>
                        </span>
                    </div>
                    <span class="flip-clock__slot">{{ data.label }}</span>
                </span>
            </template>
            <Rating v-model="rating" :cancel="false" class="d-flex justify-content-center">
                <template #cancelicon>
                    <img :src="'/images/cancel.png'" height="24" width="24" />
                </template>
                <template #onicon>
                    <img :src="'/images/custom-onicon.png'" height="24" width="24" />
                </template>
                <template #officon>
                    <img :src="'/images/custom-officon.png'" height="24" width="24" />
                </template>
            </Rating>
            <div v-if="!days && !hours && !minutes && !seconds">
                <h1>Weekend!!!</h1>
                <img style="width: 250px;" :src="'/images/1407994.gif'" />
            </div>
        </div>
    </div>
</template>

<script setup>
import Rating from 'primevue/rating';
import { ref, onMounted } from "vue";

const rating = ref(0);
const endDate = ref(0);

const days = ref(0);
const hours = ref(0);
const minutes = ref(0);
const seconds = ref(0);

const mainColor = '#EC685C';
const secondFlipColor = '#EC685C';
const mainFlipBackgroundColor = '#222222';
const secondFlipBackgroundColor = "#393939"

let timeData = ref([{
    current: 0,
    previous: 0,
    label: 'Days',
    elementId: 'flip-card-0'
},
{
    current: 0,
    previous: 0,
    label: 'Hours',
    elementId: 'flip-card-1'
},
{
    current: 0,
    previous: 0,
    label: 'Minutes',
    elementId: 'flip-card-2'
},
{
    current: 0,
    previous: 0,
    label: 'Seconds',
    elementId: 'flip-card-3'
},
]);


const twoDigits = (value) => {
    return ('00' + value).slice(-2);
}

function updateRemaining(distance) {
    days.value = Math.floor(distance / (1000 * 60 * 60 * 24))
    hours.value = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
    minutes.value = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
    seconds.value = Math.floor((distance % (1000 * 60)) / 1000)
    animate(0, days.value);
    animate(1, hours.value);
    animate(2, minutes.value);
    animate(3, seconds.value);

    rating.value = 5 - (hours.value <= 4 ? days.value : days.value + 1);
};

function animate(index, value) {
    timeData.value[index].previous = timeData.value[index].current;
    timeData.value[index].current = value;
    if (timeData.value[index].previous !== timeData.value[index].current) {
        const el = document.querySelector(`#${timeData.value[index].elementId}`);
        el.classList.remove('flip');
        void el.offsetWidth;
        el.classList.add('flip');
    }
}

function tick() {
    const currentTime = new Date()
    const distance = Math.max(endDate.value - currentTime, 0)
    updateRemaining(distance)
}


onMounted(() => {
    var curr = new Date(); // get current date
    var first = curr.getDate() - curr.getDay(); // First day is the day of the month - the day of the week
    var friday = new Date(curr.setDate(first + 5));
    friday.setHours(17, 0, 0, 0);
    //endDate.value = new Date(1707487200000);
    endDate.value = new Date(friday);
    tick();
    if (days || hours || minutes || seconds) {
        setInterval(tick, 1000)
    }
})
</script>
<style lang="scss" scoped>
.no-animation__card {
    font-weight: 500;
    font-size: 2rem;
    line-height: 1.5;
    display: block;
    color: v-bind(mainColor);
}

.flip-clock {
    text-align: center;
    perspective: 500px;
    margin: 0 auto;

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }
}

.flip-clock__piece {
    display: inline-block;
    margin: 0 0.2vw;

    @media (min-width: 1000px) {
        margin: 0 5px;
    }
}

.flip-clock__slot {
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    color: v-bind(labelColor);
}

$halfHeight: 0.72em;
$borderRadius: 0.15em;

.flip-card {
    display: block;
    position: relative;
    padding-bottom: $halfHeight;
    font-size: 2.25rem;
    line-height: 0.95;
}

@media (min-width: 1000px) {
    .flip-clock__slot {
        font-size: 1.2rem;
    }

    .flip-card {
        font-size: 3rem;
    }
}

.flip-card__top,
.flip-card__bottom,
.flip-card__back-bottom,
.flip-card__back::before,
.flip-card__back::after {
    display: block;
    height: $halfHeight;
    color: v-bind(mainColor);
    background: v-bind(mainFlipBackgroundColor);
    padding: 0.25em 0.15em 0.4em;
    border-radius: $borderRadius $borderRadius 0 0;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    transform-style: preserve-3d;
    width: 2.1em;
    height: $halfHeight;
}

.flip-card__bottom,
.flip-card__back-bottom {
    color: v-bind(secondFlipColor);
    position: absolute;
    top: 50%;
    left: 0;
    border-top: solid 1px #000;
    background: v-bind(secondFlipBackgroundColor);
    border-radius: 0 0 $borderRadius $borderRadius;
    pointer-events: none;
    overflow: hidden;
    z-index: 2;
}

.flip-card__back-bottom {
    z-index: 1;
}

.flip-card__bottom::after,
.flip-card__back-bottom::after {
    display: block;
    margin-top: -$halfHeight;
}

.flip-card__back::before,
.flip-card__bottom::after,
.flip-card__back-bottom::after {
    content: attr(data-value);
}

.flip-card__back {
    position: absolute;
    top: 0;
    height: 100%;
    left: 0%;
    pointer-events: none;
}

.flip-card__back::before {
    position: relative;
    overflow: hidden;
    z-index: -1;
}

.flip .flip-card__back::before {
    z-index: 1;
    animation: flipTop 0.3s cubic-bezier(0.37, 0.01, 0.94, 0.35);
    animation-fill-mode: both;
    transform-origin: center bottom;
}

.flip .flip-card__bottom {
    transform-origin: center top;
    animation-fill-mode: both;
    animation: flipBottom 0.6s cubic-bezier(0.15, 0.45, 0.28, 1);
}

@keyframes flipTop {
    0% {
        transform: rotateX(0deg);
        z-index: 2;
    }

    0%,
    99% {
        opacity: 1;
    }

    100% {
        transform: rotateX(-90deg);
        opacity: 0;
    }
}

@keyframes flipBottom {

    0%,
    50% {
        z-index: -1;
        transform: rotateX(90deg);
        opacity: 0;
    }

    51% {
        opacity: 1;
    }

    100% {
        opacity: 1;
        transform: rotateX(0deg);
        z-index: 5;
    }
}
</style>