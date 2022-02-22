<?php
class Igrac{
    private $brend;
    private $model;
    private $opis;
    private $url;
    private $vlasnik;
    private $karoserija;
    public function __construct(string $brend, strin $model, string $opis, string $url, Korsnik $vlasnik, Karoserija $karoserija)
    {
        $this->brend=$brend;
        $this->model=$model;
        $this->opis=$opis;
        $this->url=$url;
        $this->vlasnik=$vlasnik;
        $this->karoserija=$karoserija;

    }

    function getBrend(){
        return $this->brend;
    }
    function getModel(){
        return $this->model;
    }
    function getOpis(){
        return $this->opis;
    }
    function getUrl(){
        return $this->url;
    }
    function getVlasnik(){
        return $this->vlasnik;
    }
    function getKaroserija(){
        return $this->karoserija;
    }
}

?>