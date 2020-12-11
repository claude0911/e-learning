<?php

if (!function_exists('asset_url')) {
    function asset_url()
    {
        return base_url() . 'public/';
    }
}

if (!function_exists('alert')) {
    function alert($type, $title)
    {
        $messageAlert = "
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
            });
            Toast.fire({
                icon: '" . $type . "',
                title: '" . $title . "'
            });
        ";
        return $messageAlert;
    }
}
if (!function_exists('alert2')) {
    function alert2($type, $title)
    {
        $pesan = " const Toast = Swal.fire({
            position: 'top-end',
            icon: '" . $type . "',
            title: '" . $title . "',
            showConfirmButton: false,
            timer: 2000
              });";
        return $pesan;
    }
}
