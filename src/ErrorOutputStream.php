<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

/**
 *
 */
class ErrorOutputStream extends FileOutputStream
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct('php://stderr');
    }
}
