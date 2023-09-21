  <!-- HEADER DESKTOP-->
  <header class="header-desktop2">
      <div class="section__content section__content--p30">
          <div class="container-fluid">
              <div class="header-wrap2">
                  <div class="logo d-block d-lg-none">
                      <a href="#">
                          <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                      </a>
                  </div>
                  <div class="header-button2">
                      <div class="header-button-item js-item-menu">
                          <i class="zmdi zmdi-search"></i>
                          <div class="search-dropdown js-dropdown">
                              <form action="">
                                  <input class="au-input au-input--full au-input--h65" type="text"
                                      placeholder="Search for datas &amp; reports..." />
                                  <span class="search-dropdown__icon">
                                      <i class="zmdi zmdi-search"></i>
                                  </span>
                              </form>
                          </div>
                      </div>
                      <div class="header-button-item has-noti js-item-menu">
                
                              <i class="zmdi zmdi-notifications"></i>
                          <div class="notifi-dropdown js-dropdown">
                              <div class="notifi__title">
                                  <p>You have {{ $countAdminNotification }} Notifications</p>
                              </div>
                              @foreach ($limitNotificationCount as $notification)
                                  <a href="{{ route('dashboard.user.notification.details', $notification->id) }}">
                                      <div class="notifi__item">
                                          <div class="bg-c1 img-cir img-40">
                                              <i class="zmdi zmdi-email-open"></i>
                                          </div>
                                          <div class="content">
                                              <p>{{ Str::limit(isset($notification->data['subject']) ? $notification->data['subject'] : '', 20) }}
                                              </p>
                                              <span
                                                  class="date">{{ $notification->created_at->format('M d, Y h:i a') }}</span>
                                          </div>
                                      </div>
                                  </a>
                              @endforeach

                              <div class="notifi__footer">
                                  <a href="#">All notifications</a>
                              </div>
                          </div>
                      </div>
                      <div class="header-button-item mr-0 js-sidebar-btn">
                          <i class="zmdi zmdi-menu"></i>
                      </div>
                      <div class="setting-menu js-right-sidebar d-none d-lg-block">
                          <div class="account-dropdown__body">
                              <div class="account-dropdown__item">
                                  <a href="{{route('dashboard.user.profile')}}">
                                      <i class="zmdi zmdi-account"></i>Account</a>
                              </div>
                              <div class="account-dropdown__item">
                                  <a href="#">
                                      <i class="zmdi zmdi-settings"></i>Setting</a>
                              </div>

                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
      <div class="logo">
          <a href="#">
            <img src="{{ $dashboard_assets }}/images/icon/logo-white.png" alt="Cool Admin" />
          </a>
      </div>
      <div class="menu-sidebar2__content js-scrollbar2">
          <div class="account2">
              <div class="image img-cir img-120">
                <img src="{{ asset('users/avatar/' . Auth::user()->avatar) }}" alt="" />

              </div>
              <h4 class="name">{{ Auth::user()->full_name }}</h4>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit">Sign out</a>
              <form action="{{ route('logout') }}" method="post">
                  @csrf
              </form>
          </div>
          <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">

                <li>
                    <a href="{{ route('dashboard.home') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                @if (in_array(Auth::user()->role, ['Sudo', 'Admin']))
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-trophy"></i>Percel
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{ route('dashboard.shipment.create') }}">
                                    <i class="fas fa-table"></i>Create New</a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.shipment.') }}">
                                    <i class="far fa-check-square"></i>View Shipments</a>
                            </li>
                        </ul>
                    </li>
                @else
                @endif
                <li>
                    <a href="{{ route('dashboard.user.notification.index') }}">
                        <i class="fas fa-chart-bar"></i>Inbox</a>
                    <span class="inbox-num">{{ $countAdminNotification }}</span>
                </li>
                @if (Auth::user()->role == 'Sudo')
                    <li>
                        <a href="{{ route('dashboard.user.index') }}">
                            <i class="fas fa-users"></i>Manage Users</a>
                    </li>
                @endif
            </ul>
        </nav>
      </div>
  </aside>
  <!-- END HEADER DESKTOP-->
