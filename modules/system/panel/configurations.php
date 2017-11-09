<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/13/2017
 * Time: 10:49 AM
 *
 * > Buka cmd (run as administrator)
 * > ketik --> netsh winsock reset --> enter
 * > ketik --> ipconfig /flushdns  --> enter
 * > restart computer
 * > coba lagi browsing, pasti sudah normal kembali
 */

return [
        'type' => 'configuration',
        'icon' => 'fa-gear',
        'actions' => [
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data'
                                ],
// Cms block
                                // 'cmsLogo' => [
                                //         'info' => 'Please use image in 145px X 54px dimension',
                                //         'file' => [
                                //                 'type' => 'image',
                                //                 'mimes' => ['png', 'jpg', 'jpeg', 'gif'],
                                //                 'max' => 200,
                                //                 'resize' => [
                                //                         'width' => 145,
                                //                         'height' => 70
                                //                 ],
                                //                 'preview' => true
                                //         ]
                                // ],
                                'cmsTitle' => [
                                        'type' => 'text'

                                ],
                                'cmsShortTitle' => [
                                        'type' => 'text',
                                        'length' => 2,
                                ],
                                'favicon' => [
                                        'info' => 'Please use image in 16px X 16px dimension',
                                        'file' => [
                                                'mimes' => ['png', 'ico'],
                                                'max' => 1024,
                                                'file-name' => 'favicon',
                                                'preview' => 16
                                        ]
                                ],
// Site block
                                'lang' => [
                                        'type' => 'select',
                                        'options' => [
                                                'en' => 'EN',
                                                'id' => 'ID'
                                        ]
                                ],
                                'siteLogo' => [
                                        'title' => 'Logo',
                                        'info' => 'Please use image in 160px X 35px dimension',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['png', 'ico'],
                                                'upload-dir' => 'site/uploads/logo',
                                                'max' => 1024,
                                                'resize' => [
                                                        'width' => 131,
                                                        'height' => 52
                                                ],
                                                'preview' => true
                                        ]
                                ],
                                'facebook'=>[
                                        'type'=>'text',
                                        'rules' => 'url',
                                ],
                                'instagram'=>[
                                        'type'=>'text',
                                        'rules' => 'url',
                                ],
                                'twitter'=>[
                                        'type'=>'text',
                                        'rules' => 'url',
                                ],
                                'linkedin'=>[
                                        'type'=>'text',
                                        'rules' => 'url',
                                ],
                                // 'siteMetaTitle' => [
                                //         'type' => 'text',
                                //         'rules' => 'required|max:150',
                                //         'title' => 'Meta Title',
                                //         'notnull'=>false
                                // ],
                                // 'siteMetaDescription' => [
                                //         'type' => 'textarea',
                                //         'title' => 'Meta Description',
                                //         'notnull'=>false
                                // ],
                                'siteCopyright' => [
                                        'type' => 'text',
                                        'length' => 100
                                ],
                                'siteOnline' => [
                                        'type' => 'select',
                                        'options' => ['Offline', 'Online'],
                                ],
                                'siteCache' => [
                                        'type' => 'select',
                                        'info' => 'Disable browser for trying to caching your website. This is '
                                                . 'helpfull when you updating your site and need immediate change. But '
                                                . 'this will slowing down your site loading on client browser'
                                ]
                        ]
                ]
        ]

];