<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class Search extends AbstractEvent implements SearchInterface
{
    public const EVENT_NAME = 'search';

    /**
     * @inheritDoc
     */
    public function setSearchTerm(string $term): SearchInterface
    {
        $this->offsetSet(SearchInterface::SEARCH_TERM, $term);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSearchTerm(): string
    {
        return (string)$this->offsetGet(SearchInterface::SEARCH_TERM);
    }
}