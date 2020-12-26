<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use App\Models\Page;

class Menu extends Model
{
    use SoftDeletes, HasFactory;



    public $table = 'menus';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const PARENT_SELECT = [
        'home'    => 'Home',
        'about'   => 'About',
        'contact' => 'Contact',
    ];

    protected $fillable = [
        'name',
        'slug',
        'menu_id',
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TYPE_SELECT = [
        'page_link' => 'Page Link',
        'external'  => 'External Link',
        'internal'  => 'Internal',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
    

    public function childrenMenus()
    {
        return $this->hasMany(Menu::class)->with('menus');
    }
}