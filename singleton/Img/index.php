<?php

class Bioskop {
    private static $instance;
    private $logFile;

    private function __construct() {
        $this->logFile = fopen('film.log', 'a');
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function catatFilm($pesan) {
        $logMessage = "$pesan" . PHP_EOL;
        fwrite($this->logFile, $logMessage);
        echo $logMessage; 
    }

    public function __destruct() {
        fclose($this->logFile);
    }
}

// Contoh penggunaan singleton Bioskop
$bioskop = Bioskop::getInstance();
$bioskop->catatFilm('Film Avengers: Endgame dimulai.');
$bioskop->catatFilm('Film Avengers: Endgame selesai diputar.');
