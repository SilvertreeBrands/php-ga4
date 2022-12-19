<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class SpendVirtualCurrency extends AbstractObject implements SpendVirtualCurrencyInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'spend_virtual_currency';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = SpendVirtualCurrencyInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setValue(float $value): SpendVirtualCurrencyInterface
    {
        $this->offsetSet(SpendVirtualCurrencyInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(SpendVirtualCurrencyInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setVirtualCurrencyName(string $name): SpendVirtualCurrencyInterface
    {
        $this->offsetSet(SpendVirtualCurrencyInterface::VIRTUAL_CURRENCY_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getVirtualCurrencyName(): string
    {
        return (string)$this->offsetGet(SpendVirtualCurrencyInterface::VIRTUAL_CURRENCY_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setItemName(string $name): SpendVirtualCurrencyInterface
    {
        $this->offsetSet(SpendVirtualCurrencyInterface::ITEM_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemName(): string
    {
        return (string)$this->offsetGet(SpendVirtualCurrencyInterface::ITEM_NAME);
    }
}