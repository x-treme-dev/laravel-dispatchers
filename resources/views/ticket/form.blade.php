<form action="/" method="POST"  class="form" enctype="multipart/form-data">
    @csrf
        <div class="form__column-left">
            <h2 class="form__h2">Заявка по водопроводу</h2>
            <div class="form__item-left">
                <p class="form__p">Дата регистрации:</p>
                <div class="form__time">
                    <label for="" class="form__label">дата:
                        <input type="date" class="form__input-date">
                    </label>
                    <label for="время" class="form__label">время:
                        <input type="time" class="form__input-time"> 
                    </label>
                </div>
            </div>
            <div class="form__item-left">
                <p class="form__p">Описание события:</p>
                <select name="" id="" class="form__select-event">
                    <option value="" class="form__option-event" selected disabled>Тип</option>
                    <option value="Открытый, поврежденный люк" class="form__option-event">Открытый, поврежденный люк</option>
                    <option value="Отсутствует (ограниченно) водоснабжение" class="form__option-event">Отсутствует (ограниченно) водоснабжение</option>
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
              <textarea name="" id="" cols="30" rows="7" class="form__textarea" autocomplete="off" spellcheck="true" placeholder=" Описание события..."></textarea>
             </div>
            <div class="form__item-left">
                 <div class="form__wrapper-left">
                    <label for="" class="form__label">
                        <input type="radio" class="form__radio" name="radio"> Срочная
                    </label>
                    <label for="" class="form__label">
                        <input type="radio" class="form__radio" name="radio"> Плановая
                    </label>
                    <label for="" class="form__label">
                        <input type="radio" class="form__radio" name="radio"> От абонента (письмо)
                    </label>
                 </div>
                 <p class="form__p">Телефон :</p>
                 <input type="tel" class="form__input-phone" placeholder=" +7 (XXX) XXX-XX-XX"  pattern="[\+]\d{1}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}" minlength="18" maxlength="18" >
              </div>
            </div>

        <div class="form__column-right">
            <div class="form__item-right">
                <a class="form__a" href="{{ route('dispatchershome') }}">
                    <img src="{{ asset('css/assets/icon_close_red.png') }}" alt="icon-close" class="form__icon-close">
                </a>
                <p class="form__p">Адрес события: <a href="" class="form__a-red">показать на карте</a></p> 
                <div class="form__address">
                     <input type="text" class="form__input-address" placeholder="Район">
                     <input type="text" class="form__input-address" placeholder="Город">
                </div>
            </div>
            <div class="form__item-right">
                <div class="form__address">
                     <input type="text" class="form__input-address" placeholder="Улица">
                     <input type="text" class="form__input-address" placeholder="Дом">
                </div>
            </div>
            <div class="form__item-right">
                <textarea name="" id="" cols="30" rows="7" class="form__textarea" autocomplete="off" spellcheck="true" placeholder=" Примечание к месту события..."></textarea>
            </div>
            <div class="form__item-right">
                <p class="form__p">Закрепленный участок:</p>
                <select name="" id="" class="form__select-event">
                    <option value="" class="form__option-event" selected disabled>Эксплуатационный участок</option>
                    <option value="Центральный" class="form__option-event">Центральный</option>
                    <option value="Другое" class="form__option-event">Другое</option>
                </select>
                <select name="" id="" class="form__select-event">
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
                    <option value="Другое " class="form__option-event">Другое</option>
                </select>
                    <label for="fileUploader" class="form__label-upload">Загрузить фото
                        <input id="fileUploader" class="form__input-upload" multiple type="file" name="image" accept="image/*"  />
                    </label>
            </div>
            <div class="form__button-wrapper">
                <button class="form__button" type="submit"> Сохранить </button>
            </div>
        </div>
</form>