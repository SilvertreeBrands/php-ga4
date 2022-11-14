<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface ViewItemListInterface
{
    public const ITEM_LIST_ID = 'item_list_id';
    public const ITEM_LIST_NAME = 'item_list_name';
    public const ITEMS = 'items';

    public const REQUIRED_PARAMS = [
        self::ITEMS
    ];

    /**
     * Set item list ID
     *
     * @param string $listId
     * @return ViewItemListInterface
     */
    public function setItemListId(string $listId): ViewItemListInterface;

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
     * @return ViewItemListInterface
     */
    public function setItemListName(string $name): ViewItemListInterface;

    /**
     * Get item list name
     *
     * @return string
     */
    public function getItemListName(): string;

    /**
     * Set items
     *
     * @param \Silvertree\Ga4\ItemInterface[] $items
     * @return ViewItemListInterface
     */
    public function setItems(array $items): ViewItemListInterface;

    /**
     * Get items
     *
     * @return \Silvertree\Ga4\ItemInterface[]
     */
    public function getItems(): array;
}