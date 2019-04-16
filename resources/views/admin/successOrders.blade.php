<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>ce247</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="css/color-schemes/color1.css" title="color1">
    <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
    <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
    <link rel="alternate stylesheet" href="css/color-schemes/color5.css" title="color5">
</head>

<body class="expand-data panel-data">
    <div class="topbar">
        <div class="logo">
            <h5 style="color:#16183d;">
                <a href="#" title="">
                  <a href="" id="logo"><img src="img/lw.png" alt="" width="60" height="50"></a>
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
        <div class="nav-head"style="background-color:#16183d;">Admin Navigation
            <span class="menu-trigger"style="background-color:#16183d;">
                <i class="ion-android-menu"></i>
            </span>
        </div>
      <nav class="custom-scrollbar">
            <ul class="drp-sec">
                
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
                        
                    </ul>
                </li>
            </ul>
            <h4></h4>
          
            <h4></h4>
           
        </nav>
    </header>
   
 
    <!-- Side Header -->

    <!-- Options Panel -->
   
    <!-- Page Top -->

    <div class="panel-content">
        <div class="filter-items">
            <div class="row grid-wrap mrg20">
                
              
                         
                <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                 <div class="widget proj-order pad50-40">  
                  <form class="topbar-search"method="POST" action="{{url('/search')}}">
                     {{csrf_field()}}
                  <button type="submit">
                    <i class="ion-ios-search-strong"></i>
                  </button>
                      <input type="text" name="keyword" placeholder="Type and Hit Enter" required="required" />
                 </form>                        
                 <h4 class="widget-title">Search Results</h4>            
                        <div class="table-wrap">
                         <div style="max-height:400px; overflow: scroll;">
                            <table class="table table-bordered style2" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="font-size: 17px">Name</th>
                                        <th style="font-size: 17px">Email</th>
                                        <th style="font-size: 17px">Phone</th>
                                        <th style="font-size: 17px">Church</th>
                                        <th style="font-size: 17px">Products</th>
                                        <th style="font-size: 17px">Amount</th>
                                        <th style="font-size: 17px">Currency</th>
                                        <th style="font-size: 17px">Status</th>
                                        <th style="font-size: 17px">Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                       <!--   <?php  $products_order = 'product';   ?> -->
                
                         
                         @if(count( $success ) > 1)
                           <?php $x = 1;?>
                             @foreach($success as $status)
                                    <tr>
                                         <td>
                                           <span class="blue-bg indx" style="background-color: #16183d">{{$x++}}</span>
                                        </td>
                                         <td>
                                            <h4 class="name" style=" font-size: 17px ">{{$status->name}}</h4>
                                        </td>
                                        <td>
                                            <span class="ph#" style=" font-size: 17px" >{{$status->email}}</span>
                                        </td>
                                         
                                        <td>
                                            <span class="addr" style=" font-size: 17px ">{{$status->phone}}</span>
                                        </td>
                                        
                                       <td>
                                            <h4 class="name"style=" font-size: 17px ">{{$status->church}}</h4>
                                        </td>
                                        <td style=" font-size: 17px">
                                            <?php 
                                            //Explode array using the separating comma to convert string to an array 
                                                $exploded_services = explode(',',$status->services);
                                             ?>


                                             <? //loopping through the array ?>

                                             @foreach($exploded_services as $services)
                                                <?php 

                                                //Fetch product details from database based on the id from array string
                                                    $status_details = \App\Product::where("id",$services)->first(); 

                                           ?>
                                             <span class="addr alert alert-info"style="font-size: 17px">{{$status_details->title}}</span> <br />
                                            @endforeach

                                        </td>
                                         <td>
                                            <span class="ph#" style=" font-size: 17px" >{{$status->amountbox}}</span>
                                        </td>
                                        <td>
                                            <span class="ph#"style=" font-size: 17px;" >{{$status->currency}}</span>
                                        </td>
                                        <td>

                                         <span class="date" style="color: green; font-size: 17px">{{$status->status}}</span>
                                             <i class="fa fa-check" aria-hidden="true" style="color: green;"></i>
                                        </td>
                                         
                                        <td>
                                            <span class="addr" style="color: ;font-size: 17px ">{{$status->created_at}}</span>
                                        </td>
                                       
                                       
                                    </tr>                                
                                   </td>              
                
                                 @endforeach
                               @endif                   
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>           
      </div>
    <!-- Panel Content -->
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