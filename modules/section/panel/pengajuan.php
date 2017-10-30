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
                                'persyaratan',
                                'karyawan','wiraswasta','profesional'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'section.pengajuan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Content',
                                        'section'=>'pengajuan'
                                ],
                                'section.pengajuan.persyaratan',
                                'section.pengajuan.karyawan' =>[
                                        'type' => 'select'
                                ],
                                'section.pengajuan.wiraswasta' =>[
                                        'type' => 'select'
                                ],
                                'section.pengajuan.profesional'=>[
                                        'type' => 'select'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'section.pengajuan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Content',
                                        'section' => 'pengajuan'
                                ],
                                'section.pengajuan.persyaratan',
                                'section.pengajuan.karyawan' =>[
                                        'type' => 'select'
                                ],
                                'section.pengajuan.wiraswasta' =>[
                                        'type' => 'select'
                                ],
                                'section.pengajuan.profesional'=>[
                                        'type' => 'select'
                                ]
                        ]
                ],
                'delete'

                
        ]
];