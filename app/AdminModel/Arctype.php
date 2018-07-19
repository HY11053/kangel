<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Arctype extends Model
{
    //
    protected $fillable = [
        'id',
        'tagkeys',
        'description',
        'descriptions2',
        'namerule',
        'namerule2',
        'reid',
        'topid',
        'sortrank',
        'typename',
        'typedir',
        'title',
        'description',
        'keywords',
        'isextend',
        'is_write',
        'litpic',
        'contents',
        'dirposition',
        'real_path',
        'mid',
        'typeimages',
        'isjian',
    ];
    public function setFillable($fillable)
    {
        $this->fillable = $fillable;
    }
    /**
     * Eloquent ORM 关联定义
     * @param
     *
     * @return arraydatas
     */
    protected function articles()
    {
        return $this->hasMany('App\AdminModel\Archive','typeid');
    }

}
