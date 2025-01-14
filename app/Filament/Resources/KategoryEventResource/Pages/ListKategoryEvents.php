<?php

namespace App\Filament\Resources\KategoryEventResource\Pages;

use App\Filament\Resources\KategoryEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoryEvents extends ListRecords
{
    protected static string $resource = KategoryEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
