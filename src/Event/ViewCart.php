<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class ViewCart extends AbstractEvent implements ViewCartInterface
{
    public const EVENT_NAME = 'view_cart';

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): ViewCartInterface
    {
        $this->offsetSet(ViewCartInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(ViewCartInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): ViewCartInterface
    {
        $this->offsetSet(ViewCartInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(ViewCartInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): ViewCartInterface
    {
        $this->offsetSet(ViewCartInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(ViewCartInterface::ITEMS);
    }
}