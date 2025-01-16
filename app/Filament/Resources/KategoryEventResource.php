<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoryEventResource\Pages;
use App\Filament\Resources\KategoryEventResource\RelationManagers;
use App\Models\KategoryEvent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class KategoryEventResource extends Resource
{
    protected static ?string $model = KategoryEvent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('photo_path')
                    ->required()
                    ->image() // Restrict to image files
                    ->directory('uploads/photos') // Files will be saved in storage/app/public/uploads/photos
                    ->disk('public') // Ensure it's using the 'public' disk
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('photo_path')
                    ->disk('public') // Specify the disk
                    ->url(fn($record) => asset('storage/' . $record->photo_path)) // Generate the correct URL
                    ->label('Photo'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKategoryEvents::route('/'),
            'create' => Pages\CreateKategoryEvent::route('/create'),
            'edit' => Pages\EditKategoryEvent::route('/{record}/edit'),
        ];
    }
}
