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
                                'field1'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'pengajuan.form_pengajuan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'form_pengajuan'
                                ],
                                'pengajuan.form_pengajuan.field1'=>['title'=>'Field Brand'],
                                'pengajuan.form_pengajuan.field2'=>['title'=>'Field Area'],
                                'pengajuan.form_pengajuan.field3'=>['title'=>'Text Data Pribadi'],
                                'pengajuan.form_pengajuan.field4'=>['title'=>'Field Nama'],
                                'pengajuan.form_pengajuan.field5'=>['title'=>'Field Alamat'],
                                'pengajuan.form_pengajuan.field6'=>['title'=>'Field No KTP'],
                                'pengajuan.form_pengajuan.field7'=>['title'=>'Field Telephone'],
                                'pengajuan.form_pengajuan.field8'=>['title'=>'Field Email'],
                                'pengajuan.form_pengajuan.field9'=>['title'=>'Text Apakah anda pernah menggunakan produk Adira Finance'],
                                'pengajuan.form_pengajuan.field10'=>['title'=>'Text Ya'],
                                'pengajuan.form_pengajuan.field11'=>['title'=>'Text Tidak'],
                                'pengajuan.form_pengajuan.field12'=>['title'=>'Field Pesan'],
                                'pengajuan.form_pengajuan.field13'=>['title'=>'Text Button'],
                        ]
                ],
                'edit' => [
                        'form' => [
                                 'pengajuan.form_pengajuan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu',
                                        'section' => 'form_pengajuan'
                                ],
                                'pengajuan.form_pengajuan.field1'=>['title'=>'Field Brand'],
                                'pengajuan.form_pengajuan.field2'=>['title'=>'Field Area'],
                                'pengajuan.form_pengajuan.field3'=>['title'=>'Text Data Pribadi'],
                                'pengajuan.form_pengajuan.field4'=>['title'=>'Field Nama'],
                                'pengajuan.form_pengajuan.field5'=>['title'=>'Field Alamat'],
                                'pengajuan.form_pengajuan.field6'=>['title'=>'Field No KTP'],
                                'pengajuan.form_pengajuan.field7'=>['title'=>'Field Telephone'],
                                'pengajuan.form_pengajuan.field8'=>['title'=>'Field Email'],
                                'pengajuan.form_pengajuan.field9'=>['title'=>'Text Apakah anda pernah menggunakan produk Adira Finance'],
                                'pengajuan.form_pengajuan.field10'=>['title'=>'Text Ya'],
                                'pengajuan.form_pengajuan.field11'=>['title'=>'Text Tidak'],
                                'pengajuan.form_pengajuan.field12'=>['title'=>'Field Pesan'],
                                'pengajuan.form_pengajuan.field13'=>['title'=>'Text Button'],
                        ]
                ],
                'delete'

                
        ]
];