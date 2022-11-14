<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface SearchInterface
{
    public const SEARCH_TERM = 'search_term';

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