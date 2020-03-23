<template>
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h2 class="title">รายการปัญหา</h2>
      </div>
        <div class="column">


        </div>
    </div>
    <hr class="m-t-0">

    <div class="card">
      <div class="card-content">

        <table class="table is-fullwidth">
          <thead>
            <tr>
              <th>Ticket.ID</th>
              <th>เรื่อง</th>
              <th>วันที่แจ้ง</th>
              <th>สถานะ</th>
              <th>ผู้ปฏิบัติงาน</th>
              <th></th>
            </tr>
          </thead>
         <tbody>
                  <tr v-for="ticket in tickets" :key="ticket.id">
                    <th><a v-bind:href="'/staff/ticket/'+ticket.id"><i class="fa fa-sticky-note m-r-10"></i> {{ticket.id}}</a></th>
                    <td>{{ticket.subject}}</td>
                    <td>
                            <span class="tag is-success">
                                    {{ticket.created_at}}
                                </span></td>
                    <td >
                        <div v-if="ticket.ticket_status == '0'"><i class="fa fa-check-circle">ยังไม่ดำเนินการ</i></div>
                        <div v-else-if="ticket.ticket_status == '1'"><i class="fa fa-check-circle">ยังไม่ดำเนินการ</i></div>
                        <div v-else-if="ticket.ticket_status == '2'"><i class="fa fa-check-circle">ยังไม่ดำเนินการ</i></div>
                        <div v-else><i class="fa fa-check-circle">ไม่สารมารถดำเนินการได้</i></div>
                    </td>
                    <td>
                        <div v-if="ticket.username == null">ยังไม่มีผู้ดำเนินการ</div>
                        <div v-else>{{ticket.username}}</div>
                    </td>
                    <td class="has-text-right" >
                        <a class="button is-outlined m-r-5" v-bind:href="'/staff/ticket/'+ticket.id" >ดู</a>
                        <a class="button is-outlined m-r-5" v-on:click="addStaffAdd(ticket.id,staffid)" :disabled="ticket.username == staffname">รับงาน</a>
                        <a class="button is-outlined m-r-5" v-bind:href="'/staff/ticket/'+ticket.id+'/edit'" :disabled="ticket.username !== staffname">จัดการ</a>
                    </td>
                  </tr>
         </tbody>
        </table>
      </div>
    </div> <!-- end of .card -->

  </div>
</template>
<script>
export default {
  mounted() {
    this.getUserData();
  },
   methods: {
    getUserData() {
      axios.get("/api/tickets").then(response => {
        this.tickets = response.data;
        //console.log(this.tickets);
      });//.catch();

    },
    addStaffAdd(id,staff) {
      //axios.post("/api/addstaff/?ticket_id",{
      //     ticket_id
      //  });
      axios({
        method: 'post',
        url: '/api/addstaff/',
        data: {
          ticket_id: id,
          user_id: staff
        }
    });
     this.getUserData();
    },


  },
  props: ['staffname','staffid'],
  data() {
    return {
      tickets: [],

    };
  }
};
</script>

