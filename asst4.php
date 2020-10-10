<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
    
    <h1> Assignment 4: Functions in PHP</h1>
 <div> <h3>Date Formatting </h3>   
     <p>US date: <?php
         function dateWest($inDate){
                echo(
                        date('m/d/Y', strtotime($inDate))
                    );}
         dateWest("12/08/1995");?></p>
     
     <p>EU date: <?php
        function dateEast($inDate){
                echo(
                        date('d/m/Y', strtotime($inDate))
                    );}
    dateEast("12/08/1995");
    
?></p>
</div>
    
<hr>    
    
<div> <h3>String Manipulation of "   mEow OWoWow!!     "</h3>
        <?php
   global $inSrting;
    $inString = "  mEow OWoWow!!     ";?>
    
   <p>Trim: <?php echo trim($inString);  ?></p> 
    <p>Length: <?php echo strlen($inString); ?> </p>
   <p>Lowercase: <?php echo strtolower($inString); ?> </p>
   <p>Compare: <?php echo  substr_compare($inString, "DMACC", true); ?></p>
</div>

<hr>
    
<div><h3>Number and Currency Formatting</h3>
        <?php
   global $number;
    $number = 123456;?>
    
    <p><?php echo number_format ( $number , $decimals = 1 );?></p>
    
      
    <p><?php function formatUSCurrency($number)	{
               return "$" . number_format($number, 2, '.',',');
                };

            echo formatUSCurrency($number);
    ?></p>
</div>

    
    
    
    
    
    
</body>
</html>