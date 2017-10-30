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
                                'section.service_home.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Page',
                                        'section' => 'service_home'
                                ],
                                'section.service_home.title',
                                'section.service_home.intro' => [ 'type'=>'textarea'],
                                'section.service_home.description' => [ 'type'=>'textarea','class' => 'ckeditor'],
                                'section.service_home.img1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.service_home.img2' => [
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
                                'section.service_home.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Page',
                                        'section' => 'service_home'
                                ],
                                'section.service_home.title',
                                'section.service_home.intro' => [ 'type'=>'textarea'],
                                'section.service_home.description' => [ 'type'=>'textarea','class' => 'ckeditor'],
                                'section.service_home.img1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.service_home.img2' => [
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