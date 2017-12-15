<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 10:19 AM
 */

return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'kota','alamat','fax','email','telp'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                               'contact.cabang.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'cabang'
                                ],
                                'contact.cabang.telp'=>['notnull'=>false],
                                'contact.cabang.fax'=>['notnull'=>false],
                                'contact.cabang.email',
                                'contact.cabang.provinsi'=>[
                                    'type'=>'select table',
                                    'sources' => [
                                           'table' => 'provinces',
                                           'column' => ['id', 'name']
                                    ]
                                ],
                                'contact.cabang.kota'=>['type'=>'text'],
                                'contact.cabang.alamat' => ['type'=>'textarea','title'=>'Alamat Detail'],
                                'contact.cabang.lat' => ['title'=>'Latitude'],
                                'contact.cabang.long' => ['title'=>'Longtitude'],
                                'contact.cabang.title_name' => ['title'=>'Title Name'],
                                'contact.cabang.contact_name' => ['title'=>'Contact Name']
                        ]
                ],
                'edit' => [
                        'form' => [
                                'contact.cabang.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'cabang'
                                ],
                                'contact.cabang.telp'=>['notnull'=>false],
                                'contact.cabang.fax'=>['notnull'=>false],
                                'contact.cabang.email',
                                'contact.cabang.provinsi'=>[
                                    'type'=>'select table',
                                    'sources'=>[
                                        'table'=>'provinces',
                                        'column'=>['id','name']
                                    ]
                                ],
                                'contact.cabang.kota'=>['type'=>'text'],
                                'contact.cabang.alamat' => ['type'=>'textarea','title'=>'Alamat Detail'],
                                'contact.cabang.lat' => ['title'=>'Latitude'],
                                'contact.cabang.long' => ['title'=>'Longtitude'],
                                'contact.cabang.title_name' => ['title'=>'Title Name'],
                                'contact.cabang.contact_name' => ['title'=>'Contact Name']
                        ]
                ],
                'delete'

                
        ]
];