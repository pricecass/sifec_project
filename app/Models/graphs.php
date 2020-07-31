<?php
/**
 * Created by PhpStorm.
 * User: price
 * Date: 23/07/2019
 * Time: 10:34
 */

namespace App\Models;

use Khill\Lavacharts\Lavacharts;
use Lava;
use Charts;

trait Graphs
{
    public function columnChart()
    {
        $finances = \Lava::DataTable();

        $finances->addDateColumn('Year')
            ->addNumberColumn('Sales')
            ->addNumberColumn('Expenses')
            ->setDateTimeFormat('Y')
            ->addRow(['2004', 1000, 400])
            ->addRow(['2005', 1170, 460])
            ->addRow(['2006', 660, 1120])
            ->addRow(['2007', 1030, 54]);

        $columnChart = \Lava::ColumnChart('Finances', $finances, [
            'title' => 'Company Performance',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 14
            ]
        ]);

        return $columnChart;
    }

    public function donutChart()
    {
        $reasons = \Lava::DataTable();

        $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(['Check Reviews', 5])
            ->addRow(['Watch Trailers', 2])
            ->addRow(['See Actors Other Work', 4])
            ->addRow(['Settle Argument', 89]);

        $donutChart = \Lava::DonutChart('IMDB', $reasons, [
            'title' => 'Reasons I visit IMDB'
        ]);

        return $donutChart;
    }

    public function pieChart()
    {
        $reasons = \Lava::DataTable();

        $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(['Check Reviews', 5])
            ->addRow(['Watch Trailers', 2])
            ->addRow(['See Actors Other Work', 4])
            ->addRow(['Settle Argument', 89]);

        $pieChart = \Lava::PieChart('CASS', $reasons, [
            'title'  => 'Reasons I visit CASS',
            'is3D'   => true,
            'slices' => [
                ['offset' => 0.2],
                ['offset' => 0.25],
                ['offset' => 0.3]
            ]
        ]);

        return $pieChart;
    }


    public function barChart()
    {
        $votes  = Lava::DataTable();

        $votes->addStringColumn('Food Poll')
            ->addNumberColumn('Votes')
            ->addRow(['Tacos',  rand(1000,5000)])
            ->addRow(['Salad',  rand(1000,5000)])
            ->addRow(['Pizza',  rand(1000,5000)])
            ->addRow(['Apples', rand(1000,5000)])
            ->addRow(['Fish',   rand(1000,5000)]);

        $barchart = Lava::BarChart('Votes', $votes);

        return $barchart;
    }


    public function pieGraph()
    {
        $pie  =	 Charts::create('pie', 'highcharts')
            ->title('My nice chart')
            ->labels(['First', 'Second', 'Third'])
            ->values([5,10,20])
            ->dimensions(1000,500)
            ->responsive(false);

        return $pie;
    }

}