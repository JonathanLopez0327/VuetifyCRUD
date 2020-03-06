$(document).ready(function() {
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),

      data: () => ({

      })
    });

    const contenedor = document.querySelector('#contenedor');

    document.querySelector('#boton-menu').addEventListener('click', () =>{
        contenedor.classList.toggle('active');
    });

    function sendRequest() {
      var theObject = new XMLHttpRequest();
      theObject.open('GET', 'Components/Estadisticas/index.php', true);
      theObject.setRequestHeader('Content-Type', 'application/x-ww-form-urlencoded');
      theObject.onreadystatechange = function () {
        document.getElementById('main').innerHTML = theObject.responseText;
      }
      theObject.send();
    }

});
