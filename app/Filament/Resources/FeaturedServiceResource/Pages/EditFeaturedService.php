<?php

namespace App\Filament\Resources\FeaturedServiceResource\Pages;

use App\Filament\Resources\FeaturedServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedService extends EditRecord
{
    protected static string $resource = FeaturedServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
