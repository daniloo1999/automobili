<?php
class Karoserija{
    private $naziv;
    public function __construct(string $naziv)
    {
        $this->naziv=$naziv;
    }
    function getNaziv(){
        return $this->naziv;
    }

}
?>