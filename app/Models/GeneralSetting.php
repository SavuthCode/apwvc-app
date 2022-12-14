<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable =[

        "site_title", "site_logo", "staff_access", "date_format", "theme", "developed_by", "invoice_format", "state"
    ];
}
