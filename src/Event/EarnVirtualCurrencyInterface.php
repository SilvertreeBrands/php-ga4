<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface EarnVirtualCurrencyInterface extends \Silvertree\Ga4\EventInterface
{
    public const VIRTUAL_CURRENCY_NAME = 'virtual_currency_name';
    public const VALUE = 'value';

    public const REQUIRED_PARAMS = [];

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