<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface EarnVirtualCurrencyInterface
{
    /**
     * Set virtual currency name
     *
     * @param string $name
     * @return EarnVirtualCurrencyInterface
     */
    public function setVirtualCurrencyName(string $name): EarnVirtualCurrencyInterface;

    /**
     * Get virtual currency name
     *
     * @return string
     */
    public function getVirtualCurrencyName(): string;

    /**
     * Set value
     *
     * @param float $value
     * @return EarnVirtualCurrencyInterface
     */
    public function setValue(float $value): EarnVirtualCurrencyInterface;

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float;
}