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
                                'tentang-kami.desc_prestasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'desc_prestasi'
                                ],
                                'tentang-kami.desc_prestasi.title',
                                'tentang-kami.desc_prestasi.intro'=>['type'=>'textarea'],
                                'tentang-kami.desc_prestasi.description'=>['type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'edit' => [
                        'form' => [
                               'tentang-kami.desc_prestasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'desc_prestasi'
                                ],
                                'tentang-kami.desc_prestasi.title',
                                'tentang-kami.desc_prestasi.intro'=>['type'=>'textarea'],
                                'tentang-kami.desc_prestasi.description'=>['type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'delete'

                
        ]
];