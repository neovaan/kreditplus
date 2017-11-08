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
                                'image1' => ['modifier' => 'thumb:90%', 'style' => 'width:30%'],
                                'image2' => ['modifier' => 'thumb:90%', 'style' => 'width:30%'],
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
                                'home.layanan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'layanan'
                                ],
                                'home.layanan.title',
                                'home.layanan.txt1'=>['title'=>'text layanan'],
                                'home.layanan.txt2'=>['title'=>'text BELANJA NYAMAN TANPA TUNAI'],
                                'home.layanan.txt3'=>['title'=>'text Kantor Cabang'],
                                 'home.layanan.image3' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'title'=>'icon kantor cabang'
                                ],

                                'home.layanan.txt4'=>['title'=>'text Simulasi Kredit'],
                                 'home.layanan.image4' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'title'=>'icon Simulasi Kredit'
                                ],

                                 'home.layanan.txt5'=>['title'=>'text telepon hotline'],
                                 'home.layanan.image5' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'title'=>'icon telepon hotline'
                                       
                                ],

                                'home.layanan.intro' => [ 'type'=>'textarea'],
                                'home.layanan.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'home.layanan.image1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ],
                                'home.layanan.image2' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
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
                                'home.layanan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'layanan'
                                ],
                                'home.layanan.title',
                                'home.layanan.title',
                                'home.layanan.txt1'=>['title'=>'text layanan'],
                                'home.layanan.txt2'=>['title'=>'text BELANJA NYAMAN TANPA TUNAI'],
                                'home.layanan.txt3'=>['title'=>'text Kantor Cabang'],
                                 'home.layanan.image3' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'title'=>'icon kantor cabang',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ],

                                'home.layanan.txt4'=>['title'=>'text Simulasi Kredit'],
                                 'home.layanan.image4' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'title'=>'icon Simulasi Kredit',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ],

                                 'home.layanan.txt5'=>['title'=>'text telepon hotline'],
                                 'home.layanan.image5' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'title'=>'icon telepon hotline',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                       
                                ],
                                'home.layanan.intro' => [ 'type'=>'textarea'],
                                'home.layanan.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'home.layanan.image1' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ],
                                'home.layanan.image2' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slides'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                        'notnull'=>false,
                                        'ignored'=>true,
                                ]
                        ]
                ],
                'delete'

                
        ]
];