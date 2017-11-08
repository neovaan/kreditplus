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
                                'txt'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                  'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.mini_banner.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'mini_banner'
                                ],
                                'section.mini_banner.txt'=>['title'=>'title'],
                                'section.mini_banner.txtbtn'=>['title'=>'Text Button'],
                                'section.mini_banner.link'=>[
                                        'type' => 'select table',
                                        'title' => 'Menu',
                                        'sources' => [
                                               'table' => 'menus',
                                               'column' => ['permalink', 'title']
                                        ]
                                ],
                                'section.mini_banner.background' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ]
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                 'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.mini_banner.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'mini_banner'
                                ],
                                'section.mini_banner.txt'=>['title'=>'title'],
                                'section.mini_banner.txtbtn'=>['title'=>'Text Button'],
                                'section.mini_banner.link'=>[
                                        'type' => 'select table',
                                        'title' => 'Menu',
                                        'sources' => [
                                               'table' => 'menus',
                                               'column' => ['permalink', 'title']
                                        ]
                                ],
                                'section.mini_banner.background' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ]
                                
                        ]
                ],
                'delete'

                
        ]
];