<div class="header__wrapper">
  <a class="header__catalog-button" href="#">Каталог</a>
  <form class="header__form" action="" method="post">
    <input class="visually-hidden" type="text">
    <input class="header__search-input" type="text" placeholder="Я ищу...">
    <button class="header__search-button" type="submit">
      <svg width="26" height="27" viewBox="0 0 26 27" fill="none" stroke="#000000">
        <use xlink:href="img/sprite.svg#search"></use>
      </svg>
    </button>
  </form>
  <nav class="header__nav">
    <ul class="header__nav-list">
      <li class="header__nav-item mobile-search">
        <a href="#">
          <svg width="26" height="27" viewBox="0 0 26 27" fill="none" stroke="#000000">
            <use xlink:href="img/sprite.svg#search"></use>
          </svg>
          <span></span>
        </a>
      </li>
      <li class="header__nav-item header__cart--active">
        <a href="#">
          <svg width="32" height="29" viewBox="0 0 32 29" fill="none" stroke="#000000">
            <use xlink:href="img/sprite.svg#cart"></use>
          </svg>
          <span>Корзина</span>
          <div class="header__cart-count">1</div>
        </a>
      </li>
      <li class="header__nav-item">
        <a href="#">
          <svg width="26" height="27" viewBox="0 0 26 27" fill="none" stroke="#000000">
            <use xlink:href="img/sprite.svg#profile"></use>
          </svg>
          <span>Профиль</span>
        </a>
      </li>
      <li class="header__nav-item header__fav--active">
        <a href="#">
          <svg width="34" height="28" viewBox="0 0 30 26" fill="none" stroke="black">
            <use xlink:href="img/sprite.svg#fav"></use>
          </svg>
          <span>Нравится</span>
        </a>
      </li>
    </ul>
  </nav>
</div>