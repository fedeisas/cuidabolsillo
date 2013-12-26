<?php

class ProductDataRepository
{
    const IBP_FACTOR = 0.3;
    const AVG_FACTOR = 0.7;

    public function getIBP($product_id, $province_id)
    {
        return IBP::with('province')
                  ->where('product_id', $product_id)
                  ->where('province_id', $province_id)
                  ->orderBy('reported_at', 'desc')
                  ->take(1)
                  ->get()
                  ->first();
    }

    public function getSuggestedPrice($product_id, $province_id)
    {
        $averagePrice = PriceReport::where('product_id', $product_id)
                                   ->where('province_id', $province_id)
                                   ->where('created_at', '>', Carbon\Carbon::now()->subMonth())
                                   ->avg('price');

        $ibp = $this->getIBP($product_id, $province_id);

        if ($averagePrice && $ibp) {
            return (float) self::IBP_FACTOR * $ibp->median + self::AVG_FACTOR * $averagePrice;
        } elseif (!$averagePrice && $ibp) {
            return $ibp->median;
        } else {
            return $averagePrice;
        }
    }

    public function getRecentHistory($product_id, $province_id)
    {
        return PriceReport::with('business', 'province')
                          ->where('product_id', $product_id)
                          ->where('province_id', $province_id)
                          ->orderBy('created_at', 'desc')
                          ->get();
    }

    public function getDeviation($report_id, $province_id)
    {
        $priceReport = PriceReport::find($report_id);

        $suggestedPrice = $this->getSuggestedPrice($priceReport->product_id, $province_id);

        if (!$suggestedPrice) {
            return 0;
        }

        if ($suggestedPrice == 0 || $priceReport->price == 0) {
            return 0;
        }

        return ($priceReport->price - $suggestedPrice) / $suggestedPrice * 100;
    }
}
