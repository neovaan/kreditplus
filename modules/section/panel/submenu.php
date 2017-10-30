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
                                'title','permalink'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'section.submenu.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section'=>'banner'
                                ],
                                'section.submenu.title',
                                'section.submenu.permalink'
                        ]
                ],
                
                'delete'

                
        ]
];