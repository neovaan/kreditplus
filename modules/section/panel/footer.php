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
                                'image' => ['modifier' => 'thumb:30%', 'style' => 'width:30%'],'txt1','txt2'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.footer.txt1',
                                'section.footer.txt2',
                                'section.footer.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ]
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.footer.txt1',
                                'section.footer.txt2',
                                'section.footer.image' => [
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 3072,
                                                'upload-dir' => 'site/uploads/banners'
                                        ],
                                        'info' => 'Image recommendation size: 1920px width',
                                ]
                        ]
                ],
                'delete'

                
        ]
];