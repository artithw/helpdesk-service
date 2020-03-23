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
                                    <div v-if="username == null"><b-input readonly>ยังไม่มีผู้ดำเนินการ</b-input></div>
                                    <div v-else><b-input v-model="username" readonly></b-input></div>

                                </b-field>
                                <b-field  label="ประเภทปัญหา">
                                    <b-select placeholder="ระบุประเภทปัญหา" v-model="typep">
                                        <option v-for="(cat, index) in categories" :key="index" :value="index" :selected="index == typep" >
                                        {{cat}}
                                        </option>
                                </b-select>
                                </b-field>
                                <b-field label="การแก้ไข">
                                    <b-input maxlength="200" type="textarea" v-model="trouble" >
                                    </b-input>
                                </b-field>
                                <b-field  label="สถานะ">
                                    <b-select placeholder="ระบุประเภทปัญหา" v-model="status">
                                        <option v-for="(scat, index) in status_cat" :key="index" :value="index" :selected="index == status? true : false" >
                                        {{scat}}
                                        </option>
                                </b-select>
                                </b-field>
                            </section>

                        </b-message>
                 </div>




        </div>
      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-info is-pulled-right m-r-10" style="width: 100px;" v-on:click="gotosite('/staff/ticket/')" >กลับ </button>
          <button class="button is-danger is-pulled-right m-r-10" style="width: 100px;">ปิดงาน </button>
          <button class="button is-success is-pulled-right m-r-10" style="width: 100px;">[บันทึก] </button>
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
    this.username = tickets[0].username;
    this.typep = tickets[0].type;
    this.status = tickets[0].ticket_status;

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
      categories: ['ทดสอบแก้ไข','ซ่อมไม่ได้','User Error','เปลี่ยนอุปกรณ์'],
      status_cat: ['รับเรื่องรอดำเนินการ','กำลังดำเนินการ','ไม่สามารถแก้ไขได้','เรียบร้อย'],
      tickets: [],
      subject: "",
      trouble: "",
      phone: "",
      username: "",
      typep: "",
      status: "",
      typeoption: "1",
      urls:"ticket/",


    };
  }
};
</script>

