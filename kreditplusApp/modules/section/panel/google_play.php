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
                                'image' => ['modifier' => 'thumb:30%', 'style' => 'width:30%'],'txt'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.google_play.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'google_play'
                                ],
                                'section.google_play.txt'=>['title'=>'Text'],
                                'section.google_play.link'=>['rules'=>'url'],
                                'section.google_play.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Icon',
                                        'info' => 'Image recommendation size: 196px width 58px height',
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.google_play.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'google_play'
                                ],
                                'section.google_play.txt'=>['title'=>'Text'],
                                'section.google_play.link',
                                'section.google_play.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'title'=>'Icon',
                                        'info' => 'Image recommendation size: 196px width 58px height',
                                        'ignored'=>true,
                                        'notnull'=>false
                                ]
                        ]
                ],
                'delete'

                
        ]
];