<?php

namespace Controllers;


use MVC\Router;
use Model\Servicio;
use Model\Blog;
use PHPMailer\PHPMailer\PHPMailer;
// use Model\ActiveRecord; // Remove if not needed

class PaginasController {
    public static function index( Router $router ) {

        $servicios = Servicio::all();
        $inicio = true;

        $router->render('paginas/index', [
            'servicios' => $servicios,
            'inicio' => $inicio
        ]);

    }
    public static function nosotros( Router $router ) {

        $router->render('paginas/nosotros', []);

    }
    public static function servicios( Router $router ) {

        $servicios = Servicio::all();

        $router->render('paginas/servicios', [
            'servicios' => $servicios
        ]);

    }
    public static function servicio( Router $router ) {

        $id = validarORedireccionar('/servicios');

        // Busca el servicio por su id
        $servicio = Servicio::find($id);

        $router->render('paginas/servicio', [
            'servicio' => $servicio
        ]);

    }
    public static function blog( Router $router ) {
       

        $router->render('paginas/blog', [
            
             
        ]);

    }
    public static function entrada( Router $router ) {
      

        $router->render('paginas/entrada', [
            
        ]);
        

    }
    public static function contacto( Router $router ) {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
                // debuguear($_POST);
            

            $respuestas = $_POST['contacto'];
    
            // Crear una instancia de PHPMailer
            $email =new PHPMailer();

            // Configurar SMTP para envío de emails
            $email->isSMTP();
            $email->Host = 'sandbox.smtp.mailtrap.io';
            $email->SMTPAuth = true;
            $email->Username = '905762cfd7490e';
            $email->Password = '23da3aecebe8ba';
            $email->SMTPSecure = 'tls';
            $email->Port = 2525;

            // Configurar el contenido del mail
            $email->setFrom('admin@equiparent.app');
            $email->addAddress('admin@equiparent.app', 'Equiparent.app');
            $email->Subject = 'Tienes un Nuevo Mensaje';

            // Habilitar HTML
            $email->isHTML(true);
            $email->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre: ' .  $respuestas['nombre']   . '</p>';
            $contenido .= '<p>Email: ' .  $respuestas['email']   . '</p>';
            $contenido .= '<p>Teléfono: ' .  $respuestas['telefono']   . '</p>';
            $contenido .= '<p>Mensaje: ' .  $respuestas['mensaje']   . '</p>';
            $contenido .= '<p>Fecha Contacto: ' .  $respuestas['fecha']   . '</p>';
            $contenido .= '<p>Hora: ' .  $respuestas['hora']  . '</p>';
            $contenido .= '</html>';

            $email->Body = $contenido;
            $email->AltBody = 'Esto es texto alternativo sin HTML';
            
            // Enviar el email
            if($email->send()) {
                echo "Mensaje enviado Correctamente";
            } else {
                echo "El mensaje no se pudo enviar...";
            }

        }

        

        $router->render('paginas/contacto', [
            
        ]);

    }
}