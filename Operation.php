<?php 

	class Operation 
	{
		private $con;

		function __construct() 
		{
			require_once "./connection.php";

			$obj = new Database();
			$this->con = $obj->connect();

		}

		public function getData()
		{
			$stmt = $this->con->prepare("SELECT * FROM user");
			$stmt->execute() or die($this->con->error);
			$result = $stmt->get_result();
			$row = array();
			if($result->num_rows > 0) {

				while($x = $result->fetch_assoc()) 
				{
					$row[] = $x;
				}

			} else {
				echo "no record found";
			}
			echo json_encode($row);

		}
	}


	$obj = new Operation();
	$obj->getData();

?>