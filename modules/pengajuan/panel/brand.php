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
                                'produk.title as produk' => [
                                    'on'=>['prdk.id', 'brnd.produk_id'],
                                    'title'=>'Produk'
                                ],
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
                                'pengajuan.brand.title',
                                'pengajuan.brand.sequence'
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
                                'pengajuan.brand.title',
                                'pengajuan.brand.sequence'
                        ]
                ],
                'delete'

                
        ]
];