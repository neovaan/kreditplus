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
                                'title','fax','email','telp'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                               'contact.contact.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'contact'
                                ],
                                'contact.contact.telp',
                                'contact.contact.fax',
                                'contact.contact.email',
                                'contact.contact.alamat' => ['type'=>'textarea'],
                                'contact.contact.title',
                                'contact.contact.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'contact.contact.field2'=>['title'=>'Field Nama'],
                                'contact.contact.field1'=>['title'=>'Field No Telephone'],
                                'contact.contact.field3'=>['title'=>'Field Email'],
                                'contact.contact.field4'=>['title'=>'Field Pesan']

                        ]
                ],
                'edit' => [
                        'form' => [
                                'contact.contact.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'contact'
                                ],
                                'contact.contact.telp',
                                'contact.contact.fax',
                                'contact.contact.email',
                                'contact.contact.alamat' => ['type'=>'textarea'],
                                'contact.contact.title',
                                'contact.contact.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'contact.contact.field2'=>['title'=>'Field Nama'],
                                'contact.contact.field1'=>['title'=>'Field No Telephone'],
                                'contact.contact.field3'=>['title'=>'Field Email'],
                                'contact.contact.field4'=>['title'=>'Field Pesan']
                        ]
                ],
                'delete'

                
        ]
];