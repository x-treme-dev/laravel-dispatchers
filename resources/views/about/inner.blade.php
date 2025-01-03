 <div class="about__card">
        <a href="{{ route('dispatchershome') }}" class="entry__link">
        <img src="{{ asset('css/assets/logo-rm-bg.png') }}" alt="logo" class="about__img">
        </a>     
        <h1 class="about__h1" id="about">&laquo;Система приема заявок от абонентов 
        <br>на устранение аварийных ситуаций по водопроводу&raquo;</h1>
        <p class="about__p">
        Эту систему можно применять для регистрации заявок, поступающих от населения, 
        с последующей передачей их исполнителям. При должном масштабировании система может работать 
        с заявками любого типа. Однако изначально предполагается, что система будет работать в сфере ЖКХ.
        </p>
        <p class="about__p">
        На сегодняшний день подобная регистрация обращений абонентов осуществляется в обычных бумажных журналах. 
        Однако представленная система позволит автоматизировать большинство процессов и ускорить работу соответсвующих служб,
        а также избавит от множества рутинных действий.
        </p>          
</div>

<div class="about__card">
        <h2 class="about__h2">Общая логика работы в системе:</h2>
        <p class="about__p" id="dispatchers">
        1. <span class="about__color">Диспетчеры.</span> Доступные разделы: Журналы, Заявки. Диспетчеры филиала составляют заявки для своего филиала. 
        Диспетчер может создать заявку и отредактировать ее. Удалять заявки нельзя. Ему доступна форма заявки для заполнения, 
        а также список заявок, уже созданных. При регистрации заявки Диспетчером они отображаются в Телеграме 
        в определенной группе (в Телеграме группы для служб разные). Далее Диспетчер перепроверяет правильность заполнения 
        формы и закрывает заявку (дата закрытия заявки пишется в БД).
        </p>
</div>
<div class="about__img-position">
        <img src="{{ asset('css/assets/dispatcher_journals_tickets.png') }}"alt="" class="about__img-roles">  
</div>
<div class="about__card">
        <p class="about__p" id="service">
        2. <span class="about__color">Службы.</span>  Доступные разделы: Журналы, Отчеты. Недоступна кнопка "Закрыть заявку". Службы смотрят на 
        заявки для своего филиала. Каждому филиалу соответствует своя таблица. Службы получают сообщения о заявках 
        в группах Телеграма. Каждой группе соответствует свой тип заявок (Водопровод, Канализация и т.п.). При получении 
        заявки в Телеграм-канале, исполнитель может перейти по ссылке и заполнить специальную форму, зафиксировав в ней ход работ. 
        </p>
</div>
<div class="about__img-position">
        <img src="{{ asset('css/assets/services_tickets.png') }}"alt="" class="about__img-roles">
</div>
<div class="about__card">
        <p class="about__p" id="statistic">
        3. <span class="about__color">Статисты.</span>  Доступные разделы: Отчеты. 
        Статисты печатают отчеты в нужном формате, предварительно установив фильтры по датам, выполнению, адресу (улица, населенный пункт). 
        </p>       
</div>
<div class="about__card">
        <p class="about__p" id="permissions">
        4. <span class="about__color">Права доступа в систему.</span>  Права выдает супер-пользователь системы (супер-админ). Он может создавать роли в системе. 
        1. Роль - администратор. Может создавать пользователей с ролями. Далее роли - диспетчеры, службы, статисты.
        </p>
</div>
<div class="about__img-position">
        <img src="{{ asset('css/assets/auth_super-user.png') }}"alt="" class="about__img-roles">
      
</div>
<div class="about__img-position">
        <img src="{{ asset('css/assets/auth_.png') }}"alt="" class="about__img-roles-resize">
</div>
<div class="about__card">  
        <p class="about__p">                
        <span class="about__color">Статусы заявок. </span> 
        В Журнале:
        1. Красный – заявка не закрыта, т.е. после заполнения Заявки Диспетчером с ней никто не работал.
        2. Желтый – заявку начал заполнять работник службы, но пока она не закрыта Диспетчером.
        3. Белый – заявка закрыта Диспетчером после проверки.
        </p>
</div>

            
         
    