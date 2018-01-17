<?php

namespace App\Webarq\Model;


use Webarq\Model\AbstractListingModel;

class InformasiModel extends AbstractListingModel
{
    protected $table = 'informasi';

    protected function getPermalinkAttribute($permalink){
    	return $permalink;
    }
}