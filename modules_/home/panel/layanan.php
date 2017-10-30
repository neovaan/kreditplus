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
                                'title','intro',
                                'img1' => ['modifier' => 'thumb:90%', 'style' => 'width:30%'],
                                'img2' => ['modifier' => 'thumb:90%', 'style' => 'width:30%']
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'home.layanan.home_id' => [
                                        'type' => 'select template',
                                        'title' => 'Page',
                                        'home' => 'layanan'
                                ],
                                'home.layanan.title',
                                'home.layanan.intro' => [ 'type'=>'textarea'],
                                'home.layanan.description' => [ 'type'=>'textarea','class' => 'ckeditor'],
                                'home.layanan.img1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'home.layanan.img2' => [
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
                                'home.layanan.home_id' => [
                                        'type' => 'select template',
                                        'title' => 'Page',
                                        'home' => 'layanan'
                                ],
                                'home.layanan.title',
                                'home.layanan.intro' => [ 'type'=>'textarea'],
                                'home.layanan.description' => [ 'type'=>'textarea','class' => 'ckeditor'],
                                'home.layanan.img1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'home.layanan.img2' => [
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