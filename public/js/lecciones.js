function concepto(str){
    var leccion= str;
    var nodoMostrarConcepto=document.getElementById('mostrarConcepto');
    var nodoMostrarTitulo=document.getElementById('mostrarTitulo');
    var nodoBorrarDiv=document.getElementById('bienvenida');
    var contenidosRecibidos = new Array();
     xmlhttp=new XMLHttpRequest();
     xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            contenidosRecibidos=xmlhttp.responseText.split("-");
            nodoMostrarTitulo.innerHTML=contenidosRecibidos[0];
            nodoMostrarConcepto.innerHTML=contenidosRecibidos[1];
            nodoBorrarDiv.innerHTML='';
        }
     }
     var cadenaParametros='concepto='+encodeURIComponent(leccion);
     xmlhttp.open('POST', './controllers/leccionContextoController.php');
     xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
     xmlhttp.send(cadenaParametros);
}