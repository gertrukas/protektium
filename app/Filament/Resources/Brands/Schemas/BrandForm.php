<?php

namespace App\Filament\Resources\Brands\Schemas;

use App\Models\Brand;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nombre de la Marca')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->validationMessages([
                                'required' => 'El nombre de la marca es obligatorio.',
                                'unique'   => 'Este nombre de marca ya existe. Por favor, elige uno diferente.',
                            ]),

                    ]),
                Group::make()
                    ->schema([

                        RichEditor::make('description')
                            ->label('Descripción')
                            ->maxLength(255)
                            ->extraAttributes([
                                'style' => 'height: 200px; overflow-y: auto;',
                            ])
                            ->columnSpanFull(),

                    ]),

                FileUpload::make('logo')
                    ->label('Logo de la Marca')
                    ->image()
                    ->disk('public')
                    ->directory('brands')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => time() . '_' . str_replace(' ', '_', $file->getClientOriginalName()),
                    )
                    ->dehydrateStateUsing(function (?string $state, $record) {
                        if (is_null($state)) {
                            return null;
                        }
                        if ($record && $record->image && $record->image != $state) {
                            Storage::disk('public')->delete($record->image);
                        }
                        return $state;
                    })
                    ->deleteUploadedFileUsing(function (Brand $record) {
                        Storage::disk('public')->delete($record->image);
                    })->columnSpanFull(),

            ]);
    }
}
