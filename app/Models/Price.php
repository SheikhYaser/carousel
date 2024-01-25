<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function have_plan($plan_id)
    {
       return $this->hasOne(PricePlan::class, 'price_id')->where('plan_id', $plan_id)->first();
    }
}
