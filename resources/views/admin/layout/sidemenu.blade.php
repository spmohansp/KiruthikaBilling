<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <ul class="app-menu">
    <li><a class="app-menu__item" href="{{ url('/admin/home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li class="treeview"><a class="app-menu__item @yield('Clients')" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Clients</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item @yield('AddClients')" href="{{ url('/admin/clients/add') }}"><i class="icon fa fa-chevron-circle-right"></i> Add Clients</a></li>
        <li><a class="treeview-item @yield('ViewClients')" href="{{ url('/admin/clients') }}"><i class="icon fa fa-chevron-circle-right"></i> View Clients</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item @yield('Bills')" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-files-o"></i><span class="app-menu__label">Bills</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item @yield('AddBill')" href="{{ url('/admin/bill/add') }}"><i class="icon fa fa-chevron-circle-right"></i> Add Bills</a></li>
        <li><a class="treeview-item @yield('ViewBills')" href="{{ url('/admin/bills') }}"><i class="icon fa fa-chevron-circle-right"></i> View Bills</a></li>
      </ul>
    </li>
    <li><a class="app-menu__item @yield('Profile')" href="{{ url('/admin/profile') }}"><i class="app-menu__icon fa fa-user-secret"></i><span class="app-menu__label">Profile</span></a>
    </li>
  </ul>
</aside>
