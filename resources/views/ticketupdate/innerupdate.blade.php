 <div class="innermessage">
        <a class="innermessage__a-icon" href="{{ route('dispatchershome') }}">
            <img src="{{ asset('css/assets/icon_close_red.png') }}" alt="close" class="innermessage__icon-close">
        </a>
        <div class="innermessage__div">
                <h2 class="innermessage__h2">Обновлена заявка <a href="{{ route('tabletickets') }}" class="innermessage__a"> № {{ $ticket_row -> id }} </a> по Водопроводу 
                   от {{ $ticket_row -> date }} {{ $ticket_row -> time }}
                </h2>
        </div>
 </div>
           
 
             
        