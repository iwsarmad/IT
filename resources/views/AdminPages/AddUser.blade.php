
@extends('TeamContainer.SideBar')
@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Users</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Show Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users List</li>
                </ol>
            </div>










          {{--  <div class="row">

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

            </div>--}}





{{--
            <div class="row">
                <div class="col-lg-12">
                    <form class="card" method="post" action="{{url('/StoresUser')}}">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">لوحة الاعدادت</h3>
                        </div>
                        <div class="card-body">



                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">اسم المسختدم</label>
                                            <input type="email"  name="userName" class="form-control"  REQUIRED placeholder=" اسم المسختدم" >
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">اسم الموظف</label>
                                            <input type="text"  name="EmpName" class="form-control"  REQUIRED placeholder=" اسم الموظف" >
                                        </div>
                                    </div>





                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">اختر الصلاحية</label>
                                           <select  class="form-control" name="permission" REQUIRED>
                                               @foreach($roles as $role)
                                               <option value="{{$role->id}}">{{$role->ar_name}}</option>
                                                @endforeach
                                           </select>
                                        </div>
                                    </div>






                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">اختر الفرع</label>
                                            <select  class="form-control" name="Branch" REQUIRED>
                                                @foreach($Branches as $Branch)
                                                    <option value="{{$Branch->id}}">{{$Branch->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>








                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">كلمة المرور</label>
                                            <input type="password"  name="password"   REQUIRED class="form-control" placeholder="كلمة المرور" >
                                        </div>
                                    </div>



                                </div>


                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">خزن</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>--}}




            <div class="row">
                <div class="col-lg-12 card">

                        <div class="card-header">
                            <h3 class="card-title">Users</h3>
                        </div>
                        <div class="card-body">



                            <div class="row">


                                <table class="table caption-top">
                                    <caption>List of users</caption>
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Emp Name</th>
                                         <th scope="col">Role</th>

                                        <th scope="col">Actions</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($CurrentUsers as $CurrentUser)
                                    <tr>
                                        <th scope="row">{{$CurrentUser->id}}</th>
                                        <td>{{$CurrentUser->email}}</td>
                                        <td>{{$CurrentUser->name}}</td>
                                        <td>{{$CurrentUser->getRoleNames()->first()}}</td>

                                        <td>
                                            <button class="btn btn-danger DeleteAction" id="{{$CurrentUser->id}}">Delete User</button>

                                            <button  class="btn btn-primary EditAction" id="{{$CurrentUser->id}}">Edit User</button>
                                        </td>

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