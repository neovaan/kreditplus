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
                                'home.slides.txtbtn'=>['title'=>'text button'],
                                'home.slides.link'=>[
                                        'type' => 'select table',
                                        'title' => 'Link',
                                        'sources' => [
                                               'table' => 'menus',
                                               'column' => ['permalink', 'title']
                                        ]
                                ],
                                'home.slides.intro' => [ 'type'=>'textarea'],
                                'home.slides.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width 990px height',
                                        'title'=>'Image Large'
                                ],
                                'home.slides.image_desktop' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 768px width 540px height',
                                        'title'=>'Image Medium'
                                ],
                                'home.slides.image_phone' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 480px width 480px height',
                                        'title'=>'Image Small'
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
                                'home.slides.txtbtn'=>['title'=>'text button'],
                                'home.slides.link'=>[
                                        'type' => 'select table',
                                        'title' => 'Link',
                                        'sources' => [
                                               'table' => 'menus',
                                               'column' => ['permalink', 'title']
                                        ]
                                ],
                                'home.slides.intro' => [ 'type'=>'textarea'],
                                'home.slides.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slidess'
                                        ],
                                        'notnull'=>false,
                                        'ignored'=>true,
                                        'info' => 'Image recommendation size: 1920px width 990px height',
                                        'title'=>'Image Large'
                                ],
                                'home.slides.image_desktop' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 768px width 540px height',
                                        'title'=>'Image Medium',
                                        'notnull'=>false,
                                        'ignored'=>true
                                ],
                                'home.slides.image_phone' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 480px width 480px height',
                                        'title'=>'Image Small',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ]
                        ]
                ],
                'delete'

                
        ]
];