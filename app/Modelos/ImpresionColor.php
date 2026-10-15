<?php

namespace Imprenta\Modelos;

use Imprenta\Enums\Papel;

class ImpresionColor extends TrabajoImpresion
{
    public function __construct(
        string $descripcion,
        int $paginas,
        int $copias,
        public readonly Papel $papel
    ) {
        parent::__construct($descripcion, $paginas, $copias);
    }

    public function precioPorPagina(): float
    {
        return 0.15 + $this->papel->recargo();
    }
}