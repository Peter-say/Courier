 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar2">
     <div class="logo">
         <a href="#">
             <img src="{{ $dashboard_assets }}/images/icon/logo-white.png" alt="Cool Admin" />
         </a>
     </div>
     <div class="menu-sidebar2__content js-scrollbar1">
         <div class="account2">
             <div class="image img-cir img-120">
                 @if (Auth::user()->avatar !== null)
                     <img src="{{ asset('users/avatar/' . Auth::user()->avatar) }}" alt="" />
                 @else
                     <img src="{{ $dashboard_assets }}/images/icon/avatar.jpeg" alt="" />
                 @endif

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

                 @if (Auth::user()->role == 'Sudo')
                 <li>
                     <a href="{{ route('dashboard.shipment.courier.index') }}">
                         <i class="fas fa-users"></i>Manage Couriers</a>
                 </li>
             @endif
                 
             </ul>
         </nav>
     </div>
 </aside>
 <!-- END MENU SIDEBAR-->
