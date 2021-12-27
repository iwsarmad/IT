
@extends('TeamContainer.SideBar')
@section('content')



    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">ادارة اوامر التسليم</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> اوامر التسليم</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الاعدادت</li>
                </ol>
            </div>





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




            <div class="row">
                <div class="container">

                    <div class="col-lg-12">
                        <form class="card" method="post" action="{{url('/StoresShips')}}">
                            @csrf
                            <div class="card-header">
                                <h3 class="card-title">لوحة  انشاء الرحلات</h3>
                            </div>
                            <div class="card-body">



                                <div class="row">



                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">رقم الرحلة</label>
                                            <input type="number"  name="ShipNumber" class="form-control"  placeholder="رقم الرحلة" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">اسم الباخرة</label>
                                            <input type="text"  name="ShipName" class="form-control"  placeholder="اسم الباخرة" >
                                        </div>
                                    </div>




                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">ميناء التفريغ</label>
                                            <select  class="form-control" name="PortOut" REQUIRED>

                                                @foreach($PortsOut as $PortOut)
                                                    <option value="{{$PortOut->id}}">{{$PortOut->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>





                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">ميناء الشحن</label>
                                            <select  class="form-control" name="PortIn" REQUIRED>
                                                @foreach($PortsIn as $PortIn)
                                                    <option value="{{$PortIn->id}}">{{$PortIn->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>









                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">تاريخ الوصول</label>
                                            <input type="date"  name="ArriveDate"  class="form-control" >
                                        </div>
                                    </div>


                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">تاريخ التفريغ</label>
                                            <input type="date"  name="EraseDate"  class="form-control"  >
                                        </div>
                                    </div>





                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">خزن</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>




            <div class="row">


                <div class="container">
                <div class="col-lg-12  card">

                        <div class="card-header">
                            <h3 class="card-title">عرض الرحلات</h3>
                        </div>
                        <div class="card-body">



                            <div class="row">

                                <table class="table caption-top">
                                    <caption>الرحلات</caption>
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">رقم الرحلة</th>
                                        <th scope="col">اسم الباخرة</th>
                                        <th scope="col">ميناء الشحن</th>
                                        <th scope="col">ميناء الوصول</th>
                                        <th scope="col">تاريخ الوصول</th>
                                        <th scope="col">تاريخ التفريغ</th>
                                        <th scope="col">عدد البوليصات الحالي</th>
                                        <th scope="col">الاجرائات</th>



                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Trips as $Trip)
                                        <tr>
                                            <th scope="row">{{$Trip->id}}</th>
                                            <td>{{$Trip->TripNumber}}</td>
                                            <td>{{$Trip->shipName}}</td>
                                            <td>{{\App\Models\Port::find($Trip->port_in)->name}}</td>
                                            <td>{{\App\Models\Port::find($Trip->port_out)->name}}</td>
                                            <td>{{$Trip->ArriveDate}}</td>
                                            <td>{{$Trip->EraseDate}}</td>
                                            <td>{{App\Models\BillOfLanding::where('trip_id','=',$Trip->id)->count()}}</td>

                                            <td><button class="btn btn-primary AddBills" id="{{$Trip->id}}">اضافة بوليصة</button></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>

                </div>
                </div>
            </div>







              <div class="row">


            <div class="container">
                <div class="col-lg-12  card">

                    <div class="card-header">
                        <h3 class="card-title">تعبئة البوالص</h3>
                    </div>
                    <div class="card-body">


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">الرحلات</label>
                                <select  class="form-control select2" id="Trips"  name="Trips" >
                                    <option disabled></option>
                                    @foreach($Trips as $Trip)
                                        <option value="{{$Trip->id}}">


                                            {{ '2021/'
                                            .'/'.$Trip->TripNumber
                                             .'/'.$Trip->shipName
                                            .'/'.\App\Models\Port::find($Trip->port_out)->name
                                            }}

                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>





                        <div class="col-lg-12 BillDiv">
                            <div class="form-group">
                                <label class="form-label">البوليصة</label>
                                <select  class="form-control select2" id="Bill"  name="Bills" >

                                </select>
                            </div>

                            <a href="" id="Go">فتح</a>
                        </div>


                        @if($TotalContainer>0)


                            <div class="row">
                                <div class="container">
                                    <div class="col-lg-12 ">
                                        <p class="lead text-danger">
                                            {{$bill_code}}
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="row">


                                <form  method="post" action="{{url('/StoreBillContent')}}">
                                    @csrf
                                    <input type="hidden" value="{{$bill_id}}" name="bill_code">
                                      @for($i=1;$i<=$TotalContainer;$i++)

                                    <fieldset class="scheduler-border card">

                                        <legend class="scheduler-border">{{$i}}معلومات الحاوية  عدد :</legend>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label"> رقم الحاوية</label>
                                            <input type="text"  name="containerNumber[]" class="form-control"   placeholder="رقم الحاوية" required>
                                        </div>
                                    </div>



                                        <div class="row">



                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"> الوزن</label>
                                                    <input type="text"  name="weight[]"    class="form-control" placeholder="الوزن" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">الحجم</label>
                                                    <input type="text"  name="Size[]"    class="form-control" placeholder="الحجم" required>
                                                </div>
                                            </div>


                                            </div>




                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">نوع الحاوية</label>
                                                <select  class="form-control "  name="containerType_id[]" required>
                                                    <option disabled></option>

                                                        <option value="1">1</option>
                                                       <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">نوع الحاوية</label>
                                                <select  class="form-control"  name="IsColdContainer[]" required>
                                                    <option disabled></option>

                                                    <option value="1">مبردة</option>
                                                    <option value="0">غير مبردة</option>
                                                </select>
                                            </div>
                                        </div>





                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">وصف</label>
                                                <textarea   name="containerDescription[]" class="form-control"   placeholder="وصف" required ></textarea>
                                            </div>
                                        </div>




                                    </fieldset>



                            @endfor

                                    <button type="submit" class="btn btn-primary">انشاء</button>
                                </form>

                                @endif
                         </div>




                    </div>

                </div>
            </div>
        </div>


        </div>



    <!--
     Model Area
     -->






    <form  method="post" action="{{url('/StoreNewBill')}}">
        @csrf
        <div class="modal" id="BillTripModel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">معلومات البوصيلة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <input type="hidden" name="TripId" id="TripIdForAddBill">


                        <div class="row">


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">اسم المزود</label>
                                    <input type="text"  name="shippers" class="form-control"   placeholder="اسم المزود" >
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">رقم البوليصة</label>
                                    <input type="text"  name="BillOfLading"    class="form-control" placeholder="رقم البوليصة" >
                                </div>
                            </div>




                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">عدد الحاويات</label>
                                    <input type="number"  name="TotalContainer"    class="form-control" placeholder="رقم البوليصة" >
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">الزبون</label>
                                    <select  class="form-control select2" id="ClientSelector"  name="Client" >
                                        <option disabled></option>
                                        @foreach($Clients as $Client)
                                            <option value="{{$Client->id}}">{{$Client->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>



                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">انشاء</button>
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


            $('.BillDiv').hide();
            $('#ClientSelector').select2(
                {
                 //   theme: "classic",
                    placeholder:'اختر الزبون',
                //    parentId:"BillTripModel"
                    dropdownParent: $('#BillTripModel')
                }
            );
            //  alert();

            $('#Trips').on('change',function () {


               // alert("####");
                var id=$(this).val();


                $("#Bill").select2({
                    placeholder: "اختر البوليصة",
                    ajax: {
                        url: '{{"/GetBillsByTripId/"}}',
                        data: function (params) {
                            var query = {
                                search: params.term,
                                TripId: id
                            }
                            return query
                        }
                    }
                });


                $('.BillDiv').show();



            });



            $('#Bill').on('change',function () {
                var id=$(this).val();


                var new_url='{{url('/TripManagementFillBill/')}}/?id='+id;
                window.history.pushState("data","Title",new_url);
                document.title="Bill number="+id;
                $("#Go").href=new_url;



            });


            $('body').on('click', '.AddBills', function () {
                var id=$(this).attr("id");
                $("#TripIdForAddBill").val(id);
                $('#BillTripModel').modal('show')
            });


            $('#Trips').select2(
                {
                    //   theme: "classic",
                    placeholder:'اختر الرحلة',
                    //    parentId:"BillTripModel"
                  //  dropdownParent: $('#BillTripModel')
                }
            );




        });
    </script>
@endsection