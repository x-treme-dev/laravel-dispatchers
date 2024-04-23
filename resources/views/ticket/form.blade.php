<form action="/message" method="POST"  class="form" enctype="multipart/form-data">
    @csrf
        <div class="form__column-left">
            <h2 class="form__h2">Заявка по водопроводу</h2>
            <div class="form__item-left">
                <p class="form__p">Дата регистрации:</p>
                <div class="form__time">
                    <label for="date" class="form__label">дата:
                        <input name="date" type="date" class="form__input-date">
                    </label>
                    <label for="time" class="form__label">время:
                        <input name="time" type="time" step="any" class="form__input-time"> 
                    </label>
                </div>
            </div>
            <div class="form__item-left">
                <p class="form__p">Cобытие:</p>
                <select name="type" class="form__select-event">
                    <option value="" class="form__option-event" selected disabled>Тип *</option>
                    <option value="Открытый, поврежденный люк" class="form__option-event">Открытый, поврежденный люк</option>
                    <option value="Ограничено водоснабжение" class="form__option-event">Ограничено водоснабжение</option>
                    <option value="Утечка воды" class="form__option-event">Утечка воды</option>
                    <option value="Благоустройство" class="form__option-event">Благоустройство</option>
                    <option value="Согласование" class="form__option-event">Согласование</option>
                    <option value="Технологический сброс" class="form__option-event">Технологический сброс</option>
                    <option value="Неисправность запорной арматуры" class="form__option-event">Неисправность запорной арматуры</option>
                    <option value="По распоряжению" class="form__option-event">По распоряжению</option>
                    <option value="Обследование" class="form__option-event">Обследование</option>
                    <option value="Перекладка" class="form__option-event">Перекладка</option>
                    <option value="Другое" class="form__option-event">Другое</option>
                </select>
            </div>
            <div class="form__item-left">
              <textarea name="description" cols="30" rows="3" class="form__textarea" autocomplete="off" spellcheck="true" placeholder=" Описание события *"></textarea>
             </div>
            <div class="form__item-left">
                 <div class="form__wrapper-left">
                    <label for="radio" class="form__label">
                        <input type="radio" class="form__radio" name="radio" value='1'> Срочная
                    </label>
                    <label for="radio" class="form__label">
                        <input type="radio" class="form__radio" name="radio" value='2'> Плановая
                    </label>
                    <label for="radio" class="form__label">
                        <input type="radio" class="form__radio" name="radio" value='3'> От абонента (письмо)
                    </label>
                 </div>
                 <p class="form__p">Контактный номер:</p>
                 <input name="phone" type="tel" class="form__input-phone mobilephone" placeholder="+7(000)000-00-00" minlength="18" maxlength="18" >
              </div>
        </div>

        <div class="form__column-right">
            <div class="form__item-right">
                <a class="form__a" href="{{ route('dispatchershome') }}">
                    <img src="{{ asset('css/assets/icon_close_red.png') }}" alt="icon-close" class="form__icon-close">
                </a>
                <p class="form__p">Адрес события: <a href="#" id="toggleMap" class="form__a-red">Яндекс Карты *</a></p> 
                <div class="form__address js-form-address" id='addressFields'>
                     <input type="text" class="form__input-address" name="district" placeholder="Район">
                     <input type="text" class="form__input-address" name="city" placeholder="Город *">
                     <input type="text" class="form__input-address" name="street" placeholder="Улица *">
                     <input type="text" class="form__input-address" name="building" placeholder="Дом *">
                </div>
                <div class="form__map" id="map"></div>
                <textarea name="addressmap" class="form__textarea" id="coords" rows="3" cols="33" resize-x="none"></textarea>
            </div>
            <div class="form__item-right">
                <textarea name="notes" class="form__textarea" cols="30" rows="3" autocomplete="off" spellcheck="true" placeholder=" Примечание к месту события..."></textarea>
            </div>
            <div class="form__item-right">
                <p class="form__p">Закрепленный участок:</p>
                <input type="text" class="form__input-area" name="cityarea" placeholder="Район города">
                <select name="works" class="form__select-event">
                    <option value="" class="form__option-event" selected disabled>Добавить работы</option>
                    <option value="Устранение утечки" class="form__option-event">Устранение утечки</option>
                    <option value="Согласование" class="form__option-event">Согласование</option>
                    <option value="Технологический сброс" class="form__option-event">Технологический сброс</option>
                    <option value="Колодцы" class="form__option-event">Колодцы</option>
                    <option value="Люки" class="form__option-event">Люки</option>
                    <option value="Технологическое присоединение" class="form__option-event">Технологическое присоединение</option>
                    <option value="Благоустройство" class="form__option-event">Благоустройство</option>
                    <option value="Перекрытие" class="form__option-event">Перекрытие</option>
                    <option value="Задвижки" class="form__option-event">Задвижки</option>
                    <option value="Асфальт" class="form__option-event">Асфальт</option>
                    <option value="Перекладка" class="form__option-event">Перекладка</option>
                    <option value="Обследование" class="form__option-event">Обследование</option>
                    <option value="Другое" class="form__option-event">Другое</option>
                </select>
                   <input name="image" class="form__input-upload" multiple type="file" accept="image/*, .png, .jpg, .jpeg" />
            </div>
            <div class="form__button-wrapper">
                <button class="form__button" type="submit"> Сохранить </button>
            </div>
        </div>

        @if($errors->any())
       
            <div class="form__popup">
                <a href="{{ route('tapwaterticket') }}" class = "form__a-popup"> </a>
                <div class = "form__div-popup">
                    <a class="form__a" href="{{ route('tapwaterticket') }}">
                        <img src="{{ asset('css/assets/icon_close_red.png') }}" alt="icon-close" class="form__icon-close-popup">
                    </a>
                    <h3 class="form__h3-popup">Необходимо заполнить поля:</h3>
                    <ul class = "form__ul-popup">
                        @foreach($errors->all() as $error)
                        <li class = "form__li-popup">{{ $error }}</li>  
                        @endforeach
                    </ul>
              </div>
            </div>
          
        @endif
</form>