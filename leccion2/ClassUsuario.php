<?php

class Usuario
{
    /*MODIFICADORES*/
    //public -> permite acceder a las propiedas y métodos desde cualquier lado.
    //private -> NO permite acceder a las propiedas y métodos desde cualquier lado, ni desde una subclase. Para manejar este tipo de propiedades normalmente se crean metodos getter y setter
    //protected -> permite acceder a una propiedad o método desde la misma clase y desde que la heredan.
    //static -> se le define un valor inicial el cual no va a cambiar, la propiedad le pertecene a la clase no al objeto, lo que permite acceder a el desde cualquier lado sin necesidad de instanciar la clase

    private $strNombre;
    private $strEmail;
    private $strTipo;
    private $strClave;
    protected $strFechaRegistro;
    static $strEstado = "Activo";
    //Para acceder a una propiedad STATIC desde la misma clase se utiliza self::$propiedad
    //Para acceder a una propiedad STATIC desde fuera de clase se coloca  NombreClase::$propiedad

    //Indicamos el tipo de dato por cada variable a recibir, esto se hace apartir de PHP7
    public function __construct(string $nombre, string $email, string $tipo)
    {
        $this->strNombre = $nombre;
        $this->strEmail = $email;
        $this->strTipo = $tipo;
        $this->strClave = rand(); //funcion que genera numeros aleatorios
        $this->strFechaRegistro = date('Y-m-d H:m:s');
    }

    public function getNombre(): string
    { // ":string"-> indica que el método va a retornar un string
        return $this->strNombre;
    }

    public function getEmail(): string
    { // ":string"-> indica que el método va a retornar un string
        return $this->strEmail;
    }

    public function getPerfil()
    {
        echo "Datos del usuario <br>";
        echo "Nombre: " . $this->strNombre . "<br>";
        echo "Email: " . $this->strEmail . "<br>";
        echo "Clave: " . $this->strClave . "<br>";
        echo "Fecha Registro: " . $this->strFechaRegistro . "<br>";
        echo "Tipo: " . $this->strTipo . "<br>";
        echo "Estado: " . self::$strEstado . "<br>";
    }

    public function setCambiarClave(string $pass)
    {
        $this->strClave = $pass;
    }
}
