<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use App\Models\Base;

class Admin extends Base implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    public $title ="Quản trị viên";

    public function listingConfigs(){
        $defaultListingConfigs = parent::defaultListingConfigs();
        $listingConfigs =array(
        array(
            'field'=>'id',
            'name'=>'ID',
            'type'=>'text',
        ),
        array(
            'field'=>'name',
            'name'=>'Tên quản trị viên',
            'type'=>'text',
        ),
        array(
            'field'=>'email',
            'name'=>'Email quản trị viên',
            'type'=>'text',
        ),      
        );
        return array_merge($listingConfigs, $defaultListingConfigs);
    }
}
