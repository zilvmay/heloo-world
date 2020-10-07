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
    <p>Number 1: <?php echo($num1); ?> </p>
    <p>Number 2: <?php echo($num2); ?> </p>
<p>When added together: <?php echo($total); ?></p>
    

<script>    
<?php $languageList = "'php','html','javascript'"; ?>  

    
let languages = [<?php echo $languageList; ?>];
    
    console.log(languages);
    alert(languages);
</script>


</body>
</html>