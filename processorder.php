<html>
<head>
  <title>Bob's Auto Parts - Order Results</title>
</head>
<body style="color: red; background: black; text-align: center; position: absolute; top: 50%; left: 50%;">
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
  <?php
    // Create short variable names
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $totalqty = 0;
    $totalamount = 0.00;
    
    //Create constants
    define('TIREPRICE', 100);
    define('OILDPRICE', 10);
    define('SPARKPRICE', 4);
    
    echo "<p>Order processed at ";
    echo date('H:i, jS F Y');
    echo "</p>";
    
     //Calculate total amount and total price
    $totalqty = $tireqty + $oilqty + $sparkqty;
    echo "Items ordered: " .$totalqty. "<br />";
    $totalamount = $tireqty * TIREPRICE
                 + $oilqty * OILPRICE
                 + $sparkqty * SPARKPRICE;
    
    echo "Subtotal: $" .number_format($totalamount,2)."<br />";
    
    $taxrate = 0.10;  //local sales tax is 10%
    $totalamount = $totalamount * (1 + $taxrate);
    echo "Total including tax: $" .number_format($totalamount,2). "<br />";

    
  ?>
</body>
</html>