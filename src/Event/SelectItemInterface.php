<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface SelectItemInterface extends \Silvertree\Ga4\EventInterface
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
     * @param \Silvertree\Ga4\ItemInterface[] $items
     * @return SelectItemInterface
     */
    public function setItems(array $items): SelectItemInterface;

    /**
     * Get items
     *
     * @return \Silvertree\Ga4\ItemInterface[]
     */
    public function getItems(): array;
}