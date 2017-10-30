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
                                'title','intro','description'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                               
                                'section.kreditplus_karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'kreditplus_karir'
                                ],
                                'section.kreditplus_karir.title',
                                'section.kreditplus_karir.intro' => [
                                        'type' => 'textarea'
                                ],
                                'section.kreditplus_karir.description' => [
                                        'type' => 'textarea',
                                        'class'=> 'ckeditor'
                                ]
                               
                        ]
                ],
                'edit' => [
                        'form' => [
                               'section.kreditplus_karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'kreditplus_karir'
                                ],
                                'section.kreditplus_karir.title',
                                'section.kreditplus_karir.intro' => [
                                        'type' => 'textarea'
                                ],
                                'section.kreditplus_karir.description' => [
                                        'type' => 'textarea',
                                        'class'=> 'ckeditor'
                                ]
                        ]
                ],
                'delete'

                
        ]
];