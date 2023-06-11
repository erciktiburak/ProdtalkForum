<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\BarChartWidget;
use Illuminate\Support\Carbon;

class StatsOverview5 extends BarChartWidget
{
    protected function getHeading(): string
    {
        return 'User Creation Dates';
    }

    protected function getData(): array
    {
        $startDate = Carbon::now()->subMonths(6); // Son 6 ayı baz alarak başlangıç tarihini belirleyebilirsiniz
        $endDate = Carbon::now(); // Şu anki tarihi kullanabilirsiniz

        $userCounts = User::whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('created_at')
            ->orderBy('created_at')
            ->pluck('created_at')
            ->map(function ($createdAt) {
                return Carbon::parse($createdAt)->format('Y-m');
            })
            ->countBy()
            ->toArray();

        $labels = array_keys($userCounts);
        $data = array_values($userCounts);

        return [
            'labels' => $labels,
            'datasets' => [[
                'label' => 'User Creation Dates',
                'data' => $data,
                'backgroundColor' => [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                ],
                'borderColor' => [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)',
                ],
                'borderWidth' => 1,
            ]],
        ];
    }
}
