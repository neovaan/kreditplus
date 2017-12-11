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
                                'simulasi.simulasi.field1'=>['title'=>'Field Tenor'],
                                'simulasi.simulasi.field2'=>['title'=>'Field Harga'],
                                'simulasi.simulasi.field3'=>['title'=>'Field Uang Muka'],
                                'simulasi.simulasi.field4'=>['title'=>'Field Bunga'],
                                'simulasi.simulasi.txt1'=>['title'=>'Text Admin Fee'],
                                'simulasi.simulasi.jml_admin'=>['title'=>'Jumlah Admin Fee'],
                                'simulasi.simulasi.txtbtn'=>['title'=>'Text Button'],
                                'simulasi.simulasi.angsuran1'=>['title'=>'Text Angsuran'],
                                'simulasi.simulasi.angsuran2'=>['title'=>'Text Anguran Awal'],
                                'simulasi.simulasi.txt2'=>['title'=>'Text Note']
                               
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
                               'simulasi.simulasi.field1'=>['title'=>'Field Tenor'],
                                'simulasi.simulasi.field2'=>['title'=>'Field Harga'],
                                'simulasi.simulasi.field3'=>['title'=>'Field Uang Muka'],
                                'simulasi.simulasi.field4'=>['title'=>'Field Bunga'],
                                'simulasi.simulasi.txt1'=>['title'=>'Text Admin Fee'],
                                 'simulasi.simulasi.jml_admin'=>['title'=>'Jumlah Admin Fee'],
                                'simulasi.simulasi.txtbtn'=>['title'=>'Text Button'],
                                'simulasi.simulasi.angsuran1'=>['title'=>'Text Angsuran'],
                                'simulasi.simulasi.angsuran2'=>['title'=>'Text Anguran Awal'],
                                'simulasi.simulasi.txt2'=>['title'=>'Text Note']
                        ]
                ],
                'delete'

                
        ]
];