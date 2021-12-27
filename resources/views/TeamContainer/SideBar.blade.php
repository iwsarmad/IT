@extends('TeamContainer.header')
@section('SideBar')


    <body class="app sidebar-mini">
    <div id="global-loader" ></div>
    <div class="page" >
        <div class="page-main">
            <div class="app-header header py-1 d-flex">
                <div class="container-fluid">
                    <div class="d-flex">
                        <a class="header-brand" href="/">
                            <img src="{{url('assets/images/brand/logo.png')}}" class="header-brand-img" alt="adminor logo">
                        </a>
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                        <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">





                            <div class="dropdown text-center selector">
                                <a href="#" class="nav-link leading-none" data-toggle="dropdown">
                                    <span class="avatar avatar-sm brround cover-image" data-image-src="{{url('assets/images/flags/it.svg')}}"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                    <div class="text-center">
                                        <a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">{{auth()->user()->name}}</a>
                                        <span class="text-center user-semi-title text-dark">Role</span>
                                        <div class="dropdown-divider"></div>
                                    </div>



                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>








            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body">
                        <div>
                            <img src="{{url('assets/images/flags/it.svg')}}" alt="user-img" class="avatar avatar-md brround">
                        </div>
                        <div class="user-info">
                            <div class="mb-2">
                                <a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold text-white">{{auth()->user()->name}}</span>  </a>
                                <br><span class="text-gray"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="side-menu">
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">DataBase</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{url('/AddUser')}}">Change DataBase</a></li>

                        </ul>
                    </li>



                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-snowflake-o"></i><span class="side-menu__label">Users</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">

                            <li><a class="slide-item" href="{{url('/AddUser')}}">User List</a></li>
                            <li><a class="slide-item" href="{{url('/AddUser')}}">Create User</a></li>
                            <li><a class="slide-item" href="{{url('/B2BInvites')}}">B2B invites</a></li>


                        </ul>
                    </li>
                    <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-area-chart"></i><span class="side-menu__label">Data From Device</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">


                            <li>
                                <a href="{{url('/TripManagement')}}" class="slide-item">Orders</a>
                            </li>




                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon mdi mdi-buffer"></i><span class="side-menu__label">Device Tables</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="alerts.html" class="slide-item">Order Types</a>
                            </li>
                            <li>
                                <a href="buttons.html" class="slide-item">Row types</a>
                            </li>
                            <li>
                                <a href="colors.html" class="slide-item">Row Details Type</a>
                            </li>

                            <li>
                                <a href="colors.html" class="slide-item">Language</a>
                            </li>

                            <li>
                                <a href="colors.html" class="slide-item">Currency</a>
                            </li>



                        </ul>
                    </li>


                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Logs</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="accordion.html" class="slide-item">Access Logs</a>
                            </li>
                            <li>
                                <a href="tabs.html" class="slide-item">Import Logs</a>
                            </li>


                        </ul>
                    </li>



                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon mdi mdi-arrange-send-backward"></i><span class="side-menu__label">Data From ERP</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="form-elements.html" class="slide-item">Customers</a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Suppliers</a>
                            </li>


                            <li>
                                <a href="form-elements.html" class="slide-item">Customer Contact</a>
                            </li>


                            <li>
                                <a href="form-elements.html" class="slide-item">Products</a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Unity meausers</a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Price list</a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Discount </a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Stock </a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Document </a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Expiration Date </a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Catalogs Date </a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Multimedia  </a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Remote Files  </a>
                            </li>


                        </ul>
                    </li>




                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-server"></i><span class="side-menu__label">Setting</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li>
                                <a href="accordion.html" class="slide-item">MailBox</a>
                            </li>
                            <li>
                                <a href="tabs.html" class="slide-item">From Editor</a>
                            </li>

                            <li>
                                <a href="tabs.html" class="slide-item">Urls</a>
                            </li>


                        </ul>
                    </li>


















                </ul>
            </aside>



@endsection