<?php

namespace App\Filament\Resources\AboutImageResource\Pages;

use App\Filament\Resources\AboutImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutImage extends EditRecord
{
    protected static string $resource = AboutImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
