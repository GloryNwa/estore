<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Form;
use App\Product;
use App\Product_order;
use DB;


class formController extends Controller
{


/**
* Create a new controller instance.
*
*@return void
*/
public function __construct(){

  $this->middleware('web', ['except' => ['index', 'successful']]);
}

  //  Main Products Site Starts Here//


public function successful(){
 
      return view("form.successful");
               
    }


    public function index(){
     $products = DB::table('products')
     ->where('format','Audio')
     ->get();

     $videos = DB::table('products')
     ->where('format','Video')
     ->get();

      $ceflixTunes = DB::table('products')
      ->where('title','ceflix Yearly Subscription')
      ->orwhere('title','ceflix Quarterly Subscription')
      ->orwhere('title','ceflix Monthly Subscription')
     ->get();

      $ceflixBulk = DB::table('products')
      ->where('title','ceflix Yearly Subscription Bulk')
      ->orwhere('title','ceflix Quarterly Subscription Bulk')
      ->orwhere('title','ceflix Monthly Subscription Bulk')
     ->get();

     return view('form.index', [ 'products' => $products, 'videos' => $videos, 'ceflixTunes' => $ceflixTunes, 'ceflixBulk' => $ceflixBulk]); 

    }




    public function form(Request $request){
        $this->validate($request, [
             'name'  => 'required',
             'email' => 'required',
             'phone'  => 'required',
             'church' => 'required',
             'services' => 'required',
             
        ]);

        $currency = $request->get("currency");



//  If currency is no NGN, then redirect to paypal with payment details
        // if($currency!= 'NGN'){
        //   return redirect()->to('/paypal');
        //   exit;
        // }

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

             $amount = 0;

         //loop through arry from for to get the values 
             foreach ($request->get('services') as $value) {
                 # code...
               $product =  Product::where("id",$value)->first();

               //perform actions if product type is video 
                if($product->format == "Video"){
                    $amount = $amount + ($product->unit * $videoUnit);

                }

                if($product->format == "Audio"){
                     $amount = $amount + ($product->unit * $audioUnit);
                     
                }
                if($product->title == "ceflixSubscription"){
                     $amount = $amount + $ceflixMonthly;
                
                
             }
              if($product->title == "ceflixSubscription"){
                     $amount =  $amount + $ceflixQuaterly;
             }
             if($product->title == "ceflixSubscription"){
                     $amount =  $amount + $ceflixYearly;
            }      
             if($product->title == "ceflixSubscription"){
                     $amount =  $amount + $ceflixMonthlyBulk;
            }      
             if($product->title == "ceflixSubscription"){
             $amount =  $amount + $ceflixQuarterlyBulk;
             }      
             if($product->title == "ceflixSubscription"){
            $amount =  $amount + $ceflixYearlyBulk;
         }

       }
 
        


         /**
              Start payment gateway processing 

         **/


              $curl = curl_init();

        $email = $request->input('email');
          //the amount in kobo. This value is actually NGN 300

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode([
            'amount'=>$amount * 100,
            'email'=>$email,
          ]),
          CURLOPT_HTTPHEADER => [
            "authorization: Bearer sk_live_8d902762bd672095305750ec851adc5586b20bb2", //replace this with your own test key
            "content-type: application/json",
            "cache-control: no-cache"
          ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if($err){
          // there was an error contacting the Paystack API
          die('Curl returned error: ' . $err);
        }

        $tranx = json_decode($response, true);

       

        if(!$tranx['status']){
          // there was an error from the API
          print_r('API returned error: ' . $tranx['message']);
        }

             $form          = new Form();
             $form->name    = $request->input('name');
             $form->email   = $request->input('email');
             $form->phone   = $request->input('phone');
             $form->church  = $request->input('church');
             $form->reference  = $tranx['data']['reference'];

             $form->services = implode(",",$request->input('services'));
             // $form->ceflixTunes = $request->input('ceflixTunes');
             $form->currency  = $request->input('currency');
             $form->amountbox =$amount;
             $form->status ="pending";
  
             // $form->ceflixTunes = implode(",",$request->input('ceflixTunes'));
             $form->save();
       //dd($form);

        // comment out this line if you want to redirect the user to the payment page
        //print_r($tranx);


        // redirect to page so User can pay
        // uncomment this line to allow the user redirect to the payment page
        //header('Location: ' . $tranx['data']['authorization_url']);

           if($request->input('currency') != "NGN")  {

              //store variables in a session and redirect to paypal form

             session(['amount'=>$amount,'reference'=>$tranx['data']['reference'],'currency'=>$request->input('currency')]);

             return redirect("/paypal");
             exit;

           }


         return redirect($tranx['data']['authorization_url']);

        }



        public function loadpaypal(){
          
          return view("paypal");
        }


        public function callback(){


            $curl = curl_init();


            $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
            if(!$reference){
              die('No reference supplied');
            }

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer  pk_live_5958e70ab158dcab4cdaf08bd38b2cbb9f95884c",
                "cache-control: no-cache"
              ],
            ));


            $response = curl_exec($curl);
            $err = curl_error($curl);


            if($err){
              // there was an error contacting the Paystack API
              die('Curl returned error: ' . $err);
            }


            $tranx = json_decode($response);


            if(!$tranx->status){
              // there was an error from the API
              die('API returned error: ' . $tranx->message);
            }

            if('success' == $tranx->data->status){

              $payment = Product_order::where("reference",$tranx->data->reference)->first();
              $payment->status = $tranx->data->status;
              $payment ->save();

              return redirect("/index")->with("response","Your payment was successful")->with("type","success");
           
              // transaction was successful...
              // please check other things like whether you already gave value for this ref
              // if the email matches the customer who owns the product etc
              // Give value
          }else{

               return redirect("/index")
               ->with("response","There was an error while processing your request, please try again later")
               ->with("type","danger");
           
          }


        }

    public function cancel(){

     return redirect("/index")->with("response","Your transaction was cancelled")->with("type","danger");


  }

  public function success(){


    return view('form.successful');

     //return redirect("/index")->with("response","Your transaction was cancelled")->with("type","danger");


  }





}