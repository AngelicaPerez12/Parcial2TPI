<?php
namespace App\Enums;

use App\Modelos\Equipo;
use App\Modelos\Laptop;
use App\Modelos\Proyector;

enum TipoEquipo:string{

    case Laptop = "Laptop";
    case Proyector = "Proyector";

    public function crearEquipo(string $codigo, string $nombre):Equipo
    {
        return match($this){
            $this::Proyector => new Proyector($codigo, $nombre),
            $this::Laptop => new Laptop($codigo, $nombre),
        };
    }
}
?>