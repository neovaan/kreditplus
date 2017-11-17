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
                                'logo' => ['modifier' => 'thumb:20%', 'style' => 'width:20%']
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'home.sponsor.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'sponsor'
                                ],
                                'home.sponsor.link',
                                'home.sponsor.logo' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info'=>'Image recommendation: max height 55px'
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                               'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'home.sponsor.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Template',
                                        'section' => 'sponsor'
                                ],
                                'home.sponsor.link',
                                'home.sponsor.logo' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'ignored'=>true,
                                        'notnull'=>false,
                                        'info'=>'Image recommendation: max height 55px'

                                ]
                        ]
                ],
                'delete'

                
        ]
];