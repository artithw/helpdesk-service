<template>

   <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h3 class="title">แจ้งปัญหา</h3>
      </div>
    </div>
    <hr class="m-t-0">

      <div class="columns">
        <div class="column">
          <b-field horizontal label="ปัญหา">
      <b-input name="subject" v-model="subject" expanded></b-input>
    </b-field>

    <b-field horizontal label="รายละเอียด">
      <b-input type="textarea" name="trouble"  v-model="trouble" ></b-input>
    </b-field>
    <b-field horizontal label="เบอร์โทร">
      <b-input name="phone" v-model="phone" size="10"  maxlength="10"></b-input>
    </b-field>
            <input id="invisible_id" name="user" type="hidden" value="">
        </div> <!-- end of .column -->

        <div class="column">


        </div>
      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-left" style="width: 250px;" v-on:click="addNewTicket()">ส่งปัญหา</button>
        </div>
      </div>

  </div> <!-- end of .flex-container -->

</template>
<script>
export default {
    data(){
        return{
            subject:'',
            trouble:'',
            phone:''
        }

    },
    props: ['api','user'],
    methods:{
        addNewTicket(){
           axios.post('/api/tickets',{
              subject:this.subject,
              trouble:this.trouble,
               phone:this.phone,
               name:this.user
           }, {
              params: {
                api_token: this.api,

              }
            }
           ).then(function (response) {
    window.location = response.data.redirect;
});
         //console.log('This is an example function');
        }
    }
};
</script>
