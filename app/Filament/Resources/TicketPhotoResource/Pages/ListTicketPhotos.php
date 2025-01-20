<?php

namespace App\Filament\Resources\TicketPhotoResource\Pages;

use App\Filament\Resources\TicketPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTicketPhotos extends ListRecords
{
    protected static string $resource = TicketPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
