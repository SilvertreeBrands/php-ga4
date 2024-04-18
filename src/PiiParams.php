<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

class PiiParams extends AbstractObject implements PiiParamsInterface
{
    /**
     * @inheritdoc
     */
    public function addParam(
        string $key,
        $value
    ): PiiParams {
        $this->offsetSet($key, $value);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return $this->data;
    }
}
