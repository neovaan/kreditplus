<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/15/2017
 * Time: 4:54 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'title', 'name' => 'section_id','notnull'=>true],
        ['master' => 'title', 'name' => 'title', 'multilingual' => true,'notnull'=>true],
        ['master' => 'description', 'name' => 'description', 'multilingual' => true,'notnull'=>true],
        ['master' => 'longTitle', 'name' => 'alamat','notnull'=>true],
        ['master' => 'title', 'name' => 'fax','notnull'=>true],
        ['master' => 'title','name'=>'email','notnull'=>true],
        ['master' => 'title','name'=>'nm_persh','notnull'=>true],
        ['master' => 'title','name'=>'icon','notnull'=>true],
        ['master' => 'title','name'=>'telp','notnull'=>true],
        ['master' => 'title','name'=>'lat','notnull'=>true],
        ['master' => 'title','name'=>'long','notnull'=>true],
        ['master' => 'title','name'=>'title_name','notnull'=>true],
        ['master' => 'title','name'=>'contact_name','notnull'=>true],
        ['master' => 'title','name'=>'field1','multilingual' => true,'notnull'=>true],
        ['master' => 'title','name'=>'field2','multilingual' => true,'notnull'=>true],
        ['master' => 'title','name'=>'field3','multilingual' => true,'notnull'=>true,'notnull'=>true],
        ['master' => 'title','name'=>'field4','multilingual' => true,'notnull'=>true]
];