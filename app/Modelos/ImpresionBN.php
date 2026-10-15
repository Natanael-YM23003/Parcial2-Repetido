<?php

namespace Imprenta\Modelos;

use Imprenta\Enums\Papel;

class ImpresionBN extends TrabajoImpresion
{
    public readonly Papel $papel;

    public function __construct(
        string $descripcion,
        int $paginas,
        int $copias
    ) {
        parent::__construct($descripcion, $paginas, $copias);
        $this->papel = Papel::Bond;
    }

    public function precioPorPagina(): float
    {
        return 0.05;
    }
}
