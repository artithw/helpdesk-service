<nav class="navbar has-shadow" >
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item is-paddingless brand-item" href="{{route('ticket.index')}}">
          <img src="{{asset('images/awdev.png')}}" alt="AW logo">
        </a>

        @if (Request::segment(1) == "manage")
          <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
            <span class="icon">
              <i class="fa fa-arrow-circle-right"></i>
            </span>
          </a>
        @endif

        <button class="button navbar-burger" id="admin-slideout-button">
         <span></span>
         <span></span>
         <span></span>
       </button>
      </div>
      <div class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item is-tab">ระบบแจ้งซ่อมออนไลน์</a>
        </div> <!-- end of .navbar-start -->


        <div class="navbar-end nav-menu" style="overflow: visible">
          @guest
              <!-- guest menu-->
              <a href="#" class="navbar-item">
                    <span class="icon">
                      <i class="fa fa-fw fa-bell m-r-5"></i>
                    </span>Notifications
                  </a>
          @endguest
          @auth
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">สวัสดี {{Auth::user()->name}}</a>
              <div class="navbar-dropdown is-right" >
                <a href="#" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                  </span>Profile
                </a>

                <a href="#" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-bell m-r-5"></i>
                  </span>Notifications
                </a>
                <a href="#" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-cog m-r-5"></i>
                  </span>Manage
                </a>
                <hr class="navbar-divider">
                <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <span class="icon">
                    <i class="fa fa-fw fa-sign-out m-r-5"></i>
                  </span>
                  Logout
                </a>
                @include('user._includes.forms.logout')
              </div>
            </div>
            @endauth

        </div>
      </div>

    </div>
  </nav>
