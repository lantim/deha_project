<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN RAINBOW</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   	<link rel="stylesheet" href="asset_admin/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="asset_admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="asset_admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="asset_admin/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="asset_admin/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="asset_admin/js/Lightweight-Chart/cssCharts.css"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
   
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
        
        <div id="wrapper">
        @include('admin.layout.header')

        @yield('content')
       </div>

    <!-- jQuery Js -->
   
	
	<!-- Bootstrap Js -->
    <script src="asset_admin/js/bootstrap.min.js"></script>
	
	<script src="asset_admin/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="asset_admin/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="asset_admin/js/morris/raphael-2.1.0.min.js"></script>
    <script src="asset_admin/js/morris/morris.js"></script>
	
	
	<script src="asset_admin/js/easypiechart.js"></script>
	<script src="asset_admin/js/easypiechart-data.js"></script>
	
	 <script src="asset_admin/js/Lightweight-Chart/jquery.chart.js"></script>
	 <!-- DATA TABLE SCRIPTS -->
    <script src="asset_admin/js/dataTables/jquery.dataTables.js"></script>
    <script src="asset_admin/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- Custom Js -->
    <script src="asset_admin/js/custom-scripts.js"></script> 
 

</body>

</html>
