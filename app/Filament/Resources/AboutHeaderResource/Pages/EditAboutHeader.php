<?php

namespace App\Filament\Resources\AboutHeaderResource\Pages;

use App\Filament\Resources\AboutHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutHeader extends EditRecord
{
    protected static string $resource = AboutHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
