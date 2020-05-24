<?php

$nit=str_replace("-", "", $_POST['nit']);
$initialsCompany= substr($_POST['name_company'],0,2);
echo "iniciales ".$initialsCompany."<br>";
$nameSaveLogo=$initialsCompany.$nit.".jpg";


echo
"NIT: ".$_POST['nit']."<br>".
"Compañia: ".$_POST['name_company']."<br>".
"Dirección: ".$_POST['address_company']."<br>".
"Teléfono: ".$_POST['phone_company']."<br>".
"Celular: ".$_POST['cel_company']."<br>".
"Mail: ".$_POST['mail_company']."<br>".
"Contacto: ".$_POST['contact_company']."<br>".
"Logo: ".$nameSaveLogo."<br>".
"Web: ".$_POST['web_url']."<br>".
"Facebook: ".$_POST['fb_url']."<br>".
"Twitter: ".$_POST['tw_url']."<br>".
"Instagram: ".$_POST['ins_url']."<br>".
"Youtube: ".$_POST['yt_url']."<br>".
"Categoria: ".$_POST['category_company']."<br>".
"Descripcion Compañia: ".$_POST['description_company']."<br>".
"Descripción Producto: ".$_POST['product_description']."<br>";

  copy($_FILES['logo_url']['tmp_name'], '../utils/img_logo_coompanies/'.$nameSaveLogo);
  echo "La foto se registro en el servidor.<br>";
  echo "<img src='../utils/img_logo_coompanies/".$nameSaveLogo."' width='300px'/>";
  ?>