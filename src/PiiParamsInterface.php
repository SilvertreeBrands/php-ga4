<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

interface PiiParamsInterface
{
    /**
     * Add param
     *
     * @param string $key
     * @param mixed $value
     *
     * @return PiiParamsInterface
     */
    public function addParam(string $key, $value): PiiParamsInterface;

    /**
     * To array
     *
     * @return array
     */
    public function toArray(): array;
}
