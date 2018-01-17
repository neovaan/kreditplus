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
                                'alamat','telp','fax','email'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                
                                'section.contact.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'contact'
                                ],
                                'section.contact.alamat'=>['type'=>'textarea'],
                                'section.contact.telp',
                                'section.contact.fax',
                                'section.contact.email'
                        ]
                ],
                'edit' => [
                        'form' => [
                                 'section.contact.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Banner',
                                        'section' => 'contact'
                                ],
                                'section.contact.alamat'=>['type'=>'textarea'],
                                'section.contact.telp',
                                'section.contact.fax',
                                'section.contact.email'
                        ]
                ],
                'delete'

                
        ]
];