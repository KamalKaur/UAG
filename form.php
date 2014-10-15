<!DOCTYPE html> 
<html>
	<head>
		<title>Exprimental</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
	
		<script type="text/javascript">
			
			function validateForm() {
 		   		var a = document.forms["myForm"]["full_name"].value;
    			var b = document.forms["myForm"]["email_id"].value;
    			var c = document.forms["myForm"]["user_name"].value;
    			var d = document.forms["myForm"]["password"].value;
    			var e = document.forms["myForm"]["confirm_password"].value;
    			var f = document.forms["myForm"]["need"].value;
    			var g = document.forms["myForm"]["database"].value;
    			
    			if (a == "" || b == "" || c == "" || d == "" || e == "" || f == "" || g == "") {
	        		alert("Every field must be filled out");
        			return false;
   	 			}

   	 			if(d!=e) {
   	 				alert("Passwords do not match")
   	 				return false;
   	 			}

			}

		</script>
	</head>
	<body class="bg-cyan">
		<div class="body body-s">
		
			<form name ="myForm" action="db.php" onsubmit="return validateForm()" class="sky-form" method="POST">
				<header>User Account Form</header>
				
				<fieldset>					
					<section>
						<label class="input">
							<input type="text" placeholder="Full Name" name="full_name" >
						</label>
					</section>

					<section>
						<label class="input">
							<input type="text" placeholder="Email address" name="email_id">
						</label>
					</section>
				</fieldset>

				<fieldset>
					<section>
						<label class="input">
							<input type="text" placeholder="Username" name="user_name">
						</label>
					</section>
				
					
					<section>
						<label class="input">
							<input type="password" placeholder="Password" name="password">
						</label>
					</section>
					
					<section>
						<label class="input">
							<input type="password" placeholder="Confirm Password" name="confirm_password">
						</label>
					</section>

					<label class="input">
							<input type="textarea" placeholder="Why do you need this account?" name="need">
					</label>
					<br>	
					Need Database?

					<section>
						
						<label class="radio"><input type="radio" name="database" value="1"><i></i>Yes</label>
						<label class="radio"><input type="radio" name="database" value="0"><i></i>No</label>
					</section>
					
				</fieldset>
				<footer>
					<button type="submit" class="button">Submit</button>
				</footer>
			</form>
			
		</div>
	</body>
</html>
