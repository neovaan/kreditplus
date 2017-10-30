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
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                               'kreditplus.content-kreditplus.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'content-kreditplus'
                                ],
                                'kreditplus.content-kreditplus.title',
                                'kreditplus.content-kreditplus.intro' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'kreditplus.content-kreditplus.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'kreditplus.content-kreditplus.image' => [
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
                               'kreditplus.content-kreditplus.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'content-kreditplus'
                                ],
                                'kreditplus.content-kreditplus.title',
                                'kreditplus.content-kreditplus.intro' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'kreditplus.content-kreditplus.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'kreditplus.content-kreditplus.image' => [
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