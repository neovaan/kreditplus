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
                                'pengajuan.form_pengajuan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Field',
                                        'section' => 'form_pengajuan'
                                ],
                                'pengajuan.form_pengajuan.field1',
                                'pengajuan.form_pengajuan.field2',
                                'pengajuan.form_pengajuan.field3',
                                'pengajuan.form_pengajuan.field4',
                                'pengajuan.form_pengajuan.field5',
                                'pengajuan.form_pengajuan.field6',
                                'pengajuan.form_pengajuan.field7',
                                'pengajuan.form_pengajuan.field8',
                                'pengajuan.form_pengajuan.field9',
                                'pengajuan.form_pengajuan.field10'
                        ]
                ],
                'edit' => [
                        'form' => [
                                'pengajuan.form_pengajuan.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Field',
                                        'section' => 'form_pengajuan'
                                ],
                                'pengajuan.form_pengajuan.field1',
                                'pengajuan.form_pengajuan.field2',
                                'pengajuan.form_pengajuan.field3',
                                'pengajuan.form_pengajuan.field4',
                                'pengajuan.form_pengajuan.field5',
                                'pengajuan.form_pengajuan.field6',
                                'pengajuan.form_pengajuan.field7',
                                'pengajuan.form_pengajuan.field8',
                                'pengajuan.form_pengajuan.field9',
                                'pengajuan.form_pengajuan.field10'
                        ]
                ],
                'delete'

                
        ]
];