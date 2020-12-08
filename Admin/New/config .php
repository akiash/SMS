
	<?php
		define('DBUSER', "root");
		define('DBPASSWORD',"");
		define('HOST',"localhost");
		define('DBNAME',"myroject_db");
		
		
		class  ngo
		{
			protected $connection = null;			
			function __construct() 
			{
				$this->connection = new PDO("mysqli:host=".HOST.";dbname=".DBNAME.";",DBUSER, DBPASSWORD);
				 $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				  echo "Connected successfully";
			}			
			function __destruct() {
				$this->connection = null;
			}
			
			public function Connect()
			{
				 
				 $host="localhost";
				 $dbname="myroject_db";
        		 $username="root";
        		 $password="";
        		 
		 
				$this->connection = new PDO("mysql:host=$host;dbname=$dbname;",$username, $password);
				 $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			public function Close()
			{
				$this->connection = null;
			}	
			public function Get_Video($filters="")
			{
				try
				{
					//$this->Connect();
					$query = $this->connection->prepare("SELECT * FROM tb_video $filters");
					$query->execute();
					return $query;
				}catch(PDOException $e)
				{
					return $e;
				}
			}
			
			public function Get_Uploads($filters="")
			{
				try
				{
					//$this->Connect();
					$query = $this->connection->prepare("SELECT * FROM uploads $filters");
					$query->execute();
					return $query;
				}catch(PDOException $e)
				{
					return $e;
				}
			}
			
			public function Create_Uploads($fileld1,$fileld12,$fileld3,$fileld4) 
			{
				//$this->Connect();
				try
				{
					$query = $this->connection->prepare("INSERT INTO uploads(fileld1,fileld2,fileld3,fileld4) VALUES (:fileld1,:image_two,:image_three,:timestamp)");
				
					
					$query->bindParam(':fileld1',$fileld1);
					$query->bindParam(':fileld2',$fileld2);
					$query->bindParam(':fileld3',$fileld3);
					$query->bindParam(':fileld1',$fileld4);
					
					$query->execute();
					$last_id = $this->connection->lastInsertId();
					return $last_id;

				}catch(PDOException $e)
				{
					return $e;
				}
			}
			
				public function Create_Video($fileld1,$fileld12,$fileld3,$fileld4) 
			{
				//$this->Connect();
				try
				{
					$query = $this->connection->prepare("INSERT INTO tb_video(fileld1,fileld2,fileld3,fileld4) VALUES (:fileld1,:image_two,:image_three,:timestamp)");
				
					
					$query->bindParam(':fileld1',$fileld1);
					$query->bindParam(':fileld2',$fileld2);
					$query->bindParam(':fileld3',$fileld3);
					$query->bindParam(':fileld1',$fileld4);
					
					$query->execute();
					$last_id = $this->connection->lastInsertId();
					return $last_id;

				}catch(PDOException $e)
				{
					return $e;
				}
			}
			
			
			
			public function Delete_Video($filter)// -----------  new  function ---------
			{
				try
				{
					$query = $this->connection->prepare("DELETE  FROM tb_video $filter");
					$query->execute();
					return true;
				}
				catch(PDOException $e)
				{
					return $e;
				}
			}
			
			public function Update_Uploads($p_id,$field1,$field2)
			{
				
				try
				{
					$query = $this->connection->prepare("UPDATE Uploads SET product_variant='".$field1."',primary_varient='".$field2."' WHERE  p_id='".$p_id."'");
					$query->execute();
					return true;
			
				}
				catch(PDOException $e)
				{
					return $e;
				}
			}  
			
			
		}
		
		?>