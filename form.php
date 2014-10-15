
<!DOCTYPE html> 
<html>
	<head>
		<title>Exprimental</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		
	</head>
	<body class="bg-cyan">
		<div class="body body-s">
		
			<form action="db.php" class="sky-form" method="POST">
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
							<input type="password" placeholder="Confirm password">
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
