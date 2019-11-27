<?php


namespace App\Modelos;


class Mesa
{
    private $Tipo;
    private $Color;
    private $Tamano;
    private $Forma;

    /**
     * Mesa constructor.
     * @param $Tipo
     * @param $Color
     * @param $Tamano
     * @param $Forma
     */
    public function __construct($Tipo, $Color, $Tamano, $Forma)
    {
        $this->Tipo = $Tipo;
        $this->Color = $Color;
        $this->Tamano = $Tamano;
        $this->Forma = $Forma;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @param mixed $Tipo
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param mixed $Color
     */
    public function setColor($Color)
    {
        $this->Color = $Color;
    }

    /**
     * @return mixed
     */
    public function getTamano()
    {
        return $this->Tamano;
    }

    /**
     * @param mixed $Tamano
     */
    public function setTamano($Tamano)
    {
        $this->Tamano = $Tamano;
    }

    /**
     * @return mixed
     */
    public function getForma()
    {
        return $this->Forma;
    }

    /**
     * @param mixed $Forma
     */
    public function setForma($Forma)
    {
        $this->Forma = $Forma;
    }


    public function Mostrardatos()
    {
        echo "<h4>Los datos de la Mesa son: </h4>";
        echo "<ul>";
        echo "<li><strong>Tipo:</strong>" . $this->getTipo() . "</li>";
        echo "<li><strong>Color:</strong>" . $this->getColor() . "</li>";
        echo "<li><strong>Tamano:</strong>" . $this->getTamano() . "</li>";
        echo "<li><strong>Forma:</strong>" . $this->getForma() . "</li>";
        echo "</ul>";
    }

}