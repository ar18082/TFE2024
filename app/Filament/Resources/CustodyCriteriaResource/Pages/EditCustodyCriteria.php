<?php

namespace App\Filament\Resources\CustodyCriteriaResource\Pages;

use App\Filament\Resources\CustodyCriteriaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustodyCriteria extends EditRecord
{
    protected static string $resource = CustodyCriteriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
