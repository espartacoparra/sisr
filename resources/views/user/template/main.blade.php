<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap4.0.0/dist/css/bootstrap.css') }}">
  
  
  <link rel="stylesheet" type="text/css" href="{{asset('chosen/chosen.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('Trumbowyg/dist/ui/trumbowyg.css') }}">

 <link rel="stylesheet" type="text/css" href="{{asset('startbootstrap/vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Custom fonts for this template-->
  <link href="{{asset('startbootstrap/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('startbootstrap/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('startbootstrap/css/sb-admin.css')}}" rel="stylesheet">
 <style type="text/css">
    #ac{
      
      border-radius: 10px;
      padding: 10px;
      background-color: white;
    }
     #colorbar{
      color: white;
    }
 </style>
</head>


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  @include('user.template.partials.sticky')
  @include('user.template.partials.nav')
    <div class="content-wrapper">
    <div class="container-fluid" id="contenido">  
        <div id="ac">
        @yield('content')
        </div>
      <!-- Breadcrumbs-->
     
      <!-- Icon Cards-->
      
      <!-- Area Chart Example-->
      
          <!-- Example Bar Chart Card-->
         
          <!-- Card Columns Example Social Feed-->
          
            <!-- Example Social Card-->
            
            <!-- Example Social Card-->
            
            <!-- Example Social Card-->
           
            <!-- Example Social Card-->
            
          <!-- /Card Columns-->
        
          <!-- Example Pie Chart Card-->
          
          <!-- Example Notifications Card-->
               <!-- Example DataTables Card-->
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   @include('user.template.partials.footer')
    </div>
    <!-- Bootstrap core JavaScript-->

    <script src="{{asset('startbootstrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('jquery3.2.1.js')}}"></script>
   
<script type="text/javascript" src="{{ asset('bootstrap4.0.0/dist/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ asset('bootstrap3.3.7/js/bootstrap.js') }}"></script>
  
  <script type="text/javascript" src="{{asset('Trumbowyg/dist/trumbowyg.js')}}"></script>


<script src="{{asset('chosen/chosen.jquery.js')}}"></script>
  @yield('script')

   <!-- Bootstrap core JavaScript-->
    <script src="{{asset('startbootstrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('startbootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('startbootstrap/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('startbootstrap/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('startbootstrap/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('startbootstrap/js/sb-admin-datatables.min.js')}}"></script>
  </div>
  </div>
  
</body>

</html>
