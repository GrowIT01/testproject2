<?php

/**
 * Description of controller
 * Email: sabinoshadei@gmail.com
 * @author Shadei.Sabino
 */
class ctrl extends db {

    public static function createView($viewName) {

        require_once "view/" . $viewName . ".php";
    }

    public function f_str($str) {
        $trim = trim($str);
        $remove_html = htmlspecialchars($trim);
        //$quote = preg_replace('/[\\&%#\*^;<>||{}\[\]()~ -]/','',$remove_html); 
        $q = mysqli_real_escape_string($this->get_connection(), $remove_html);
        return $q;
    }


}
