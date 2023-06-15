<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;


class TopUserComments extends BaseWidget
{
    protected static ?int $sort = 10;

    protected function getTableQuery(): Builder
    {
        return User::query()
            ->withCount('comments')
            ->orderByDesc('comments_count');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('User')
                ->searchable(),

            Tables\Columns\TextColumn::make('comments_count')
                ->label('Comment Count')
                ->sortable(),
        ];
    }

}