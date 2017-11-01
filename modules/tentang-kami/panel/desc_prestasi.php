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
                                'tentang-kami.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'desc_prestasi'
                                ],
                                'tentang-kami.content.title',
                                'tentang-kami.content.intro'=>['type'=>'textarea'],
                                'tentang-kami.content.description'=>['type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'edit' => [
                        'form' => [
                               'tentang-kami.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'desc_prestasi'
                                ],
                                'tentang-kami.content.title',
                                'tentang-kami.content.intro'=>['type'=>'textarea'],
                                'tentang-kami.content.description'=>['type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'delete'

                
        ]
];