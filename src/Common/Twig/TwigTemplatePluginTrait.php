<?php

declare(strict_types=1);


namespace MicroCRM\Common\Twig;

trait TwigTemplatePluginTrait
{
    public function name(): string
    {
        return $this->getTwigNamespace();
    }

    public function getTwigTemplatePaths(): array
    {
        $classRef = new \ReflectionObject($this);

        $dir = dirname($classRef->getFileName()) . '/Resource/twig';

        return [$dir];
    }

    public function getTwigNamespace(): ?string
    {
        $ns = explode('\\', get_class($this));

        return array_pop($ns);
    }

    public function isTwigTemplatesPrepend(): bool
    {
        return false;
    }
}
