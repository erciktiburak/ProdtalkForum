<?php

namespace App\Filament\Widgets;

use App\Models\Discussion;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class LatestNSFWDiscussions extends BaseWidget
{
    protected static ?int $sort = 6;
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Discussion::query()
            ->withCount('replies')
            ->withCount('comments')
            ->withCount('likes')
            ->latest()
            ->where("is_nsfw", 1);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('user.name')
                ->label('User')
                ->searchable(),

            Tables\Columns\TextColumn::make('name')
                ->label('Discussion')
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
                ->label('NSFW'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\Action::make('view')
                ->label('View')
                ->icon('heroicon-s-eye')
                ->color('secondary')
                ->url(fn ($record) => route('discussion', [
                    'discussion' => $record,
                    'slug' => Str::slug($record->name)
                ]), true)
        ];
    }
}
