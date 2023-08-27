<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteInfoResource\Pages;
use App\Filament\Resources\SiteInfoResource\RelationManagers;
use App\Models\SiteInfo;
use Faker\Core\File;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteInfoResource extends Resource
{
    protected static ?string $model = SiteInfo::class;

    protected static ?string $navigationLabel = 'Brend Məlumatları';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('id')
                    ->required()
                    ->name('ID'),
                    Forms\Components\TextInput::make('name')
                    ->required()
                    ->name('Brendin adı'),
                    Forms\Components\RichEditor::make('description')
                    ->name('Brendin məlumatları'),
                    Forms\Components\TextInput::make('email')
                    ->name('Email'),
                    Forms\Components\TextInput::make('phone')
                    ->name('Telefon'),
                    Forms\Components\TextInput::make('location')
                    ->name('Ünvan'),
                    Forms\Components\TextInput::make('facebook_page')
                    ->name('Facebook Səhifəsi'),
                    Forms\Components\TextInput::make('instagram_page')
                    ->name('Instagram Səhifəsi'),
                    Forms\Components\TextInput::make('tiktok_page')
                    ->name('Tiktok Səhifəsi'),
                    Forms\Components\TextInput::make('linkedin_page')
                    ->name('Linkedin Səhifəsi'),
                    Forms\Components\TextInput::make('twitter_page')
                    ->name('Twitter Səhifəsi'),
                    Forms\Components\TextInput::make('working_hours')
                    ->name('Iş saatları'),
                    Forms\Components\TextInput::make('wifi_password')
                    ->name('Wifi-şifrəsi'),
                ]),
                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('logo')
                    ->name('Logo')
                    ->image(),
                    Forms\Components\FileUpload::make('cover_photo')
                    ->name('Kover şəkli')
                    ->image()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')->label('Brendin adı'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('phone')->label('Telefon'),
                Tables\Columns\ImageColumn::make('logo')->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSiteInfos::route('/'),
            'create' => Pages\CreateSiteInfo::route('/create'),
            'edit' => Pages\EditSiteInfo::route('/{record}/edit'),
        ];
    }
}
