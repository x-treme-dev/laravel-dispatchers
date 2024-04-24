 <div class="innermessage">
        <a class="innermessage__a-icon" href="{{ route('dispatchershome') }}">
            <img src="{{ asset('css/assets/icon_close_red.png') }}" alt="close" class="innermessage__icon-close">
        </a>
        <div class="innermessage__div">
                <h2 class="innermessage__h2">Создана заявка <a href="#" class="innermessage__a"> №  {{ $last_ticket->tapwaterticket_id }}</a> по Водопроводу 
                        от {{ $last_ticket->date }} {{ $last_ticket->time }}.
                </h2>
        </div>
 </div>
           
 
             
        