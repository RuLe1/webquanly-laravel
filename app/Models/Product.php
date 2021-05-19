<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
{
    use HasFactory;

    public $title ="Sản phẩm";

    public function listingConfigs(){
        $defaultListingConfigs = parent::defaultListingConfigs();
        $listingConfigs = array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text',
                'filter'=>'equal',
                'sort'=>true
            ),
            array(
                'field'=>'name',
                'name'=>'Tên sản phẩm',
                'type'=>'text',
                'filter'=>'like',
                'sort'=>true
            ),
            array(
                'field'=>'image',
                'name'=>'Ảnh sản phẩm',
                'type'=>'image',
            ),
            array(
                'field'=>'price',
                'name'=>'Giá sản phẩm',
                'type'=>'number',
                'filter'=>'between',
                'sort'=>true
            ),        
        );
            return array_merge($listingConfigs, $defaultListingConfigs);
        }
}
