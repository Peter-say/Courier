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
                                  <a href="#">
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
              <img src="images/icon/logo-white.png" alt="Cool Admin" />
          </a>
      </div>
      <div class="menu-sidebar2__content js-scrollbar2">
          <div class="account2">
              <div class="image img-cir img-120">
                  <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
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
                  <li class="active has-sub">
                      <a class="js-arrow" href="#">
                          <i class="fas fa-tachometer-alt"></i>Dashboard
                          <span class="arrow">
                              <i class="fas fa-angle-down"></i>
                          </span>
                      </a>
                      <ul class="list-unstyled navbar__sub-list js-sub-list">
                          <li>
                              <a href="index.html">
                                  <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                          </li>
                          <li>
                              <a href="index2.html">
                                  <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                          </li>
                          <li>
                              <a href="index3.html">
                                  <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                          </li>
                          <li>
                              <a href="index4.html">
                                  <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="inbox.html">
                          <i class="fas fa-chart-bar"></i>Inbox</a>
                      <span class="inbox-num">3</span>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fas fa-shopping-basket"></i>eCommerce</a>
                  </li>
                  <li class="has-sub">
                      <a class="js-arrow" href="#">
                          <i class="fas fa-trophy"></i>Features
                          <span class="arrow">
                              <i class="fas fa-angle-down"></i>
                          </span>
                      </a>
                      <ul class="list-unstyled navbar__sub-list js-sub-list">
                          <li>
                              <a href="table.html">
                                  <i class="fas fa-table"></i>Tables</a>
                          </li>
                          <li>
                              <a href="form.html">
                                  <i class="far fa-check-square"></i>Forms</a>
                          </li>
                          <li>
                              <a href="calendar.html">
                                  <i class="fas fa-calendar-alt"></i>Calendar</a>
                          </li>
                          <li>
                              <a href="map.html">
                                  <i class="fas fa-map-marker-alt"></i>Maps</a>
                          </li>
                      </ul>
                  </li>
                  <li class="has-sub">
                      <a class="js-arrow" href="#">
                          <i class="fas fa-copy"></i>Pages
                          <span class="arrow">
                              <i class="fas fa-angle-down"></i>
                          </span>
                      </a>
                      <ul class="list-unstyled navbar__sub-list js-sub-list">
                          <li>
                              <a href="login.html">
                                  <i class="fas fa-sign-in-alt"></i>Login</a>
                          </li>
                          <li>
                              <a href="register.html">
                                  <i class="fas fa-user"></i>Register</a>
                          </li>
                          <li>
                              <a href="forget-pass.html">
                                  <i class="fas fa-unlock-alt"></i>Forget Password</a>
                          </li>
                      </ul>
                  </li>
                  <li class="has-sub">
                      <a class="js-arrow" href="#">
                          <i class="fas fa-desktop"></i>UI Elements
                          <span class="arrow">
                              <i class="fas fa-angle-down"></i>
                          </span>
                      </a>
                      <ul class="list-unstyled navbar__sub-list js-sub-list">
                          <li>
                              <a href="button.html">
                                  <i class="fab fa-flickr"></i>Button</a>
                          </li>
                          <li>
                              <a href="badge.html">
                                  <i class="fas fa-comment-alt"></i>Badges</a>
                          </li>
                          <li>
                              <a href="tab.html">
                                  <i class="far fa-window-maximize"></i>Tabs</a>
                          </li>
                          <li>
                              <a href="card.html">
                                  <i class="far fa-id-card"></i>Cards</a>
                          </li>
                          <li>
                              <a href="alert.html">
                                  <i class="far fa-bell"></i>Alerts</a>
                          </li>
                          <li>
                              <a href="progress-bar.html">
                                  <i class="fas fa-tasks"></i>Progress Bars</a>
                          </li>
                          <li>
                              <a href="modal.html">
                                  <i class="far fa-window-restore"></i>Modals</a>
                          </li>
                          <li>
                              <a href="switch.html">
                                  <i class="fas fa-toggle-on"></i>Switchs</a>
                          </li>
                          <li>
                              <a href="grid.html">
                                  <i class="fas fa-th-large"></i>Grids</a>
                          </li>
                          <li>
                              <a href="fontawesome.html">
                                  <i class="fab fa-font-awesome"></i>FontAwesome</a>
                          </li>
                          <li>
                              <a href="typo.html">
                                  <i class="fas fa-font"></i>Typography</a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>
  <!-- END HEADER DESKTOP-->
