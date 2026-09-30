<?php
namespace App\Modelos;

abstract class Equipo{

    public function __construct(
    public readonly string $codigo,
    public readonly string $nombre)
    { }
    abstract function diasMaximoPrestamo():int;
}
?>