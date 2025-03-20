<?php

namespace App\Filament\Resources\StoreResource\Pages;

use App\Filament\Resources\StoreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Store;
use App\Models\User;

class CreateStore extends CreateRecord
{
    protected static string $resource = StoreResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return $data;
    }

    protected function afterCreate(): void
    {
        // After Filament creates the store, link it to the authenticated user
        if (auth()->check()) {
            auth()->user()->update([
                'store_id' => $this->record->id, // The created store's ID
            ]);
        }
    }
}
