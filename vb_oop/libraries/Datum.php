<?php

class Datum {

    protected $dag;
    protected $maand;
    protected $jaar;

    public function __construct($dag = 1, $maand = 1, $jaar = 1990) {
        $this->dag = $dag;
        $this->maand = $maand;
        $this->jaar = $jaar;
    }

    public function setDag($dag) {
        $this->dag = $dag;
    }

    public function setMaand($maand) {
        $this->maand = $maand;
    }

    /*
     * return void
     */
    public function setJaar($jaar) {
        $this->jaar = $jaar;
    }

    public function getDatum() {
        $datum = $this->dag . "-" . $this->maand . "-" . $this->jaar;
        return $datum;
    }
}