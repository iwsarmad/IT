
@section('footer')

<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                Copyright © 2021 <a href="#">TarosSYs</a>. Designed by <a href="#">افاق المعرقة</a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- End Footer-->
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<!-- Dashboard Core -->
<script src="{{url('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/js/vendors/jquery.sparkline.min.js')}}"></script>
<script src="{{url('assets/js/vendors/selectize.min.js')}}"></script>
<script src="{{url('assets/js/vendors/jquery.tablesorter.min.js')}}"></script>
<script src="{{url('assets/js/vendors/circle-progress.min.js')}}"></script>
<script src="{{url('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{url('assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>

<!-- Dashboard Core -->
<script src="{{url('assets/js/index1.js')}}"></script>

<!--Morris.js Charts Plugin -->
<script src="{{url('assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{url('assets/plugins/morris/morris.js')}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{url('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- Custom Js-->
<script src="{{url('assets/js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@yield('js')
</body>
</html>
@endsection
