<?php

namespace App\Models\membership;

use App\Models\products\product;
use App\Models\products\categories;
use App\Models\User;
use App\Models\membership\Membership_user as MU;
use App\Models\membership\Membership_vendor as MV;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class buy_membership_package extends Model
{
    use HasFactory;

    protected $table = 'tbl_buy_membership_package';

    public function product(){

        return $this->belongsTo(product::class, 'product_id', 'id');
    }

    public function category(){

        return $this->belongsTo(categories::class, 'category_id', 'id');
    }

    public function user(){
        
        return $this->belongsto(User::class, 'user_id', 'id'); 
    }

    public function membershipUser()
    {
        return $this->belongsTo(MU::class, 'membership_user_id', 'id');
    }

    public function membershipVendor()
    {
        return $this->belongsTo(MV::class, 'membership_vendor_id', 'id');
    }
}
