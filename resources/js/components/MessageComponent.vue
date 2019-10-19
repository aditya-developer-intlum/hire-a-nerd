<template>
    
    <ul class="_chatLists nav nav-tabs" id="chat_lists" >
                                                
                <!-- li begin  -->
                <li  v-for="friend in friends" class="_chatList" :id="'_online'+friend.user.id">
                    <div class="_chatCont" data-toggle="tab" :href="'#user'+friend.user.id" @click="readMessage(friend.user.id)">
                        <div class="_chatCont-in _flexDiv">
                            <div class="_proImg-cont">
                            <span class="_userImg">

                                <img :src="asset+friend.user.userdetail.avatar" alt="image">
                            </span>                                                                                    
                            </div>
                            <div class="_proTxt-cont">
                                <div class="_chatInfo _flexDiv">
                                    <span class="_name"> {{ friend.user.name }}</span>
                                    <span class="_time">{{ friend.last_login | formatDate}}</span>
                                    <span class="_star-imp active">
                                    <!--    <i class="far fa-star"></i> -->
                                    </span>
                                </div>                                                                                    
                                   <p class="_msgDiv">
                                   <!--  <span class="_recentMsg">Lorem ipsum dolor 
                                        <span> -->
                                            <!-- <img src="images/emoji-1.png" alt=""> -->
                                        </span>
                                    </span>
                               
                                        
                                    <span class="_msgNum" v-if="friend.user.unread_message.length == 0 ? false:true">

                                       {{ friend.user.unread_message.length }}
                                    </span>
                                    
                                    </p>
                            </div>
                        </div>                                                                                           
                    </div>
                </li>
                                                                <!-- li end  -->
                                                         
    </ul>
</template>
<script>
    import { EventBus } from "./event-bus.js";
    export default {

        name: 'MessageComponent',
        data() {
            return {
                friends: [],
                asset:"",
                user:{},
                readMessagePath:''
            }
        },
        props: ['messageData'],
        mounted() {

            this.asset = this.messageData.asset+'/';
            this.friends = this.messageData.friends;
            this.user = this.messageData.user;
            this.readMessagePath = this.messageData.readMessagePath;

                Echo.join(`avail`)
                    .joining((user) => {
                        
                        $(`#_online${user.id}`).addClass('_online');
                    })
                    .leaving((user) => {
                       $(`#_online${user.id}`).removeClass('_online');
                    });
        },
        methods:{
            readMessage(id){
                
                axios.post(this.readMessagePath, {sender_id:id,receiver_id:this.user.id});
            }
        }

    }
</script>
