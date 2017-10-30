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
                                'section.informasi_home.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'informasi'
                                ],
                                'section.informasi_home.title',
                                'section.informasi_home.intro' => [
                                        'type' => 'textarea'
                                ],
                                'section.informasi_home.description' => [
                                        'type' => 'textarea',
                                        'class'=> 'ckeditor'
                                ],
                                'section.informasi_home.type' => [
                                        'type' => 'select',
                                        'options'=> ['berita'=>'Berita','promo'=>'Promo']
                                ],
                                'section.informasi_home.image' => [
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
                // 'edit' => [
                //         'form' => [
                //                 'attributes' => [
                //                         'enctype' => 'multipart/form-data',
                //                 ],
                //                  'section.informasi_home.section_id' => [
                //                         'type' => 'select template',
                //                         'title' => 'Banner',
                //                         'section' => 'informasi'
                //                 ],
                //                 'section.informasi.title',
                //                 'section.informasi.intro' => [
                //                         'type' => 'textarea'
                //                 ],
                //                 'section.informasi.description' => [
                //                         'type' => 'textarea',
                //                         'class'=> 'ckeditor'
                //                 ],
                //                 'section.informasi.type' => [
                //                         'type' => 'select',
                //                         'options'=> ['berita'=>'Berita','promo'=>'Promo']
                //                 ],
                //                 'section.informasi.image' => [
                //                         'file' => [
                //                                 'type' => 'image',
                //                                 'mimes' => ['jpg', 'jpeg', 'png'],
                //                                 'upload-dir' => 'site/uploads/banners'
                //                         ],
                //                         'info' => 'Image recommendation size: 1920px width',
                //                 ]
                //         ]
                // ],
                'delete'

                
        ]
];