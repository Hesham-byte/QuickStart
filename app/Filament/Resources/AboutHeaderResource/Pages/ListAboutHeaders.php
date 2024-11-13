<?php

namespace App\Filament\Resources\AboutHeaderResource\Pages;

use App\Filament\Resources\AboutHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutHeaders extends ListRecords
{
    protected static string $resource = AboutHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
