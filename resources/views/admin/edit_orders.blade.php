
<!DOCTYPE html>
<html>


<head>
  <!-- Meta-Information -->
  <title>CE247</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Vendor: Bootstrap 4 Stylesheets  -->
  <link rel="stylesheet" href="{{ URL::to("/")}}/css/bootstrap.min.css" type="text/css">

  <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="/css/icons.min.css" type="text/css">
  <link rel="stylesheet" href="{{ URL::to("/")}}/css/main.css" type="text/css">
  <link rel="stylesheet" href="{{ URL::to("/")}}/css/responsive.css" type="text/css">

  <!-- Color Scheme -->
  <link rel="stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color.css" type="text/css" title="color3">
  <link rel="alternate stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color1.css" title="color1">
  <link rel="alternate stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color2.css" title="color2">
  <link rel="alternate stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color4.css" title="color4">
  <link rel="alternate stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color5.css" title="color5">
</head>



<body class="expand-data panel-data">
    <div class="topbar">
        <div class="logo">
            <h5 style="color:#16183d;">
                <a href="#" title="">
                  <a href="" id="logo"><img src="../img/lw.png" alt="" width="60" height="50"></a>
                </a>
                  CE247 Campaign
            </h5>
        </div>
     
        <div class="topbar-bottom-colors">
            <i style="background-color: #2c3e50;"></i>
            <i style="background-color: #9857b2;"></i>
            <i style="background-color: #2c81ba;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #feb506;"></i>
            <i style="background-color: #e17c21;"></i>
            <i style="background-color: #bc382a;"></i>
        </div>
    </div>
    <!-- Topbar -->
  <header class="side-header expand-header" style="background-color:#16183d;">
        <div class="nav-head"style="background-color:#16183d;font-size: 18px">Admin Navigation
            <span class="menu-trigger"style="background-color:#16183d;">
                <i class="ion-android-menu"></i>
            </span>
        </div>
        <nav class="custom-scrollbar">
                <ul class="sb-drp">
                        <li>
                            <a href="{{('/admin')}}" title="">Dashbord</a>
                        </li>
                        
                        <li>
                            <a href="{{('/orders')}}"title="">Total Orders</a>
                        </li>
                         <li>
                            <a href="{{('/successful_orders')}}" title="">Successful Orders</a>
                        </li>
                         <li>
                            <a href="{{('/pending')}}" title="">Pending Orders</a>
                        </li>
                         <li>
                            <a href="{{('/cancelled_orders')}}" title="">Cancelled Orders</a>
                        </li>
                          <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                   
                    </ul>

                    <!-- Right Side Of Navbar -->
                  
        </nav>
    </header>
   
 
    <!-- Side Header -->

    <!-- Options Panel -->
   
    <!-- Page Top -->

    <div class="panel-content">
     <div class="filter-items">
      <div class="row grid-wrap mrg20">
         <div class="bg-img" style="background-image: url(../images/resource/bg-img1.png); background-color:#0a316a "></div>
       <div class="container" style="max-width: 700px; padding-top:70px ">
        <div class="panel-content">
         <div class="widget pad40-50"> 
          <div class="widget-title2">
          <h4>Edit Blade</h4>
          </div><br> 
          <hr>  
      
      <form class="form-wrp" method="POST" action="{{url('/edit')}}"enctype="multipart/form-data">
      {{ csrf_field() }}
       <div class="form-group">
         <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <br>
        <div class="row mrg15">
          <div class="col-md-12 col-sm-12 col-lg-12">
          Name:
            <input class="brd-rd5" type="text" name="name" value="{{ $order->name}}" placeholder="name*" style="color: black; font-size: 15px;font-weight: bold" disabled="disable" />
          </div>
          
           <div class="col-md-12 col-sm-12 col-lg-12">
           Email:
            <input class="brd-rd5" type="text" name="email" value="{{ $order->email}}" placeholder="email*" style="color: black; font-size: 15px;font-weight: bold"  disabled="disable"/>
          </div>
           <div class="col-md-12 col-sm-12 col-lg-12">
           Phone No:
            <input class="brd-rd5" type="text" name="phone" value="{{ $order->phone}}" placeholder="phone*"  style="color: black; font-size: 15px;font-weight: bold" disabled="disable" />
          </div>
           <div class="col-md-12 col-sm-12 col-lg-12">
           Church:
            <input class="brd-rd5" type="text" name="church" value="{{ $order->church}}" placeholder="church*" style="color: black; font-size: 15px;font-weight: bold" disabled="disable" />
          </div>
           <div class="col-md-12 col-sm-12 col-lg-12">
          messages:
        <?php 
        //Explode array using the separating comma to convert string to an array 
         $exploded_services = explode(',',$order->services);
       ?>
        <? //loopping through the array ?>

          @foreach($exploded_services as $services)
        <?php 
        //Fetch product details from database based on the id from array string
          $order_details = \App\Product::where("id",$services)->first(); 

       ?>
         <input class="brd-rd5 " type="text" name="staus" value=" {{$order_details->title}}" placeholder="status*"  style="color: black; font-size: 15px;background-color:#c6e2ff;font-weight: bold" disabled="disable"/>
         @endforeach
                                     
          </div>
           <div class="col-md-12 col-sm-12 col-lg-12">
           Currency:
            <input class="brd-rd5" type="text" name="currency" value="{{ $order->currency}}" placeholder="currency*"  style="color: black; font-size:15px;font-weight: bold" disabled="disable"/>
          </div>
           <div class="col-md-12 col-sm-12 col-lg-12">
           Amount:
            <input class="brd-rd5" type="text" name="amount" value="{{ $order->amountbox}}" placeholder="amount*" style="color: black; font-size:15px;font-weight: bold"  disabled="disable"/>

          </div>
           <div class="col-md-12 col-sm-12 col-lg-12">
           Status:
   
            <select name="status" required class="form-control">
                      <option value="{{$order->status}}" style="font-weight: bold">{{$order->status}}</option>
                        <option value="pending" style="font-weight: bold">Pending</option>
                          <option value="success" style="font-weight: bold">Success</option>
          </select>
          </div>

            <div class="col-md-12 col-sm-12 col-lg-12">
          
            <input class="brd-rd5" type="hidden" name="order-id" value="{{ $order->id}}" placeholder="amount*" style="color: black; font-size: 15px;"/>

          </div>

          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-lg-12">
    <!--       <div class="col-md-6 col-md-offset-4"> -->
           <button type="submit" class="btn btn-primary btn-large btn-block"style="border: none; ">
            Update
           </button>
          </div>
         </div>
        </div>
       </div>
      </form>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <footer>
      
            <div class="copy" style="color:#0a316a">Copyright © Ce247 Campaign -2019 </div>
       
    </footer>

    <!-- Vendor: Javascripts -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Vendor: Followed by our custom Javascripts -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/select2.min.js" type="text/javascript"></script>
    <script src="js/slick.min.js" type="text/javascript"></script>

    <!-- Our Website Javascripts -->
    <script src="js/isotope.min.js" type="text/javascript"></script>
    <script src="js/isotope-int.js" type="text/javascript"></script>
    <script src="js/jquery.counterup.js" type="text/javascript"></script>
    <script src="js/waypoints.min.js" type="text/javascript"></script>
    <script src="js/highcharts.js" type="text/javascript"></script>
    <script src="js/exporting.js" type="text/javascript"></script>
    <script src="js/highcharts-more.js" type="text/javascript"></script>
    <script src="js/moment.min.js" type="text/javascript"></script>
    <script src="js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="js/fullcalendar.min.js" type="text/javascript"></script>
    <script src="js/jquery.downCount.js" type="text/javascript"></script>
    <script src="js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="js/jquery.formtowizard.js" type="text/javascript"></script>
    <script src="js/form-validator.min.js" type="text/javascript"></script>
    <script src="js/form-validator-lang-en.min.js" type="text/javascript"></script>
    <script src="js/cropbox-min.js" type="text/javascript"></script>
    <script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="js/ion.rangeSlider.min.js" type="text/javascript"></script>
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="js/styleswitcher.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>


 
</body>

</html>