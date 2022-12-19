<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class EarnVirtualCurrency extends AbstractObject implements EarnVirtualCurrencyInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'earn_virtual_currency';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = EarnVirtualCurrencyInterface::REQUIRED_PARAMS;

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