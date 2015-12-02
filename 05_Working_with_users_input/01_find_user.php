<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>01_find_user</title>
	  <style type="text/css" media="screen">
		  table{
		  	margin:25px;
		  	border-collapse: colapse;
		  	
		  }
		  th{
		  	background:#8BBFAE;
		  	color:white;
		  	font-weight:bold;
		  }
		  td{
		  	border:1px solid black;
		  	padding:5px 10px;
		  }
		  #login{
		  	width:450px;
		  	padding:25px;
		  	text-align:left;
		  	border-radius:5px;
		  	background:#83C487;
		  }
		  .error{
		  	font-size:16px;
		  	font-weight:bold;
		  	color:red;
		  }
	  </style>
	</head>
	<body >
		<?php
			session_start();
			if (isset($_POST['search'])) {
				$searchName = $_POST['searchName'];
	
				if (array_key_exists("thokens", $_SESSION)) {
					$thokens = $_SESSION['thokens'];
					?>
					<div id="login">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" accept-charset="utf-8">
							<label for="searchName">Enter name:</label>
							<input type="text" name="searchName" value="<?php echo $searchName ?>" id="searchName"/>
							<input type="submit" value="search"/>
						</form>
					</div>
					<?php
					
					findUser($searchName, $thokens);
				}else {
					echo '<p class="error"> toiaga </p>';
				}
	
			}else{
				?>
				<div id="login">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" accept-charset="utf-8">
						<label for="searchName">Enter name:</label>
						<input type="text" name="searchName" value="" id="searchName"/>
							<input type="submit" name="search" value="search"/>
						
					</form>
				</div>
				
				<?php
			}

			function findUser($name,$thokens){
				$resultStr='<div>
						<table>
							<tr>
								<th>username</th>
								<th>password</th>
								<th>question</th>
								<th>answer</th>
								<th>email</th>
								<th>fname</th>
								<th>lname</th>
								<th>gender</th>
								<th>birthday</th>
							</tr>';
							
				foreach ($thokens as $key => $value) {
					$keyArr = explode("\t",$key);
					$exist=false;
					
					if(strcmp(strtolower($keyArr[0]),strtolower($name)) === 0){
						$exist=true;
						$userdata = $thokens[$key];
							$resultStr.='<tr>';
							foreach ($userdata as $value) {
								$resultStr.='<td>'.$value.'</td>';
							}
							$resultStr.='</tr>';
							$resultStr.='</table>';
										
							
							echo $resultStr;
							return;
						}

					}
				
				if($exist === false){
					echo '<p class="error"> No current user with this name</p>';
					header('Location:http://localhost/05_Working_with_users_input/01_  register.php');
				}
			}
			
		?>
		
	  
	</body>
</html>	
	