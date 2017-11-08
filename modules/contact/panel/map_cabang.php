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
                                ':sectionMenu',
                                'lat','long','title_name','contact_name'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'contact.map_cabang.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'map_cabang'
                                ],
                                'contact.map_cabang.lat'=>['title'=>'Latitude'],
                                'contact.map_cabang.long'=>['title'=>'Longtitude'],
                                'contact.map_cabang.title_name'=>['title'=>'Title Name'],
                                'contact.map_cabang.contact_name'=>['title'=>'Contact']
                            ]
                ],
                'edit' => [
                        'form' => [
                                'contact.map_cabang.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'map_cabang'
                                ],
                                'contact.map_cabang.lat'=>['title'=>'Latitude'],
                                'contact.map_cabang.long'=>['title'=>'Longtitude'],
                                'contact.map_cabang.title_name'=>['title'=>'Title Name'],
                                'contact.map_cabang.contact_name'=>['title'=>'Contact']
                            ]
                        
                ],
                'delete'

                
        ]
];