<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface SignUpInterface extends \Silvertree\Ga4\EventInterface
{
    public const METHOD = 'method';

    public const REQUIRED_PARAMS = [];

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