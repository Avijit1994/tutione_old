<?php

namespace App\Concerns;

use App\Contracts\WizardForm;

trait BelongsToLivewire
{
    protected WizardForm $livewire;

    public function setLivewire(WizardForm $livewire): BelongsToLivewire
    {
        $this->livewire = $livewire;

        return $this;
    }

    public function getLivewire(): WizardForm
    {
        return $this->livewire;
    }
}
