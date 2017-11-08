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
                                'home.testimoni_user.nama',
                                'home.testimoni_user.pekerjaan',
                                'home.testimoni_user.pesan'
                                
                        ]
                ],
                'edit' => [
                        'form' => [
                                'home.testimoni_user.nama',
                                'home.testimoni_user.pekerjaan',
                                'home.testimoni_user.pesan'
                        ]
                ],
                'delete'

                
        ]
];