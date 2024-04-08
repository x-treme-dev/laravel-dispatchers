
document.addEventListener('DOMContentLoaded', () => {
    let toggleMap = document.getElementById('toggleMap');
    let addressFields = document.getElementById('addressFields');
    let map = document.getElementById('map');
    let coords = document.getElementById('coords');
    let toggle = true;
   
    toggleMap.addEventListener('click', e => {
     e.preventDefault();
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


  });
    
    
  

 