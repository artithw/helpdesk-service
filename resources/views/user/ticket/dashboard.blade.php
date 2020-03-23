@extends('user.layouts.users')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h2 class="title">รายการปัญหา</h2>
      </div>
        <div class="column">
                <a href="{{route('ticket.index')}}" class="button is-primary is-pulled-right "><i class="fa fa-sticky-note m-r-10"></i> ติดตามปัญหา</a>
                <a href="{{route('ticket.create')}}" class="button is-primary is-pulled-right m-r-10"><i class="fa fa-user-plus m-r-10"></i> แจ้งปัญหาใหม่</a>

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
            </tr>
          </thead>

          <tbody>
                @foreach ($tickets as $ticket)
                  <tr>
                    <th><a href="ticket/{{$ticket->id}}"><i class="fa fa-sticky-note m-r-10"></i> {{$ticket->id}}</a></th>
                    <td>{{$ticket->subject}}</td>
                    <td>
                            <span class="tag is-success">
                                    {{$ticket->created_at->format('d/m/Y')}}
                                </span></td>
                    <td class="is-success"><i class="fa fa-check-circle"> เรียบร้อย</i></td>
                    <td>คทาวุธ</td>
                  </tr>
                @endforeach
              </tbody>
          <!--<tbody>
            <tr>
                <td><a href=""><i class="fa fa-sticky-note m-r-10"></i> 1909121207</a></td>
                <td>ต่ออินเทอร์เน็ตไม่ติด...</td>
                <td>
                <span class="tag is-success">
                    10/15/2016
                </span>
                </td>
                <td class="is-success"><i class="fa fa-check-circle"> เรียบร้อย</i></td>
                <td>คทาวุธ</td>
              </tr>
              <tr>
                <td><a href=""><i class="fa fa-sticky-note m-r-10"></i> 1909121207</a></td>
                    <td>2814</td>
                    <td>
                    <span class="tag is-success">
                        10/15/2016
                    </span>
                    </td>
                    <td class="is-warning"><i class="fa fa-wrench "> กำลังดำเนินการ</i></td>
                    <td>เชิดชัย</td>
                </tr>
                <tr>
                    <td><a href=""><i class="fa fa-sticky-note m-r-10"></i> 1909121207</a></td>
                    <td>ต่ออินเทอร์เน็ตไม่ติด...</td>
                    <td>
                        <span class="tag is-success">
                            10/15/2016
                        </span>
                    </td>
                    <td class="is-danger"><i class="fa fa-times-circle"> ไม่สามารถแก้ไขได้</i></td>
                    <td>เชิดชัย</td>
                </tr>
                <tr>
                    <td><a href=""><i class="fa fa-sticky-note m-r-10"></i> 1909121207</a></td>
                    <td>ต่ออินเทอร์เน็ตไม่ติด...</td>
                    <td>
                        <span class="tag is-success">
                            10/15/2016
                        </span>
                    </td>
                    <td class="is-info"><i class="fa fa-user "> รับเรื่องรอดำเนินการ</i></td>
                    <td>เชิดชัย</td>
                </tr>
          </tbody> -->
        </table>
      </div>
    </div> <!-- end of .card -->

  </div>
@endsection
