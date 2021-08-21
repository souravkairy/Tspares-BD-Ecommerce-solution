<footer class="footer">
    © 2019 - 2020 Stexo <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</span>.
</footer>

     </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/metismenu.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('backend/assets/js/waves.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('backend/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/raphael/raphael.min.js')}}"></script>

    <script src="{{ asset('backend/assets/pages/dashboard.init.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/assets/pages/datatables.init.js')}}"></script>

    <script src="{{ asset('backend/plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{ asset('backend/assets/pages/chartjs.init.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>

        @if(Session::has('message'))

          var type = "{{Session::get('alert-type','info')}}";

          switch(type){

            case 'info':

              toastr.info("{{ Session::get('message') }}");

              break;

            case 'success':

              toastr.success("{{ Session::get('message') }}");

              break;

            case 'warning':

              toastr.warning("{{ Session::get('message') }}");

              break;

            case 'error':

              toastr.error("{{ Session::get('message') }}");

              break;

        }

        @endif

    </script>

    <script>
    jQuery(document).ready(function(){
        $('.summernote').summernote({
            height: 200,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                 // set focus to editable area after initializing summernote
        });
    });
    </script>

</body>

</html>
