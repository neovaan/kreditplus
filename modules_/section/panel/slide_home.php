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
                                'section.slide_home.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'slide_home'
                                ],
                                'section.slide_home.title',
                                'section.slide_home.desc' => [
                                        'class' => 'textarea'
                                ],
                                'section.slide_home.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/images'
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
                                'section.slide_home.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'slide_home'
                                ],
                                'section.slide_home.title',
                                'section.slide_home.desc' => [
                                        'class' => 'textarea'
                                ],
                                'section.slide_home.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/images'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ]
                        ]
                ],
                'delete'

                
        ]
];