<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

class ViewItemList extends AbstractEvent implements ViewItemListInterface
{
    public const EVENT_NAME = 'view_item_list';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = ViewItemListInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setItemListId(string $listId): ViewItemListInterface
    {
        $this->offsetSet(ViewItemListInterface::ITEM_LIST_ID, $listId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemListId(): string
    {
        return (string)$this->offsetGet(ViewItemListInterface::ITEM_LIST_ID);
    }

    /**
     * @inheritDoc
     */
    public function setItemListName(string $name): ViewItemListInterface
    {
        $this->offsetSet(ViewItemListInterface::ITEM_LIST_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemListName(): string
    {
        return (string)$this->offsetGet(ViewItemListInterface::ITEM_LIST_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): ViewItemListInterface
    {
        $this->offsetSet(ViewItemListInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(ViewItemListInterface::ITEMS);
    }
}