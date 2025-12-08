<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Учебный центр Снэма-сервис</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css?v=01') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js?v=01') }}"></script>
</head>
<body class="cabinet">
  <header class="header noadaptiv">
    <div class="main_container c12collumns">
      <div class="left_side">
        <div class="left_container">
          <a href="{{ route('home') }}" style="color:#ffffff;"><img src="{{ asset('images/logo.jpg') }}" class="imglogo"></a>
        </div>
      </div>
      <div class="center_side menu_align_right">
        <div class="center_container">
          <ul class="nav_list ">
            <li class="nav_list_item"><a class="nav_link-item" href="https://ucsnemaservis.ru/">О центре</a></li>
            <li class="nav_list_item"><a class="nav_link-item" href="https://ucsnemaservis.ru/study">Программы</a></li>
            <li class="nav_list_item"><a class="nav_link-item" href="https://ucsnemaservis.ru/contacts">Контакты</a></li>
          </ul>
        </div>
      </div>
      <div class="right_side">
        <div class="right_container">
          <div class="right_buttons">
            <div class="right_buttons_wrap">
              <div class="right_buttons_but">
                <div class="user_ava" onclick="top_menu(1);"><span class="count" data-count="{{ ($left->notifications + $left->messages) }}" data-type="notification" data-type="messages"></span></div>
              </div>
            </div>
          </div>
          <div class="top_menu">
            <ul>
              <li>{{ $user->full_name }}</li>
              <li><a href="{{ route('cabinet.profile.index') }}">Настройки профиля</a></li>
            </ul>
            <ul>
              <li><a href="{{ route('cabinet.education.index') }}">Обучение</a></li>
              <li><a href="{{ route('cabinet.notifications.index') }}">Уведомления <span class="count" data-count="{{ $left->notifications }}" data-type="notification"></span></a></li>
              <li><a href="{{ route('cabinet.testes.history') }}">История тестирования</a></li>
            </ul>
            <ul>
              <li><a href="{{ route('cabinet.messages.index') }}">Обратная связь <span class="count" data-count="{{ $left->messages }}" data-type="messages"></span></a></li>
              <li><a href="{{ route('cabinet.home') }}">Как учиться</a></li>
              <li><a href="{{ route('cabinet.documents') }}">Документы для&nbsp;ознакомления</a></li>
            </ul>
            <ul>
              <li><a href="{{ route('logout') }}">Выход</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="t228__padding40px"></div>
    </div>
  </header>

  <header class="header adaptiv">
    <div class="main_container">
      <div class="left_side">
        <div class="left_container">
          <a href="{{ route('home') }}" style="color:#ffffff;"><img src="{{ asset('images/logo.jpg') }}" class="imglogo"></a>
        </div>
      </div>
      <div class="right_side">
        <div class="right_container">
          <div class="right_buttons">
            <div class="right_buttons_wrap">
              <div class="right_buttons_but">
                <div class="user_ava" onclick="top_menu(2);"><span class="count" data-count="{{ ($left->notifications + $left->messages) }}" data-type="notification" data-type="messages"></span></div>
              </div>
            </div>
          </div>
          <span class="burger" onclick="get_main_menu()">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="top_menu">
            <ul>
              <li>{{ $user->full_name }}</li>
              <li><a href="{{ route('cabinet.profile.index') }}">Настройки профиля</a></li>
            </ul>
            <ul>
              <li><a href="{{ route('cabinet.education.index') }}">Обучение</a></li>
              <li><a href="{{ route('cabinet.notifications.index') }}">Уведомления <span class="count" data-count="{{ $left->notifications }}" data-type="notification"></span></a></li>
              <li><a href="{{ route('cabinet.testes.history') }}">История тестирования</a></li>
            </ul>
            <ul>
              <li><a href="{{ route('cabinet.messages.index') }}">Обратная связь <span class="count" data-count="{{ $left->messages }}" data-type="messages"></span></a></li>
              <li><a href="{{ route('cabinet.home') }}">Как учиться</a></li>
                <li><a href="{{ route('cabinet.documents') }}">Документы для&nbsp;ознакомления</a></li>
            </ul>
            <ul>
              <li><a href="{{ route('logout') }}">Выход</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="adaptiv_menu">
      <ul class="nav_list ">
        <li class="nav_list_item"><a class="nav_link-item" href="https://ucsnemaservis.ru/">О центре</a></li>
        <li class="nav_list_item"><a class="nav_link-item" href="https://ucsnemaservis.ru/study">Программы</a></li>
        <li class="nav_list_item"><a class="nav_link-item" href="https://ucsnemaservis.ru/contacts">Контакты</a></li>
        <li class="mobile"><a href="{{ route('logout') }}" target="_self" class="btn">Выйти</a></li>
      </ul>
    </div>
  </header>

  <section id="app" class="app-section">
    <main class="container">
        @yield('content')
    </main>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row row-left">
        <div class="col-lg-6">
          <p>© 2025 ООО "СТОП ЗАЙМ"</p>
          <p>450001, РБ, г. Уфа, ул. 8 марта, д. 19</p>
          <p>ИНН 0276963658</p>
          <p>ОГРН 1210200038608</p>
          <p><a href="#">Политика обработки персональных данных</a></p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script>
    if(document.querySelector('.adaptiv_top_menu')){
      let adaptiv_top_menu = document.querySelector('.adaptiv_top_menu');
      let top_menu_now = adaptiv_top_menu.querySelector('.top_menu_now span');
      let top_menu_item = adaptiv_top_menu.querySelectorAll('.top_menu_item');

      for(let i = 0; i < top_menu_item.length; i++){
        if(top_menu_item[i].classList.contains('active')){
          top_menu_now.textContent = top_menu_item[i].textContent;
        }
      }

      $('.top_menu_now').click(function(){
        let menu = $(this).parent();

        if(!menu.hasClass('open')){
          menu.addClass('open');
        } else {
          menu.removeClass('open')
        }
      });

      function get_top_menu(){
        if(!adaptiv_top_menu.classList.contains('open')){
          adaptiv_top_menu.classList.add('open');
        } else {
          adaptiv_top_menu.classList.remove('open');
        }
      }
    }
  </script>
</body>
</html>
