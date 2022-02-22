<?php

class Korisnik{
    private $korisnickoIme;
    private $lozinka;
    private $brojTelefona;
    public function __construct(string $korisnickoIme, string $lozinka, string $brojTelefona)
    {
        $this->korisnickoIme=$korisnickoIme;
        $this->lozinka=$lozinka;
        $this->brojTelefona=$brojTelefona;
    }

    function getKorisnickoIme(){
        return $this->korisnickoIme;
    }
    function getLozinka(){
        return $this->lozinka;
    }
    function getBrojTelefona(){
        return $this->brojTelefona;
    }
}





?>