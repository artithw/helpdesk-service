@extends('layouts.manage')

@section('content')
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
                <td><i class="fa fa-check-circle has-text-success"></i></td>
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
                    <td><i class="fa fa-wrench has-text-warning"></i></td>
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
                    <td><i class="fa fa-times-circle has-text-danger"></i></td>
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
                    <td><i class="fa fa-user"></i></td>
                    <td>เชิดชัย</td>
                </tr>
          </tbody>
        </table>
      </div>
    </div> <!-- end of .card -->

  </div>
@endsection
