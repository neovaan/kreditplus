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
                                'pengajuan.area.title',
                                'pengajuan.area.sequence'
                        ]
                ],
                'edit' => [
                        'form' => [
                                'pengajuan.area.title',
                                'pengajuan.area.sequence'
                        ]
                ],
                'delete'

                
        ]
];