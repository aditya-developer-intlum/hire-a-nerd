<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.

                    <form @submit.prevent="submit">
                      <!--   <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" v-model="fields.name" />
                            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
                        </div> -->
            
                       
            
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" v-model="fields.message"></textarea>
                            <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
                        </div>
            
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
         data() {
            return {
                fields: {},
                errors: {},
            }
        },
        mounted() {
           Echo.join(`chat`)
            .here((users) => {
                
                console.log(users);
            })
            .joining((user) => {
                console.log(user.name+' Online');
            })
            .leaving((user) => {
                console.log(user.name+' Offline');
            });
             Echo.private(`chat`).listen('MessageEvent', (e) => {
                 console.log(e);
            });

          
        },
         methods: {
            submit() {
                this.errors = {};
                axios.post('chat', this.fields).then(response => {
                     
                }).catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            },
        }
    }
</script>
