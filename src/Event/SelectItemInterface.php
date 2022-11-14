<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface SelectItemInterface
{
    public const ITEM_LIST_ID = 'item_list_id';
    public const ITEM_LIST_NAME = 'item_list_name';
    public const ITEMS = 'items';

    /**
     * Set item list ID
     *
     * @param string $listId
     * @return SelectItemInterface
     */
    public function setItemListId(string $listId): SelectItemInterface;

    /**
     * Get item list ID
     *
     * @return string
     */
    public function getItemListId(): string;

    /**
     * Set item list name
     *
     * @param string $name
     * @return SelectItemInterface
     */
    public function setItemListName(string $name): SelectItemInterface;

    /**
     * Get item list name
     *
     * @return string
     */
    public function getItemListName(): string;

    /**
     * Set items
     *
     * @param ItemInterface[] $items
     * @return SelectItemInterface
     */
    public function setItems(array $items): SelectItemInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}