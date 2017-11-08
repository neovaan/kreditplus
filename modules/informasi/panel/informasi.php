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
                                'title','type','intro'
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
                                        'type' => 'select',
                                        'options'=> ['berita'=>'Berita','promo'=>'Promo']
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
                                        'info' => 'Image recommendation size: 1171px width 401px height',
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
                                        'type' => 'select',
                                        'options'=> ['berita'=>'Berita','promo'=>'Promo']
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
                                        'info' => 'Image recommendation size: 1171px width 401px height',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ]
                        ]
                ],
                'delete'

                
        ]
];