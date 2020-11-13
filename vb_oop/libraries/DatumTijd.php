<?php

class DatumTijd extends Datum {

    public function __construct($uur = 12, $minuut = 14, $dag = 1, $maand = 1, $jaar = 1990) {
        parent::__construct($dag, $maand, $jaar);
        $this->uur = $uur;
        $this->minuut = $minuut;
    }



    public function setUur($uur) {
        $this->uur = $uur;
    }

    public function setMinuut($minuut) {
        $this->minuut = $minuut;
    }

    public function getDatum() {
        $datum = parent::getDatum();
        $datum .= " " . $this->uur . ":" . $this->minuut;
        return $datum;
    }

    private $uur;
    private $minuut;
}