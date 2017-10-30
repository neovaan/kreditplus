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
                                'title','intro'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' =>['attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Content',
                                        'section' => 'content'
                                ],
                                'section.content.title',
                                'section.content.intro' => [
                                        'type' => 'textarea'
                                ],
                                'section.content.description' => [
                                        'type' => 'textarea',
                                        'class'=> 'ckeditor'
                                ],
                                'section.content.img_left' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/images'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.content.img_right' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/images'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.content.img_information' => [
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
                        'form' => 
                                ['attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Content'
                                ],
                                'section.content.title',
                                'section.content.intro' => [
                                        'type' => 'textarea'
                                ],
                                'section.content.description' => [
                                        'type' => 'textarea',
                                        'class'=> 'ckeditor'
                                ],
                                'section.content.img_left' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'upload-dir' => 'site/uploads/images'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.content.img_right' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'upload-dir' => 'site/uploads/images'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.content.img_information' => [
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