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
  <!-- Vendor: Javascripts -->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <!-- Vendor: Followed by our custom Javascripts -->
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>


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
           <marquee style="color:#408000; font-size: 20px">Thank you, your transaction has been completed successfully. We'll get back to you in a short while!</marquee>
        <div class="pg-tp">
 
            @if(count($errors) >0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
              @endforeach
            @endif 


          @if(session('response'))
          <div class="alert alert-{{session('type')}}">{{session('response')}}</div>

          @endif
    
          
          
          </div>
         </div>
       </div>
      </div>
   </div>

   <script type="text/javascript">
     $(document).ready(function(){
      var form = $('#form');
      form.submit();
     });
   </script>
</body>

</html>

