<?php

namespace App\Filament\Resources\TicketPhotoResource\Pages;

use App\Filament\Resources\TicketPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicketPhoto extends EditRecord
{
    protected static string $resource = TicketPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
