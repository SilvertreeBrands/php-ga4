<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface SelectContentInterface
{
    public const CONTENT_TYPE = 'content_type';
    public const ITEM_ID = 'item_id';

    public const REQUIRED_PARAMS = [];

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