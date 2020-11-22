
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Presenting Information Technology</title>

	
</head>

<body>

<div id="container">

	<header>
    	<h1>Presenting Information Technology</h1>
    </header>
    

    
    <main>
    
        <h1>Display Available Events</h1>
        <?php
			// styling via php

				echo "<table style='border: solid 1px black;'>";
				

				class TableRows extends RecursiveIteratorIterator {
					function __construct($it) {
						parent::__construct($it, self::LEAVES_ONLY);
					}

					function current() {
						return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
					}

					function beginChildren() {
						echo "<tr>";
					}

					function endChildren() {
						echo "</tr>" . "\n";
					}
				} 



				$servername = "localhost";
				$username = "username";
				$password = "password";
				$dbname = "wdv341";

				require'dbConnect.php';

				try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$stmt = $conn->prepare("SELECT event_name, event_description, event_presenter, event_date FROM wdv341_events");
					$stmt->execute();
				
					// set the resulting array to associative
					$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
					foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
					echo $v;
					}

				} catch(PDOException $e) {
					echo "Error: " . $e->getMessage();
					$message = "There has been a problem. The system administrator has been contacted. Please try again later.";

					error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
					error_log($e->getLine());
					error_log(var_dump(debug_backtrace()));
				
					//Clean up any variables or connections that have been left hanging by this error.		
			
				//header('Location: files/505_error_response_page.php');	//sends control to a User friendly page		
				}
			
			
				$conn = null;
				echo "</table>";
		
?>

  	
        
	</main>
    
	<footer>
    	<p>Copyright &copy; <script> var d = new Date(); document.write (d.getFullYear());</script> All Rights Reserved</p>
    
    </footer>




</div>
</body>
</html>
