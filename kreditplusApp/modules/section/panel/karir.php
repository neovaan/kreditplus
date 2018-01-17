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
                                'title_job','penempatan'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                               
                                'section.karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'karir'
                                ],
                                'section.karir.title_job',
                                'section.karir.penempatan',
                                'section.karir.description' => [
                                        'type'=>'textarea',
                                        'class' => 'ckeditor'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'section.karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'karir'
                                ],
                                'section.karir.title_job',
                                'section.karir.penempatan',
                                'section.karir.description' => [
                                        'type'=>'textarea',
                                        'class' => 'ckeditor'
                                ]
                        ]
                ],
                'delete'

                
        ]
];