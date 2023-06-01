<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

class SignUp extends AbstractEvent implements SignUpInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'sign_up';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = SignUpInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setMethod(string $method): SignUpInterface
    {
        $this->offsetSet(SignUpInterface::METHOD, $method);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return (string)$this->offsetGet(SignUpInterface::METHOD);
    }
}