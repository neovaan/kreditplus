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
                                'contact.contact.field1',
                                'contact.contact.field2',
                                'contact.contact.field3',
                                'contact.contact.field4',

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
                                'contact.contact.field1',
                                'contact.contact.field2',
                                'contact.contact.field3',
                                'contact.contact.field4',
                        ]
                ],
                'delete'

                
        ]
];