<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

use App\Traits\Auditable;

class ContactContact extends Model
{
    use SoftDeletes,Auditable, HasFactory;

    public $table = 'contact_contacts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_id',
      
        'name',
        // 'contact_last_name',
        'designation',
        'contact_phone_1',
        'contact_phone_2',
        'contact_email',
        'contact_skype',
        'contact_address',
        'email_office_personal',
        'email_personal',
        'telephone',
        'persona_age',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }
}