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
                                        'title' => 'Page',
                                        'section' => 'produk'
                                ],
                                'home.produk.title',
                                'home.produk.description'=>['type'=>'textarea'],
                                'home.produk.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
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
                                        'title' => 'Page',
                                        'section' => 'produk'
                                ],
                                'home.produk.title',
                                'home.produk.description'=>['type'=>'textarea'],
                                'home.produk.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ]
                        ]
                ],
                'delete'

                
        ]
];