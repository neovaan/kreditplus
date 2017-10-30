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
                               'produk.content-produk.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'content-produk'
                                ],
                                'produk.content-produk.title',
                                'produk.content-produk.intro' => [ 'type'=>'textarea'],
                                'produk.content-produk.description' => [ 'type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'edit' => [
                        'form' => [
                                'produk.content-produk-produk.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'content-produk'
                                ],
                                'produk.content-produk-produk.title',
                                'produk.content-produk-produk.intro' => [ 'type'=>'textarea'],
                                'produk.content-produk-produk.description' => [ 'type'=>'textarea','class'=>'ckeditor']
                        ]
                ],
                'delete'

                
        ]
];