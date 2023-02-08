<?php

namespace App\Filament\Resources\CategoryListResource\Pages;

use App\Filament\Resources\CategoryListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCategoryList extends ViewRecord
{
    protected static string $resource = CategoryListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
