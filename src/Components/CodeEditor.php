<?php

namespace SebastiaanKloos\FilamentCodeEditor\Components;

use Filament\Forms\Components\Field;
use Filament\Forms\Components\Contracts\CanBeLengthConstrained;
class CodeEditor extends Field implements CanBeLengthConstrained
{
    use \Filament\Forms\Components\Concerns\CanBeAutocompleted;
    use \Filament\Forms\Components\Concerns\CanBeLengthConstrained;
    use \Filament\Forms\Components\Concerns\CanBeReadOnly;
    use \Filament\Forms\Components\Concerns\HasExtraInputAttributes;
    use \Filament\Forms\Components\Concerns\HasPlaceholder;
    use \Filament\Forms\Components\HasExtraAlpineAttributes;
    
    protected string $view = 'filament-code-editor::components.code-editor';
}
