<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

class CustomParams extends AbstractObject implements CustomParamsInterface
{
    /**
     * @inheritdoc
     */
    public function addParam(
        string $key,
        $value
    ): CustomParams {
        $this->offsetSet($key, $value);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getParam(
        string $key
    ) {
        return $this->offsetGet($key);
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [self::DATALAYER_KEY => $this->data];
    }

    /**
     * @inheritdoc
     */
    public function toItemArray(): array
    {
        $arr = [];

        foreach ($this->data as $key => $value) {
            $arr[self::DATALAYER_KEY_PREFIX . $key] = $value;
        }

        return $arr;
    }
}
