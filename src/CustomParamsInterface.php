<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

interface CustomParamsInterface
{
    public const DATALAYER_KEY = 'customParams';

    /**
     * Add param
     *
     * @param string $key
     * @param mixed $value
     *
     * @return CustomParamsInterface
     */
    public function addParam(string $key, $value): CustomParamsInterface;

    /**
     * To array
     *
     * @return array
     */
    public function toArray(): array;
}
