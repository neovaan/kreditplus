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
                                'visi','misi'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'section.visimisi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'visimisi'
                                ],
                                'section.visimisi.visi' => [
                                        'type'=>'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'section.visimisi.misi' => [
                                        'type'=>'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'section.visimisi.nilai' => [
                                        'type'=>'textarea',
                                        'class'=>'ckeditor'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                 'section.visimisi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'visimisi'
                                ],
                                'section.visimisi.visi' => [
                                        'type'=>'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'section.visimisi.misi' => [
                                        'type'=>'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'section.visimisi.nilai' => [
                                        'type'=>'textarea',
                                        'class'=>'ckeditor'
                                ]
                        ]
                ],
                'delete'

                
        ]
];