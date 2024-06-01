 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Chems <sup>2</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{route('admin.dashboard')}}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Transaksi
     </div>
     <!-- <li class="nav-item">
         <a class="nav-link" href="{{--route('orders.index')--}}">
             <i class="fas fa-fw fa-table"></i>
             <span>Transaksi</span></a>
     </li> -->
     <li class="nav-item">
         <a class="nav-link" href="{{route('products.index')}}">
             <i class="fa fa-archive" aria-hidden="true"></i>
             <span>Produk</span></a>
     </li>
     <!-- <li class="nav-item">
         <a class="nav-link" href="{{--route('customers.index')--}}">
             <i class="fa fa-user" aria-hidden="true"></i>
             <span>Customer</span></a>
     </li> -->

     <!-- Nav Item - Charts -->



     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>