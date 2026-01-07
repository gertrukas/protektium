<?php

namespace App\Filament\Resources\Brands\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\True_;

class BrandsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->imageWidth(50)
                    ->imageHeight(50)
                    ->getStateUsing(fn($record) => $record->logo ? Storage::disk('public')->url($record->logo) : asset('/images/generico.webp')),
                TextColumn::make('name')
                    ->label('Marca')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Descripción')
                    ->limit(30)
                    ->wrap(true)
                    ->html()
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('')
                    ->icon('heroicon-o-pencil-square')
                    ->tooltip('Editar'),

                DeleteAction::make()
                    ->label('')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->tooltip('Eliminar'),
            ]);
    }
}
