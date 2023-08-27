<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationLabel = 'Məhsullar';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                    ->required()
                    ->name('Ad'),
                    Forms\Components\Select::make('cat_id')
                    ->required()
                    ->relationship('category', 'name')
                    ->name('Kateqoriya'),
                    Forms\Components\RichEditor::make('description')
                    ->name('Tərkibi'),
                    Forms\Components\TextInput::make('price')
                    ->required()
                    ->name('Qiymət')
                    ->mask(fn (Forms\Components\TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->decimalSeparator('.')),
                    Forms\Components\ColorPicker::make('color')
                    ->name('Rəng'),
                    Forms\Components\FileUpload::make('image')
                    ->image()
                    ->name('Şəkil')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')->label('Ad')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('sort')->label('Sıra')->sortable(),
                Tables\Columns\TextColumn::make('price')->label('Qiymət')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Category.name')->label('Kateqoriyası')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image')->circular()->label('Şəkil')
            ])
            ->reorderable()
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
