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
                                'nama',
                                'alamat','email'
                        ]
                ]
        ],
        'actions' => [
                'delete',
                'export'=>[
                        'placement'=>'header'
                ],
                'view'=>[
                        'permalink'=>true
                ]
                
        ]
];