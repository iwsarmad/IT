
@extends('layouts.app')
@section('content')
    <div class="container-fluid">



        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>



            <div class="col-lg-12 col-md-12 col-sm-12">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                @endif
            </div>

        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12 card">

                    <div class="card-header">
                        <h3 class="card-title"> Price List</h3>
                    </div>
                    <div class="card-body">



                        <div class="row">


                            <table class="table caption-top">

                                <thead>
                                <tr>


                                    <th scope="col">COD_ART</th>
                                    <th scope="col">COD_CLIFOR</th>
                                    <th scope="col">COD_LISTINO</th>
                                    <th scope="col">PREZZO</th>
                                    <th scope="col">QUANTITA_INIZIO</th>
                                    <th scope="col">QUANTITA_FINE</th>
                                    <th scope="col">DATA_INIZIO</th>
                                    <th scope="col">DATA_FINE</th>
                                    <th scope="col">PRIORITA</th>
                                    <th scope="col">TIPO_LISTINO</th>








                                </tr>
                                </thead>
                                <tbody>
                                @foreach($PriceList as $Product)
                                    <tr>
                                        <td>{{$Product->COD_ART}}</td>
                                        <td>{{$Product->COD_CLIFOR}}</td>
                                        <td>{{$Product->COD_LISTINO}}</td>
                                        <td>{{$Product->PREZZO}}</td>
                                        <td>{{$Product->QUANTITA_INIZIO}}</td>
                                        <td>{{$Product->QUANTITA_FINE}}</td>
                                        <td>{{$Product->DATA_INIZIO}}</td>
                                        <td>{{$Product->DATA_FINE}}</td>
                                        <td>{{$Product->PRIORITA}}</td>
                                        <td>{{$Product->TIPO_LISTINO}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    <!--
    Model Area
    -->






    <form  method="post" action="{{url('/EditUser')}}">
        @csrf
        <div class="modal" id="EditUserModel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">تعديل مستخدم</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <input type="hidden" name="UserId" id="UserIdForEdit">


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">اسم المسختدم</label>
                                    <input type="email"  name="userName" class="form-control"  placeholder=" اسم المسختدم" >
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">اسم الموظف</label>
                                    <input type="text"  name="EmpName" class="form-control"   placeholder=" اسم الموظف" >
                                </div>
                            </div>


                            <div class="col-lg-6 ">
                                <div class="form-group">
                                    <label class="form-label">كلمة المرور</label>
                                    <input type="password"  name="password"    class="form-control" placeholder="كلمة المرور" >
                                </div>
                            </div>


                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">تعديل</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <form  method="post" action="{{url('/DeleteUser')}}">
        @csrf
        <div class="modal" id="DeleteUserModel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">حذف المستخدمين</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <input type="hidden" name="UserId" id="UserIdForDelete">


                        <div class="row">
                            <div class="col-lg-12">
                                هل انت متاكد من حذف المستخدم
                            </div>


                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">تاكيد</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                    </div>
                </div>
            </div>
        </div>
    </form>







@endsection
@extends('TeamContainer.footer')
@section("js")
    <script>
        $(document).ready(function () {


            //  alert();

            $('body').on('click', '.DeleteAction', function () {
                var id=$(this).attr("id");
                $("#UserIdForDelete").val(id);
                $('#DeleteUserModel').modal('show')
            });



            $('body').on('click', '.EditAction', function () {
                var id=$(this).attr("id");
                $("#UserIdForDelete").val(id);
                $('#EditUserModel').modal('show')
            });


        });
    </script>

@endsection