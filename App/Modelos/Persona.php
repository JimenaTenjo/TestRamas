<?php


namespace App\Modelos;

class Persona
{
    private $Nombre;
    private $Apellidos;
    private $Telefono;
    private $Direccion;

    /**
     * Persona constructor.
     * @param $Nombre
     * @param $Apellidos
     * @param $Telefono
     * @param $Direccion
     */
    public function __construct($Nombre, $Apellidos, $Telefono, $Direccion)
    {
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->Telefono = $Telefono;
        $this->Direccion = $Direccion;
    }


    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->Apellidos;
    }

    /**
     * @param mixed $Apellidos
     */
    public function setApellidos($Apellidos)
    {
        $this->Apellidos = $Apellidos;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Tipo_Documento
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }


    public function MostrarDatos()
    {
        echo "<h4>Los datos de la persona son: </h4>";
        echo "<u1>";
        echo "<li><strong>Nombres: </strong>", $this->getNombre() . "</li>";
        echo "<li><strong>Apellidos: </strong>", $this->getApellidos() . "</li>";
        echo "<li><strong>Telefono: </strong>", $this->getTelefono() . "</li>";
        echo "<li><strong>Direccion: </strong>", $this->getDireccion() . "</li>";
        echo "</ul>";

    }
}

