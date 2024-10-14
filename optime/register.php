<!DOCTYPE html>
<html>
    <head>
        <title>Обработка регистрации</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
			$log = test_input($_POST['number']);
			$passw = test_input($_POST['password']);
			$passw2 = test_input($_POST['password2']);
			$mysqli = new mysqli("localhost","root","","optime",3306);
			$query = 'SELECT * FROM registr Where number="'.$log.'"';
			$result = mysqli_query($mysqli,$query);
			$user = mysqli_fetch_assoc($result);
			if (!empty($user))
			{
				echo "<script>alert('пользователь с таким номером телефона уже существует')</script>";
                include("index4.html");
			}
			else {
				if ($passw==$passw2){
				$passw_hash = password_hash($passw,PASSWORD_BCRYPT);
				$query2 = 'Insert INTO registr (number, password) VALUES("'.$log.'","'.$passw_hash.'")'; 
				$result2 = mysqli_query($mysqli,$query2);
				if (!empty($result2)){
					echo "<script>alert('Пользователь зарегистрирован.');</script>";
					include("index.html");
				}
				else {
					echo "<script>alert('пользователь не зарегистрирован. Попробуйте еще раз');</script>";
					include("index4.html");
				}
				}
				else {
				echo "<script>alert('пароли не совпадают');</script>";
				header("Location:index4.html");
				}
			}
			
			function test_input($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
		
    </body>
</html>


