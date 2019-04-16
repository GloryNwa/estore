<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Ce247</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/csss/bootstrap.min.css" rel="stylesheet">
  <link href="/csss/menu.css" rel="stylesheet">
    <link href="/csss/style.css" rel="stylesheet">
  <link href="/csss/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/css/custom.css" rel="stylesheet">
  
  <!-- MODERNIZR MENU -->
  <script src="/js/modernizr.js"></script>

</head>

<body>

<?php


//dd( session('currency'));

if(!empty(session('currency'))){
    $currency2 = session('currency');
    // $amount = $_GET['amountbox'];
    switch ($currency2) {

    case 'USD':
      $audioUnit = 3;
      $videoUnit = 6;
      $ceflixQuaterly = 5;
      $ceflixYearly = 16;
      $ceflixMonthly = 2;
      $symbol = "$";
      $currency = "USD";
      // $amount = "amountbox";
      break;
     

   case 'GBP':
      $audioUnit = 3;
      $videoUnit = 5 ;
      $ceflixMonthly =2 ;
      $ceflixQuaterly =3;
      $ceflixYearly =12 ;
      $symbol = "£";
      $currency = "GBP";
      // $amount = "amountbox";
      break;


   case 'EUR':
      $audioUnit = 3;
      $videoUnit = 6 ;
      $ceflixMonthly = 2;
      $ceflixQuaterly = 4;
      $ceflixYearly = 14 ;
      $symbol = "€";
      $currency = "EUR";
      // $amount = "amountbox";
      break;



   case 'ZAR':
      $audioUnit = 13  ;
      $videoUnit = 25;
      $ceflixMonthly = 19;
      $ceflixQuaterly = 531;
      $ceflixYearly = 208;
      $symbol = "R";
      $currency = "ZAR";
      // $amount = "amountbox";
      break;



   case 'NGN':
      $audioUnit = 200;
      $videoUnit = 400;
      $ceflixMonthly = 500;
      $ceflixQuaterly = 1400;
      $ceflixYearly= 5500;
      $symbol ="₦";
      $currency = "NGN";
      // $amount = "amountbox";
      break;
    

    default:
      $audioUnit = 200;
      $videoUnit = 400;
      $ceflixMonthly = 500;
      $ceflixQuaterly = 1400;
      $ceflixYearly = 5500;   
      $symbol ="₦";
      $currency = "NGN";
      // $amount = "amountbox";
      break;
    }
}else{

      $audioUnit = 200;
      $videoUnit = 400;
      $ceflixMonthly = 500;
      $ceflixQuaterly =1400;
      $ceflixYearly = 5500;    
      $symbol ="₦";
      $currency = "NGN";
      // $amount = "amountbox";
}



    ?>
  
 
  <!-- <div id="loader_form">
    <div data-loader="circle-side-2"></div>
  </div><!-- /loader_form -->
  
  
  <!-- /menu -->
  
  <div class="container-fluid full-height">
    <div class="row row-height">
      <div class="col-lg-6 content-left" style="background-color: #0a316a">
        <div class="content-left-wrapper">
          <a href="" id="logo"><img src="img/lw.png" alt="" width="100" height="80"></a>
          <div id="social">
            
          </div>
          <!-- /social -->
          <div>
            <figure><img src="img/walking_screen_opt.png" alt="" class="img-fluid"></figure>
            <h2>Ce247 Campaign</h2>
            <p style="font-size: 18px">Is an opportunity to avail yourself to the teachings of our Man of God and the good music library of the Loveworld Nation. </p>
          <!--  <a href="https://themeforest.net/item/wilio-survey-and-multipurpose-form-wizard/22864819?ref=ansonika" class="btn_1 rounded" target="_parent">Purchase this template</a>
            <a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a> -->

          </div>
          <div class="copy">Copyright © Ce247 Campaign -2019 </div>
        </div>      
      </div>


      <div class="col-lg-6 content-right" id="start">
        <div id="wizard_container">
        <div class="pg-tp">
    
            @if(count($errors) >0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
              @endforeach
            @endif 



          @if(session('response'))
          <div class="alert alert-{{session('type')}}">{{session('response')}}</div>
          @endif

         

<?php 
           $action = 'https://www.paypal.com/cgi-bin/webscr';
              $paypal = true;
              $paypal_email = 'anyanwufelix@gmail.com';
              //$paypal_email = 'digitalmart@loveworld360.com';
              $currency = "USD"
?>
          
          <span></span>
          </div>
            <!-- /Form-wizard -->


            
            <div align="center"><h1>{{ $symbol.session("amount")}}</h1></div>
            <form  method="POST" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                    {{ csrf_field() }}

                    <input type="hidden" name="business" value="{{$paypal_email}}" />
                    <input type="hidden" name="cmd" value="_xclick" />
                    <input type="hidden" name="cancel_return" value="{{url('/index')}}" />
                    <input type="hidden" name="return" value="{{url('/payment/success')}}/{{session('reference')}}" />

                    <input type="hidden" name="item_name" value="CE247 Campaign" />
                    <input type="hidden" name="item_number" value="1" /> 
                    <input type="hidden" name="custom" value="{{session('reference')}}"/>

                    <input type="hidden" name="amount" id="item_amount" value="1" /> 
                    <input type="hidden" name="currency_code" value="{{$currency}}" />

                 <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary" style=" width:100%;background-color: #0a316a; border:none">Proceed</button>
              </form>
              </div>
              </div>
              </div>

                <script>
                var x = document.getElementsByTagName("form");
                x[0].submit();// Form submission
                </script>

              </body>
              </html>