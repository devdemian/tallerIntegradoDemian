<?php
function validoCaracter($caracter){
    $carac="0123456789K";
    $arrayCar = str_split($carac);
    $val=false;
    for($i=0;$i<count($arrayCar);$i++){
        if($caracter==$arrayCar[$i]){
            $val=true;
        }
    }
    return $val;
}
function validoPrimeros($cadena){
    $carac="0123456789";
    $arrayCar = str_split($carac);
    $largo = strlen($cadena)-2;
    $num=0;
    $validacion=false;
    for($i=0;$i<$largo;$i++){
        
        for($j=0;$j<count($arrayCar);$j++){
            if($cadena[$i]==$arrayCar[$j]){
                $num+=1;
            }
        }
    }
    if($num==$largo){
        $validacion=true;
    }
    return $validacion;
}
function compararDigitos($digitoUsser, $digito){
    if($digito==10){
        if($digitoUsser=="K"){
            return "ok";
        }else{
            return "K";
        }
    }else if($digito==11){
        if($digitoUsser=="0"){
            return "ok";
        }else{
            return "0";
        }
    }else if($digito==1||$digito==2||$digito==3||$digito==4||$digito==5||
    $digito==6||$digito==7||$digito==8||$digito==9){
        if($digito==$digitoUsser){
            return "ok";
        }else{
            return $digito;
        }
    }
}

function validarut($rut){
    $confirmacion="";
    $mult=array(3,2,7,6,5,4,3,2);
    $digitoUsser="";
    if(!empty($rut)){
        $longitud = strlen($rut);
        if($longitud > 2 and $longitud< 11){
            $rut=strtoupper($rut);
            if(validoCaracter($rut[-1])==true){
                if(substr($rut,-2,-1)=="-"){
                    if(validoPrimeros($rut)==true){
                        $digitoUsser=$rut[-1];
                        $rutPrep=str_split($rut);
                        $diferencia = 10 - $longitud;
                        for($i=0; $i<$diferencia;$i++){
                            array_unshift($rutPrep,"0");
                        }
                        $suma=0;
                        for($j=0;$j<8;$j++){
                            $suma+=$mult[$j]*$rutPrep[$j];
                        }
                        $divi=bcdiv($suma,11,4);//divicion arbitraria
                        $divi= $divi-intval($divi);
                        $digito=11-11*$divi;
                        $digito=intval($digito);
                        $resp= compararDigitos($digitoUsser, $digito);
                        if($resp=='ok'){
                            return "ok";
                        }else{
                            return "RUT ".$rut."  'NO' valido,  digito verificador correcto para ese numero de rut es ".$resp;
                        }
                    }else{
                        return "Rut ingresado presenta errores en uno o varios caracteres, digite cuidadosamente su RUT";
                    }
                }else{
                    return "Rut ingresado requiere el guion (-) antes del digito verificador, digite cuidadosamente su RUT";
                }
            }else{
                return "Rut ingresado presenta errores en uno o varios caracteres, digite cuidadosamente su RUT ";
            }
           
        }else{
            return "Longitud de rut erronea, digite cuidadosamente su RUT";
        }
    }else{
        return "Campo vacio, porfavor digite su RUT";
    }
}
function armarPass($rut, $nombre){
    $iniNombre=$nombre[0];
    $clave=$rut.$iniNombre;
    return $clave;
}



?>