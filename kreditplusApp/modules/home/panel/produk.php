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
                                'image' => ['modifier' => 'thumb:90%', 'style' => 'width:30%'],
                                'title'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                               'home.produk.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'produk'
                                ],
                                'home.produk.title',
                                'home.produk.intro' => [ 'type'=>'textarea'],
                                'home.produk.link'=>[
                                        'type' => 'select table',
                                        'title' => 'Link',
                                        'sources' => [
                                               'table' => 'menus',
                                               'column' => ['permalink', 'title']
                                        ]
                                ],
                                'home.produk.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slidess'
                                        ],
                                        'info' => 'Image recommendation size: 212px width 166px Height'
                                ]
                                
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'home.produk.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'produk'
                                ],
                                'home.produk.title',
                                'home.produk.intro' => [ 'type'=>'textarea'],
                                'home.produk.link'=>[
                                        'type' => 'select table',
                                        'title' => 'Link',
                                        'sources' => [
                                               'table' => 'menus',
                                               'column' => ['permalink', 'title']
                                        ]
                                ],
                                'home.produk.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slidess'
                                        ],
                                        'info' => 'Image recommendation size: 212px width 166px Height',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ]
                        ]
                ],
                'delete'

                
        ]
];