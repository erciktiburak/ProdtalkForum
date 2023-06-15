<?php

namespace App\Filament\Widgets;

use App\Models\Discussion;
use Filament\Widgets\LineChartWidget ;

class DiscussionCreationDates extends LineChartWidget 
{
    protected static ?int $sort = 1;

    protected function getHeading(): string
    {
        return 'Discussion Creation Dates';
    }

    protected function getData(): array
    {
        $labels = [
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ];

        $data = [];

        foreach ($labels as $label) {
            $month = date('m', strtotime($label));
            $year = date('Y', strtotime($label));
            $count = Discussion::whereMonth('created_at', $month)->whereYear('created_at', $year)->count();
            $data[] = $count;
        }

        return [
            'labels' => $labels,
            'datasets' => [[
                'label' => 'Discussion Creation Dates',
                'data' => $data,
                'fill' => false,
                'borderColor' => 'rgb(75, 192, 192)',
                'tension' => 0.1,
            ]],
        ];
    }
}
