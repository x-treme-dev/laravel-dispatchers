
<table class="table">
    <caption class="table__caption">Водопровод</caption>
    <thead>
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
                <td class="table__data">{{ $rowTickets->tapwaterticket_id}}</td>
                <td class="table__data">{{ $rowTickets->date }} {{ $rowTickets->time }}</td>
                <td class="table__data">{{ $rowTickets->type }}</td>
                <td class="table__data">{{ $rowTickets->district }} {{ $rowTickets->city }} {{ $rowTickets->street }} {{ $rowTickets->building }}</td>
                <td class="table__data">{{ $rowTickets->description }}</td>
                <td class="table__data">{{ $rowTickets->phone }}</td>
                <td class="table__data">{{ $rowTickets->cityarea }}</td>
                <td class="table__data"></td>
                <td class="table__data"></td>
                <td class="table__data"></td>
            </tr>
            @endforeach
    </tbody>
</table>