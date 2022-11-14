<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface LoginInterface
{
    public const METHOD = 'method';

    public const REQUIRED_PARAMS = [];

    /**
     * Set method
     *
     * @param string $method
     * @return LoginInterface
     */
    public function setMethod(string $method): LoginInterface;

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod(): string;
}