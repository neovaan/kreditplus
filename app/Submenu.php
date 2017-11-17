<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 1:14 PM
 */

namespace App;


use Webarq\Model\MenuModel;

class Submenu
{
  
    static function asd($id){
        $builder = MenuModel::from('menus as m')
                ->select('m.id', 'm.parent_id',  'm.external_link', 'm.template', 'p.position', 'm.lead','m.sequence')
                ->selectTranslate('m.title', 'm.permalink', 'm.meta_title', 'm.meta_description', true)
                ->leftJoin('menu_positions as p', 'm.id', '=', 'p.menu_id')
                ->where('m.is_active', 1)
                ->where('m.parent_id', $id)
                ->orderBy('m.sequence', 'ASC')
                ->get();
        return $builder;
    }
}