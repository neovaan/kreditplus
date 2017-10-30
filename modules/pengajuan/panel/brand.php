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
                                'pengajuan.brand.produk_id' => [
                                        'type' => 'select table',
                                        'title' => 'Menu',
                                        'sources' => [
                                               'table' => 'produk',
                                               'column' => ['id', 'title']
                                        ]
                                ],
                                'pengajuan.brand.title'
                        ]
                ],
                'edit' => [
                        'form' => [
                                'pengajuan.brand.produk_id' => [
                                        'type' => 'select table',
                                        'title' => 'Menu',
                                         'sources' => [
                                               'table' => 'produk',
                                               'column' => ['id', 'title']
                                        ]
                                ],
                                'pengajuan.brand.title'
                        ]
                ],
                'delete'

                
        ]
];