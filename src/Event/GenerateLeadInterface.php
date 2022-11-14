<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface GenerateLeadInterface
{
    /**
     * Set currency
     *
     * @param string $currency
     * @return GenerateLeadInterface
     */
    public function setCurrency(string $currency): GenerateLeadInterface;

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Set value
     *
     * @param float $value
     * @return GenerateLeadInterface
     */
    public function setValue(float $value): GenerateLeadInterface;

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float;
}