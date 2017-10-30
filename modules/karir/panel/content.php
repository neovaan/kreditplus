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
                                'karir.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'content-karir'
                                ],
                                'karir.content.title',
                                'karir.content.intro'=>['type'=>'textarea'],
                                'karir.content.description'=>['type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'edit' => [
                        'form' => [
                                'karir.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'content-karir'
                                ],
                                'karir.content.title',
                                'karir.content.intro'=>['type'=>'textarea'],
                                'karir.content.description'=>['type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'delete'

                
        ]
];