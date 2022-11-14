<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface SignUpInterface
{
    public const METHOD = 'method';

    /**
     * Set method
     *
     * @param string $method
     * @return SignUpInterface
     */
    public function setMethod(string $method): SignUpInterface;

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod(): string;
}