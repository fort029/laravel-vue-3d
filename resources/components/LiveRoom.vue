<template>
  <div class="card bg-white" style="width: 449px; height:356px">
    <ul style="height:310px; overflow-y: auto;" ref="scrollToMe">
      <li v-for="message in messages">
        {{ message.message }}
      </li>
    </ul>
     <div class="ms-2">Online: {{subscription_count}}</div>
    <div class="input-group has-validation" :class="error?'was-validated':''">
      
      <input type="text" name="message" v-model="txt" class="form-control " placeholder="Message" aria-label="Message"
        aria-describedby="button-send" @input="error=false" required>
      <button type="button" class="btn btn-outline-secondary" @click="sendMessage" id="button-send">Send ({{countClick}})</button>
      <div class="invalid-feedback ms-2">
         Please write message.
      </div>
    </div>
  </div>
</template>
   

<script setup>
import Pusher from 'pusher-js';
import { ref, nextTick } from "vue";

const props = defineProps({
  archiveMessages: Array,
});
const messages = ref(props.archiveMessages);
const txt = ref('')
const scrollToMe = ref(null);
const error = ref(false);
const subscription_count = ref(0);

var timer;
const countClick =  ref(0);
// Enable pusher logging - don't include this in production
//Pusher.logToConsole = true;

var pusher = new Pusher('9631afea8c20cb868268', {
  cluster: 'eu'
});

var channel = pusher.subscribe('live-room');

channel.bind('message', async function (data) {
  messages.value.push(data);
  if (messages.value.length > 15){
    await nextTick()
    scrollToMe.value.scrollTop= scrollToMe.value.scrollHeight;
  }
});

channel.bind('pusher:subscription_count', (data) => {
  subscription_count.value = data.subscription_count;
});

function sendMessage() {
  if(txt.value != ""){
    countClick.value++;
    clearTimeout(timer);
    console.log('Timer reset');
    startTimer();
  }else{
    error.value=true;
  }
}

function startTimer() {
  timer = setTimeout(() => {
    console.log('Action complete');
    axios({
        method: 'post',
        url: '/api/sendMessage',
        data: {
          message: txt.value+': '+countClick.value,
        }
    });
    countClick.value=0;
  }, 1000);
}


</script>
