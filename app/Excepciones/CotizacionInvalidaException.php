<?php

namespace Imprenta\Excepciones;

use DomainException;

class CotizacionInvalidaException extends DomainException
{
    public function __construct(
        public readonly string $campo,
        string $message
    ) {
        parent::__construct($message);
    }
}