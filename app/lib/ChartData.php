<?php

class ChartData
{
    public function getIBP($product_id, $province_id)
    {
        return DB::select(
            "SELECT MONTH(reported_at) month, YEAR(reported_at) year, median
             FROM ibp
             WHERE product_id = ?
             AND province_id = ?
             GROUP BY YEAR(reported_at), MONTH(reported_at) ASC",
            array($product_id, $province_id)
        );
    }

    public function getIBPforPeriod($product_id, $province_id, $month, $year)
    {
        return DB::select(
            "SELECT median
             FROM ibp
             WHERE product_id = ?
             AND province_id = ?
             AND MONTH(reported_at) = ?
             AND YEAR(reported_at) = ?",
            array($product_id, $province_id, $month, $year)
        );
    }

    public function getPrices($product_id, $province_id)
    {
        return DB::select(
            "SELECT DAY(created_at) day, MONTH(created_at) month, YEAR(created_at) year, AVG(price) as average
             FROM price_reports
             WHERE product_id = ?
             AND province_id = ?
             GROUP BY YEAR(created_at), MONTH(created_at), DAY(created_at) ASC",
            array($product_id, $province_id)
        );
    }

    public function productChart($product_id, $province_id)
    {
        $output['cols'] = array(
            array(
                'id' => 'date',
                'label' => "Fecha",
                'pattern' => '',
                'type' => 'datetime'
            ),
            array(
                'id' => 'sum',
                'label' => "Precio",
                'pattern' => '',
                'type' => 'number'
            ),
            array(
                'id' => 'sum',
                'label' => "IBP",
                'pattern' => '',
                'type' => 'number'
            )
        );

        $data = $this->getPrices($product_id, $province_id);

        foreach ($data as $row) {

            $ibp = $this->getIBPforPeriod($product_id, $province_id, $row->month, $row->year);

            $output['rows'][] = array(
                'c' => array(
                    array(
                        'v' => "Date($row->year, $row->month, $row->day)",
                        'f' => join('/', array($row->day, $row->month, $row->year))
                    ),
                    array(
                        'v' => (float) $row->average,
                        'f' => (int) $row->average
                    ),
                    array(
                        'v' => ($ibp) ? (float) $ibp[0]->median : null,
                        'f' => ($ibp) ? (int) $ibp[0]->median : null
                    )
                )
            );
        }

        return $output;

    }
}
