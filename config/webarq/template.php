<?php
/**
 * Created by PhpStorm
 * Date: 15/02/2017
 * Time: 21:29
 * Author: Daniel Simangunsong
 *
 * Calm seas, never make skill full sailors
 */

return [
        'names' => [
               
                // 'tentang-kami' => [
                //         'name' => 'Tentang Kami'
                // ],
                // 'produk' => [
                //         'name' => 'Produk'
                // ],
                // 'kreditplus' => [
                //         'name' => 'kreditplus'
                // ],
                // 'contact' => [
                //         'name' => 'contact'
                // ],
                // 'home' => [
                //         'name' => 'home'
                // ],
                // 'simulasi' => [
                //         'name' => 'Simulasi'
                // ],
                // 'pengajuan_kredit' => [
                //         'name'=> 'pengajuan_kredit'
                // ],
                // 'karir' => [
                //         'name' => 'Karir'
                // ],
                'base' => [
                        'name' => 'Home'
                ],
                'tentang-kami' => [
                        'name' => 'Tentang Kami'
                ],
                'visimisi'=>[
                        'name' => 'Visi Misi'
                ],
                'management'=>['name'=>'management'],
                'prestasi'=>['name'=>'Prestasi'],
                'goodcorporategov'=>['name'=>'Good Corporate Gov'],
                'kreditplus'=>['name'=>'Kreditplus'],
                'produk'=>['name'=>'Produk'],
                'informasi'=>['name'=>'informasi'],
                'contact' => [
                        'name' => 'Contact'
                ],
                'simulasi'=> [
                        'name' => 'Simulasi'
                ],
                'pengajuan'=> [
                        'name' => 'Pengajuan Kredit'
                ],
                'karir'=> [
                        'name' => 'Karir'
                ],
                'kreditpluskarir'=> [
                        'name' => 'Kreditplus Karir'
                ]

        ]
        
        ,'sections' => [
            
                'slides'=>[
                    'name'=> 'slides',
                        'view'=> 'slide',
                        'table' => [
                                'name' => 'slides',
                                'select'=>['title','intro','image']
                        ],
                        'panel'=>'slide',
                        'limit' => 2
                ],
                'layanan'=>[
                        'name'=> 'Layanan',
                        'view'=> 'layanan',
                        'table' => [
                                'name' => 'layanan',
                                'select'=>['title','description','intro','image1','image2']
                        ],
                        'panel'=>'layanan',
                        'limit' => 1
                ],
                'produk'=>[
                    'name'=> 'produk',
                        'view'=> 'produk',
                        'table' => [
                                'name' => 'produk',
                                'select'=>['title','intro','image']
                        ],
                        'panel'=>'produk'
                ],
                'banner' => [
                        'name' => 'Banner',
                        'view' => 'tentang-kami.banner',
                        'table' => [
                                'name' => 'banner',
                                'select'=>['path']
                        ],
                        'limit' => 1,
                        'panel' => 'banner'
                ], 

                'content' => [
                        'name' => 'Content',
                        'view' => 'tentang-kami.content',
                        'table' => [
                                'name' => 'content',
                                'select'=>['intro','description','title','image1','image2']
                        ],
                        'panel' => 'content',
                        'limit' => 1    
                ],

                'visimisi'=> [
                        'name' => 'visimisi',
                        'view' => 'tentang-kami.visimisi',
                        'table' => [
                                'name' => 'visimisi',
                                'select'=>['visi','misi','nilai']
                        ],
                        'panel' => 'visi',
                        'limit' => 1    
                ],
                'management'=>[
                        'name' => 'management',
                        'view' => 'tentang-kami.management',
                        'table' => [
                                'name' => 'management',
                                'select'=>['image','title','description']
                        ],
                        'panel' => 'management',
                        'limit' => 1  
                ],
                'prestasi'=>[
                        'name' => 'prestasi',
                        'view' => 'tentang-kami.prestasi',
                        'table' => [
                                'name' => 'prestasi',
                                'select'=>['image','title','intro']
                        ],
                        'panel' => 'prestasi',
                        'limit' => 9 
                ],
                'goodcorporategov'=>[
                        'name' => 'Good Corporate Gov',
                        'view' => 'tentang-kami.gcg',
                        'table' => [
                                'name' => 'goodcorporategov',
                                'select'=>['image','title','intro','description']
                        ],
                        'panel' => 'goodcorporategov',
                        'limit' => 1 
                ],
                'content-produk'=>[
                        'name' => 'Content Produk',
                        'view' => 'produk.content',
                        'table' => [
                                'name' => 'content-produk',
                                'select'=>['title','intro','description']
                        ],
                        'panel' => 'content-produk',
                        'limit' => 1
                ],
                'tabel_pengajuan'=>[
                        'name' => 'Tabel Pengajuan',
                        'view' => 'produk.tabel_pengajuan',
                        'table' => [
                                'name' => 'tabel_pengajuan',
                                'select'=>['persyaratan','wiraswasta','karyawan','profesional']
                        ],
                        'panel' => 'tabel_pengajuan',
                        'limit' => 5
                ],
                'content-kreditplus'=>[
                        'name' => 'Content Kreditplus',
                        'view' => 'kreditplus.content',
                        'table' => [
                                'name' => 'content-kreditplus',
                                'select'=>['description','title','intro','image']
                        ],
                        'panel' => 'content-kreditplus',
                        'limit' => 1
                ],
                'informasi'=>[
                        'name' => 'Informasi',
                        'view' => 'informasi.berita',
                        'table' => [
                                'name' => 'informasi',
                                'select'=>['description','title','intro','image','id','type']
                        ],
                        'panel' => 'informasi',
                        'limit' => 10
                ],
                'contact'=>[
                        'name' => 'Contact',
                        'view' => 'contact.contact',
                        'table' => [
                                'name' => 'contact',
                                'select'=>['description','title','alamat','telp','email','fax']
                        ],
                        'panel' => 'contact',
                        'limit' => 1
                ],
                'pengajuan'=>[
                        'name' => 'Pengajuan Kredit',
                        'view' => 'description',
                        'table' => [
                                'name' => 'content',
                                'select'=>['intro','title','description']
                        ],
                        'panel' => 'pengajuan'
               ],
               'karir'=>[
                        'name' => 'Karir',
                        'view' => 'karir',
                        'table' => [
                                'name' => 'karir',
                                'select'=>['title_job','penempatan','description']
                        ],
                        'limit'=>10,
                        'panel' => 'karir'
               ],
               // 'content-karir'=>[
               //          'name' => 'Karir Content',
               //          'view' => 'karir',
               //          'table' => [
               //                  'name' => 'content',
               //                  'select'=>['title','intro','description']
               //          ],
               //          'limit'=>1,
               //          'panel' => 'content'
               // ],
               'kreditplus_karir'=>[
                        'name' => 'Kreditplus-Karir',
                        'view' => 'karir.tes',
                        'table' => [
                                'name' => 'kreditplus_karir',
                                'select'=>['title','intro','description']
                        ],
                        'limit'=>1,
                        'panel' => 'kreditplus_karir'
               ],
                'cabang'=>[
                        'name' => 'Kantor Cabang',
                        'view' => 'contact.cabang',
                        'table' => [
                                'name' => 'cabang',
                                'select'=>['kota','alamat','fax','email','telp']
                        ],
                        'limit'=>100,
                 ]  
                // 'banner' => [
                //         'name' => 'Banner',
                //         'view' => 'banner',
                //         'table' => [
                //                 'name' => 'banner',
                //                 'select'=>['path']
                //         ],
                //         'limit' => 1,
                //         'panel' => 'banner'
                // ],      
               
                // 'content' => [
                //         'name' => 'Content',
                //         'view' => 'content',
                //         'table' => [
                //                 'name' => 'content',
                //                 'select'=>['intro','description','title','img_left','img_right','img_information']
                //         ],
                //         'panel' => 'content',
                //         'limit' => 1    
                // ],
                // 'pengajuan' => [
                //         'name' => 'Tabel Pengajuan',
                //         'view' => 'pengajuan',
                //         'table' => [
                //                 'name' => 'pengajuan',
                //                 'select'=>['persyaratan','wiraswasta','karyawan','profesional']
                //         ],
                //         'panel' => 'pengajuan',
                //         'limit' => 10
                // ],
                // 'informasi' => [
                //         'name' => 'Informasi',
                //         'view' => 'informasi',
                //         'table' => [
                //                 'name' => 'informasi',
                //                 'select'=>['image','intro','title','id','type']
                //         ],
                //         'panel' => 'informasi','limit'=>4
                // ],
                // 'contact' => [
                //         'name' => 'Contact',
                //         'view' => 'contact',
                //         'table' => [
                //                 'name' => 'contact',
                //                 'select'=>['alamat','telp','fax','email']
                //         ],
                //         'panel' => 'contact',
                //         'limit' => 1
                // ],
                //  'pengajuan_kredit'=>[
                //         'name'=> 'pengajuan_kredit',
                //         'view'=> 'pengajuan_kredit',
                //         'table' => [
                //                 'name' => 'pengajuan_kredit',
                //                 'select'=>['img1','img2','img3','img4','title1','title2','title3','title4']
                //         ],
                //         'panel'=>'pengajuan_kredit'
                // ],
                // 'simulasi'=>[
                //         'name'=> 'Simulasi',
                //         'view'=> 'simulasi',
                //         'panel'=>'simulasi'
                // ],
                // 'karir'=>[
                //         'name'=> 'karir',
                //         'view'=> 'karir',
                //         'table' => [
                //                 'name' => 'karir',
                //                 'select'=>['title_job','penempatan','description']
                //         ],
                //         'panel'=>'karir',
                //         'limit'=>10
                // ],
                //  'visimisi'=>[
                //         'name' => 'Visi Misi',
                //         'view' => 'visimisi',
                //         'table' => [
                //                 'name' => 'visimisi',
                //                 'select'=>['visi','misi','nilai']
                //         ],
                //         'panel' => 'visimisi',
                //         'limit'=>1
                // ],
                // 'desc_prestasi'=>[
                //         'name'=> 'Description Prestasi',
                //         'view'=> 'description',
                //         'table' => [
                //                 'name' => 'desc_prestasi',
                //                 'select'=>['title','desc']
                //         ],
                //         'panel'=>'desc_prestasi',
                //         'limit' => 1
                // ],
                //  'prestasi'=>[
                //         'name'=> 'prestasi',
                //         'view'=> 'prestasi',
                //         'table' => [
                //                 'name' => 'prestasi',
                //                 'select'=>['title','intro','image']
                //         ],
                //         'panel'=>'prestasi',
                //         'limit' => 9
                // ],
                // 'slide_home'=>[
                //     'name'=> 'slide_home',
                //         'view'=> 'slide_home',
                //         'table' => [
                //                 'name' => 'slide_home',
                //                 'select'=>['title','desc','image']
                //         ],
                //         'panel'=>'slide_home',
                //         'limit' => 2
                // ],
                // 'service_home'=>[
                //     'name'=> 'service_home',
                //         'view'=> 'service_home',
                //         'table' => [
                //                 'name' => 'service_home',
                //                 'select'=>['title','description','intro','img1','img2']
                //         ],
                //         'panel'=>'service_home',
                //         'limit' => 1
                // ],
                // 'produk'=>[
                //     'name'=> 'produk',
                //         'view'=> 'produk_home',
                //         'table' => [
                //                 'name' => 'produk',
                //                 'select'=>['title','description','image']
                //         ],
                //         'panel'=>'produk',
                //         'limit' => 4
                // ],
                // 'banner'=>[
                //     'name'=> 'Banner',
                //         'view'=> 'banner',
                //         'table' => [
                //                 'name' => 'banner',
                //                 'select'=>['path']
                //         ],
                //         'panel'=>'banner',
                //         'limit' => 4
                // ],
                // 'layanan'=>[
                //         'name'=> 'Layanan',
                //         'view'=> 'service_home',
                //         'table' => [
                //                 'name' => 'layanan',
                //                 'select'=>['title','description','intro','img1','img2']
                //         ],
                //         'panel'=>'layanan',
                //         'limit' => 1
                // ]
                // 'informasi_home' =>[
                //     'name'=> 'informasi_home',
                //     'view'=> 'informasi_home',
                //     'table' => [
                //             'name' => 'informasi',
                //             'select'=>['image','intro','title','id','type']
                //     ]
                // ]
                // 'footer_content' => [
                //         'name' => 'Footer Content',
                //         'view' => 'footer_content'
                // ],
                // 'submenu_content'=>[
                //                 'name'=> 'Submenu Content',
                //                 'view'=> 'submenu_content',
                //                 'panel'=>'submenu_content'
                // ],
                // 'simulasi'=>[
                //         'name'=> 'Simulasi',
                //         'view'=> 'simulasi',
                //         'panel'=>'simulasi'
                // ],
               
                // 'karir'=>[
                //         'name'=> 'karir',
                //         'view'=> 'karir',
                //         'table' => [
                //                 'name' => 'karir',
                //                 'select'=>['title_job','penempatan','description']
                //         ],
                //         'panel'=>'karir',
                //         'limit'=>10
                // ],
                // 'kreditplus_karir'=>[
                //         'name'=> 'kreditplus_karir',
                //         'view'=> 'kreditplus_karir',
                //         'table' => [
                //                 'name' => 'kreditplus_karir',
                //                 'select'=>['title','intro','description']
                //         ],
                //         'panel'=>'kreditplus_karir'
                // ],
                // 'prestasi'=>[
                //         'name'=> 'prestasi',
                //         'view'=> 'submenu_content',
                //         'table' => [
                //                 'name' => 'prestasi',
                //                 'select'=>['title','intro','image']
                //         ],
                //         'panel'=>'prestasi',
                //         'limit' => 9
                // ],
                // 'detil_informasi'=>[
                //         'name' => 'Detil Informasi',
                //         'view' => 'detil_informasi',
                //         'table' => [
                //                 'name' => 'informasi',
                //                 'select'=>['image','intro','title','description','id']
                //         ],
                //         'panel' => 'informasi'
                // ],
                // 'visimisi'=>[
                //         'name' => 'Visi Misi',
                //         'view' => 'visimisi',
                //         'table' => [
                //                 'name' => 'visimisi',
                //                 'select'=>['visi','misi','nilai']
                //         ],
                //         'panel' => 'visimisi',
                //         'limit'=>1
                // ]
               
        ],                
        'modals' => [
                'default' => 'Are you sure you want to do this?',
                'delete' => 'This action will remove selected item from database, and cannot be undone. Do you want to continue ?',
        ]
];