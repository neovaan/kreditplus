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
                                'informasi.type.title' => [
                                    'type' => 'text'
                                ]
                        ]
                ],
                'edit' => [
                         'form' => [
                                'informasi.type.title' => [
                                    'type' => 'text'
                                ]
                        ]
                ],
                'delete'

                
        ]
];