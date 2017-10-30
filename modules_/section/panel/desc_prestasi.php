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
                                ':sectionMenu','title'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'section.desc_prestasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'desc_prestasi'
                                ],
                                'section.desc_prestasi.title',
                                'section.desc_prestasi.desc' => [
                                        'type' => 'textarea',
                                        'class'=> 'ckeditor'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                               'section.desc_prestasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'desc_prestasi'
                                ],
                                'section.desc_prestasi.title',
                                'section.desc_prestasi.desc' => [
                                        'type' => 'textarea',
                                        'class'=> 'ckeditor'
                                ]
                        ]
                ],
                'delete'

                
        ]
];