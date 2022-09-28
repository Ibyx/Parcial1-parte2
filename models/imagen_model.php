<?php
class imagen_models
{
    private $id;
    private $nom;
    private $ruta;

    public function __construct($id, $nom, $ruta)
    {
        $this->id = $id;
        $this->ruta = $ruta;
        $this->nom = $nom;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setRuta($ruta)
    {
        $this->$ruta = $ruta;
    }
    public function getRuta()
    {
        return $this->ruta;
    }
}
