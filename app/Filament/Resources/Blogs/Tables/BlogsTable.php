<?php

namespace App\Filament\Resources\Blogs\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Imagen')
                    ->getStateUsing(fn($record) => $record->images[0] ?? null) // Muestra la primera imagen o null
                    ->defaultImageUrl(asset('images/generico.jpeg'))           // Usa esta imagen si el valor es null
                    ->imageWidth(150)
                    ->imageHeight(150)
                    ->disk('public'),

                TextColumn::make('title')
                    ->label('Título')
                    ->sortable()
                    ->searchable()
                    ->verticallyAlignStart(),
                TextColumn::make('categories.name')
                    ->label('Categorías')
                    ->listWithLineBreaks()
                    ->limit(50)
                    ->sortable()
                    ->verticallyAlignStart()
                    ->searchable(),
                ToggleColumn::make('is_published')
                    ->label('¿Publicado?')
                    ->alignCenter()
                    ->verticallyAlignStart()
                    ->afterStateUpdated(function ($state, Model $record) {
                        if ($state) {
                            // Si el toggle se enciende, guardamos la fecha actual
                            $record->update([
                                'published_at' => now(),
                            ]);
                        } else {
                            // Si se apaga, lo dejamos nulo
                            $record->update([
                                'published_at' => null,
                            ]);
                        }
                    }),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->label('Publicado el')
                    ->sortable()
                    ->searchable()
                    ->verticallyAlignStart()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Creado el')
                    ->sortable()
                    ->searchable()
                    ->verticallyAlignStart()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Actualizado el')
                    ->sortable()
                    ->searchable()
                    ->verticallyAlignStart()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('is_published')
                    ->label('Estado de Publicación')
                    ->options([
                        true  => 'Publicado',
                        false => 'No Publicado',
                    ])
                    ->native(false),
                Filter::make('published_at')
                    ->form([
                        DatePicker::make('published_from')
                            ->label('Publicado desde')
                            ->placeholder(fn($state): string => 'Ene 1, ' . now()->subYear()->format('Y')),
                        DatePicker::make('published_until')
                            ->label('Publicado hasta')
                            ->placeholder(fn($state): string => 'Dic 31, ' . now()->format('Y')),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['published_from'] ?? null,
                                fn(Builder $query, $date): Builder => $query->whereDate('published_at', '>=', $date),
                            )
                            ->when(
                                $data['published_until'] ?? null,
                                fn(Builder $query, $date): Builder => $query->whereDate('published_at', '<=', $date),
                            );
                    }),
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

            ])
            ->actionsColumnLabel('Acciones')
            ->bulkActions([
                DeleteBulkAction::make()
                    ->label('Eliminar seleccionados')
                    ->requiresConfirmation(),
            ]);
    }
}
