<?php
        $dataSend;

        $nit = $_POST['nit'];
        $nombre_empresa = $_POST['nombre_empresa'];
        $sector_economico = $_POST['sector_economico'];
        $direccion_empresa = $_POST['direccion_empresa'];
        $mail_empresa = $_POST['mail_empresa'];
        $telefono_empresa = $_POST['telefono_empresa'];
        $celular_empresa = $_POST['celular_empresa'];
        $propietario = $_POST['propietario'];
        $direccion_propietario = $_POST['direccion_propietario'];
        $mail_propietario = $_POST['mail_propietario'];
        $telefono_propietario = $_POST['telefono_propietario'];
        $representante = $_POST['representante'];
        $direccion_representante = $_POST['direccion_representante'];
        $mail_representante = $_POST['mail_representante'];
        $telefono_representante = $_POST['telefono_representante'];
        $logo = $_POST['logo'];


    function validateCompany(
        $nit,
        $nombre_empresa,
        $sector_economico,
        $direccion_empresa,
        $mail_empresa,
        $telefono_empresa,
        $celular_empresa,
        $propietario,
        $direccion_propietario,
        $mail_propietario,
        $telefono_propietario,
        $representante,
        $direccion_representante,
        $mail_representante,
        $telefono_representante,
        $logo
    ){
        // Validate nit
        if( $nit == "" ||
            $nombre_empresa == "" ||
            $sector_economico == "" ||
            $direccion_empresa == "" ||
            $mail_empresa == "" ||
            $telefono_empresa == "" ||
            $celular_empresa == "" ||
            $propietario == "" ||
            $direccion_propietario == "" ||
            $mail_propietario == "" ||
            $telefono_propietario == "" ||
            $representante == "" ||
            $direccion_representante == "" ||
            $mail_representante == "" ||
            $telefono_representante == ""
        )
        {
            echo "No se pude realizar la operación por inconsistencia en los datos";
        }
        else {
            $dataSend = '{ "nit" : "'.$nit.'",
                "nombre_empresa" : "'.$nombre_empresa.'",
                "sector_economico" : "'.$sector_economico.'",
                "direccion_empresa" : "'.$direccion_empresa.'",
                "mail_empresa" : "'.$mail_empresa.'",
                "telefono_empresa" : "'.$telefono_empresa.'",
                "celular_empresa" : "'.$celular_empresa.'",
                "propietario" : "'.$propietario.'",
                "direccion_propietario" : "'.$direccion_propietario.'",
                "mail_propietario" : "'.$mail_propietario.'",
                "telefono_propietario" : "'.$telefono_propietario.'",
                "representante" : "'.$representante.'",
                "direccion_representante" : "'.$direccion_representante.'",
                "mail_representante" : "'.$mail_representante.'",
                "telefono_representante" : "'.$telefono_representante.'",
                "logo" : "'.$logo.'"
            }';
            
            echo $dataSend;
            
        }
        
    }

    function sendPost()
        {
            //datos a enviar
            // $data = array("a" => "a");
            //url contra la que atacamos
            $ch = curl_init("http://localhost/API/empresa");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            //enviamos el array data
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($dataSend));
            //obtenemos la respuesta
            $response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
            curl_close($ch);
            if(!$response) {
                return false;
            }else{
                return $response;
            }
        }


    validateCompany($nit,
    $nombre_empresa,
    $sector_economico,
    $direccion_empresa,
    $mail_empresa,
    $telefono_empresa,
    $celular_empresa,
    $propietario,
    $direccion_propietario,
    $mail_propietario,
    $telefono_propietario,
    $representante,
    $direccion_representante,
    $mail_representante,
    $telefono_representante,
    $logo);
    sendPost();


?>
