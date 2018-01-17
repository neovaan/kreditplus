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
                                'img1' => ['modifier' => 'thumb:40%', 'style' => 'width:30%'],
                                'img2' => ['modifier' => 'thumb:40%', 'style' => 'width:30%'],
                                'img3' => ['modifier' => 'thumb:40%', 'style' => 'width:30%'],
                                'img4' => ['modifier' => 'thumb:40%', 'style' => 'width:30%']
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.pengajuan_kredit.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'pengajuan_kredit'
                                ],
                                'section.pengajuan_kredit.img1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.pengajuan_kredit.title1',
                                'section.pengajuan_kredit.img2' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.pengajuan_kredit.title2',
                                'section.pengajuan_kredit.img3' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.pengajuan_kredit.title3',
                                'section.pengajuan_kredit.img4' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.pengajuan_kredit.title4'
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.pengajuan_kredit.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'pengajuan_kredit'
                                ],
                                'section.pengajuan_kredit.img1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.pengajuan_kredit.title1',
                                'section.pengajuan_kredit.img2' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.pengajuan_kredit.title2',
                                'section.pengajuan_kredit.img3' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.pengajuan_kredit.title3',
                                'section.pengajuan_kredit.img4' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'section.pengajuan_kredit.title4'
                        ]
                ],
                'delete'

                
        ]
];