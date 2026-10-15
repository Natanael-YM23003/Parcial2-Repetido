<?php

namespace Imprenta\Modelos;

use Imprenta\Contratos\Cotizable;

abstract class TrabajoImpresion implements Cotizable
{
    public function __construct(
        public readonly string $descripcion,
        public readonly int $paginas,
        public readonly int $copias
    ) {}

    abstract public function precioPorPagina(): float;

    public function totalHojas(): int
    {
        return $this->paginas * $this->copias;
    }

    public function porcentajeDescuento(): float
    {
        return match (true) {
            $this->totalHojas() >= 500 => 15.0,
            $this->totalHojas() >= 100 => 10.0,
            default => 0.0,
        };
    }

    public function total(): float
    {
        $subtotal = $this->totalHojas() * $this->precioPorPagina();
        $descuento = $subtotal * ($this->porcentajeDescuento() / 100);

        return $subtotal - $descuento;
    }
}
