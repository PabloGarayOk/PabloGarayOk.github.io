# Portfolio web site
### Argentina Programa 4.0 - Academia Profesional Ticmas.

![](https://PabloGarayOK.github.io/img/web-site.png)

> Portfolio web site for developers.

----
#### Tecnologías:
* HTML
* CSS
* JavaScript
* PHP
----
Para ver la funcionalidad completa del sitio con su formulario de contacto es necesario acceder al archivo: __index.php__ en un servidor local como ___LAMP___ o ___WAMP___ o en un servidor ___online___.
También será necesario editar la línea 84 del archivo: [app.js](https://PabloGarayOK.github.io/js/app.js) que fue agregada solamente para dar un simple feedback al usuario al hacer _click_ para enviar el mensaje.

#### js/app.js　

```javascript
}else{
    form.submit();
    alert("Sending message!");  // <<<------ Eliminar esta línea.
  }
```
Para configurar el correo electrónico del destinatario hay que editar la línea 7 del archivo: [contact-form.php](https://PabloGarayOK.github.io/php/contac-form.php) y reemplazar por el mail deseado. También se puede configurar el mensaje del _Asunto_ editando el texto entre comillas de la línea 10.

#### php/contact-form.php

	<?php

	   if(!$_POST) exit;

	   // Capturamos los datos enviados por POST desde la pagina cotizaciones

	   $to           = 'hello@pablogaray.com.ar'; // <<<------ Modificar e-mail
	   $name         = $_POST["name"];
	   $email        = $_POST["email"];
	   $subject      = 'Consulta de la web Portfolio'; // <<<------ Modificar asunto
	   $message      = $_POST["message"];
	   
	?>

Finalmente podemos encontrar en el ___footer___ del archivo __index.php__ un pequeño _script de php_ en homenaje a los __Héroes de Malvinas__ que actualiza el año de manera automatica al igual que el _copyright_.
#### Fin.
