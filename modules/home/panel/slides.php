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
                                'home.slides.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'slides'
                                ],
                                'home.slides.title',
                                'home.slides.intro' => [ 'type'=>'textarea'],
                                'home.slides.image' => [
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
                                'home.slides.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'slides'
                                ],
                                'home.slides.title',
                                'home.slides.intro' => [ 'type'=>'textarea'],
                                'home.slides.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slidess'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ]
                        ]
                ],
                'delete'

                
        ]
];