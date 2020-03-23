@extends('user.layouts.users')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h3 class="title">รายละเอียด</h3>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('tickets.store')}}" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
                <b-message title="ปัญหาที่แจ้ง" type="is-info" aria-close-label="Close message" :closable="false">
                <section>
                        <b-field label="หัวข้อ" >
                            <b-input  value="{{$tickets->subject}}" readonly></b-input>
                        </b-field>

                        <b-field label="รายละเอียด">
                            <b-input maxlength="200" type="textarea" value="{{$tickets->trouble}}" readonly></b-input>
                        </b-field>
                        <b-field label="เบอร์ติดต่อ">
                                <b-input  value="{{$tickets->phone}}" readonly></b-input>
                            </b-field>
                    </section>
                </b-message>
          <div class="field">

          </div>
          <div class="control">

              </div>

            <input id="invisible_id" name="user" type="hidden" value="{{Auth::user()->name}}">
        </div> <!-- end of .column -->

        <div class="column">
                <div class="field">
                        <b-message title="เจ้าหน้าที่ปฎิบัติงาน" type="is-success" aria-close-label="Close message" :closable="false">

                               <p><strong>เจ้าหน้าที่ : </strong>  ---- </p>
                               <p><strong>การแก้ไข : </strong>  ---- </p>
                                   <p><strong>สถานะ : </strong>  ---- </p>

                       </b-message>
                 </div>




        </div>
      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />

        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true,
        rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
      }
    });
  </script>
@endsection
