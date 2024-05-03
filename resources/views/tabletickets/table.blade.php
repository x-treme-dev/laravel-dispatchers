
<table class="table">
    <caption class="table__caption">Водопровод</caption>
    <thead class="table__thead">
        <tr class="table__row">
            <th class="table__header">№</th>
            <th class="table__header">Время <br> регистрации</th>
            <th class="table__header">Тип</th>
            <th class="table__header">Адрес</th>
            <th class="table__header">Событие</th>
            <th class="table__header">Телефон</th>
            <th class="table__header">ЭУ</th>
            <th class="table__header">Время <br> начала работ</th>
            <th class="table__header">Время <br> завершения работ</th>
            <th class="table__header"></th>
        </tr>
    </thead>
    <tbody>
        <tr class="table__row">
            <td class="table__data data_row" colspan="10"> 25.01.24 </td>
        </tr>
        
            @foreach ($tickets as $rowTickets)
            <tr class="table__row">
                <td class="table__data" data-label="Заявка №">{{ $rowTickets->tapwaterticket_id}}</td>
                <td class="table__data" data-label="Время регистрации:">{{ $rowTickets->date }} {{ $rowTickets->time }}</td>
                <td class="table__data"data-label="Тип:">{{ $rowTickets->type }}</td>
                <td class="table__data"data-label="Адрес:">{{ $rowTickets->district }} {{ $rowTickets->city }} {{ $rowTickets->street }} {{ $rowTickets->building }}</td>
                <td class="table__data"data-label="Событие:">{{ $rowTickets->description }}</td>
                <td class="table__data"data-label="Телефон:">{{ $rowTickets->phone }}</td>
                <td class="table__data"data-label="Участок">{{ $rowTickets->cityarea }}</td>
                <td class="table__data" data-label="Время начала работ"></td>
                <td class="table__data" data-label="Время окончания работ"></td>
                <td class="table__data" data-label="Опции">
                    <a class="table__a" src="#">
                        <img src="{{ asset('css/assets/button-edit-orange.png') }}" title="редактировать заявку №{{ $rowTickets->tapwaterticket_id  }}" class="table__img-edit">
                    </a>
                    <a class="table__a" src="#">
                        <img src="{{ asset('css/assets/button-done-orange.png') }}" title="закрыть заявку №{{ $rowTickets->tapwaterticket_id  }}" class="table__img-done">
                    </a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>