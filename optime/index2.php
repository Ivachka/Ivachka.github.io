<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPTIME - магазин элитной косметики</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;700&family=Inter:wght@400;700&family=M+PLUS+1p:wght@400;800&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modal.js" defer></script>

</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="menu headd">
                <a href="index.html" class="logo">
                    OPTIME
                </a>
                <div class="dropdown">
                    <div class="dropdown_between">
                        <a href="#" class="mm">
                            <img src="img/lupa.png" alt="" class="usbas">
                        </a>
                    </div>
                    <div class="dropdown_between">
                        <button class="dropbtn">Меню</button>
                        <div class="dropdown-content">
                          <a href="index2.html" class="border_nav">Каталог</a>
                          <a href="index.html" class="border_nav">О нас</a>
                          <a href="index.html"  class="border_nav">Корзина</a>
                          <a href="index4.html" class="border_nav">Личный кабинет</a>

                        </div>
                    </div>
                </div>
                <div class="nav">
                    <a href="index2.html" class="mm">Каталог</a>
                    <a href="index.html" class="mm">О нас</a>
                    <a href="index.html" class="mm">Контакты</a>
                    <a href="index3.html" class="mm">
                        <img src="img/basket.png" alt="" class="usbas">
                    </a>
                    <a href="index4.html" class="mm">
                        <img src="img/user.png" alt="" class="usbas">
                    </a>                    
                    <a href="#" class="mm">
                        <img src="img/lupa.png" alt="" class="usbas">
                    </a>
                </div>
            </div>
        </header> 
        <div class="search_res"> 
      <form action="index2.php" method="get">
          <input class="input_form" type="search" name="search_text">
          <input class="search_button" type="submit" name="submit" value="Найти">
      </form>                   
    </div>
    <?php
			$mysqli = new mysqli("localhost","root","","optime",3306);
            if (isset($_GET['submit']) && isset($_GET['search_text'])){
                            $search_res=$_GET['search_text'];
                            $query = 'select * from catalog where id_text like "%'.$search_res.'%" or id_categoria like "%'.$search_res.'%"';
                            $result = mysqli_query($mysqli, $query);
                            echo '<div class="box-serv"><h2></h2><br>';
                            while($n = mysqli_fetch_assoc($result)){
                                echo '<div class="teh_serv"><p class="teh_text">'.$n['id_text'].'<p class="phone__list"><img class="phone__list" src="img/'.$n['id_img'].'"><p class="phone__list">'.'</p><p class="phone__list">'.$n['id_price'];
                            }
                            echo '</div>';
                        }
                        else{
                        }
                      
                        ?>
        <main class="main">
            <section class="for__face">
                <div class="container">
                    <div class="for__face__inner">
                        <h1 class="for__face__title">
                            Для лица
                        </h1>
                    </div>
                </div>
            </section>
            <section class="car">
                <div class="container">
                    <div class="tabs__content">
                        <div class="tabs__content-item">
                            
                    <?php
    $a=mysqli_connect('localhost', 'root', '', 'optime') or die('connection error'); //устанавливаем подключение к БД
    $q="SELECT * FROM catalog where id_categoria='for_face'"; 
    $r=mysqli_query($a, $q) or die('error:'.mysqli_error()); //выполняем запрос, сохраняя при этом результат в переменную $r
    while($n = mysqli_fetch_array($r)){  
        echo '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">'.$n["id_title1"].'</h1>
                            <p class="card__title-subtitle">'.$n["id_subtitle"].'</p>
                            <p class="card__text">'.$n["id_text1"].'
                            </p>
                            <h3 class="card__title liiin">'.$n["id_title2"].'</h3>
                            <p class="card__text">'.$n["id_text2"].'
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                          <h1 class="card__title">'.$n["id_title1"].'</h1>
                          <p class="card__title-subtitle">'.$n["id_subtitle"].'</p>
                          <p class="card__text">'.$n["id_text1"].'
                          </p>
                          <h3 class="card__title liiin">'.$n["id_title2"].'</h3>
                          <p class="card__text">'.$n["id_text2"].'
                          </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
        }
        echo '</div>'; //закрываем div внешнего блока  
  mysqli_close($a);  //закрываем подключение с базой
  ?>
                          
                            </div>                          
                        </div>
                    </div>
                </div>
            </section>
            <section class="for__face">
                <div class="container">
                    <div class="for__face__inner">
                        <h1 class="for__face__title">
                            Для тела
                        </h1>
                    </div>
                </div>
            </section>
            <section class="car">
                <div class="container">
                    <div class="tabs__content">
                        <div class="tabs__content-item">
                        <?php
    $a=mysqli_connect('localhost', 'root', '', 'optime') or die('connection error'); //устанавливаем подключение к БД
    $q="SELECT * FROM catalog where id_categoria='for_body'"; 
    $r=mysqli_query($a, $q) or die('error:'.mysqli_error()); //выполняем запрос, сохраняя при этом результат в переменную $r
    while($n = mysqli_fetch_array($r)){  
        echo '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                          <h1 class="card__title">'.$n["id_title1"].'</h1>
                          <p class="card__title-subtitle">'.$n["id_subtitle"].'</p>
                          <p class="card__text">'.$n["id_text1"].'
                          </p>
                          <h3 class="card__title liiin">'.$n["id_title2"].'</h3>
                          <p class="card__text">'.$n["id_text2"].'
                          </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">'.$n["id_price"].'</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';
            '<div class="card">
            <img src="img/'.$n["id_img"].'" alt="" class="card__img">
            <div class="card__content">
                <h4 class="card__title">'.$n["id_title"].'</h4>
                <p class="card__text">'.$n["id_text"].'</p>
                <p class="card__price">'.$n["id_price"].' &#x20bd;</p>              
                    <button class="section__button" data-modal="myModal1">Подробнее</button>
                    <div id="myModal1" class="modal">
                        <div class="modal-content">
                          <div class="modal-header">
                              <span class="close" data-modal="myModal1">&times;</span>
                          </div>
                          <div class="modal-body">
                            <h1 class="card__title">Rose</h1>
                            <p class="card__title-subtitle">крем для лица</p>
                            <p class="card__text">Увлажняющий крем идеально подходит для повседневного ухода за молодой кожей.<br><br> 
                                Крем равномерно распределяется по поверхности благодаря легкой текстуре, обеспечивает глубокое увлажнение, регенерацию клеток. 
                            </p>
                            <h3 class="card__title liiin">Состав</h3>
                            <p class="card__text">Aqua, Cyclomethicone, Dicaprylyl Carbonate, Butylene Glycol, Glycerin, Tapioca Starch, Nelumbium Speciosum 
                                Flower Extract, Calendula Officinalis Flower Extract, Propylene Glycol, Tocopherol, Glycine Soja Oil, Dimethiconol, Citronellol, Limonene.
                            </p>
                            <button class="close add_korzina">Добавить в корзину</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>';

        }
        echo '</div>'; //закрываем div внешнего блока  
  mysqli_close($a);  //закрываем подключение с базой
  ?>                                                                           
                        </div>
                    </div>
                </div>
            </section>

        </main>  
        <footer class="footer">
            <div class="menu">
                <a href="index.html" class="logo">
                    OPTIME
                </a>
                <div class="nav">
                    <a href="index2.html" class="mm">Каталог</a>
                    <a href="#mapykori" class="mm">О нас</a>
                    <a href="#mapykori" class="mm">Контакты</a>
                    <a href="index3.html" class="mm">
                        <img src="img/basket.png" alt="" class="usbas">
                    </a>
                    <a href="index4.html" class="mm">
                        <img src="img/user.png" alt="" class="usbas">
                    </a>
                </div>
            </div> 
            <div class="politika">
                <div class="politika-block">
                    <p class="politika-text">
                        OPTIME 2024 &copy; Все права защищены
                    </p>
                </div>
                <div class="politika-block">
                    <a href="#" class="politika-text scrit">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>   
        </footer>
    </div>
</body>
</html>