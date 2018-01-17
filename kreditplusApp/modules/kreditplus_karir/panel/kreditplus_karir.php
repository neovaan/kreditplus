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
                                'title'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                
                               'kreditplus_karir.kreditplus_karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'kreditplus_karir'
                                ],
                                'kreditplus_karir.kreditplus_karir.title',
                                'kreditplus_karir.kreditplus_karir.intro',
                                'kreditplus_karir.kreditplus_karir.description' => [
                                        'type'=>'textarea',
                                        'class' => 'ckeditor'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                 
                               'kreditplus_karir.kreditplus_karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'kreditplus_karir'
                                ],
                                'kreditplus_karir.kreditplus_karir.title',
                                'kreditplus_karir.kreditplus_karir.intro',
                                'kreditplus_karir.kreditplus_karir.description' => [
                                        'type'=>'textarea',
                                        'class' => 'ckeditor'
                                ]
                        ]
                ],
                'delete'

                
        ]
];