<?php

/*
 * Csv object voorbeeld voor lezen en toevoegen
 */
Class Csv {

    // string bestandsnaam
    private $file;

    // array inhoud van csv bestand
    private $csv= array();

    /*
     * Constructor
     *
     * @param string bestandsnaam
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /*
     * Openen van een bestand
     *
     * @return void
     */
    private function read() {
        $this->csv = array();
        $bestand = fopen($this->file, 'r');

        while ($data = fgetcsv($bestand, 1000,';')) {
            $this->csv[] = $data;
        }

        fclose($bestand);
    }

    /*
     * Ophalen van data uit csv bestand
     *
     * @return echo uitkomst -> dit is niet netjes in oop overigens
     */
    public function getData() {
        $this->read();
        if($this->csv && is_array($this->csv)) {
            foreach($this->csv as $rij) {
                foreach($rij as $veld) {
                    echo $veld . " - ";
                }
                echo "<br>";
            }
        }
    }

    /*
     * Toevoegen van een nieuwe rij
     *
     * @return string melding van resultaat
     */
    public function appendData() {
        $bestand = fopen($this->file, 'a');

        $speler = array(
            'naam' => "Ferry",
            'rugnummer' => "22",
            'positie' => "reserve",
        );

        $succes = fputcsv($bestand, $speler, ";");

        fclose($bestand);

        if($succes) {
            return "Succesvol toegevoegd";
        } else {
            return "Er ging iets fout";
        }
    }

    /*
     * Toevoegen van een nieuwe rij
     *
     * @return string melding van resultaat
     */
    public function writeData() {
        $bestand = fopen($this->file, 'w');

        unset($this->csv[2]);

        foreach($this->csv as $speler) {
            $succes = fputcsv($bestand, $speler, ";");

            $bericht = "";
            if($succes) {
                $bericht .= "Geslaagd ";
            } else {
                $bericht .=  "Er ging iets fout ";
            }
        }

        fclose($bestand);

        return $bericht;

    }
}
