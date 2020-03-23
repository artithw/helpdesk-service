<div class="side-menu" id="admin-side-menu">
    <aside class="menu m-t-30 m-l-10">
          <ul class="menu-list">
            <li>
              <a class="has-submenu {{Nav::hasSegment(['ticket', 'permissions'], 2)}}">ข้อมูลรายการ</a>
              <ul class="submenu">
                <li><a href="{{route('staff.ticket.index')}}" class="{{Nav::isResource('ticket')}}">รายการทั้งหมด</a></li>
                <li><a href="#" class="{{Nav::isResource('permissions')}}">ยังไม่ดำเนินการ</a></li>
                <li><a href="#" class="{{Nav::isResource('users')}}">ดำเนินการแล้ว</a></li>
                <li><a href="#" class="{{Nav::isResource('users')}}">อยู่ระหว่างดำเนินการ</a></li>
              </ul>
            </li>

          </ul>
    </aside>
  </div>



