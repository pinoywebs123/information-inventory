<!DOCTYPE html>
<html lang="en">

<head>
  <title>Information and Inventory System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inforatation and Inventory System">
    <meta name="author" content="Jinky Baguasan Tumasis">
    <meta name="keyword" content="Information and Inventory System>


  <link href="{{URL::to('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('dashboard/css/bootstrap-theme.css')}}" rel="stylesheet">
 
  <link href="{{URL::to('dashboard/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{URL::to('dashboard/css/font-awesome.min.css')}}" rel="stylesheet" />
  <link href="{{URL::to('dashboard/css/widgets.css')}}" rel="stylesheet">
  <link href="{{URL::to('dashboard/css/style.css')}}" rel="stylesheet">
  <link href="{{URL::to('dashboard/css/style-responsive.css')}}" rel="stylesheet" />
  <script src="{{URL::to('tables/jquery-1.12.3.js')}}"></script>
   @yield('styles') 
 
</head>

<body>
 
  <section id="container" class="">
  
    @include('admin.nav')
    
    @include('admin.side')
    
    <section id="main-content">
      <section class="wrapper">
       
        <div class="row">
          @yield('contents')
        </div>
      </section>
    </section>
  

 

</body>
  
  <script src="{{URL::to('dashboard/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('dashboard/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{URL::to('dashboard/js/jquery.nicescroll.js')}}"></script>
  <script src="{{URL::to('dashboard/js/scripts.js')}}"></script>
  @yield('scripts')
</html>
