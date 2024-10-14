<!DOCTYPE html>

<html>
    <head>
        <title>Задание</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
			$log = $_POST['number2'];
			$passw = $_POST['password3'];
			try
			{
                $mysqli = new mysqli("localhost","root","","optime",3306);
				$query = 'SELECT * FROM registr Where number="'.$log.'"';
                $result = mysqli_query($mysqli,$query);
				$user = mysqli_fetch_assoc($result);
				if (!empty($user))
				{
					if (password_verify($passw,$user['password'])){
						session_start();
						$_SESSION['auth']=true;
						$_SESSION['number']= $user['number'];
						Header("Location:index.html");
					}
					else echo "<script>alert('неверный логин/пароль');</script>";
					include("index4.html");
				}
				else {
					echo "<script>alert('Логин/пароль неверные');</script>";
					include("index4.html");
				}
			}
			catch (Exception $ex)
			{
				echo "Ошибка: ".$ex->getMessage();
			}
		?>
		
    </body>
</html>


