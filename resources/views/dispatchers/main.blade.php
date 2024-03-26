<!-------------------content of html-page dispatchershome---------------------------->
  <main>
      <div class="container">
        <div class="menu__wrapper">
          <div class="menu">
            <li class="menu__item" id="profile">
              <a href="#profile" class="menu__btn">
                <i class="far fa-user"></i>
                Заявки
              </a>
              <div class="menu__item_sub">
                <a class="menu__a" href="{{ route('tapwaterticket') }}">Водопровод</a>
                <a class="menu__a" href="#">Канализация</a>
              </div>
            </li>
            <li class="menu__item" id="messages">
              <a href="#messages" class="menu__btn">
                <i class="far fa-envelope"></i>
                Журналы
              </a>
              <div class="menu__item_sub">
                <a class="menu__a" href="#">Водопровод</a>
                <a class="menu__a" href="#">Канализация</a>
              </div>
            </li>
            <li class="menu__item" id="settings">
              <a href="#settings" class="menu__btn">
                <i class="fas fa-cog"></i>
                Отчеты
              </a>
              <div class="menu__item_sub">
                <a class="menu__a" href="#">Водопровод</a>
                <a class="menu__a" href="#">Канализация</a>
              </div>
            </li>
          </div>
        </div>
      </div>
  </main>

</body>
</html>