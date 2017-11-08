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
                                'tentang-kami.prestasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'prestasi'
                                ],
                                'tentang-kami.prestasi.title',
                                'tentang-kami.prestasi.intro'=>['type'=>'textarea'],
                                'tentang-kami.prestasi.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],

                                        'title'=>'Image Popup',
                                        'info' => 'Image recommendation size: 629px width 486px height'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'tentang-kami.prestasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'prestasi'
                                ],
                                'tentang-kami.prestasi.title',
                                'tentang-kami.prestasi.intro'=>['type'=>'textarea'],
                                'tentang-kami.prestasi.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Image Popup',
                                        'info' =>'Image recommendation size: 629px width 486px height'
                                ]
                        ]
                ],
                'delete'

                
        ]
];