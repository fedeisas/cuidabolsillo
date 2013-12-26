<?php

class PriceReport extends Eloquent
{

    protected $guarded = array();

    public static $rules = array(
        'product_id' => 'required|numeric|exists:products,id',
        'price' => 'required|numeric'
    );

    public $appends = array('hash');

    public $table = "price_reports";

    public static function boot()
    {
        parent::boot();

        // Fetch possible locations upon creation
        static::created(function ($priceReport) {
            if ($priceReport->latitude && $priceReport->longitude) {

                $foursquare = new FoursquareVenueFinder;

                $venues = $foursquare->search('', null, $priceReport->latitude, $priceReport->longitude);
                $possibilities = new Illuminate\Support\Collection;

                if ($venues) {
                    foreach ($venues as $venue) {
                        if (!Business::where('foursquare_id', $venue['foursquare_id'])->count()) {
                            $possibilities->push(Business::create($venue));
                        } else {
                            $possibilities->push(
                                Business::where('foursquare_id', $venue['foursquare_id'])
                                        ->get()
                                        ->first()
                            );
                        }
                    }

                    if ($possibilities->count()) {
                        $priceReport->possible_businesses = serialize($possibilities->lists('id'));
                        $priceReport->save();
                    }
                }
            }
        });
    }

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function business()
    {
        return $this->belongsTo('Business', 'business_id');
    }

    public function province()
    {
        return $this->belongsTo('Province', 'province_id');
    }

    public function getHashAttribute()
    {
        return Hashids::encrypt($this->id);
    }

    public function getMapLinkAttribute()
    {
        return "http://maps.google.com/maps?q=" . $this->latitude . "," . $this->longitude;
    }
}
