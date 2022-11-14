<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class SelectItem extends AbstractObject implements SelectItemInterface
{
    public const EVENT_NAME = 'select_item';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = SelectItemInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setItemListId(string $listId): SelectItemInterface
    {
        $this->offsetSet(SelectItemInterface::ITEM_LIST_ID, $listId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemListId(): string
    {
        return (string)$this->offsetGet(SelectItemInterface::ITEM_LIST_ID);
    }

    /**
     * @inheritDoc
     */
    public function setItemListName(string $name): SelectItemInterface
    {
        $this->offsetSet(SelectItemInterface::ITEM_LIST_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemListName(): string
    {
        return (string)$this->offsetGet(SelectItemInterface::ITEM_LIST_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): SelectItemInterface
    {
        $this->offsetSet(SelectItemInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(SelectItemInterface::ITEMS);
    }
}