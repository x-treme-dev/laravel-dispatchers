 document.addEventListener('DOMContentLoaded', () => {
    let toggle = true;

    

   /*oбработчик формы*/
    toggleMap.addEventListener('click', e => {
     e.preventDefault();
     let toggleMap = document.getElementById('toggleMap');
     let addressFields = document.getElementById('addressFields');
     let map = document.getElementById('map');
     let coords = document.getElementById('coords');

      if(toggle){
        addressFields.style.display='none';
        map.style.display='block';
        coords.style.display='block';
        toggleMap.innerHTML = 'ввести c клавиатуры';
        toggle = false;
      } else if(!toggle){
        addressFields.style.display='block';
        map.style.display='none';
        coords.style.display='none';
        toggleMap.innerHTML = 'показать на карте';
        toggle = true;
      }
    });

    let mobilePhoneInput = document.querySelector(".mobilephone");
    const phoneMask = new IMask(mobilePhoneInput, {
     mask: "+7(000)000-00-00",
    });

    
     
     let inputDate = document.getElementById('date');
     inputDate.valueAsDate = new Date();
     let inputTime = document.getElementById('time');
     inputTime.value = new Date().toLocaleTimeString();
    
     // запрет отправки формы по нажатию клавиши Enter
     document.querySelector('form').addEventListener('keypress', function(event) {
      if (event.key === 'Enter') {
        // Стоп, отправка прерывается!
        event.preventDefault();
      }
    });
    
});
    
    
  

 