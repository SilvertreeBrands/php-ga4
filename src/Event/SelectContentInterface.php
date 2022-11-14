<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface SelectContentInterface
{
    /**
     * Set content type
     *
     * @param string $type
     * @return SelectContentInterface
     */
    public function setContentType(string $type): SelectContentInterface;

    /**
     * Get content type
     *
     * @return string
     */
    public function getContentType(): string;

    /**
     * Set item ID
     *
     * @param string $itemId
     * @return SelectContentInterface
     */
    public function setItemId(string $itemId): SelectContentInterface;

    /**
     * Get item ID
     *
     * @return string
     */
    public function getItemId(): string;
}