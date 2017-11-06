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
                                'karir.content_karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'content-karir'
                                ],
                                'karir.content_karir.title',
                                'karir.content_karir.txt1'=>['title'=>'text penempatan'],
                                'karir.content_karir.txt2'=>['title'=>'text apply'],
                                'karir.content_karir.email',
                                'karir.content_karir.intro'=>['type'=>'textarea'],
                                'karir.content_karir.description'=>['type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'edit' => [
                        'form' => [
                                'karir.content_karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'content-karir'
                                ],
                                'karir.content_karir.title',
                                'karir.content_karir.txt1'=>['title'=>'text penempatan'],
                                'karir.content_karir.txt2'=>['title'=>'text apply'],
                                'karir.content_karir.email',
                                'karir.content_karir.intro'=>['type'=>'textarea'],
                                'karir.content_karir.description'=>['type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'delete'

                
        ]
];