<?php

namespace App\Charts;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class OrderBulananChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
    public function build($filter = null, $filter2 = null)
    {
        $filter2 = 2023;
        $query ="";
        $axis = "";
        if ($filter == 'harian') {
            $startDate = Carbon::now()->startOfMonth();
            $endDate = Carbon::now()->endOfMonth();
            $query = "SELECT
            DATE_FORMAT(date_range.date, '%Y-%m-%d') AS tanggal,
            COALESCE(SUM(CASE WHEN jenis_produk IS NOT NULL THEN harga ELSE 0 END), 0) AS pendapatan
            FROM (
                SELECT DATE_FORMAT(DATE_ADD('$startDate', INTERVAL n DAY), '%Y-%m-%d') AS date
                FROM (
                    SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL
                    SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9 UNION ALL
                    SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12 UNION ALL SELECT 13 UNION ALL SELECT 14 UNION ALL
                    SELECT 15 UNION ALL SELECT 16 UNION ALL SELECT 17 UNION ALL SELECT 18 UNION ALL SELECT 19 UNION ALL
                    SELECT 20 UNION ALL SELECT 21 UNION ALL SELECT 22 UNION ALL SELECT 23 UNION ALL SELECT 24 UNION ALL
                    SELECT 25 UNION ALL SELECT 26 UNION ALL SELECT 27 UNION ALL SELECT 28 UNION ALL SELECT 29 UNION ALL
                    SELECT 30 UNION ALL SELECT 31
                ) days
                WHERE DATE_ADD('$startDate', INTERVAL n DAY) < '$endDate'
            ) date_range
            LEFT JOIN order_details_view ON DATE_FORMAT(date_range.date, '%Y-%m-%d') = DATE_FORMAT(order_details_view.tanggal, '%Y-%m-%d')
            GROUP BY DATE_FORMAT(date_range.date, '%Y-%m-%d')
            ORDER BY DATE_FORMAT(date_range.date, '%Y-%m-%d');";
            $axis = "bulan";
        } elseif ($filter == 'bulanan') {
            if(!$filter2){
                $filter2 = 0;
            }else{
                $filter2 = Carbon::now()->year - $filter2;
            }
            
            $query = "SELECT
            DATE_FORMAT(DATE_ADD(DATE_FORMAT(NOW(), '%Y-01-01'), INTERVAL -".$filter2." YEAR) + INTERVAL n MONTH, '%M') AS bulan,
            COALESCE(SUM(CASE WHEN jenis_produk IS NOT NULL THEN harga ELSE 0 END), 0) AS pendapatan
            FROM (
                SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL
                SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11
            ) months
            LEFT JOIN order_details_view
                ON DATE_FORMAT(tanggal, '%Y-%m') = DATE_FORMAT(DATE_ADD(DATE_FORMAT(NOW(), '%Y-01-01'), INTERVAL -".$filter2." YEAR) + INTERVAL n MONTH, '%Y-%m')
            GROUP BY bulan
            ORDER BY MONTH(DATE_ADD(DATE_FORMAT(NOW(), '%Y-01-01'), INTERVAL -".$filter2." YEAR) + INTERVAL n MONTH)";
            $axis = "bulan";

        } elseif ($filter == 'tahunan') {
            $startDate = Carbon::now()->subYears(5)->startOfYear();
            $endDate = Carbon::now()->endOfYear();
            $query = "SELECT years.year AS tahun, COALESCE(SUM(CASE WHEN jenis_produk IS NOT NULL THEN harga ELSE 0 END), 0) AS pendapatan FROM ( SELECT YEAR(DATE_ADD(NOW(), INTERVAL -4 YEAR)) AS year UNION ALL SELECT YEAR(DATE_ADD(NOW(), INTERVAL -3 YEAR)) UNION ALL SELECT YEAR(DATE_ADD(NOW(), INTERVAL -2 YEAR)) UNION ALL SELECT YEAR(DATE_ADD(NOW(), INTERVAL -1 YEAR)) UNION ALL SELECT YEAR(NOW()) ) years LEFT JOIN order_details_view ON years.year = YEAR(tanggal) GROUP BY tahun;";
            $axis = "tahun";
        } 

        $results = DB::select($query);
        $chart = $this->chart->lineChart()
            ->setTitle('Laporan Penjualan')
            ->addData('Pendapatan',  array_column($results, 'pendapatan'))
            ->setXAxis(array_column($results, $axis)); 

        return $chart;
    }

private function getDateRange($startDate, $endDate)
{
    $dateRange = [];
    $currentDate = $startDate;

    while ($currentDate->lte($endDate)) {
        $dateRange[] = $currentDate->format('Y-m-d');
        $currentDate->addDay(); // Increment by one day
    }

    return $dateRange;
}

}
