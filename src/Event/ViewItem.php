<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class ViewItem extends AbstractObject implements ViewItemInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'view_item';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = ViewItemInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): ViewItemInterface
    {
        $this->offsetSet(ViewItemInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(ViewItemInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): ViewItemInterface
    {
        $this->offsetSet(ViewItemInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(ViewItemInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): ViewItemInterface
    {
        $this->offsetSet(ViewItemInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(ViewItemInterface::ITEMS);
    }
}