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
                                'image1' => ['modifier' => 'thumb:90%', 'style' => 'width:30%'],
                                'image2' => ['modifier' => 'thumb:90%', 'style' => 'width:30%'],
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
                                'home.layanan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'layanan'
                                ],
                                'home.layanan.title',
                                'home.layanan.intro' => [ 'type'=>'textarea'],
                                'home.layanan.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'home.layanan.image1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'home.layanan.image2' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
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
                                'home.layanan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'layanan'
                                ],
                                'home.layanan.title',
                                'home.layanan.intro' => [ 'type'=>'textarea'],
                                'home.layanan.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'home.layanan.image1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'home.layanan.image2' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ]
                        ]
                ],
                'delete'

                
        ]
];