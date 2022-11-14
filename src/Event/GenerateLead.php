<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class GenerateLead extends AbstractEvent implements GenerateLeadInterface
{
    public const EVENT_NAME = 'generate_lead';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = GenerateLeadInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): GenerateLeadInterface
    {
        $this->offsetSet(GenerateLeadInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(GenerateLeadInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): GenerateLeadInterface
    {
        $this->offsetSet(GenerateLeadInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(GenerateLeadInterface::VALUE);
    }
}