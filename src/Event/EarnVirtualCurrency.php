<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class EarnVirtualCurrency extends AbstractEvent implements EarnVirtualCurrencyInterface
{
    public const EVENT_NAME = 'earn_virtual_currency';

    /**
     * @inheritDoc
     */
    public function setVirtualCurrencyName(string $name): EarnVirtualCurrencyInterface
    {
        $this->offsetSet(EarnVirtualCurrencyInterface::VIRTUAL_CURRENCY_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getVirtualCurrencyName(): string
    {
        return (string)$this->offsetGet(EarnVirtualCurrencyInterface::VIRTUAL_CURRENCY_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): EarnVirtualCurrencyInterface
    {
        $this->offsetSet(EarnVirtualCurrencyInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(EarnVirtualCurrencyInterface::VALUE);
    }
}