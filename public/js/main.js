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

    //дата 
     const date = new Date();
     const year = date.getFullYear();
     const month = String(date.getMonth() + 1).padStart(2, '0'); // Месяцы начинаются с 0
     const day = String(date.getDate()).padStart(2, '0');
     const currentDate =  `${year}-${month}-${day}`;
     document.getElementById('date').value = currentDate;
   
     // время
      const now = new Date();
      const hours = String(now.getHours()).padStart(2, '0');
      const minutes = String(now.getMinutes()).padStart(2, '0');
      const seconds = String(now.getSeconds()).padStart(2, '0');
      const currentTime = `${hours}:${minutes}:${seconds}`;
      document.getElementById('time').value = currentTime;
      
     // запрет отправки формы по нажатию клавиши Enter
     document.querySelector('form').addEventListener('keypress', function(event) {
      if (event.key === 'Enter') {
        // Стоп, отправка прерывается!
        event.preventDefault();
      }
    });
    
});
    
    
  

 