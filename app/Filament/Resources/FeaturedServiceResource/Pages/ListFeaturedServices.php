<?php

namespace App\Filament\Resources\FeaturedServiceResource\Pages;

use App\Filament\Resources\FeaturedServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedServices extends ListRecords
{
    protected static string $resource = FeaturedServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
