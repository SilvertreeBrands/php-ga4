<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class SignUp extends AbstractEvent implements SignUpInterface
{
    public const EVENT_NAME = 'sign_up';

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