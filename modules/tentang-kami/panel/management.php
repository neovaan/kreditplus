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
                                'title','description'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'tentang-kami.management.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'management'
                                ],
                                'tentang-kami.management.title',
                                'tentang-kami.management.description' => [
                                       'type'=>'textarea',
                                       'class'=>'ckeditor'
                                ],
                                'tentang-kami.management.image' => [
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
                                'tentang-kami.management.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'management'
                                ],
                                'tentang-kami.management.title',
                                'tentang-kami.management.description' => [
                                       'type'=>'textarea',
                                       'class'=>'ckeditor'
                                ],
                                'tentang-kami.management.image' => [
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