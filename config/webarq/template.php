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
                                'translate'=>['title','intro','txtbtn'],
                                'select'=>['image','image_phone','image_desktop','link']
                        ],
                        'panel'=>'slide',
                        'limit' => 2
                ],
                'simulasi'=>[
                    'name'=> 'Simulasi',
                        'view'=> 'simulasi',
                        'table' => [
                                'name' => 'simulasi',
                                'translate'=>['title','field1','field2','field3','field4','txt1','txtbtn','angsuran1','angsuran2','txt2']
                        ],
                        'panel'=>'simulasi',
                        'limit' => 1
                ],
                'sponsor'=>[
                        'name'=> 'Sponsor',
                        'view'=> 'sponsor',
                        'table' => [
                                'name' => 'sponsor',
                                'select'=>['link','logo']
                        ],
                        'panel'=>'sponsor'
                ],
                'layanan'=>[
                        'name'=> 'Layanan',
                        'view'=> 'layanan',
                        'table' => [
                                'name' => 'layanan',
                                'translate'=>['title','description','intro','txt1','txt2','txt3','txt4','txt5'],
                                'select'=>['image1','image2','image3','image4','image5']
                        ],
                        'panel'=>'layanan',
                        'limit' => 1
                ],
                'produk'=>[
                    'name'=> 'produk',
                        'view'=> 'produk',
                        'table' => [
                                'name' => 'produk',
                                'translate'=>['title','intro'],
                                'select'=>['image']
                        ],
                        'panel'=>'produk'
                ],
                'banner' => [
                        'name' => 'Banner',
                        'view' => 'tentang-kami.banner',
                        'table' => [
                                'name' => 'banner',
                                'select'=>['path','image_medium','image_small']
                        ],
                        'limit' => 1,
                        'panel' => 'banner'
                ], 
                'mini_banner' => [
                        'name' => 'Mini Banner',
                        'view' => 'footer_content',
                        'table' => [
                                'name' => 'mini_banner',
                                'translate'=>['txt','txtbtn'],
                                'select'=>['background','link']
                        ],
                        'limit' => 1,
                        'panel' => 'mini_banner'
                ], 

                'content' => [
                        'name' => 'Content',
                        'view' => 'tentang-kami.content',
                        'table' => [
                                'name' => 'content',
                                'translate'=>['intro','description','title'],
                                'select'=>['image1','image2']
                        ],
                        'panel' => 'content',
                        'limit' => 1    
                ],

                'visimisi'=> [
                        'name' => 'visimisi',
                        'view' => 'tentang-kami.visimisi',
                        'table' => [
                                'name' => 'visimisi',
                                'translate'=>['visi','misi','nilai','title','txt_visi','txt_misi','txt_nilai'],
                                'select'=>['img_visi','img_misi','img_nilai']
                        ],
                        'panel' => 'visi',
                        'limit' => 1    
                ],
                // 'management'=>[
                //         'name' => 'management',
                //         'view' => 'tentang-kami.management',
                //         'table' => [
                //                 'name' => 'management',
                //                 'translate'=>['title','description'],
                //                 'select'=>['image']
                //         ],
                //         'panel' => 'management',
                //         'limit' => 1  
                // ],
                // 'prestasi'=>[
                //         'name' => 'prestasi',
                //         'view' => 'tentang-kami.prestasi',
                //         'table' => [
                //                 'name' => 'prestasi',
                //                 'translate'=>['title','intro'],
                //                 'select'=>['image']
                //         ],
                //         'panel' => 'prestasi',
                //         'paginate' => 2,
                //         'limit'=>10 
                // ],
                // 'goodcorporategov'=>[
                //         'name' => 'Good Corporate Gov',
                //         'view' => 'tentang-kami.gcg',
                //         'table' => [
                //                 'name' => 'goodcorporategov',
                //                 'translate'=>['title','intro','description'],
                //                 'select'=>['image']
                //         ],
                //         'panel' => 'goodcorporategov',
                //         'limit' => 1 
                // ],
                'content_produk'=>[
                        'name' => 'Content Produk',
                        'view' => 'produk.content',
                        'table' => [
                                'name' => 'content_produk',
                                'translate'=>['title','intro','description']
                        ],
                        'panel' => 'content_produk',
                        'limit' => 1
                ],
                'tabel_pengajuan'=>[
                        'name' => 'Tabel Pengajuan',
                        'view' => 'produk.tabel_pengajuan',
                        'table' => [
                                'name' => 'tabel_pengajuan',
                                'translate'=>['persyaratan'],
                                'select'=>['wiraswasta','karyawan','profesional']
                        ],
                        'panel' => 'tabel_pengajuan',
                        'limit' => 5
                ],
                'content_kreditplus'=>[
                        'name' => 'Content Kreditplus',
                        'view' => 'kreditplus.content',
                        'table' => [
                                'name' => 'content_kreditplus',
                                'translate'=>['description','title','intro'],
                                'select'=>['image']
                        ],
                        'panel' => 'content_kreditplus',
                        'limit' => 1
                ],
                'informasi'=>[
                        'name' => 'Informasi',
                        'view' => 'informasi.berita',
                        'table' => [
                                'name' => 'informasi',
                                'translate'=>['description','title','intro','permalink'],
                                'select'=>['image','type'],
                                'sequence'=>'informasi.id:desc'
                        ],
                        'paginate'=>5,
                        'panel' => 'informasi',
                        'limit' => 10
                ],
                'contact'=>[
                        'name' => 'Contact',
                        'view' => 'contact.contact',
                        'table' => [
                                'name' => 'contact',
                                'translate'=>['description','title','field1','field2','field3','field4'],
                                'select'=>['alamat','telp','email','fax','icon','nm_persh','lat','long','title_name','contact_name']
                        ],
                        'panel' => 'contact',
                        'limit' => 1
                ],
                'pengajuan'=>[
                        'name' => 'Pengajuan Kredit',
                        'view' => 'description',
                        'table' => [
                                'name' => 'content',
                                'translate'=>['intro','title','description']
                        ],
                        'panel' => 'pengajuan'
               ],
               'karir'=>[
                        'name' => 'Karir',
                        'view' => 'karir',
                        'table' => [
                                'name' => 'karir',
                                'translate'=>['description'],
                                'select'=>['title_job','penempatan'],                                
                                'sequence'=>'karir.id:desc'
                        ],
                        'limit'=>10,
                        'panel' => 'karir'
               ],
               'content-karir'=>[
                        'name' => 'Karir Content',
                        'view' => 'produk.content',
                        'table' => [
                                'name' => 'content_karir',
                                'translate'=>['title','intro','description','txt1','txt2'],
                                'select'=>['email']
                        ],
                        'limit'=>1,
                        'panel' => 'content-karir'
               ],
               'kreditplus_karir'=>[
                        'name' => 'Kreditplus-Karir',
                        'view' => 'karir.tes',
                        'table' => [
                                'name' => 'kreditplus_karir',
                                'translate'=>['title','intro','description','txt2','txt1']
                        ],
                        'limit'=>1,
                        'panel' => 'kreditplus_karir'
               ],
                'cabang'=>[
                        'name' => 'Kantor Cabang',
                        'view' => 'contact.cabang',
                        'table' => [
                                'name' => 'cabang',
                                'select'=>['kota','alamat','fax','email','telp']                        ],
                        'limit'=>100,
                 ],
                 'form_pengajuan'=>[
                        'name' => 'Form Pengajuan',
                        'view' => 'form_pengajuan',
                        'table' => [
                                'name' => 'form_pengajuan',
                                'translate'=>['field1','field2','field3','field4','field5','field6','field7','field8','field9','field10','field11','field12','field13'],
                                'select'=>['captcha']
                        ],
                        'limit'=>1
                 ],
                 'desc_prestasi'=>[
                        'name' => 'Description Prestasi',
                        'view' => 'produk.content',
                        'table' => [
                                'name' => 'desc_prestasi',
                                'translate'=>['title','intro','description']
                        ],
                        'limit'=>1
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