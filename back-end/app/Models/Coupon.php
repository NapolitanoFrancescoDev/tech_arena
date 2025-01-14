<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'discount', 'valid_until'];

    public function SetNameAttribute($value)
    {
        $this->attributes['name'] = Str::upper($value);
    }
    public function checkIfValid()
    {
        if($this->valid_until > Carbon::now()){
            return true;

        }else{
            return false;
        }
    }


   
}
