<?php

namespace Shafer\FilamentCodeEditor\Concerns;

trait HasDisplayMode
{
    public bool $displayMode = false;

    public function setDisplayMode(): static
    {
        $this->displayMode = true;

        return $this;
    }
}
