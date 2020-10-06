<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php basics</title>
</head>

<body>
<?php
$yourName = "kat";
         
    echo("<h1>" . "php basics" . "</h1>");
    
    
    $num1 = 42;
    $num2 = 2;
    $total = $num1 + $num2;
    
?>
    
<h2><?php echo($yourName) ?>  </h2>

<p><?php echo($num1, $num2, $total); ?></p>

    
<?php $languageList = "'php','html','javascript'"; ?>    

<script> 
        
        let languages= [<?php echo($languageList;)?>];
</script>


</body>
</html>