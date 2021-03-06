<!DOCTUPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Моя первая страница">
    <meta name="author" content="Author">
    <meta name ="robots" content="all">
    <meta property="og:title" content="Моя первая страница">

    <title>Александр - Веб-разработчик</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>

    <div class="preloader">
        <div class="preloader__row">
    <div class="preloader__item"></div>
    <div class="preloader__item"></div>
        </div>
    </div>

<header>
    <?php
    include ('nav.php');
    ?>
</header>

    <div id="main_1">
        <div class="title__container">
            <h1 class="wow animate__animated animate__fadeInUpBig" data-wow-delay="0.5s">Привет <br> Я Александр</h1>
            <h4>Веб-разработчик</h4>
            <a href="#about_me"><input type="button" value="Обо мне"></a>
            <a href="index2.php"><input type="button" value="Мои работы"></a>
        </div>
    </div>

    <div id="about_me" class="section">
        <p class="about_head"><span>ОБО МНЕ</span></p>
        <img src="img/ab1.png" id="about_image">
        <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, nulla sed est possimus repellendus ad ex mollitia nihil necessitatibus architecto pariatur eos optio. Et nobis, nisi explicabo ullam ad quis? Ipsum provident tempora ipsam, aspernatur vel sapiente, officia aperiam accusantium dolorem id deleniti? Est vitae, eaque sunt a cum, libero tenetur dolores quia. In praesentium, consequuntur animi, molestias sunt officia! Quidem perspiciatis esse dolorum magnam at facilis voluptatem quae architecto tenetur, sit debitis soluta, itaque, maxime ex. Enim consequatur cumque doloribus assumenda saepe, ipsum, neque facere totam nesciunt laborum accusamus! Voluptatum odio nesciunt repellendus repudiandae cupiditate soluta praesentium, sapiente fuga. Labore rerum quis praesentium ipsa? Distinctio ex odio alias, culpa, molestias assumenda doloremque sunt rem necessitatibus quasi nemo vero vitae? Praesentium, incidunt. Facilis excepturi repellendus repellat qui dolore accusantium provident quis fugiat alias iusto, voluptatum voluptate suscipit magnam repudiandae eveniet, autem totam ipsa at et aliquam quae. Obcaecati, consequatur, ex.</p>
        <a href="dist/files/file.txt" download=""><input type="submit" value="Скачать резюме"></a>
    </div>

    <div id="skills" class="section">
        <p class="skills_head"><span>ЧТО Я УМЕЮ</span></p>
        <div class="skills_row">
            <section class="web"><img src="img/not.png" alt="">
                <p class="skills_heading">Веб разработка</p>
                <p class="skills_text">Lorem ipsum dolor sit amet placerat<br>facilisis felis mi in tempus eleifend<br>pellentesque natoque etiam.</p>
            </section>
            <section class="web"><img src="img/zn.png" alt="">
                <p class="skills_heading">Разработка</p>
                <p class="skills_text">Lorem ipsum dolor sit amet placerat<br>facilisis mi in tempus eleifend<br>pellentesque.</p>
            </section>
            <section class="web"><img src="img/ro.png" alt="">
                <p class="skills_heading">CEO-Оптимизация</p>
                <p class="skills_text">Lorem ipsum dolor sit amet placerat<br>facilisis felis mi in tempus eleifend<br>pellentesque natoque etiam.</p>
            </section>
            <section class="web"><img src="img/gr.png" alt="">
                <p class="skills_heading">Маркетинг</p>
                <p class="skills_text">Lorem ipsum dolor sit amet placerat<br>facilisis felis mi in tempus eleifend<br>pellentesque natoque</p>
            </section>
        </div>
    </div>

    <div id="cases" class="section">
        <p class="cases_head"><span>Кейсы</span></p>
        <p class="cases_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed Dapibus leo nec ornare diamcoccodo nibh ante facilisis.</p>
        <img  class="cases_img"  src="img/cases.png" alt="">
        <ul>
            <li>
                <p class="table_h">Client:</p><p class="table_d">Какая-то компания</p>
                <p class="table_h">Website:</p><p class="table_p"> http://www.somedomain.com</p>
            </li>
            <li>
                <p class="table_r">Название проекта</p>
                <p class="table_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit., sed do eiusmod tempor incididunt ut labore et dolore magnabr <br>aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </li>
       </ul>
       <input id="visit" type="submit" value="VISIT LIVE SITE">
    </div>

   <div id="price" class="section">
        <p class="price_head"><span>Расчет стоимости</span></p>
        <div class="price_tool">
            <p class="price_text">Тип сайта</p>
            <select id="type_site" name="list1" class="price_of">
                <option value="vis">Визитка</option>
                <option value="promp">Промо</option>
            </select>
            <p class="price_text">Дизайн</p>
            <select id="design" name="list1" class="price_of">
                <option value="maket">Макет</option>
                <option value="ntmaket">Без макета</option>
            </select>
            <p class="price_text">Адаптивность</p>
            <select id="adaptive" name="list1" class="price_of">
                <option value="pk">Только ПК</option>
                <option value="pkm">ПК и моб. устройства</option>
            </select>
            <button class="raschet" onclick="raschitat();">Рассчитать стоимость</button>
            <div id="sroki"></div>
            <div id="stoimost"></div>
        </div>
    </div>

    <div id="stat" class="section">
        <p class="stat_head"><span>Немного статистики</span></p>
        <div class="stat_row">
            <section class="stat_img"><img src="img/smile.png" alt="">
                <p id="stat_heading">120</p>
                <p class="stat_text">Счастливых клиентов</p>
            </section>
            <section class="stat_img"><img src="img/skobka.png" alt="">
                <p id="stat_heading" data-max="4600">0</p>
                <p class="stat_text">Часов работы</p>
            </section>
            <section class="stat_img"><img src="img/ok.png" alt="">
                <p id="stat_heading">340</p>
                <p class="stat_text">Проектов завершено</p>
            </section>
            <section class="stat_img"><img src="img/cup.png" alt="">
                <p id="stat_heading">23</p>
                <p class="stat_text">Наград получено</p>
            </section>
        </div>
    </div>

    <div id="reviews" class="section">
        <p class="reviews_head"><span>Отзывы</span></p>
        <img src="img/photo.png">
        <p class="reviews_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante<br>facilisis bibendum dolor feugiat at duis sed dapidus leo nec ornare diam.</p>
        <p><b>Михаил</b>, Ген директор ПАО “Напрасный труд”.</p>
    </div>

    <div id="contacts" class="section">
        <p class="contacts_head"><span>Мои контакты</span></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leo nec ornare diamcoccodo</p>
        <ul class="contact_icon">
            <li><img src="img/geo.png" alt="">
                <p>Москва<br>Тверская 22</p></li>
            <li><img src="img/conv.png" alt="">
                <p>info@companyname.com</p></li>
            <li><img src="img/tel.png" alt="">
                <p>+7 999 999-99-99</p></li>
        </ul>
        <p class="mess">Оставьте мне сообщение</p>
        <div class="contacts_input">
            <input id="name" type="text" placeholder="Имя">
            <input id="email" type="text" placeholder="Email">
            <input id="other" type="text" placeholder="Сообщение">
        </div>
        <input id="send" class="inputContact" type="submit" value="Отправить">
    </div>

    <div class="map">
        <div class="maping"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5ed0c2b4399ace614287420ded89470abb8c2ce89ebb3996fbb21becbfdec0d1&amp;width=70%25&amp;height=240&amp;lang=ru_RU&amp;scroll=false"></script></div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/script.js"></script>
</body>

<footer>

<button id="support" type="button" class="btn btn-primary col-1 offset-sm-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Поддержка
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заполните форму</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form action="php/mail.php" method="post">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="email" name="userEmail" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-8">
      <input type="phone" name="userPhone" class="form-control" id="inputTel">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-4 pt-0">Устройство</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="userPC" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          ПК
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="userSmart" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Смартфон
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-1">
      <div class="form-check">
        <input class="form-check-input" name="usetRecl" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Рекламная информация
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
      </div>
    </div>
  </div>
</div>
<p>© 2021 All Rights Reserved | Design by SomeCompany</p>
</footer>

</html>
