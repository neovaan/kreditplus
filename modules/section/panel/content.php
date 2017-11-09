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
                                'section.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'content'
                                ],
                                'section.content.title',
                                'section.content.intro'=>['type'=>'textarea'],
                                'section.content.description'=>['type'=>'textarea','class'=>'ckeditor']
                                // 'section.content.image1' => [
                                //         'file' => [
                                //                 'type' => 'image',
                                //                 'mimes' => ['jpg', 'jpeg', 'png'],
                                //                 'max' => 3072,
                                //                 'upload-dir' => 'site/uploads/banners'
                                //         ]
                                // ],
                                // 'section.content.image2' => [
                                //         'file' => [
                                //                 'type' => 'image',
                                //                 'mimes' => ['jpg', 'jpeg', 'png'],
                                //                 'max' => 3072,
                                //                 'upload-dir' => 'site/uploads/banners'
                                //         ]
                                // ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                 'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'content'
                                ],
                                'section.content.title',
                                'section.content.intro'=>['type'=>'textarea'],
                                'section.content.description'=>['type'=>'textarea','class'=>'ckeditor'],
                                // 'section.content.image1' => [
                                //         'file' => [
                                //                 'type' => 'image',
                                //                 'mimes' => ['jpg', 'jpeg', 'png'],
                                //                 'max' => 3072,
                                //                 'upload-dir' => 'site/uploads/banners'
                                //         ],
                                //         'notnull'=>false,
                                //         'ignored'=>true,
                                // ],
                                // 'section.content.image2' => [
                                //         'file' => [
                                //                 'type' => 'image',
                                //                 'mimes' => ['jpg', 'jpeg', 'png'],
                                //                 'max' => 3072,
                                //                 'upload-dir' => 'site/uploads/banners'
                                //         ],
                                //         'notnull'=>false,
                                //         'ignored'=>true,
                                // ]
                        ]
                ],
                'delete'

                
        ]
];