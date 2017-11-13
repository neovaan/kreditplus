<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 1/17/2017
 * Time: 2:09 PM
 */ ?>
@extends('webarq::themes.admin-lte.layout.index')
<script type="text/javascript">
    var idx = "{{Request::segment(7)}}";
    var uri6 = "{{Request::segment(6)}}";
    var uri5 = "{{Request::segment(5)}}";
</script>
@push('view-script')
<script src="{{URL::asset('vendor/webarq/default/js/form.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.7.3/full-all/ckeditor.js"></script>

<script>
    $(function () {
        CKEDITOR.config.contentsCss = "{{ URL::asset('vendor/webarq/default/css/ckeditor.css') }}";
        CKEDITOR.config.filebrowserImageUploadUrl='/imagex';
        CKEDITOR.config.image_previewText = CKEDITOR.tools.repeat(' ',100);
        
        CKEDITOR.config.filebrowserImageBrowseUrl = "{{URL('vendor/webarq/admin-lte/plugins/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images')}}";

    });
    function select_image(url) {
        var o = opener.document.getElementById("88_textInput");
        o.value = url;
        self.close();
    }
   
</script>
 
@if ('create' === $strAction)
    <script>
        $(function () {
            if ($('form input[type="text"].sequence').length) {
                var form = $('form input[type="text"].sequence').closest('form');
                var group = $('form input[type="text"].sequence').attr('grouping-column');

                if ('string' === typeof group) {
                    $.each($.parseJSON(group), function (e, c) {
                        if ('select' === $('[name="' + e + '"]').prop('tagName').toLowerCase()) {
                            $('[name="' + e + '"]').change(sequenceAjax);
                        }
                    });
                }

                sequenceAjax();

                function sequenceAjax() {
                    var data = form.serializeArray();
                    data.push({
                        name: 'varAction',
                        value: 'create'
                    });
                    data.push({
                        name: 'varSecret',
                        value: $('form input[type="text"].sequence').attr('data-table')
                    });


                    $.ajax( {
                        type: "GET",
                        url: baseUrl + '/helper/form/sequence/{{ $strModule }}/{{ $strPanel }}',
                        data: data,
                        success: function( response ) {
                            if ('false' !== response) {
                                $('form input[type="text"].sequence').val(response);
                            }
                        }
                    } );
                }
            }
        });
    </script>
@endif
@if(Request::segment(5) == "contact" && Request::segment(6) == "cabang")
    <script>
        $(function(){
            if($('[name="kota"]').length){
                var token_kota = "{{csrf_token()}}";
                $('[name="kota"]').html('');
                if(idx == ""){
                    $('[name="provinsi"]').prepend('<option value="" selected>--Pilih Provinsi--</option>');
                }else{
                    setTimeout(function(){
                        $('[name="provinsi"]').trigger('change');
                        $.post("{{URL::to('setkota')}}",{id:idx,_token:token_kota},function(data){
                            $('[name="kota"] option').each(function(k,v){
                                if($(v).val() == data){
                                    $(v).prop('selected',true);
                                }
                            });
                        });
                    },2000);
                }
                $('[name="provinsi"]').change(function(){
                    var id_prop = $(this).val();
                    if(id_prop != ""){
                        $.post("{{URL::to('kota')}}",{id:id_prop,_token:token_kota}, function(data){
                            if(data){
                                $('[name="kota"]').html(data);
                            }
                        });
                    }else{
                         $('[name="kota"]').html("");
                    }
                });
            }
        });
    </script>
@endif
@endpush

