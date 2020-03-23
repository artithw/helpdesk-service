@extends('layouts.users')

@section('content')
<div class="container is-fullhd">
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
              <th>รายละเอียดปัญหา</th>
              <th>ชื่อผู้แจ้งซ่อม</th>
              <th>หน่วยงาน</th>
              <th>เบอร์โทร</th>
              <th>วันที่แจ้ง</th>
              <th>สถานะ</th>
              <th>ผู้ปฏิบัติงาน</th>
            </tr>
          </thead>

          <tbody>
            <tr>
                <td>1909121207</td>
                <td>ต่ออินเทอร์เน็ตไม่ติด...</td>
                <td>ประภวิชญ์</td>
                <td>สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</td>
                <td>2814</td>
                <td>
                <span class="tag is-success">
                    10/15/2016
                </span>
                </td>
                <td class="is-success"><i class="fa fa-check-circle"> เรียบร้อย</i></td>
                <td>คทาวุธ</td>
              </tr>
              <tr>
                    <td>1909121207</td>
                    <td>ต่ออินเทอร์เน็ตไม่ติด...</td>
                    <td>ประภวิชญ์</td>
                    <td>สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</td>
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
                    <td>1909121207</td>
                    <td>ต่ออินเทอร์เน็ตไม่ติด...</td>
                    <td>ประภวิชญ์</td>
                    <td>สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</td>
                    <td>2814</td>
                    <td>
                        <span class="tag is-success">
                            10/15/2016
                        </span>
                    </td>
                    <td class="is-danger"><i class="fa fa-times-circle"> ไม่สามารถแก้ไขได้</i></td>
                    <td>เชิดชัย</td>
                </tr>
                <tr>
                    <td>1909121207</td>
                    <td>ต่ออินเทอร์เน็ตไม่ติด...</td>
                    <td>ประภวิชญ์</td>
                    <td>สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</td>
                    <td>2814</td>
                    <td>
                        <span class="tag is-success">
                            10/15/2016
                        </span>
                    </td>
                    <td class="is-info"><i class="fa fa-user "> รับเรื่องรอดำเนินการ</i></td>
                    <td>เชิดชัย</td>
                </tr>
          </tbody>
        </table>
      </div>
    </div> <!-- end of .card -->

  </div>
@endsection
