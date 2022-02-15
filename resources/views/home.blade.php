@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">DataBase A</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        change it ?
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row ">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"> DataBase</div>

                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="form-elements.html" class="slide-item">My databases</a>

                            </li>
                            <li>

                                <a href="form-elements.html" class="slide-item">Create database</a></li>
                        </ul>


                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"> users</div>

                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="form-elements.html" class="slide-item">user list</a>
                            </li>
                            <li>
                                <a href="form-elements.html" class="slide-item">create user</a></li>
                            <li>
                                <a href="{{url('B2BInvites')}}" class="slide-item">b2b invites</a></li>
                        </ul>


                    </div>
                </div>
            </div>



            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"> data from mobile</div>

                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="form-elements.html" class="slide-item">orders</a>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>



            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"> data from ERP</div>

                    <div class="card-body">
                        <ul>

                            <li>
                                <a href="{{url('Customers')}}" class="slide-item">Customers</a>
                            </li>

                            <li>
                                <a href="{{url('Suppliers')}}" class="slide-item">Suppliers</a>
                            </li>





                            <li>
                                <a href="{{url('Products')}}" class="slide-item">Products</a>
                            </li>

                            <li>
                                <a href="{{url('UnityMeausers')}}" class="slide-item">Unity meausers</a>
                            </li>

                            <li>
                                <a href="{{url('PriceList')}}" class="slide-item">Price list</a>
                            </li>

                            <li>
                                <a href="form-elements.html" class="slide-item">Discount </a>
                            </li>

                            <li>
                                <a href="{{url('Stock')}}" class="slide-item">Stock </a>
                            </li>

                            <li>
                                <a href="{{url('Document')}}" class="slide-item">Document </a>
                            </li>

                            <li>
                                <a href="{{url('ExpirationDate')}}" class="slide-item">Expiration Date </a>
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


                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">push notification</div>

                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="form-elements.html" class="slide-item"> send notification</a>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Device Tables</div>

                    <div class="card-body">
                        <ul>

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


                    </div>
                </div>
            </div>




            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">logs</div>

                    <div class="card-body">
                        <ul>

                            <li>
                                <a href="accordion.html" class="slide-item">Access Logs</a>
                            </li>
                            <li>
                                <a href="tabs.html" class="slide-item">Import Logs</a>
                            </li>



                        </ul>


                    </div>
                </div>
            </div>




            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Setting</div>

                    <div class="card-body">
                        <ul>



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


                    </div>
                </div>
            </div>





        </div>


    </div>
@endsection