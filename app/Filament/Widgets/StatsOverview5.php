<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\LineChartWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview5 extends LineChartWidget
{
    protected function getHeading(): string
    {
        return 'Users';
    }

    protected function getData(): array
    {
        $users = User::whereYear('created_at', '=', date('Y'))
            ->orderBy('created_at')
            ->get()
            ->groupBy(function ($user) {
                return $user->created_at->format('M');
            })
            ->map(function ($group) {
                return $group->count();
            });

        $labels = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',
        ];

        $dataset = [
            'label' => 'New users',
            'data' => [],
        ];

        foreach ($labels as $label) {
            $dataset['data'][] = $users->get($label, 0);
        }

        return [
            'datasets' => [$dataset],
            'labels' => $labels,
        ];
    }
}
