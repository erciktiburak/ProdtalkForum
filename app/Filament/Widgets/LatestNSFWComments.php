<?php

namespace App\Filament\Widgets;

use App\Models\Comment;
use App\Models\Discussion;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class LatestNSFWComments extends BaseWidget
{
    protected static ?int $sort = 8;
    //protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Comment::query()
            ->withCount('likes')
            ->with(['user'])
            ->latest()
            ->where("is_nsfw", 1);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('User.name')
                ->label('User'),
            
            Tables\Columns\TextColumn::make('content')
                ->label('Content')
                ->sortable(),

            Tables\Columns\TextColumn::make('source')
                ->label('Discussion')->searchable()
                ->sortable()
                ->formatStateUsing(function ($record) {
                    if ($record->source_type == Discussion::class) {
                        $discussion = $record->source;
                    } else {
                        $discussion = $record->source->discussion;
                    }
                    return $discussion->name;
                }),

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
                ->url(function ($record) {
                    if ($record->source_type == Discussion::class) {
                        $discussion = $record->source;
                    } else {
                        $discussion = $record->source->discussion;
                    }
                    return route('discussion', [
                        'discussion' => $discussion,
                        'slug' => Str::slug($discussion->name)
                    ]);
                }, true)
        ];
    }
}
