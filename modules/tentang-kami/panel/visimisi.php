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
                                'visi','misi'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'tentang-kami.visimisi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'visimisi'
                                ],
                                'tentang-kami.visimisi.title',
                                'tentang-kami.visimisi.visi' => [
                                        'type' => 'textarea'
                                ],
                                'tentang-kami.visimisi.txt_visi'=>['title'=>'Text Visi'],
                                'tentang-kami.visimisi.img_visi' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title' => 'Icon Visi',
                                ],
                                'tentang-kami.visimisi.misi' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'tentang-kami.visimisi.txt_misi'=>['title'=>'Text Misi'],
                                'tentang-kami.visimisi.img_misi' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title' => 'Icon Misi',
                                ],
                                'tentang-kami.visimisi.nilai' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'tentang-kami.visimisi.txt_nilai'=>['title'=>'Text Nilai'],
                                'tentang-kami.visimisi.img_nilai' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title' => 'Icon Nilai',
                                ]
                                
                                
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'tentang-kami.visimisi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'visimisi'
                                ],
                                'tentang-kami.visimisi.title',
                                'tentang-kami.visimisi.visi' => [
                                        'type' => 'textarea'
                                ],
                                'tentang-kami.visimisi.txt_visi'=>['title'=>'Text Visi'],
                                'tentang-kami.visimisi.img_visi' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title' => 'Icon Visi',
                                        'ignored'=>true,
                                        'notnull'=>false
                                ],
                                'tentang-kami.visimisi.misi' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'tentang-kami.visimisi.txt_misi'=>['title'=>'Text Misi'],
                                'tentang-kami.visimisi.img_misi' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title' => 'Icon Misi',
                                        'ignored'=>true,
                                        'notnull'=>false
                                ],
                                'tentang-kami.visimisi.nilai' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'tentang-kami.visimisi.txt_nilai'=>['title'=>'Text Nilai'],
                                'tentang-kami.visimisi.img_nilai' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title' => 'Icon Nilai',
                                        'ignored'=>true,
                                        'notnull'=>false
                                ]
                        ]
                ],
                'delete'

                
        ]
];