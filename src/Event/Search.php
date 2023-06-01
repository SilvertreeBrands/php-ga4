<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

class Search extends AbstractEvent implements SearchInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'search';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = SearchInterface::REQUIRED_PARAMS;

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