<?php
class Stranka
{
    private $id;
    private $titulek;
    private $text;

    public function getId() {
        return $this->id;
    } 
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getTitulek() {
        return $this->titulek;
    }    
    public function setTitulek($titulek) {
        $this->titulek = $titulek;
    }
    
    public function getText() {
        return $this->text;
    }
    public function setText($text) {
        $this->text = $text;
    }
    
    
    public function __toString() {
        return "stranka: ".$this->id.",".$this->titulek.",".$this->text;
    }
    
}
?>