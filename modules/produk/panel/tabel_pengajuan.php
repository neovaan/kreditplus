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
                                'persyaratan','karyawan','wiraswasta','profesional'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                               'produk.tabel_pengajuan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'tabel_pengajuan'
                                ],
                                'produk.tabel_pengajuan.persyaratan',
                                'produk.tabel_pengajuan.karyawan'=>[
                                    'type'=>'select'
                                ],
                                'produk.tabel_pengajuan.wiraswasta'=>[
                                    'type'=>'select'
                                ],
                                'produk.tabel_pengajuan.profesional'=>[
                                    'type'=>'select'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'produk.tabel_pengajuan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'tabel_pengajuan'
                                ],
                                'produk.tabel_pengajuan.persyaratan',
                                'produk.tabel_pengajuan.karyawan'=>[
                                    'type'=>'select'
                                ],
                                'produk.tabel_pengajuan.wiraswasta'=>[
                                    'type'=>'select'
                                ],
                                'produk.tabel_pengajuan.profesional'=>[
                                    'type'=>'select'
                                ]
                        ]
                ],
                'delete'

                
        ]
];