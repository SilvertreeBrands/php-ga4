<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface ShareInterface extends \Silvertree\Ga4\EventInterface
{
    public const METHOD = 'method';
    public const CONTENT_TYPE = 'content_type';
    public const ITEM_ID = 'item_id';

    public const REQUIRED_PARAMS = [];

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