<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_order;
use Auth;
use DB;


class AdminController extends Controller
{
    //

// Admin Area Starts Here  ///

    



// Dashboard Page Method
    public function admin(){
        $products_order = Product_order::orderBy('id','desc')->take(10)->get();
        $totalOrders = Product_order::all();
        $successOrders= DB::table('products_order')
       ->where('status','success')->get();
         $pendingOrders = DB::table('products_order')
       ->where('status','pending')->get();
        $cancelledorders  = DB::table('products_order')
        ->where('status','cancelled')->get();
       
        $data ['orders'] = $products_order;
        $data ['totalOrders'] = $totalOrders;
        $data ['successOrders']= $successOrders;
        $data ['pendingOrders'] = $pendingOrders;
        $data ['cancelledorders'] = $cancelledorders;
        return view("admin.admin", $data);

               
    }



//Total Orders Page Metthod
 public function orders(){
       $products_order = Product_order::orderBy('id','desc')->take(50)->get();
 

        $totalOrders = Product_order::all();
        $successOrders= DB::table('products_order')
       ->where('status','success')->get();
         $pendingOrders = DB::table('products_order')
       ->where('status','pending')->get();
        $cancelledorders  = DB::table('products_order')
        ->where('status','cancelled')->get();
       
        $data ['orders'] = $products_order;
        $data ['totalOrders'] = $totalOrders;
        $data ['successOrders']= $successOrders;
        $data ['pendingOrders'] = $pendingOrders;
        $data ['cancelledorders'] = $cancelledorders;
       $data ['orders'] = $products_order;
       return view("admin.orders", $data);

               
    }

    // Edit Orders Method
   public function edit_orders($id){ 
       $order  = Product_order::where('id', '=', $id)->first();

       return view('admin.edit_orders', ['order' => $order]);

    } 


public function edit(Request $request){

       $this->validate($request, [
              'status'  => 'required',
              'order-id'  => 'required',

        ]);

         $edit  = Product_order::where('id',$request->input('order-id'))->first();
         $edit->status = $request->input('status');
         $edit->save();

       return redirect("/orders/")->with('response', 'Status updated successfully');;

      


}




    // public function edit(Request $request, $id){

    //    $this->validate($request, [
    //           'status'  => 'required',
      //       'email' => 'required',
      //       'phone' => 'required',
      //       'church' => 'required',
      //       'services' => 'required',
      //       'currency' => 'required',
      //       'amountbox' => 'required',
      //       'status' => 'required'
             // ]);

      //    // var_dump( $request->input('post_title'));exit;
         
            // $edit  = new Product_order;
            // $edit->status = $request->input('status');
      //    $edit->email  = $request->input('email');
      //    $edit ->phone = $request->input('phone');
      //    $edit->church  = $request->input('church');
      //    $edit->services  = $request->input('services');
      //    $edit ->currency= $request->input('currency');
      //    $edit ->amountbox = $request->input('amountbox');
      //    $edit ->status = $request->input('status');
        

            
             //  Product_order::where('id', $id)->update($data);
             //  $edit->update();
             // return view('admin.orders');
           // return Auth::user();
           // exit();

    // }




// Sucessful Orders View Method
    public function successful_orders(){
    $status = DB::table('products_order')
     ->where('status','success')
     ->get();
      return view("admin.successful_orders",[ 'status' => $status ]);
               
    }


// Pending Orders View Method
    public function pending(){
     $orders = DB::table('products_order')
     ->where('status','pending')
     ->get();
      return view("admin.pending",[ 'orders' => $orders ]);
               
    }


// Cancelled Orders View Method
   public function cancelled_orders(){
     $cancelled = DB::table('products_order')
     ->where('status','cancelled')
     ->get();
      return view("admin.cancelled_orders",[ 'cancelled' => $cancelled ]);
               
    }
               
  




// Search For Total Orders

public function search(Request $request){
       $this->validate($request, [
             'keyword'  => 'required'
     ]);

      $keyword = $request->input('keyword');
      $orders = Product_order::where('name','LIKE', '%'.$keyword.'%')
               ->orWhere('email',   '%'.$keyword.'%')
               ->orWhere('phone', 'LIKE', '%'.$keyword.'%')
               ->orWhere('church', 'LIKE', '%'.$keyword.'%') 
               ->get();
               
      return view('admin.searchOrders',['orders' => $orders]);


               
  }


  // Search for successful orders page method
  public function success(Request $request){
       $this->validate($request, [
             'keyword'  => 'required'
     ]);

      $keyword = $request->input('keyword');
      $success = Product_order::where('name','LIKE', '%'.$keyword.'%')
              ->where('status', '=', 'success')
               ->orWhere('email',   '%'.$keyword.'%')
               ->orWhere('phone', 'LIKE', '%'.$keyword.'%')
               ->orWhere('church', 'LIKE', '%'.$keyword.'%') 
               ->get();
               
      return view('admin.successOrders',['success' => $success]);

       
       
  }


//Search For Pending Orders
  public function pendingOrders(Request $request){
       $this->validate($request, [
             'keyword'  => 'required'
     ]);

      $keyword = $request->input('keyword');
      $pendingOrders = Product_order::where('name','LIKE', '%'.$keyword.'%')
                     ->where('status', '=', 'pending')
                     ->orWhere('email', 'LIKE', '%'.$keyword.'%')
                     ->orWhere('phone', 'LIKE', '%'.$keyword.'%')
                     ->orWhere('church', 'LIKE', '%'.$keyword.'%')->get();
                   
      return view('admin.SearchPending',['pendingOrders' => $pendingOrders]);
              

  }


//Search For Cancelled Orders
    public function cancelled(Request $request){
       $this->validate($request, [
             'keyword'  => 'required'
     ]);

      $keyword = $request->input('keyword');
      $cancelled = Product_order::where('name', 'LIKE', '%'.$keyword.'%')
                  ->where('status', '=', 'cancelled')
                  ->orWhere('email', 'LIKE', '%'.$keyword.'%')
                  ->orWhere('phone', 'LIKE', '%'.$keyword.'%')
                  ->orWhere('church', 'LIKE', '%'.$keyword.'%')->get();
                  
      return view('admin.cancelledorders',['cancelled' => $cancelled]);

    

  }


//Logout Method

public function logout(){
        Auth::logout();

     return redirect("/login");

    }
}
// Admin Area Search Form Stops Here
