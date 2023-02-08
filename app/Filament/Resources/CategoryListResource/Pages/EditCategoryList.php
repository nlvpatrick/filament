<?php

namespace App\Filament\Resources\CategoryListResource\Pages;

use App\Filament\Resources\CategoryListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryList extends EditRecord
{
    protected static string $resource = CategoryListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
