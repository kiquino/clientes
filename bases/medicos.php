<div class="contenedor-medicos">
 <script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../actions/getmed.php?q=" + str, true);
            xmlhttp.send();
        }
    }
   </script>
    <h3>Médicos</h3>
    <hr style="width:30%;margin:2% auto; margin-top:10px;">
    <div class="contenido-medicos">
        <div class="contenedor-buscador">
            <div class="buscador"></div>
            <div class="especialidad">
            <form>
                <label for="select">Seleccione un servicio</label>
           <select name="users" onchange="showUser(this.value)">
            
            <option value="1">Diagnóstico Por Imágenes</option>
            <option value="2">Reumatoligía</option>
            <option value="3">Ortopedia y Traumatología</option>
            <option value="4">Urólogo</option>
            <option value="5">Tocoginecología</option>

            </select>
            </form>
            </div>
           

        </div>
        <div class="lista-med">
<div id="txtHint"></div>
        </div>
    </div>
</div>