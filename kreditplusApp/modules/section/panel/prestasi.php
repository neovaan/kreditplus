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
                                'section.prestasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'prestasi'
                                ],
                                'section.prestasi.title',
                                'section.prestasi.intro' => [
                                        'type' => 'textarea'
                                ],
                                'section.prestasi.image' => [
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
                                'section.prestasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'prestasi'
                                ],
                                'section.prestasi.title',
                                'section.prestasi.intro' => [
                                        'type' => 'textarea'
                                ],
                                'section.prestasi.image' => [
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