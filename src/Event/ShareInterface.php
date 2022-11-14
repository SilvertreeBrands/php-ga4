<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface ShareInterface
{
    public const METHOD = 'method';
    public const CONTENT_TYPE = 'content_type';
    public const ITEM_ID = 'item_id';

    /**
     * Set method
     *
     * @param string $method
     * @return ShareInterface
     */
    public function setMethod(string $method): ShareInterface;

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Set content type
     *
     * @param string $type
     * @return ShareInterface
     */
    public function setContentType(string $type): ShareInterface;

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
     * @return ShareInterface
     */
    public function setItemId(string $itemId): ShareInterface;

    /**
     * Get item ID
     *
     * @return string
     */
    public function getItemId(): string;
}