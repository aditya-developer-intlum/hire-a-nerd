<template>

                                                            <!-- chat box begin -->
     <div v-bind:id="tab" class="tab-pane fade" v-bind:class="{'in active show':active}" >

                                                                <div class="_chatBoxInner">
                                                                    <!-- Header begin  -->
                                                                    <div class="_chatBox__hdr">
                                                                        <div class="row">
                                                                            <!-- Col begin  -->
                                                                            <div class="col-6">
                                                                                <div class="_chatBox__profile _chatInfo">
    <span class="_userImg" >
        <img v-bind:src="avatar" alt="">
    </span>
           <span class="_name">{{ user }} </span>
                                                                                </div>
<span class="_typing" v-if="activeUser">typing <span>.</span><span>.</span><span>.</span>
                  </span>
                                                                            </div>
                                                                            <!-- Col end  -->
                                                                            <!-- Col begin  -->
                                                                            <div class="col-6">
                                                                                <div class="_chatOptions  _flexDiv">
                                                                                    <!-- Begin  -->
                                                                                    <div class="hoverDropdown _chatOptions_elem">
                                                                                        <a hter="#" class="hoverDropdown_btn">                                                                                                                                               
                                                                                            <span class="_dHdr__icon">
                                                                                                <i class="fas fa-cog"></i>
                                                                                            </span>
                                                                                        </a>                         
       <!-- <div class="hoverDropdown__wrapper hoverDropdown__wrapper__right">                            
            <div class="hoverDropdown__inner">
            <div class="hoverDropdown__header">Settings</div> 
       <div class="hoverDropdown__body">
        <ul class="hoverDropdown_content">
         <li class="_imgTxtCard active">
            <a class="flex-view">
            <figure class="_imgTxtCard__Image"><img src="" alt="" class="img-fluid"></figure>
            <div class="_imgTxtCard__content ">
       <div class="_imgTxtCard__txt">                                                            
        <span class="_content__txtMsg">Lorem Ipsum is simply dummy text of the printing.</span>
        <span class="_content__txTime">10 days ago</span>
        </div>                                                        
        </div>
       </a>
   </li>                                                  
                                                                                                    </ul>
                                                                                                </div>                                                                                            
                                                                                            </div>                            
                                                                                        </div> -->                      
                                                                                    </div>
                                                                                    <!-- end  -->
                                                                                    
                                                                                    <!-- <a href="#" class="_chatOptions_elem">
                                                                                        <span ><i class="fas fa-times"></i></span>
                                                                                    </a>                                        -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- Col end   -->
                                                                        </div>          
                                                                    </div>
                                                                    <!-- Header end  -->
                                                                   
<div class="_chatBox__bdy">
	<div class="_chatInnerBody" v-chat-scroll>

		<div  v-for="item in items" >
			<div class="_msgBox-outer" v-bind:class="{'_teacherReply':item.is_sender}" v-chat-scroll>
				<div class="_msgBox-inner">
					<div class="_msgDiv">
					
						<div class="_msgTextBox">
                    <div v-if="item.files">
                        <a :href="item.url" target="_blank"><img :src="item.files" alt="" width="70%"></a>

                    </div>


						<div class="_msgContent">{{ item.message }}                                                    
						</div>                      
						</div>
					<ul class="_inlineList _msgInfo">
						<li> <span class="_time">{{ item.time }}</span></li>
					</ul>

					</div>
					<span class="_userImg">
                        <img v-bind:src="avatar" alt="profile" v-if="item.is_sender">
                        <img v-bind:src="current_avatar" alt="profile" v-else="item.is_sender">
                    </span>
				</div>
			</div>
		</div>

	</div>
</div>
                                                                </div>




