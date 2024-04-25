

//arreglo para saber cuales div estan ocupados

let arreglo = ["","",""];

//funcion que evite que se abra como enlace a; soltar un elemento
function allowDrop(ev){
    ev.preventDefault();
}

//que sucede cuando se arrastra un elemento 
function drag(ev){
    //meotodo que establece el tipo de dasto y el valor de datos
    //arrastrados en el dato es texto y el valor es el id del elemento arrastrado: gato 
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev){
    //mediante ev.target.id tomo el nombre del id del div que puede ser 0 1 2 
    //si el arrglo en dicha posicion  esta vacio, significa que no tiene nada, osea puedo 
    //soltar alli. caso contrario, ya tiene un elemento 
    if(arreglo[parseInt(ev.target.id)] ==""){
        //obtengo los datos arrastrados con el metodo datatransfer.getdata() este metodo devolvera 
        //cualquier dato que se haya establecifo en el mismo tipo en el metodo setdata) en este
        //ejemplo data quedara con el html codigo mysql
        var data = ev.dataTransfer.getData("text");
        //agrego el arreglo el nombre del id 
        arreglo[parseInt(ev.target.id)] = data;
        //arreglo el elemneto arrastrado al elemento soltado
        ev.target.appendChild(document.getElementById(data));
    }

    if(arreglo[0] != "" ){
        if(arreglo[0] == "fundamento"){
            Swal.fire({
                title: "Tu Respuesta es Correcta",
                text: "Puedes Pasar a la Siguiente Sección ",
                icon: "success"
              })
              .then(function(){ 
                location.reload();
                }
             );
             
            
            
        }else{
            Swal.fire({
                title: "Respuesta Incorrecta",
                text: "Vuelve a Intentarlo",
                icon: "error",
              })
              .then(function(){ 
                location.reload();
                }
             );
        }
    }
   
    
}

