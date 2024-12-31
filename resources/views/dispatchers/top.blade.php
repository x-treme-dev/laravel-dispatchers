<!---------------------------top of html-page dispatchershome----------------------------------->
 
    <div class='top'>
      <div class="container">
        <div class="top__wrapper">
            <div class="top__logo">
              <a href="{{ route('entry') }}" class="top__a">
                <img src="{{ asset('css/assets/logo-invert.png') }}" alt="logo" class="top__img">
                </a> 
                <div class="top__p-group">
                  <p class="top__p-white">Диспетчер</p>
                  <p class="top__p-blue">Феодосия</p>
                </div>
             </div>
             <div class="top__login">
             @if(Auth::check())
             <h2 class="top__h2"> {{ Auth::user()->email }}</h2>
            @endif
            <a href="{{ route('profile') }}" class="top__a-exit">
                <p class="top__exit">Ваш профиль</p>
              </a>
            </div>
        </div>
      </div>
    </div>
  



