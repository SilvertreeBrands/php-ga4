<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class Search extends AbstractObject implements SearchInterface
{
    public const EVENT_NAME = 'search';

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