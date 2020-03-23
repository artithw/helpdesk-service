@extends('user.layouts.users')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h3 class="title">แจ้งปัญหา</h3>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('tickets.store')}}" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">ปัญหา</label>
            <p class="control">
              <input type="text" class="input" name="subject" id="subject">
            </p>
          </div>

          <div class="field">
                <b-field label="รายละเอียดปัญหา">
                  <b-input maxlength="200" type="textarea" name="trouble" id="trouble"></b-input>
               </b-field>
          </div>

          <div class="field">
                <label for="name" class="label">เบอร์โทร</label>
                <p class="control">
                  <input type="text" class="input" name="phone" id="phone">
                </p>
            </div>
            <input id="invisible_id" name="user" type="hidden" value="{{Auth::user()->name}}">
        </div> <!-- end of .column -->

        <div class="column">
          <label for="roles" class="label">Roles:</label>
          <input type="hidden" name="roles" :value="rolesSelected" />


        </div>
      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-left" style="width: 250px;">ส่งปัญหา</button>
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
