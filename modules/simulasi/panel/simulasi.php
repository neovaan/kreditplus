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
                               'simulasi.simulasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'simulasi'
                                ],
                                'simulasi.simulasi.title',
                                'simulasi.simulasi.field1',
                                'simulasi.simulasi.field2',
                                'simulasi.simulasi.field3',
                                'simulasi.simulasi.field4',
                                'simulasi.simulasi.txt1',
                                'simulasi.simulasi.txtbtn',
                                'simulasi.simulasi.angsuran1',
                                'simulasi.simulasi.angsuran2',
                                'simulasi.simulasi.txt2',
                               
                        ]
                ],
                'edit' => [
                        'form' => [
                                'simulasi.simulasi.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'simulasi'
                                ],
                                'simulasi.simulasi.title',
                                'simulasi.simulasi.field1',
                                'simulasi.simulasi.field2',
                                'simulasi.simulasi.field3',
                                'simulasi.simulasi.field4',
                                'simulasi.simulasi.txt1',
                                'simulasi.simulasi.txtbtn',
                                'simulasi.simulasi.angsuran1',
                                'simulasi.simulasi.angsuran2',
                                'simulasi.simulasi.txt2',
                        ]
                ],
                'delete'

                
        ]
];