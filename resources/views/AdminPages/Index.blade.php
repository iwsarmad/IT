
@extends('TeamContainer.SideBar')
@section('content')



    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">الاعدادت</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">اعدادت المنظومة</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الضبط</li>
                </ol>
            </div>




            <div class="row">
                <div class="col-lg-12">
                    <form class="card" method="post" action="{{url('/StoresSetting')}}">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">لوحة الاعدادت</h3>
                        </div>
                        <div class="card-body">


                            @if($settingsCount==0)
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">سعر صرف اليورو للخط</label>
                                        <input type="number"  name="UroPrice" class="form-control"  placeholder="سعر صرف اليورو للخط" >
                                    </div>
                                </div>



                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label class="form-label">سعر صرف الليرو للزبون</label>
                                        <input type="number"  name="UroToCustomer"  class="form-control" placeholder="سعر صرف الليرو للزبون" >
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">سعر صرف الدولار للخط</label>
                                        <input type="number"  name="usdPrice"  class="form-control"  placeholder="سعر صرف الدولار للخط" >
                                    </div>
                                </div>



                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label class="form-label">سعر صرف الدولار للزبون</label>
                                        <input type="number"  name="usdToCustomer"  class="form-control" placeholder="سعر صرف الدولار للزبون" >
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">قيمة الخدمات في فاتورة الغرامات</label>
                                        <input type="text"  name="penaltyFessCost" class="form-control"  placeholder="قيمة الخدمات في فاتورة الغرامات" >
                                    </div>
                                </div>



                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label class="form-label">قيمة الخدمات في فاتورة امر التسليم</label>
                                        <input type="number"  name="HandOverFessCost" class="form-control" placeholder="قيمة الخدمات في فاتورة امر التسليم" >
                                    </div>
                                </div>




                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">حاوية مبردة 20 قدم</label>
                                        <input type="number"  name="ContainerTwentyKg"  class="form-control"  placeholder="حاوية مبردة 20 قدم" >
                                    </div>
                                </div>



                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label class="form-label">حاوية مبردة 40 قدم</label>
                                        <input type="number" name="ContainerFortyKg" class="form-control" placeholder="حاوية مبردة 40 قدم" >
                                    </div>
                                </div>





                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">حاوية 40 حتى 30 يوم</label>
                                        <input type="number"  name="ContainerFortyKgUpToThirtyOneDay" class="form-control"  placeholder="حاوية 40 حتى 30 يوم" >
                                    </div>
                                </div>



                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label class="form-label">حاوية 40 أكثر من 31 يوم</label>
                                        <input type="number"   name="ContainerFortyKgGraterThanThirtyOneDay" class="form-control" placeholder="حاوية 40 أكثر من 31 يوم" >
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">حاوية 20 حتى 30 يوم</label>
                                        <input type="number"   name="ContainerTwentyKgUpToThanThirtyOneDay" class="form-control"  placeholder="حاوية 20 حتى 30 يوم" >
                                    </div>
                                </div>



                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label class="form-label">حاوية 20 أكثر من 31 يوم</label>
                                        <input type="number"    name="ContainerTwentyKgGraterThanThirtyOneDay"  class="form-control" placeholder="حاوية 20 أكثر من 31 يوم" >
                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">رصيد الشركة</label>
                                        <input type="number" name="CompanyBalance" class="form-control"  placeholder="رصيد الشركة" >
                                    </div>
                                </div>




                            </div>
                              @else


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">سعر صرف اليورو للخط</label>
                                            <input type="number"  name="UroPrice" value="{{$settingsLast->UroPrice}}" class="form-control"  placeholder="سعر صرف اليورو للخط" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">سعر صرف الليرو للزبون</label>
                                            <input type="number"  name="UroToCustomer"  value="{{$settingsLast->UroToCustomer}}" class="form-control" placeholder="سعر صرف الليرو للزبون" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">سعر صرف الدولار للخط</label>
                                            <input type="number"  name="usdPrice"   value="{{$settingsLast->usdPrice}}"  class="form-control"  placeholder="سعر صرف الدولار للخط" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">سعر صرف الدولار للزبون</label>
                                            <input type="number"  name="usdToCustomer"   value="{{$settingsLast->usdToCustomer}}"  class="form-control" placeholder="سعر صرف الدولار للزبون" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">قيمة الخدمات في فاتورة الغرامات</label>
                                            <input type="text"  name="penaltyFessCost"    value="{{$settingsLast->penaltyFessCost}}" class="form-control"  placeholder="قيمة الخدمات في فاتورة الغرامات" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">قيمة الخدمات في فاتورة امر التسليم</label>
                                            <input type="number"  name="HandOverFessCost"     value="{{$settingsLast->HandOverFessCost}}"  class="form-control" placeholder="قيمة الخدمات في فاتورة امر التسليم" >
                                        </div>
                                    </div>




                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">حاوية مبردة 20 قدم</label>
                                            <input type="number"  name="ContainerTwentyKg"   value="{{$settingsLast->ContainerTwentyKg}}"  class="form-control"  placeholder="حاوية مبردة 20 قدم" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">حاوية مبردة 40 قدم</label>
                                            <input type="number" name="ContainerFortyKg"   value="{{$settingsLast->ContainerFortyKg}}"  class="form-control" placeholder="حاوية مبردة 40 قدم" >
                                        </div>
                                    </div>





                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">حاوية 40 حتى 30 يوم</label>
                                            <input type="number"  name="ContainerFortyKgUpToThirtyOneDay"  value="{{$settingsLast->ContainerFortyKgUpToThirtyOneDay}}" class="form-control"  placeholder="حاوية 40 حتى 30 يوم" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">حاوية 40 أكثر من 31 يوم</label>
                                            <input type="number"   name="ContainerFortyKgGraterThanThirtyOneDay"  value="{{$settingsLast->ContainerFortyKgGraterThanThirtyOneDay}}"  class="form-control" placeholder="حاوية 40 أكثر من 31 يوم" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">حاوية 20 حتى 30 يوم</label>
                                            <input type="number"   name="ContainerTwentyKgUpToThanThirtyOneDay"   value="{{$settingsLast->ContainerTwentyKgUpToThanThirtyOneDay}}"  class="form-control"  placeholder="حاوية 20 حتى 30 يوم" >
                                        </div>
                                    </div>



                                    <div class="col-lg-6 ">
                                        <div class="form-group">
                                            <label class="form-label">حاوية 20 أكثر من 31 يوم</label>
                                            <input type="number"    name="ContainerTwentyKgGraterThanThirtyOneDay"    value="{{$settingsLast->ContainerTwentyKgGraterThanThirtyOneDay}}"  class="form-control" placeholder="حاوية 20 أكثر من 31 يوم" >
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">رصيد الشركة</label>
                                            <input type="number" name="CompanyBalance" class="form-control"   value="{{$settingsLast->CompanyBalance}}"  placeholder="رصيد الشركة" >
                                        </div>
                                    </div>



                                </div>
                            @endif



                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">خزن</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@extends('TeamContainer.footer')