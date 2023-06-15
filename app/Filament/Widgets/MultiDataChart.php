<?php

namespace App\Filament\Widgets;

use App\Models\Discussion;
use App\Models\User;
use App\Models\Reply;
use App\Models\Comment;
use Filament\Widgets\BarChartWidget;
use Illuminate\Support\Carbon;

class MultiDataChart extends BarChartWidget
{
    protected int | string | array $columnSpan = '3';
    protected static ?int $sort = 1;

    protected function getHeading(): string
    {
        return 'Multi-Data Chart';
    }

    protected function getData(): array
    {
        $startDate = Carbon::now()->subMonths(6);
        $endDate = Carbon::now();

        $discussionCounts = Discussion::whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('created_at')
            ->orderBy('created_at')
            ->pluck('created_at')
            ->map(function ($createdAt) {
                return Carbon::parse($createdAt)->format('Y-m');
            })
            ->countBy()
            ->toArray();

        $userCounts = User::whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('created_at')
            ->orderBy('created_at')
            ->pluck('created_at')
            ->map(function ($createdAt) {
                return Carbon::parse($createdAt)->format('Y-m');
            })
            ->countBy()
            ->toArray();

        $replyCounts = Reply::whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('created_at')
            ->orderBy('created_at')
            ->pluck('created_at')
            ->map(function ($createdAt) {
                return Carbon::parse($createdAt)->format('Y-m');
            })
            ->countBy()
            ->toArray();

        $commentCounts = Comment::whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('created_at')
            ->orderBy('created_at')
            ->pluck('created_at')
            ->map(function ($createdAt) {
                return Carbon::parse($createdAt)->format('Y-m');
            })
            ->countBy()
            ->toArray();

        $labels = array_keys($discussionCounts);
        $datasets = [
            [
                'label' => 'Discussion Creation Dates',
                'data' => array_values($discussionCounts),
                'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                'borderColor' => 'rgb(255, 99, 132)',
                'borderWidth' => 1,
            ],
            [
                'label' => 'User Creation Dates',
                'data' => array_values($userCounts),
                'backgroundColor' => 'rgba(255, 159, 64, 0.2)',
                'borderColor' => 'rgb(255, 159, 64)',
                'borderWidth' => 1,
            ],
            [
                'label' => 'Reply Creation Dates',
                'data' => array_values($replyCounts),
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderColor' => 'rgb(75, 192, 192)',
                'borderWidth' => 1,
            ],
            [
                'label' => 'Comment Creation Dates',
                'data' => array_values($commentCounts),
                'backgroundColor' => 'rgba(153, 102, 255, 0.2)',
                'borderColor' => 'rgb(153, 102, 255)',
                'borderWidth' => 1,
            ],
        ];

        return [
            'labels' => $labels,
            'datasets' => $datasets,
        ];
    }
}
