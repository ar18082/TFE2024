<?php

namespace App\Filament\Resources\CustodyCriteriaResource\Pages;

use App\Filament\Resources\CustodyCriteriaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustodyCriterias extends ListRecords
{
    protected static string $resource = CustodyCriteriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
