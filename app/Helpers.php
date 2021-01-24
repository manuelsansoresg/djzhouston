<?php

use App\Promotion;
use Illuminate\Support\Facades\Session;
use Verot\Upload\Upload;

function uploadImage($file, $image_cover, $path, $is_move = false,  $is_corp = false, $width = 150, $height = 150)
{
    @$handle           = new Upload($file);

    $extension        = $image_cover->getClientOriginalExtension();
    $name_full        =  time() . '.' . $extension;
    $name_thumb       =  time();
    $name_full_return =  time() . '.' . $extension;

    if (@$handle->uploaded) {


        @$handle->file_new_name_body = $name_thumb;
        @$handle->file_name_body_pre = 'thumb_';
        @$handle->file_safe_name     = true;
        @$handle->image_resize       = true;

        if ($is_corp == false) {
            @$handle->image_ratio_crop   = true;
        }

        @$handle->image_x            = $width;
        @$handle->image_y            = $height;
        @$handle->process($path . '/');
    }

    if ($is_move == true) {
        $image_cover->move($path, $name_full);
    }

    return  $name_full_return;
}


function get_lang(){
    return (Session::get('lang') != '')? Session::get('lang') : 'es';
}

function traslate($string){
    $lang = (Session::get('lang') != '')? Session::get('lang') : 'es';
    return $string.$lang;
}

function menuHeader(){

    $get_menu['menu_es'] = array('INICIO', 'EVENTOS', 'GALERÍA DE FOTOS', 'BLOG', 'CONTACTO');
    $get_menu['menu_eng'] = array('HOME', 'EVENTS', 'GALLERY PICTURES', 'BLOG', 'CONTACT');

    $menu = traslate('menu_');

    return $get_menu[$menu];

}

function get_sections(){
    $sections['section_es']['contact']  = array('info' => 'Información', 'name' => 'Nombre', 'email' => 'Correo', 'subject' => 'Asunto', 'message' => 'Mensaje');
    $sections['section_eng']['contact'] = array('info' => 'Contact Info', 'name' => 'Name', 'email' => 'E-mail', 'subject' => 'Subject', 'message' => 'Message');

    $sections['section_es']['btn']      = array('send' => 'Enviar', 'see_event' => 'Ver Evento' , 'see_blog' => 'Ver Blog', 'schedule' => 'SCHEDULE AN APOINMENT', 'contact' => 'CONTACT OUR TEAM');
    $sections['section_eng']['btn']     = array('send' => 'Send', 'see_event' => 'See Event' , 'see_blog' => 'See Blog', 'schedule' => 'SCHEDULE AN APOINMENT', 'contact' => 'CONTACT OUR TEAM');

    $sections['section_es']['event']    = array('picture' => 'Album');
    $sections['section_eng']['event']   = array('picture' => 'Album');

    $sections['section_es']['thanks']    = array('title' => 'Gracias', 'content' => 'Muy pronto nos pondremos en contacto');
    $sections['section_eng']['thanks']   = array('title' => 'Thank you!', 'content' => 'We’ll get in contact soon ');

    $sections['section_es']['meta']    = array('description' => 'DJ Z houston en  Cypress,tx. servicios: bodas, graduaciones, sonido e iluminación, fiesta y más.  Entretenimiento en toda el área metropolitana de Houston.', 'keyboard' => 'DJ Z houston, luz y sonido, dj boda, dj bautizo, dj graduaciones');
    $sections['section_eng']['meta']   = array('description' => 'DJ Z houston in  Cypress,tx.  services:  wedding, graduations,  sound and lighting, party  and more entertainment throughout the greater Houston area.!', 'keyboard' => 'DJ Z houston, dj sound and lighting, dj wedding, dj graduations');

    $menu = traslate('section_');

    return $sections[$menu];
}

function getPromotion(){
    return Promotion::where('created_at', '!=', null)->first();
}