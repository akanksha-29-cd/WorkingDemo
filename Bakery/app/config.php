 <?php
        	// $servername = "localhost";
			$db_user = "root";
			$db_pass = " ";
			// $db_name = 'user';
				try{
			$db = new PDO("mysql:host=localhost;dbname=user", $db_user, $db_pass);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "connection successfully";
				}
				catch(PDOException $e)
		    		{
		    		echo "Connection failed: " . $e->getMessage();
		    		}
      ?>