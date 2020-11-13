<?php

class Router {

    public function getPage() {
        switch($_GET['page']) {
            case "registratieform":
                $layout = 'registratieform.php';
                break;

            case "registratie":
                Import::getLibrary('Gebruikers');
                $gebruikers = new Gebruikers();
                $layout = $gebruikers->register();
                break;

            default:
                $layout = 'home.php';
                break;
        }


        return $layout;
    }
}
