<?php

class FrontController
{
    static function main($db)
    {

        /* ****** Comprobamos los parametros y obtenemos, el controller, la action y los parametros *********** */
        $request_vars = array();
        //Iniciamos las sessions
        session_start();

        //TODO: Guardamos los valores GET en request_vars
        
        //TOD: Guardamos los valores POST en request_vars
        
        //----------- Limpiamos la request_vars CON EL INPUT FILTER para tener solo las opciones ---------------
        $options = sanitizer($request_vars);

        //Obtenemos el controlador y el metodo, nos guardamos las opciones
        $controllerName = $request_vars['controller'] . CONTROLLER_SUFIX;
        $controllerPath = CONTROLLERS_PATH . $controllerName . '.php';

        //obtenemos el modelo (mismo nombre que el controlador)
        $modelPath = MODELS_PATH . $request_vars['controller'] . MODEL_SUFIX . '.php';

        $actionName = $request_vars['method'];
        unset ($options['controller']);
        unset ($options['method']);


        //-----------  Incluimos el fichero que contiene nuestra clase controladora solicitada -----------
        if (file_exists($controllerPath)) {
            include $controllerPath;
        } else {
            $controllerName = 'indexController';
            include CONTROLLERS_PATH . $controllerName . '.php';
        }
        if (file_exists($modelPath)) {
            include $modelPath;
            //instanciar model o no y pasarselo al controlador
        }


        $controlerObj = new $controllerName ($db);

        //TODO: Llamamos a la funcion necesaria

        $referer['controller'] = $controllerName;
        $referer['method'] = $actionName;

    }
}

