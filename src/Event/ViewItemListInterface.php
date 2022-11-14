<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface ViewItemListInterface
{
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
     * @param ItemInterface[] $items
     * @return ViewItemListInterface
     */
    public function setItems(array $items): ViewItemListInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}