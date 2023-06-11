<?php

namespace App\Filament\Widgets;

use App\Models\Discussion;
use Filament\Widgets\LineChartWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview6 extends LineChartWidget
{
    protected function getHeading(): string
    {
        return 'Discussions';
    }

    protected function getData(): array
    {
        $discussions = Discussion::whereYear('created_at', '=', date('Y'))
            ->orderBy('created_at')
            ->get()
            ->groupBy(function ($discussion) {
                return $discussion->created_at->format('M');
            })
            ->map(function ($group) {
                return $group->count();
            });

        $labels = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',
        ];

        $dataset = [
            'label' => 'Discussions created',
            'data' => [],
        ];

        foreach ($labels as $label) {
            $dataset['data'][] = $discussions->get($label, 0);
        }

        return [
            'datasets' => [$dataset],
            'labels' => $labels,
        ];
    }
    
}
