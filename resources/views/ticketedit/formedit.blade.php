<form action="/message" method="POST"  class="form" enctype="multipart/form-data">
    @csrf
        <div class="form__column-left">
            <h2 class="form__h2">Заявка по {{ $service }} № {{ $ticket_id }}</h2>
            <div class="form__item-left">
                <p class="form__p">Дата регистрации:</p>
                <div class="form__time">
                    <label for="date" class="form__label">дата:
                        <!--Добавлено сообщение об ошибке на случай, если дата и время не будет установлено. Для даты и времени доступен ручной ввод.-->
                        <input name="date" type="date" class="form__input-date" class="@error('date') is-invalid @enderror" value='{{ $rowTicket->date }}'>
                    </label>
                    <label for="time" class="form__label">время:
                        <input name="time" type="time" step="any" class="form__input-time" class="@error('time') is-invalid @enderror" value='{{ $rowTicket->time }}'> 
                    </label>
                    @error('date') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                    @error('time') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                </div>
            </div>
            <div class="form__item-left">
                <p class="form__p">Cобытие:</p>
                <select name="type" class="form__select-event"  class="@error('type') is-invalid @enderror">
                    <option value="" class="form__option-event">{{ $rowTicket->type }} *</option>
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
                @error('type') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
            </div>
            <div class="form__item-left" >
              <textarea name="description" cols="30" rows="3" class="form__textarea" class="@error('description') is-invalid @enderror" autocomplete="off" spellcheck="true" placeholder=" Описание события... *">{{ $rowTicket->description }}</textarea>
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
                 <input name="phone" type="tel" class="form__input-phone mobilephone" placeholder="+7(000)000-00-00"  autocomplete="off" minlength="18" maxlength="18" value="{{ $rowTicket->phone }}">
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
                     <input type="text" class="form__input-address" name="district" placeholder="Район" value='{{ $rowTicket->district }}'>
                     <input type="text" class="form__input-address" class="@error('city') is-invalid @enderror" name="city" placeholder="Город *" value='{{ $rowTicket->city }}' >
                     @error('city') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                     <input type="text" class="form__input-address"  class="@error('street') is-invalid @enderror" name="street" placeholder="Улица *" value='{{ $rowTicket->street }}'>
                     @error('street') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                     <input type="text" class="form__input-address" class="@error('building') is-invalid @enderror" name="building" placeholder="Дом *" value='{{ $rowTicket->building }}'>
                     @error('building') <div class="form__div-message">* Поле {{ $message }} должно быть заполнено! </div> @enderror
                </div>
                <div class="form__map" id="map"></div>
                <textarea name="addressmap" class="form__textarea"  class="@error('addressmap') is-invalid @enderror" id="coords" rows="3" cols="33" resize-x="none">{{ $rowTicket->addressmap }}</textarea>
                @error('addressmap') <div class="form__div-message blue">* Или ввести адрес через {{ $message }}</div> @enderror
            </div>
            <div class="form__item-right">
                <textarea name="notes" class="form__textarea" cols="30" rows="3" autocomplete="off" spellcheck="true" placeholder=" Примечание к месту события...">{{ $rowTicket->notes }}</textarea>
            </div>
            <div class="form__item-right">
                <p class="form__p">Закрепленный участок:</p>
                <input type="text" class="form__input-area" name="cityarea" placeholder="Район города" value="{{ $rowTicket->cityarea }}">
                <select name="works" class="form__select-event">
                    <option value="Добавить работы" class="form__option-event" selected disabled>{{ $rowTicket->works }}</option>
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
                   
            </div>
            <div class="form__button-wrapper">
                <button class="form__button" type="submit"> Сохранить </button>
            </div>
        </div>
     
</form>