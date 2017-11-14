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
                                'title','type'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                               'informasi.informasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'informasi'
                                ],
                                'informasi.informasi.title' => [
                                    'referrer' => '.permalink-informasi'
                                ],
                                'informasi.informasi.permalink' => [
                                    'class' => 'permalink-informasi'
                                ],
                                'informasi.informasi.type'=>[
                                        'type' => 'select table',
                                        'sources'=>[
                                            'table'=>'type',
                                            'column' => ['title', 'title']
                                        ]
                                ],
                                'informasi.informasi.intro' => [ 'type'=>'textarea'],
                                'informasi.informasi.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'informasi.informasi.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Thumbnail',
                                        'info' => 'Image recommendation size: 650px width 350px height',
                                ],
                                'informasi.informasi.image2' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Thumbnail Listing ',
                                        'info' => 'Image recommendation size: 240px width 210px height',
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                               'informasi.informasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'informasi'
                                ],
                                'informasi.informasi.title' => [
                                    'referrer' => '.permalink-informasi'
                                ],
                                'informasi.informasi.permalink' => [
                                    'class' => 'permalink-informasi'
                                ],
                                'informasi.informasi.type'=>[
                                        'type' => 'select table',
                                        'sources'=>[
                                            'table'=>'type',
                                            'column' => ['title','title']
                                        ]
                                ],
                                'informasi.informasi.intro' => [ 'type'=>'textarea'],
                                'informasi.informasi.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'informasi.informasi.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 650px width 350px height',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                        'title'=>'Thumbnail',
                                ],
                                 'informasi.informasi.image2' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Thumbnail Listing ',
                                        'info' => 'Image recommendation size: 240px width 210px height',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ]
                        ]
                ],
                'delete'

                
        ]
];