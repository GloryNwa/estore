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
    <link href="/css/menu.css" rel="stylesheet">
    <link href="/csss/style.css" rel="stylesheet">
    <link href="/csss/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/css/custom.css" rel="stylesheet">
  
  <!-- MODERNIZR MENU -->
  <script src="/js/modernizr.js"></script>

</head>

<body>

<?php



if(isset($_GET['currency'])){
    $currency = $_GET['currency'];
    // $amount = $_GET['amountbox'];
    switch ($currency) {

    case 'USD':
      $audioUnit = 3;
      $videoUnit = 6;
      $ceflixQuaterly = 5;
      $ceflixYearly = 16;
      $ceflixMonthly = 2;     
      $ceflixMonthlyBulk = 200;
      $ceflixQuaterlyBulk = 250;
      $ceflixYearlyBulk = 800;
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

      $ceflixMonthlyBulk = 200;
      $ceflixQuaterlyBulk = 150;
      $ceflixYearlyBulk = 600;
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

      $ceflixMonthlyBulk = 200;
      $ceflixQuaterlyBulk = 200;
      $ceflixYearlyBulk = 700;
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

      $ceflixMonthlyBulk = 1900;
      $ceflixQuaterlyBulk = 10400;
      $ceflixYearlyBulk = 26550;
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

      $ceflixMonthlyBulk = 50000;
      $ceflixQuaterlyBulk = 750000;
      $ceflixYearlyBulk = 165000;
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

      $ceflixMonthlyBulk = 50000;
      $ceflixQuaterlyBulk = 750000;
      $ceflixYearlyBulk = 165000; 
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

      $ceflixMonthlyBulk = 50000;
      $ceflixQuaterlyBulk = 750000;
      $ceflixYearlyBulk = 165000;  
      $symbol ="₦";
      $currency = "NGN";
      // $amount = "amountbox";
}



    ?>
 <!--  
  <div id="preloader">
    <div data-loader="circle-side"></div>
  </div> --><!-- /Preload -->
  
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
          <div class="copy">Copyright © Ce247 Campaign - 2019 </div>
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

          <?php if(isset($_GET['currency']) && $_GET['currency'] != 'NGN'){

               //$action = 'https://www.paypal.com/cgi-bin/webscr';
             $action = 'https://www.sandbox.paypal.com/cgi-bin/webscr';

          
              $paypal = true;
              $paypal_email = 'anyanwufelix@gmail.com';
              //$paypal_email = 'digitalmart@loveworld360.com';

          } else {

              $action = url('/form');
              $paypal = false;
           }
          ?>

          
          <span></span>
          </div>
            <!-- /Form-wizard -->
            <form  method="POST" action="/form">
            {{ csrf_field() }}

                 
              
                  <h3 class="main_question">Please fill with your details</h3>
                  <div class="form-group">
                    <input type="text" name="name" class="form-control required" placeholder="First Name" required="required">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control required" placeholder="Email" requried="required">
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control required" placeholder="Phone" required="required">
                  </div>
                    <div class="form-group">
                    <input type="text" name="church" class="form-control required" placeholder="Church and Zone" required="required">
                  </div>
                   
                  <!-- <div class="row"> -->
                   <h6> Select Sevices:</h6>
                 <div class="row"style="padding: 6px">
                  <!-- <div  class="col-md-4 col-sm-4 col-xs-4" align="center" >
                      <img src="img/head.jpg"  style="width:65px; height: 50px;  margin: 0 3em 0 3em;"  data-toggle="modal" data-target="#flipFlop"required><br/>
                      <h6>Audio</h6>
                   </div>

                  <div  class="col-md-4 col-sm-4 col-xs-4" align="center">
                    <img src="img/cd.jpg" style="width:60px;"data-toggle="modal" data-target="#flipUp" required><br>
                    <h6>Video</h6>
                   </div>
 -->
                   <div  class="col-md-4 col-sm-4 col-xs-4" align="center">
                    <div class="col-xs-3" style="">
                     <img src="img/ceflixtuneslogo1.png" style="width:70%;"data-toggle="modal" data-target="#flipOn" required><br>
                      <h6>ceflixTunes</h6>
                    </div>
                   </div>
                  <div style="width: 100%;color:#000;font-size: 20px; text-align: center;"><br/><span class="amountbox" name="currency"></span></div>                
                 </div>              
                <hr>
               <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary" style=" width:100%;background-color: #0a316a; border:none">Buy Now</button>      
            </div> 
      <!-- Modal Starts Here -->         
         <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
              <div class="modal-header">
               <h5 class="modal-title" id="modalLabel" style="">Audio Messages</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>           
              </div>
              <div class="modal-body">
              <div class="row">
                <div class="col-md-4" style="background-color:#16183d; color: #fff">
                <div class="">      
                  <div style="width: 100%;color:#fff;font-size: 20px; text-align: center;  height: 100px;background-color:#16183d"><br /><span class="amountbox" name="currency"></span></div>                       
                 </div>
              </div>      
                <div class="col-md-8"style="">
                <div style="max-height:400px; overflow: scroll;overflow-x:hidden;">
                  <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                       <th scope="col">Select</th>
                       <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Format</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
             
                  @if(count($products) > 0)
                   @foreach($products as $product)
                  
                  <tr>
                   <th scope="row"><input class="product_list" type="checkbox" name="services[]" amount="{{(int)$product->unit * $audioUnit}}" value="{{$product->id }}"><br></th>
                  <td style="font-size: 13px; ">{{$product->id }}</td>
                  <td style="font-size: 15px">{{$product->title}}</td>
                  <td style="font-size: 13px;">{{$product->format}}</td>
                   <td style="font-size: 13px;">{{$symbol.(int)$product->unit * $audioUnit}}</td>
           
                  </tr>
               
                   @endforeach
                @endif
                </tbody>
                </table>
                </div>
                </div>
                </div>               
                 <br>
                </div>
                 <div class="modal-footer" style="border-top: none !important;">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top: 20px;background-color:#0a316a;border:none; color:#fff ">Close</button>
                </div>
                 </div>
                </div>
                </div> 

          <!-- MP4 modal -->       
     
            <div class="modal fade" id="flipUp" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="modalLabel" style="">Video Messages</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>              
              </div>
              <div class="modal-body">
                
        <div class="row">
          <div class="col-md-4" style="background-color:#16183d; color: #fff">
         <div class="" style="">            
      <div style="width: 100%;color:#fff;font-size: 20px; text-align: center;  height:100px;background-color:#16183d"><br /><span class="amountbox" name="currency"></span></div>
                            
      </div>
    </div>
<div class="col-md-8"style="">
<div style="max-height:400px; overflow: scroll;overflow-x:hidden;">
  <table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
       <th scope="col">Select</th>
       <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Format</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
@if(count($videos) > 0)
 @foreach($videos as $video)             
  
  <tr> 
    <th scope="row"><input class="product_list" type="checkbox" name="services[]" amount="{{(int)$video->unit * $videoUnit}}" value="{{$video->id }}"><br></th>
  <td style="font-size: 13px; ">{{$video->id }}</td>
  <td style="font-size: 15px">{{$video->title}}</td>
 <td style="font-size: 13px;">{{$video->format}}</td>
     <td style="font-size: 13px;">{{$symbol.(int)$video->unit * $videoUnit}}</td>

  </tr> 

   @endforeach
@endif
 <!--  -->
</tbody>
</table>
</div>
</div>
</div>    
 <br>
</div>
 <div class="modal-footer" style="border-top: none !important;">
<button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-top: 20px;background-color:#0a316a; border: none;color:#fff">Close</button>
</div>
 </div>
</div>
</div> 


<!-- Ceflix Tunes --> <!-- Ceflix Tunes --><!-- Ceflix Tunes --><!-- Ceflix Tunes --><!-- Ceflix Tunes -->       
        
            <div class="modal fade" id="flipOn" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">            
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Subscribe to ceflix tunes & enjoy unlimited music your way!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
             
              </div>
             <div class="modal-body">        
             <div class="row">
              <div class="col-md-4">
               <div class="" style="">                   
                <div style="width: 100%;color:#fff;font-size: 20px; margin-top: 0px; text-align: center;height:190px;background-color:#16183d"><br /><span class="amountbox" name="currency"></span></div>                         
              </div>
             </div>
            <div class="col-md-8"style="">
            <div style="max-height:400px; overflow: scroll;overflow-x:hidden;">
              <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Select</th>
                   <th scope="col">#</th>
                  <th scope="col">Subscription Plan Single</th>
                  <th scope="col">Price</th>
               <!--    <th scope="col">Bulk Purchase</th> -->
                
                </tr>
              </thead>
              <tbody>
              @if(count($ceflixTunes) > 0) 


              <?php $x = 1;?>  
                @foreach($ceflixTunes as $ceflixTune)  
                <?php 
                $format = trim($ceflixTune->format);

                      switch ($format) {
                        case 'Monthly':
                          # code...
                            $varFormat = $ceflixMonthly;
                          break;
                        
                          case 'Yearly':
                          # code...
                            $varFormat = $ceflixYearly;
                          break;
                      
                           case 'Quarterly':
                          # code...
                            $varFormat = $ceflixQuaterly;
                          break;
                        
                        default:
                          # code...
                          break;
                           }
                        ?>              
                           <tr>
                            <th scope="row"><input class="product_list" type="checkbox" name="services[]" amount="{{$varFormat}}" value="{{$ceflixTune->id }}"> <br></th>
                           <td style="font-size: 15px">{{$x++}}</td>    
                            <td style="font-size: 15px">{{$ceflixTune->format}}</td>    
                           
                             <td style="font-size: 13px;">{{$symbol.$varFormat}}</td> 
                          
                          <!--    -->              
                          </tr>
              @endforeach
            
            @endif
            </tbody>
            </table>
            </div>
            </div><br><br>
            <hr>






             <div class="col-md-8"style=" margin-left: 265px; margin-top: 50px">
            <div style="max-height:400px; overflow: scroll;overflow-x:hidden;">
              <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Select</th>
                   <th scope="col">#</th>
                  <th scope="col">Subscription Plan Bulk</th>
                  <th scope="col">Price</th>
               <!--    <th scope="col">Bulk Purchase</th> -->
                
                </tr>
              </thead>
              <tbody>
              @if(count($ceflixBulk) > 0) 


              <?php $x = 1;?>  
                @foreach($ceflixBulk as $ceflix)  
                <?php 
                $format = trim($ceflixTune->format);

                      switch ($format) {
                        case 'Monthly':
                          # code...
                            $varFormat = $ceflixMonthlyBulk;
                          break;
                        
                          case 'Yearly':
                          # code...
                            $varFormat = $ceflixYearlyBulk;
                          break;
                      
                           case 'Quarterly':
                          # code...
                            $varFormat = $ceflixQuaterlyBulk;
                          break;
                        
                        default:
                          # code...
                          break;
                           }
                        ?>              
                           <tr>
                            <th scope="row"><input class="product_list" type="checkbox" name="services[]" amount="{{$varFormat}}" value="{{$ceflix->id }}"><br></th>
                           <td style="font-size: 15px">{{$x++}}</td>    
                            <td style="font-size: 15px">{{$ceflix->format}}</td>                             
                             <td style="font-size: 13px;">
                               <select>
                               <option value="ceflixBulk">Select Bulk Plan</option>
                                <option value="{{$symbol.$varFormat}}">{{$symbol.$varFormat}}</option>
                                <option value="{{$symbol.$varFormat}}">{{$symbol.$varFormat}}</option>
                                <option value="{{$symbol.$varFormat}}">{{$symbol.$varFormat}}</option>
                               </select> 

                           </td>                         
                          <!--    -->              
                          </tr>
              @endforeach
            
            @endif
            </tbody>
            </table>
            </div>
            </div>
            </div>
          
            </div>
             <div class="modal-footer" style="border-top: none !important;">
            <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-top: 20px;background-color:#0a316a;border:none;color:#fff">Close</button>
            </div>
             </div>
            </div>
            </div>     
            <input type="hidden" name="currency" value="{{$currency}}">          
            <input type="hidden" id="totalAmount" name="amountbox" value="">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- COMMON SCRIPTS -->
  <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/common_scripts.min.js"></script>
  <script src="/js/velocity.min.js"></script>
  <script src="/js/functions.js"></script>

  <!-- Wizard script -->
  <script src="/js/survey_func.js"></script>

 <script>
 function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
 //set  initial cart amount to 0
 var amount = 0;

    $(".product_list").click(function (){

     var product_amount = parseInt($(this).attr("amount"));
      //fetch the amount of the selected producted stored in an attribute of input
     if($(this).is(':checked')){

      //add the current price of the selected product to previous total price
      amount = amount + product_amount
     

      
    }else{
           amount = amount - product_amount
      //Display total amount in Amount Box

    }
    //Display total amount in Amount Box
      $(".amountbox").html("<?php echo 'Total:  '  .$symbol?>"+numberWithCommas(amount))
       $("#totalAmount").attr("value",amount);

       $('#item_amount').val(amount);
 });

    var form = $('#form');
    $('#submit').click(function(e){
      
      if(amount == 0){
        e.preventDefault();
      }
    });

 </script>

</body>

</html>

