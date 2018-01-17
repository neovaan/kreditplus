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
                               'produk.content_produk.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'content_produk'
                                ],
                                'produk.content_produk.title',
                                'produk.content_produk.intro' => [ 'type'=>'textarea'],
                                'produk.content_produk.description' => [ 'type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'edit' => [
                        'form' => [
                                'produk.content_produk.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'content_produk'
                                ],
                                'produk.content_produk.title',
                                'produk.content_produk.intro' => [ 'type'=>'textarea'],
                                'produk.content_produk.description' => [ 'type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'delete'

                
        ]
];