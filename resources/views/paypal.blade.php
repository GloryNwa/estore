<!DOCTYPE html> 

<html lang="en"> 

<head> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<title>Paypal :: SPACE-O </title> 

</head> 

<body> 



  

    <br/>Prodcut Name: Product Name 

    <br/>Product Price: 1000  

    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> 

       

        <input type="hidden" name="business" value="digitalmart@loveworld360.com"> 

        

        <!-- Specify a Buy Now button. --> 

        <input type="hidden" name="cmd" value="_xclick"> 

        

        <!-- Specify details about the item that buyers will purchase. --> 

        <input type="hidden" name="item_name" value="Web products"> 

        <input type="hidden" name="item_number" value="reference"> 

        <input type="hidden" name="amount" value="10000">

        <input type="hidden" name="currency_code" value="USD"> 

        

        <!-- Specify URLs --> 

        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/paypal_cancel.php'> 

<input type='hidden' name='return' value='http://localhost/paypal_integration_php/paypal_success.php'> 

        

        <!-- Display the payment button. --> 

        <input type="image" name="submit" border="0" 

        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online"> 

        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > 

    

    </form> 

   

</body> 

</html>