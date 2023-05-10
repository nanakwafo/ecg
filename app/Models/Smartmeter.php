<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Smartmeter extends Model
{
    use CrudTrait;
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'unique_identifier',
        'product_name',
        'service_name',
        'service_description',
        'service_category',
        'relationship',
        'service_status',
        'business_process',
        'serviceowner',
        'business_owner',
        'priority',
        'sla',
        'contact_no',
        'address',
        'email',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [

    ];

}
