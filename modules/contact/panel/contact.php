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
                               'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
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
                                'contact.contact.nm_persh'=>['title'=>'Nama Perusahaan'],
                                'contact.contact.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'contact.contact.field2'=>['title'=>'Field Nama'],
                                'contact.contact.field1'=>['title'=>'Field No Telephone'],
                                'contact.contact.field3'=>['title'=>'Field Email'],
                                'contact.contact.field4'=>['title'=>'Field Pesan'],

                                'contact.contact.lat'=>['title'=>'Latitude'],
                                'contact.contact.long'=>['title'=>'Longtitude'],
                                'contact.contact.title_name'=>['title'=>'Title Name'],
                                'contact.contact.contact_name'=>['title'=>'Contact'],
                                'contact.contact.icon'=>[
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slidess'
                                        ],
                                        'info' => 'Image recommendation size: 60px width 60px height'
                                ]

                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
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
                                'contact.contact.nm_persh',
                                'contact.contact.description' => [ 'type'=>'textarea','class'=>'ckeditor'],
                                'contact.contact.field2'=>['title'=>'Field Nama'],
                                'contact.contact.field1'=>['title'=>'Field No Telephone'],
                                'contact.contact.field3'=>['title'=>'Field Email'],
                                'contact.contact.field4'=>['title'=>'Field Pesan'],
                                'contact.contact.lat'=>['title'=>'Latitude'],
                                'contact.contact.long'=>['title'=>'Longtitude'],
                                'contact.contact.title_name'=>['title'=>'Title Name'],
                                'contact.contact.contact_name'=>['title'=>'Contact'],
                                'contact.contact.icon'=>[
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/slidess'
                                        ],
                                        'notnull'=>false,
                                        'ignored'=>true,
                                        'info' => 'Image recommendation size: 60px width 60px height'
                                ]
                        ]
                ],
                'delete'

                
        ]
];