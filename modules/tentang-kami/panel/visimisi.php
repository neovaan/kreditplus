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
                                'visi','misi'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'tentang-kami.visimisi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'visimisi'
                                ],
                                'tentang-kami.visimisi.visi' => [
                                        'type' => 'textarea'
                                ],
                                'tentang-kami.visimisi.misi' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'tentang-kami.visimisi.nilai' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor'
                                ]
                                
                        ]
                ],
                'edit' => [
                        'form' => [
                                'tentang-kami.visimisi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'visimisi'
                                ],
                                'tentang-kami.visimisi.visi' => [
                                        'type' => 'textarea'
                                ],
                                'tentang-kami.visimisi.misi' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor'
                                ],
                                'tentang-kami.visimisi.nilai' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor'
                                ]
                        ]
                ],
                'delete'

                
        ]
];