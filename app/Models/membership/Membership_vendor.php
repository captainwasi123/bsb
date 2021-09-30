<?php

namespace App\Models\membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products\product;
use App\Models\products\categories;

class Membership_vendor extends Model
{
    use HasFactory;

    protected $table='tbl_membership_vendor';

    public function product(){

        return $this->belongsTo(product::class, 'product_id', 'id');
    }

    public function category(){

        return $this->belongsTo(categories::class, 'category_id', 'id');
    }


}
