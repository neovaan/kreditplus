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
                                'nama','pekerjaan','pesan'
                        ]
                ]
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'home.testimoni_user.nama',
                                'home.testimoni_user.pekerjaan',
                                'home.testimoni_user.pesan',
                                'home.testimoni_user.image_user'=>[
                                'file' => [
                                        'type' => 'image',
                                        'mimes' => ['jpg', 'jpeg', 'png'],
                                        'max' => 3072,
                                        'upload-dir' => 'site/uploads/slides'
                                ],
                                'info' => 'Image recommendation size: 60px width 60px height',
                                'title'=>'Image User'
                                ]
                                
                        ]
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'home.testimoni_user.nama',
                                'home.testimoni_user.pekerjaan',
                                'home.testimoni_user.pesan',
                                'home.testimoni_user.image_user'=>[
                                'file' => [
                                        'type' => 'image',
                                        'mimes' => ['jpg', 'jpeg', 'png'],
                                        'max' => 3072,
                                        'upload-dir' => 'site/uploads/slides'
                                ],
                                'info' => 'Image recommendation size: 60px width 60px height',
                                'title'=>'Image User',
                                'ignored'=>true,
                                'notnull'=>false
                                ]
                        ]
                ],
                'delete'

                
        ]
];