<?php

namespace App\Filament\Widgets;

use App\Models\Discussion;
use App\Models\Tag;
use Filament\Widgets\RadarChartWidget;

class StatsOverview10 extends RadarChartWidget
{
    protected function getHeading(): string
    {
        return 'Discussion Tags';
    }

    protected function getData(): array
    {
        $tags = Tag::all();
        $labels = [];
        $data = [];

        foreach ($tags as $tag) {
            $labels[] = $tag->name;
            $data[] = $tag->discussions()->count();
        }

        return [
            'labels' => $labels,
            'datasets' => [[
                'label' => 'Discussion Tags',
                'data' => $data,
                'fill' => true,
                'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                'borderColor' => 'rgb(255, 99, 132)',
                'pointBackgroundColor' => 'rgb(255, 99, 132)',
                'pointBorderColor' => '#fff',
                'pointHoverBackgroundColor' => '#fff',
                'pointHoverBorderColor' => 'rgb(255, 99, 132)',
            ]],
        ];
    }
}
