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
                                
                               'karir.karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'karir'
                                ],
                                'karir.karir.title_job',
                                'karir.karir.penempatan',
                                'karir.karir.description' => [
                                        'type'=>'textarea',
                                        'class' => 'ckeditor'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'karir.karir.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'karir'
                                ],
                                'karir.karir.title_job',
                                'karir.karir.penempatan',
                                'karir.karir.description' => [
                                        'type'=>'textarea',
                                        'class' => 'ckeditor'
                                ]
                        ]
                ],
                'delete'

                
        ]
];