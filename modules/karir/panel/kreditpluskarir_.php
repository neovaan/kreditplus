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
                                
                               'karir.kreditpluskarir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'kreditpluskarir'
                                ],
                                'karir.kreditpluskarir.title',
                                'karir.kreditpluskarir.intro',
                                'karir.kreditpluskarir.description' => [
                                        'type'=>'textarea',
                                        'class' => 'ckeditor'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                               'karir.kreditpluskarir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'kreditpluskarir'
                                ],
                                'karir.kreditpluskarir.title',
                                'karir.kreditpluskarir.intro',
                                'karir.kreditpluskarir.description' => [
                                        'type'=>'textarea',
                                        'class' => 'ckeditor'
                                ]
                        ]
                ],
                'delete'

                
        ]
];