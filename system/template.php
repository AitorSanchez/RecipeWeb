<?php

class Template
{

    protected $variables;


    function __construct()
    {
        $this->variables = array();
    }

    /** Set Variables **/

    function set($name, $value)
    {
        $this->variables[$name] = $value;
    }

    function un_set($name)
    {
        unset($this->variables[$name]);
    }

    /** Display Template **/

    function render($template)
    {
        extract($this->variables);
        if (file_exists(VIEWS_PATH . 'header.php')) {
            include(VIEWS_PATH . 'header.php');
        }else{
            include(VIEWS_PATH . 'error/404.php');
        }
        if (file_exists(VIEWS_PATH . $template)) {
            include(VIEWS_PATH . $template);
        }else{
            include(VIEWS_PATH . 'error/404.php');
        }
        if (file_exists(VIEWS_PATH . 'footer.php')) {
            include(VIEWS_PATH . 'footer.php');
        }else{
            include(VIEWS_PATH . 'error/404.php');
        }


//        if (file_exists(VIEWS_PATH . $this->_controller . '/' . 'header.php')) {
//            include(VIEWS_PATH . $this->_controller . '/' . 'header.php');
//        } else {
//            include(VIEWS_PATH . 'header.php');
//        }
//
//        include(VIEWS_PATH . $this->_controller . '/' . $this->_action . '.php');
//
//        if (file_exists(VIEWS_PATH . $this->_controller . '/' . 'footer.php')) {
//            include(VIEWS_PATH . $this->_controller . '/' . 'footer.php');
//        } else {
//            include(VIEWS_PATH . 'footer.php');
//        }

    }

}