<!-- Reply section begin  -->
    <div class="_replyOuter">

    <div class="_replyBox">
            <form  class="_flexDiv" @submit.prevent="submit">
                <input type="hidden" name="sender_id"  v-model="fields.sender_id" >
                <input type="hidden" name="receiver_id"  v-model="fields.receiver_id" >
                <input type="text" class="form-control"  name="message"
                 v-model="fields.message" 
                 @keydown="typeMessage"
                 autocomplete="off" >
                 <input type="hidden" value="1" name="is_seen" v-model="fields.is_seen" v-if="online">
                <input type="file" name="files" id="file_input" style="display: none" @change="uploadImage" > 
                <button class="btn _submitBtn2" type="submit" >Send </button>
            </form>
           
    </div>
    <!-- <emoji-picker @emoji="insert" :search="search">
  <div slot="emoji-invoker" slot-scope="{ events: { click: clickEvent } }" @click.stop="clickEvent">
        <li><i class="far fa-grin"></i></li>
  </div>
  <div slot="emoji-picker" slot-scope="{ emojis, insert, display }">
    <div>
      <div>
        <input type="text" v-model="search">
      </div>
      <div>
        <div v-for="(emojiGroup, category) in emojis" :key="category">
          <h5>{{ category }}</h5>
          <div>
            <span
              v-for="(emoji, emojiName) in emojiGroup"
              :key="emojiName"
              @click="insert(emoji)"
              :title="emojiName"
            >{{ emoji }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</emoji-picker> -->

   

    <div class="_replyActionBox">
        <ul class="_replyAction__lists">                                                                    
            <li @click="openFile"><i class="fas fa-paperclip"></i></li>
            <!-- <li><a href="#"><i class="fas fa-camera"></i></a></li> -->
            <li><a href="#"><i class="far fa-grin"></i></a></li>
        </ul> 
                                                               <!--  {{-- <ul class="_recentEmo">
                                                                    <li>
                                                                        <a href="#"><img src="images/emoji-1.png" alt=""></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><img src="images/emoji-2.png" alt=""></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><img src="images/emoji-3.png" alt=""></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><img src="images/emoji-1.png" alt=""></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><img src="images/emoji-2.png" alt=""></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><img src="images/emoji-3.png" alt=""></a>
                                                                    </li>
                                                                </ul> --}} -->                                                                                 
                                                            </div>
                                                        </div>
                                                        <!-- Reply section end  -->

                                                            </div>
                                                            <!-- chat box end -->
                                                               
                                                      
</template>

<script>
import EmojiPicker from 'vue-emoji-picker';
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)
export default {

  name: 'ListenMessageComponent',

	data () {
	    return {
	    	items:[],
	    	tab:{},
	    	user:{},
	    	active:false,
            avatar:{},
            fields: {},
            errors: {},
            activeUser: false,
            typingTimer:false,
            fileId:'',
            input: '',
            search: '',
            current_avatar:'',
            submitButton:false,
            online:false,
            file : null,
            showFile: null
	    	
	    }
	},
    components: {
        EmojiPicker,
    },
    props: ['userData'],
        mounted() {
        	this.tab = `user${this.userData.tab}`;
        	this.user = this.userData.name;
        	this.active = this.userData.active;
            this.avatar = this.userData.avatar;
            this.current_avatar = this.userData.image;
            this.receiver_id = this.userData.tab;
            this.fileId = `file${this.userData.tab}`

            this.getMessage(this.userData.id,this.userData.tab);

            Echo.private(`user.${this.userData.id}`)
		    .listen('SendMessage', (e) => {
                                        console.log(e);

                    this.getMessage(this.userData.id,this.userData.tab,'last');
		    }); 
            Echo.private(`chat${this.userData.tab}`).listenForWhisper(`typing`, (e) => {

                    this.activeUser = e.typing;
                    if(this.typingTimer){
                        clearTimeout(this.typingTimer);
                    }
                         
                         this.typingTimer = setTimeout( () => {

                          this.activeUser = false;

                        }, 1000);
            });

             Echo.join(`avail`)
                .joining((user) => {
                     
                     if(user.id == this.userData.tab){

                        this.online = true;
                     }
                                
                })
                .leaving((user) => {
                      if(user.id == this.userData.tab){

                        this.online = false;
                     } 
                });
                
		},
        methods: {

            submit(){
                    this.errors = {};
                    if(this.file != null ){
                        this.fields.url = this.file;
                        this.fields.image = this.showFile;
                    }
                    this.fields.sender_id = this.userData.id;
                    this.fields.receiver_id = this.userData.tab;
                    axios.post('message', this.fields).then(response => {

                       const data = {
                            files:this.showFile?this.showFile:null,

                            message: response.data.message,
                            is_sender: false,
                            time: response.data.created_at
                        };

                        this.items.push(data);
                     
                       
                        this.fields = {};

                    }).catch(error => {
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
            },
            typeMessage(){

               let message = this.fields.message;
                // if(message.length != undefined || message.length>0){
                //     this.submitButton = true;
                // }
                // if(message.length == 0 || message.length == 1){
                //     this.submitButton = false;   
                // }
                  setTimeout( () => {
                    Echo.private(`chat${this.userData.id}`)
                  .whisper(`typing`, {
                          user: this.userData.id,
                          typing: true
                        });
                  }, 300);
            },
            getMessage(sender,receiver,last){
                axios.post('get-message', {
                senderId: sender,
                receiverId: receiver,
                last:last
                 }).then(response => {
               
                    response.data.forEach((val,index) => {
                        
                        let data = {
                            files: val.file,
                            message: val.message,
                            is_sender:val.sender_id == this.receiver_id?true:false,
                            time:val.created_at,
                            url: val.url
                        };
                        this.items.push(data);
                    });
               
                });
            },
            openFile(){
                
                document.getElementById('file_input').click();
               
            },
            insert(emoji) {
                this.input += emoji;
            },
            uploadImage (e) {
                let img = e.target.files[0]
                let fd = new FormData()

                fd.append('file', img)

                axios.post(`${this.userData.url}/api/upload-message-file`, fd)
                    .then(resp => {

                        this.file = `${this.userData.url}/public/storage/${resp.data}`;
                        this.popUpFile();
                        
                }).catch(error => {
                        console.log(error);
                        if (error.response.status === 422) {
                            Swal.fire({
                                icon: 'error',
                                text: error.response.data.errors.file[0],
                            });
                        }
                });
            },
            popUpFile (){

                switch (this.getFileExtenstion(this.file)) {
                    case 'zip':
                        this.showFile = `${this.userData.url}/public/icons/file-archive-solid.svg`;
                        break;
                    case 'pdf':
                         this.showFile = `${this.userData.url}/public/icons/file-pdf-solid.svg`;
                        break;
                    case 'csv':
                         this.showFile = `${this.userData.url}/public/icons/file-csv-solid.svg`;
                        break;
                    case 'xlsx':
                         this.showFile = `${this.userData.url}/public/icons/file-excel-solid.svg`;
                        break;
                    case 'xls':
                         this.showFile = `${this.userData.url}/public/icons/file-excel-solid.svg`;
                        break;
                    case 'ods':
                         this.showFile = `${this.userData.url}/public/icons/file-excel-solid.svg`;
                        break;
                    case 'txt':
                         this.showFile = `${this.userData.url}/public/icons/file-solid.svg`;
                        break;
                    case 'jpg':
                        this.showFile = this.file;
                        break;
                    case 'jpeg':
                        this.showFile = this.file;
                        break;
                    case 'gif':
                        this.showFile = this.file;
                        break;
                    case 'png':
                        this.showFile = this.file;
                        break;
                    case 'svg':
                        this.showFile = this.file;
                        break;
                    default:
                         this.showFile = `${this.userData.url}/public/icons/file-solid.svg`;
                        break;
                }
                Swal.fire({
                    input: 'text',
                    imageUrl: this.showFile,
                    imageWidth: 400,
                    imageHeight: 200,
                    confirmButtonText:'send'
                }).then((result) => {
                    this.fields.message = result.value;
                    this.submit();
                })
            },
            getFileExtenstion(filename){
                return filename.split('.').pop();
            }
            

        }
}
</script>
