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
                                'title',
                                'image1' => ['modifier' => 'thumb:90%', 'style' => 'width:30%'],
                                'image2' => ['modifier' => 'thumb:90%', 'style' => 'width:30%']
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'tentang-kami.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'content'
                                ],
                                'tentang-kami.content.title',
                                'tentang-kami.content.intro'=>['type'=>'textarea'],
                                'tentang-kami.content.description'=>['type'=>'textarea','class'=>'ckeditor'],
                                'tentang-kami.content.image1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'tentang-kami.content.image2' => [
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
                                'tentang-kami.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'content'
                                ],
                                'tentang-kami.content.title',
                                'tentang-kami.content.intro'=>['type'=>'textarea'],
                                'tentang-kami.content.description'=>['type'=>'textarea','class'=>'ckeditor'],
                                'tentang-kami.content.image1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'tentang-kami.content.image2' => [
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