<?php


namespace App\Modelos;


class Computador
{

    private $Referencia;
    private $Marca;
    private $Color;
    private $Procesador;

    /**
     * Computador constructor.
     * @param $Referencia
     * @param $Marca
    * @param $Color
     * @param $Procesador
     */

    public function __construct($Referencia, $Marca, $Color, $Procesador)
    {
        $this->Referencia = $Referencia;
        $this->Marca = $Marca;
        $this->Color = $Color;
        $this->Procesador = $Procesador;
    }

    /**
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->Referencia;
    }

    /**
     * @param mixed $Referencia
     */
    public function setReferencia($Referencia)
    {
        $this->Referencia = $Referencia;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->Marca;
    }

    /**
     * @param mixed $Marca
     */
    public function setMarca($Marca)
    {
        $this->Marca = $Marca;
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
    public function getProcesador()
    {
        return $this->Procesador;
    }

    /**
     * @param mixed $Procesador
     */
    public function setProcesador($Procesador)
    {
        $this->Procesador = $Procesador;
    }



    /**
     * @param mixed $Marca
     */
    public function MostrarDatos()
    {
        echo "<h4> Los datos del computador son:</h4>";
        echo "<u1>";
        echo "<li><strong>Referencia</strong>", $this->getReferencia() . "</li>";
        echo "<li><strong>Marca</strong>", $this->getMarca() . "</li>";
        echo "<li><strong>Color</strong>", $this->getColor() . "</li>";
        echo "<li><strong>Procesador</strong>", $this->getProcesador() . "</li>";
        echo "</ul>";
    }











}