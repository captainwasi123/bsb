<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\fav_vendor as FVENDR;

class fav_vendor extends Model
{
    use HasFactory;

    protected $table='tbl_fav_vendor';

    public $timestamps=false;

    Public function user(){

        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    Public function favVender(){

        return $this->belongsTo(FVENDR::class, 'vendor_id', 'id');
    }
}
