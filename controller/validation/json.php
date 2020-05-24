<?php
$nit = "12345";
$nombre_empresa = "Raptor";
$sector_economico = "Servicios/Desarrollo de Software";
$direccion_empresa = "Cra 51 A";
$mail_empresa = "lacantera@gmail.com";
$telefono_empresa = "5535066";
$celular_empresa = "3008006504";
$propietario = "Juanita";
$direccion_propietario = "Cra 19 2430";
$mail_propietario = "juanita@hotmail.com";
$telefono_propietario = "5535066";
$representante = "Josefina la Fina";
$direccion_representante = "Cra 30 19 80";
$mail_representante = "josefinalafina@hotmail.com";
$telefono_representante = "3146017605";
$logo = "cantera.png";


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
?>

<?php
    class CurlRequest
    {
        public function sendPost()
        {
            //datos a enviar
            $data = array("a" => "a");
            //url contra la que atacamos
            $ch = curl_init("http://localhost/API/post");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            //enviamos el array data
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
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

        public function sendPut()
        {
            //datos a enviar
            $data = array("a" => "a");
            //url contra la que atacamos
            $ch = curl_init("http://localhost/WebService/API_Rest/api.php");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            //enviamos el array data
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            //obtenemos la respuesta
            $response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
            curl_close($ch);
            if(!$response) {
                return false;
            }else{
                var_dump($response);
            }
        }

        public function sendGet()
        {
            //datos a enviar
            $data = array("a" => "a");
            //url contra la que atacamos
            $ch = curl_init("http://localhost/WebService/API_Rest/api.php");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            //enviamos el array data
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            //obtenemos la respuesta
            $response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
            curl_close($ch);
            if(!$response) {
                return false;
            }else{
                var_dump($response);
            }
        }

        public function sendDelete()
        {
            //datos a enviar
            $data = array("a" => "a");
            //url contra la que atacamos
            $ch = curl_init("http://localhost/WebService/API_Rest/api.php");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            //enviamos el array data
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            //obtenemos la respuesta
            $response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
            curl_close($ch);
            if(!$response) {
                return false;
            }else{
                var_dump($response);
            }
        }
    }

    $new = new CurlRequest();

    $resultado = $new ->sendPost();
    var_dump($resultado);

?>