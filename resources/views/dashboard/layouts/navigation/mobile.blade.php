 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar2">
     <div class="logo">
         <a href="#">
             <img src="images/icon/logo-white.png" alt="Cool Admin" />
         </a>
     </div>
     <div class="menu-sidebar2__content js-scrollbar1">
         <div class="account2">
             <div class="image img-cir img-120">
                 <img src="{{ $dashboard_assets }}/images/icon/avatar-big-01.jpg" alt="John Doe" />
             </div>
             <h4 class="name">{{ Auth::user()->full_name }}</h4>
             <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                 @csrf
             </form>

             <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                 out</a>

         </div>
         <nav class="navbar-sidebar2">
             <ul class="list-unstyled navbar__list">

                 <li>
                     <a href="{{ route('dashboard.home') }}">
                         <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                 </li>
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
                 <li>
                     <a href="inbox.html">
                         <i class="fas fa-chart-bar"></i>Inbox</a>
                     <span class="inbox-num">3</span>
                 </li>
                 <li>
                     <a href="#">
                         <i class="fas fa-shopping-basket"></i>Manage Users</a>
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
 <!-- END MENU SIDEBAR-->
