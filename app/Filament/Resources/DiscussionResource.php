<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscussionResource\Pages;
use App\Filament\Resources\DiscussionResource\RelationManagers;
use App\Models\Discussion;
use App\Models\Tag;
use App\Models\Reply;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiscussionResource extends Resource
{
    protected static ?string $model = Discussion::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    
    protected static ?string $navigationGroup = 'Threads';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->unique(table: Discussion::class, column: 'name', ignorable: function ($livewire) {
                        if ($livewire instanceof EditRecord) {
                            return $livewire->record;
                        } else {
                            return null;
                        }
                    })
                    ->required()
                    ->maxLength(255),

            Forms\Components\Select::make('tags')
                ->label('Tags')
                ->required()
                ->multiple()
                ->maxItems(3)
                ->relationship('tags', 'name', 'name'),

            Forms\Components\RichEditor::make('content')
                ->label('Content')
                ->required(),   

    
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

            Tables\Columns\TextColumn::make('name')
                ->label('Content')
                ->searchable(),
            
            Tables\Columns\TextColumn::make('user.name')
                ->label('User')
                ->searchable(),

            Tables\Columns\TextColumn::make('replies_count')
                ->label('Replies')
                ->sortable(),

            Tables\Columns\TextColumn::make('comments_count')
                ->label('Comments')
                ->sortable(),

            Tables\Columns\TextColumn::make('likes_count')
                ->label('Likes')
                ->sortable(),
            
            Tables\Columns\BooleanColumn::make('is_nsfw')
                ->label('NSFW')
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListDiscussions::route('/'),
            'create' => Pages\CreateDiscussion::route('/create'),
            'view' => Pages\ViewDiscussion::route('/{record}'),
            'edit' => Pages\EditDiscussion::route('/{record}/edit'),
        ];
    }    
}
