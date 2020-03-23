  <template>
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <form action="" method="POST">

      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Name:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name"  v-model="name">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" v-model="email">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <!--b-radio-group v-model="password_options"-->
              <div class="field">
                <b-radio v-model="password_options" name="password_options" native-value="keep">Do Not Change Password</b-radio>
              </div>
              <div class="field">
                <b-radio v-model="password_options" name="password_options" native-value="auto">Auto-Generate New Password</b-radio>
              </div>
              <div class="field">
                <b-radio v-model="password_options" name="password_options" native-value="manual">Manually Set New Password</b-radio>
                <p class="control">
                  <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                </p>
              </div>
            <!--/b-radio-group-->
          </div>
        </div> <!-- end of .column -->

        <div class="column">
          <label for="roles" class="label">Roles:</label>



              <div class="field" v-for="role in roles" :key="role.id">
                <b-checkbox   v-model="rolesSelecteduser"  :native-value="role.id">{{role.display_name}}</b-checkbox>
              </div>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-left" style="width: 250px;">Edit User</button>
        </div>
      </div>
    </form>

  </div> <!-- end of .flex-container -->
</template>
  <script>
export default {
    mounted() {
       // console.log(this.$root)
     // this.getTicketData();
    axios.get('/api/users/v1/'+this.id + '/edit/', {
              params: {
                api_token: this.api,

              }
            }).then(Response=>{
    //axios.get('/api/users/v1/'+this.id).then(Response=>{
   var users = Response.data;
   //console.log(_.map(users.roles, 'id'));
   this.name = users.name;
   this.email = users.email;
   // this.phone = users[0].phone;
   // this.username = users[0].username;
   // this.typep = users[0].type;
   //this.rolesSelected = users[0].role_id;
   this.rolesSelecteduser = _.map(users.roles, 'id');
   //console.log(users.roles);
  //console.log(users.roles.pluck('id'));
   // console.log(users);

    });
        axios.get('/api/roles/v1/', {
              params: {
                api_token: this.api,

              }
            }).then(Response=>{
    //axios.get('/api/users/v1/'+this.id).then(Response=>{
   this.roles = Response.data;
    //console.log(Response.data);
    //subject = this.tickets.subject;

   //this.rolename = roles.name;

    });
  },
   methods: {
     
   // getTicketData() {
   //   axios.get("/api/tickets").then(response => {
   //     var tickets = Response.data;
   //     //this.subject=tickets.subject;
   //     console.log(Response.data);
//
//      }).catch();
  //  },

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
        },
        gotosite(turl){
        window.location.href = turl
            }


  },
  props: ['api','id'],
data() {
    return {
      password_options: 'keep',
      rolesSelecteduser:[],
      name: '',
      email: '',
      rolename: '',
      roles: []


    };
}


};


  </script>
