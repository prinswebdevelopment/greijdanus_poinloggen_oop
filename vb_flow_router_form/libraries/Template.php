<?php

class Template {

    private $template;

    public function __construct($template) {
        $this->template = $template;
    }

    public function show($buffer) {

        $layout = file_get_contents('template/' . $this->template);

        $buffer = str_replace("{{ titel }}", "Welkom", $buffer);
        $buffer = str_replace("{{ content }}", $layout, $buffer);


        return $buffer;
    }
}
