<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubPackage extends Model
{

    protected $fillable = ['package_id', 'user_id', 'amount', 'status', 'profit'];

    public function status()
    {
        if ($this->status == 1) {
            return '<span class="badge bg-warning">Pending</span>';
        } elseif ($this->status == 2) {
            return '<span class="badge bg-success">Active</span>';
        }
        return '<span class="badge bg-danger">Declined</span>';
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
