<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use App\Traits\Auditable;
class ContactCompany extends Model
{
    use SoftDeletes,Auditable, HasFactory;

    public $table = 'contact_companies';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    public function Thana()
    {
        $path = '/storage/json/country.json';
        $content = json_decode(file_get_contents($path), true);
        dd($content);
    }

    const THANA_SELECT = [
        'home'    => 'Home',
        'about'   => 'About',
        'contact' => 'Contact',
    ];
    const DISTRICT_SELECT  = [
        'home'    => 'Home',
        'about'   => 'About',
        'contact' => 'Contact',
    ];
    const COUNTRY_SELECT   = [
        'bangladesh'    => 'Bangladesh',
        'india'   => 'India',
        'contact' => 'Contact',
    ];
    const TYPE_SELECT    = [
        'limitedcompany'    => 'Limited Company',
        'groupofcompany'   => 'Group Of Company',
        'propertyship' => 'Propertyship',
    ];
    const SOURCE_SELECT     = [
        'offline'    => 'Offline',
        'online'   => 'Online',
       
    ];

    protected $fillable = [
       'id',
       'company_name',
        'company_address',
        'head_office',
        'company_email',
        'factory',
        'thana',
        'district',
        'country',
        'type',
        'company_website',
        'facbook',
        'source',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}