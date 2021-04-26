<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://patict.vn/index/img/logogo.png">
    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{!! asset('admin/assets/plugins/chartist-js/dist/chartist.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('admin/assets/plugins/chartist-js/dist/chartist-init.css')!!}" rel="stylesheet">
    <link href="{!! asset('admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')!!}" rel="stylesheet">
    <link href="{!! asset('admin/assets/plugins/css-chart/css-chart.css')!!}" rel="stylesheet">
    
    <link href="{!! asset('admin/assets/plugins/calendar/dist/fullcalendar.css')!!}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{!! asset('admin/css/style.css')!!}" rel="stylesheet">
    <link href="{!! asset('admin/css/style1.css')!!}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{!! asset('admin/css/colors/megna-dark.css')!!}" id="theme" rel="stylesheet">
    
   <!--  <link rel="stylesheet" href="{!! asset('admin/assets/plugins/dropify/dist/css/dropify.min.css') !!}"> -->
    
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- select2 -->
    <link href="{!! asset('admin/assets/plugins/select2/dist/css/select2.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- end -->
    <link rel="stylesheet" href="{!! asset('admin/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')!!}"  />
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
     
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-85622565-1', 'auto');
    ga('send', 'pageview');
    </script>
</head>
<?php
        use App\nhatky;
        use Carbon\Carbon;
        use App\User;
      
        $check = DB::table('users')->select('id')->where('id',Auth::user()->id)->first();
         $dt = Carbon::now();
       
        if($check->id == auth::user()->id )
        {

            $update1 = DB::table('nhatkys')
            ->where('user_id',auth::user()->id)->first();
           
            if($update1){
                
                $update = nhatky::find($update1->id);
                $update->user_id = auth::user()->id; 
                $update->thoigian = $dt;
                $update->thaotac = 'đăng nhập';   
                $update->save();
               
            }else{
                $new = New nhatky();
                $new->user_id = auth::user()->id;
                $new->thoigian = $dt;
                $new->thaotac = 'đăng nhập';
                $new->save(); 
            }
        }
      

    ?>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('admin.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('admin.menu_left')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('admin.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{!! asset('admin/assets/plugins/jquery/jquery.min.js')!!}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{!! asset('admin/assets/plugins/bootstrap/js/tether.min.js')!!}"></script>
    <script src="{!! asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')!!}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{!! asset('admin/js/jquery.slimscroll.js')!!}"></script>
    <!--Wave Effects -->
    <script src="{!! asset('admin/js/waves.js')!!}"></script>
    <!--Menu sidebar -->
    <script src="{!! asset('admin/js/sidebarmenu.js')!!}"></script>
    <!--stickey kit -->
    <script src="{!! asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')!!}"></script>
    <!--Custom JavaScript -->
    <script src="{!! asset('admin/js/custom.min.js')!!}"></script>
    <script src="{!! asset('admin/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')!!}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <!-- <script src="{!! asset('admin/assets/plugins/Chart.js/chartjs.init.js') !!}"></script>
    
    <script src="{!! asset('admin/assets/plugins/Chart.js/Chart.min.js') !!}"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{!! asset('admin/assets/plugins/demo/chart-area-demo.js') !!}"></script>
    <!-- Vector map JavaScript -->
    <script src="{!! asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')!!}"></script>
    <script src="{!! asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')!!}"></script>
    <!-- Calendar JavaScript -->
    <script src="{!! asset('admin/assets/plugins/moment/moment.js')!!}"></script>
    <script src="{!! asset('admin/assets/plugins/calendar/dist/fullcalendar.min.js')!!}"></script>
    <script src="{!! asset('admin/assets/plugins/calendar/dist/jquery.fullcalendar.js')!!}"></script>
    <script src="{!! asset('admin/assets/plugins/calendar/dist/cal-init.js')!!}"></script>
    <!-- sparkline chart -->
    <script src="{!! asset('admin/assets/plugins/sparkline/jquery.sparkline.min.js')!!}"></script>
    
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{!! asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js')!!}"></script>

    <script src="{!! asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')!!}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="{!! asset('admin/js/tab-js.js')!!}"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#text',
    // plugins: "image code",

    image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
    width: 500,
    height: 400,
    plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools responsivefilemanager'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | responsivefilemanager',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    templates: [

      { title: 'Test template 1', content: 'Test 1' },

      { title: 'Test template 2', content: 'Test 2' }

    ],

    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {title: file.name});
            };
            reader.readAsDataURL(file);
        };
        input.click();
    }
  });
</script>
<script type="text/javascript">
  tinymce.init({
    selector: '#text1',
    // plugins: "image code",

    image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
    width: 500,
    height: 400,
    plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools responsivefilemanager'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | responsivefilemanager',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    templates: [

      { title: 'Test template 1', content: 'Test 1' },

      { title: 'Test template 2', content: 'Test 2' }

    ],

    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {title: file.name});
            };
            reader.readAsDataURL(file);
        };
        input.click();
    }
  });
</script>

    <script>
    $('input[type="checkbox"]').change(function(e) {

  var checked = $(this).prop("checked"),
      container = $(this).parent(),
      siblings = container.siblings();

  container.find('input[type="checkbox"]').prop({
    indeterminate: false,
    checked: checked
  });

  function checkSiblings(el) {

    var parent = el.parent().parent(),
        all = true;

    el.siblings().each(function() {
      let returnValue = all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
      return returnValue;
    });
    
    if (all && checked) {

      parent.children('input[type="checkbox"]').prop({
        indeterminate: false,
        checked: checked
      });

      checkSiblings(parent);

    } else if (all && !checked) {

      parent.children('input[type="checkbox"]').prop("checked", checked);
      parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
      checkSiblings(parent);

    } else {

      el.parents("li").children('input[type="checkbox"]').prop({
        indeterminate: true,
        checked: false
      });

    }

  }

  checkSiblings(container);
});
</script>
<!-- select 2 -->
<script src="{!! asset('admin/assets/plugins/select2/dist/js/select2.full.min.js') !!}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
        // For select 2
        $(".select2").select2();

    });
</script>
<!-- end -->


</body>

</html>
