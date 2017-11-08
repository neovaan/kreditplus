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
                                'path' => ['modifier' => 'thumb:90%', 'style' => 'width:30%']
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.banner.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'banner'
                                ],
                                'section.banner.path' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Image Large',
                                        'info' => 'Image recommendation size: 1920px width 550px height',
                                ],
                                'section.banner.image_medium' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Image Medium',
                                        'info' => 'Image recommendation size: 768px width 540px height',
                                ],
                                'section.banner.image_small' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Image Small',
                                        'info' => 'Image recommendation size: 480px width 480px height',
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.banner.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'banner'
                                ],
                                'section.banner.path' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Image Large',
                                        'info' => 'Image recommendation size: 1920px width 550px height',
                                        'ignored'=>true,
                                        'notnull'=>false
                                ],
                                'section.banner.image_medium' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Image Medium',
                                        'info' => 'Image recommendation size: 768px width 540px height',
                                ],
                                'section.banner.image_small' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Image Small',
                                        'info' => 'Image recommendation size: 480px width 480px height',
                                ]
                        ]
                ],
                'delete'

                
        ]
];