<?php

class Template {

    public static function callback($buffer) {
        $buffer = str_replace("{{ titel }}", "Welkom", $buffer);

        switch($_GET['page']) {
            case "registratieform":
                $layout = file_get_contents('template/registratieform.php');
                $buffer = str_replace("{{ content }}", $layout, $buffer);
                break;

            case "registratie":
                $layout = $_POST['naam'];
                $buffer = str_replace("{{ content }}", $layout, $buffer);
                break;

            default:
                $buffer = str_replace("{{ content }}", "<h1>Content</h1>", $buffer);
                break;
        }


        return $buffer;
    }
}
