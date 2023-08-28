<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

interface CustomParamsInterface
{
    public const DATALAYER_KEY = 'customParams';
    public const DATALAYER_KEY_PREFIX = 'custom_param_';

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

    /**
     * Convert to  array for item
     *
     * Analytics does not support custom params for items as an object or array, so we need to convert it to a flat
     * array specifically for items only.
     *
     * @return array
     */
    public function toItemArray(): array;
}
