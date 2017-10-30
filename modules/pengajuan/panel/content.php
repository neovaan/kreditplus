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
                                'pengajuan.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'pengajuan'
                                ],
                                'pengajuan.content.title',
                                'pengajuan.content.intro'=>['type'=>'textarea']
                        ]
                ],
                'edit' => [
                        'form' => [
                                'pengajuan.content.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'pengajuan'
                                ],
                                'pengajuan.content.title',
                                'pengajuan.content.intro'=>['type'=>'textarea']
                        ]
                ],
                'delete'

                
        ]
];