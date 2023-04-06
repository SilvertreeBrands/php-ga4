<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface SearchInterface extends \Silvertree\Ga4\EventInterface
{
    public const SEARCH_TERM = 'search_term';

    public const REQUIRED_PARAMS = [
        self::SEARCH_TERM
    ];

    /**
     * Set search term
     *
     * @param string $term
     * @return SearchInterface
     */
    public function setSearchTerm(string $term): SearchInterface;

    /**
     * Get search term
     *
     * @return string
     */
    public function getSearchTerm(): string;
}