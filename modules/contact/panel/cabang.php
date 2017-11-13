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
                                'contact.cabang.telp',
                                'contact.cabang.fax',
                                'contact.cabang.email',
                                'contact.cabang.provinsi'=>[
                                    'type'=>'select table',
                                    'sources' => [
                                           'table' => 'provinces',
                                           'column' => ['id', 'name']
                                    ]
                                ],
                                'contact.cabang.kota'=>['type'=>'select','option'=>''],
                                'contact.cabang.alamat' => ['type'=>'textarea','title'=>'Alamat Detail'],
                        ]
                ],
                'edit' => [
                        'form' => [
                                'contact.cabang.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'cabang'
                                ],
                                'contact.cabang.telp',
                                'contact.cabang.fax',
                                'contact.cabang.email',
                                'contact.cabang.provinsi'=>[
                                    'type'=>'select table',
                                    'sources'=>[
                                        'table'=>'provinces',
                                        'column'=>['id','name']
                                    ]
                                ],
                                'contact.cabang.kota'=>['type'=>'select','option'=>''],
                                'contact.cabang.alamat' => ['type'=>'textarea','title'=>'Alamat Detail'],
                        ]
                ],
                'delete'

                
        ]
];