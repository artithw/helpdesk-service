<template>
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h3 class="title">รายละเอียด</h3>
      </div>
    </div>
    <hr class="m-t-0">
      <div class="columns" >
        <div class="column" >
                <b-message title="ปัญหาที่แจ้ง" type="is-info" aria-close-label="Close message" :closable="false">
                <section>
                        <b-field label="หัวข้อ" >
                            <b-input  v-model="subject"  readonly></b-input>
                        </b-field>

                        <b-field label="รายละเอียด">
                            <b-input maxlength="200" type="textarea" v-model="trouble" readonly></b-input>
                        </b-field>
                        <b-field label="เบอร์ติดต่อ">
                                <b-input v-model="phone"  readonly></b-input>
                            </b-field>
                    </section>
                </b-message>
          <div class="field">

          </div>
          <div class="control">

              </div>

        </div> <!-- end of .column -->

        <div class="column">
                <div class="field">
                        <b-message title="เจ้าหน้าที่ปฎิบัติงาน" type="is-success" aria-close-label="Close message"
                            :closable="false">
                            <section>
                                <b-field label="เจ้าหน้าที่">
                                    <b-input readonly></b-input>
                                </b-field>

                                <b-field label="การแก้ไข">
                                    <b-input maxlength="200" type="textarea"  readonly>
                                    </b-input>
                                </b-field>
                                <b-field label="สถานะ">
                                    <b-input  readonly></b-input>
                                </b-field>
                            </section>

                        </b-message>
                 </div>




        </div>
      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-success is-pulled-right m-r-10" style="width: 100px;" v-on:click="gotosite('/staff/ticket/')" >กลับ </button>
          <button class="button is-warning is-pulled-right m-r-10" style="width: 100px;">รับงาน </button>
          <!--button class="button is-danger is-pulled-right m-r-10" style="width: 100px;">ปิดงาน </!button-->
        </div>
      </div>

  </div> <!-- end of .flex-container -->
</template>
<script>
export default {
  mounted() {
     // this.getTicketData();
    axios.get('/api/tickets/'+this.id).then(Response=>{
   var tickets = Response.data;
    //console.log(this.tickets);
    //subject = this.tickets.subject;
    //console.log(subject);
    this.subject = tickets[0].subject;
    this.trouble = tickets[0].trouble;
    this.phone = tickets[0].phone;

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
        gotosite(turl){
        window.location.href = turl
            }

  },
  props: ['staffname','id'],
  data() {
    return {
      tickets: [],
      subject: "",
      trouble: "",
      phone: "",
      urls:"ticket/",

    };
  }
};
</script>

