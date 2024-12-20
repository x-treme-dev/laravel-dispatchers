<form action="/message" method="POST"  class="form" enctype="multipart/form-data">
    @csrf
        <div class="form__column-left">
            <h2 class="form__h2">Заявка по {{ $service }}</h2>
            <div class="form__item-left">
                <p class="form__p">Дата регистрации:</p>
                <div class="form__time">
                    <label for="date" class="form__label">дата:
                        <!--Добавлено сообщение об ошибке на случай, если дата и время не будет установлено. Для даты и времени доступен ручной ввод.-->
                        <input name="date" type="date" id="date" class="form__input-date" class="@error('date') is-invalid @enderror">
                    </label>
                    <label for="time" class="form__label">время:
                        <input name="time" type="time" id="time" step="any" class="form__input-time" class="@error('time') is-invalid @enderror"> 
                    </label>
                    @error('date') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                    @error('time') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                </div>
            </div>
            <div class="form__item-left">
                <p class="form__p">Cобытие:</p>
                <select name="type" class="form__select-event"  class="@error('type') is-invalid @enderror">
                    <option value="" class="form__option-event" selected disabled>Тип  *</option>
                    <option value="Открытый, поврежденный люк" class="form__option-event">Открытый, поврежденный люк</option>
                    <option value="Ограничено водоснабжение" class="form__option-event">Ограничено водоснабжение</option>
                    <option value="Утечка воды" class="form__option-event">Утечка воды</option>
                    <option value="Благоустройство" class="form__option-event">Благоустройство</option>
                    <option value="Согласование" class="form__option-event">Согласование</option>
                    <option value="Неисправность запорной арматуры" class="form__option-event">Неисправность запорной арматуры</option>
                    <option value="Обследование" class="form__option-event">Обследование</option>
                    <option value="Перекладка" class="form__option-event">Перекладка</option>
                </select>
                @error('type') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
            </div>
            <div class="form__item-left" >
              <textarea name="description" cols="30" rows="3" class="form__textarea" class="@error('description') is-invalid @enderror" autocomplete="off" spellcheck="true" placeholder=" Описание события *"></textarea>
              @error('description') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
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
                 <input name="phone" type="tel" class="form__input-phone mobilephone" placeholder="+7(000)000-00-00"  autocomplete="off" minlength="18" maxlength="18" >
              </div>
              <p class="form__p-note">* - поля обязательные к заполнению</p>
        </div>

        <div class="form__column-right">
            <div class="form__item-right">
                <a class="form__a" href="{{ route('dispatchershome') }}">
                    <img src="{{ asset('css/assets/icon_close_red.png') }}" alt="icon-close" class="form__icon-close">
                </a>
                <p class="form__p">Адрес события: <a href="#" id="toggleMap" class="form__a-red">Яндекс Карты *</a></p> 
                <div class="form__address js-form-address" id='addressFields'>
                     <input type="text" class="form__input-address" name="district" placeholder="Район">
                     <input type="text" class="form__input-address" class="@error('city') is-invalid @enderror" name="city" placeholder="Город *">
                     @error('city') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                     <input type="text" class="form__input-address"  class="@error('street') is-invalid @enderror" name="street" placeholder="Улица *">
                     @error('street') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                     <input type="text" class="form__input-address" name="building" placeholder="Дом">
                </div>
                <div class="form__map" id="map"></div>
                <textarea name="addressmap" class="form__textarea"  class="@error('addressmap') is-invalid @enderror" id="coords" rows="3" cols="33" resize-x="none"></textarea>
                @error('addressmap') <div class="form__div-message blue">* Или ввести адрес через {{ $message }}</div> @enderror
            </div>
            <div class="form__item-right">
                <textarea name="notes" class="form__textarea" cols="30" rows="3" autocomplete="off" spellcheck="true" placeholder=" Примечание к месту события..."></textarea>
            </div>
            <div class="form__item-right">
                <p class="form__p">Закрепленный участок:</p>
                <input type="text" class="form__input-area" name="cityarea" placeholder="Район города">
                   <input name="image" class="form__input-upload" multiple type="file" accept="image/*, .png, .jpg, .jpeg" />
            </div>
            <div class="form__button-wrapper">
                <button class="form__button" type="submit"> Сохранить </button>
            </div>
        </div>
     
</form>