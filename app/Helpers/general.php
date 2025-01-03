<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

if (! function_exists('_lang')) {
    function _lang($string = '')
    {
        $targetLang = Session::has('locale') ? Session::get('locale') : get_option('language') ?? 'en';

        $json = [];
        if (file_exists(lang_path()."/$targetLang.json")) {
            $json = json_decode(file_get_contents(lang_path()."/$targetLang.json"), true);
        }

        return ! empty($json[$string]) ? $json[$string] : $string;
    }
}

if (! function_exists('load_language')) {
    function load_language($active = '')
    {
        $path = lang_path();
        $files = scandir($path);
        $options = '';

        foreach ($files as $file) {
            $name = pathinfo($file, PATHINFO_FILENAME);
            if ($name == '.' || $name == '' || $name == 'language') {
                continue;
            }

            $selected = '';
            if ($active == $name) {
                $selected = 'selected';
            } else {
                $selected = '';
            }

            $options .= "<option value='$name' $selected>".ucwords($name).'</option>';
        }
        echo $options;
    }
}

if (! function_exists('get_logo')) {
    function get_logo()
    {
        return asset(get_logo_file_path());
    }
}

if (! function_exists('get_logo_file_path')) {
    function get_logo_file_path()
    {
        $logo = get_option('logo');
        if ($logo == '') {
            return 'uploads/logo.png';
        }

        return "uploads/$logo";
    }
}

if (! function_exists('get_option')) {
    function get_option($name)
    {
        $setting = DB::table('settings')->where('name', $name)->get();
        if (! $setting->isEmpty()) {
            return $setting[0]->value;
        }

        return '';
    }
}

if (! function_exists('set_option')) {
    function set_option($name, $value): bool
    {
        return DB::table('settings')
            ->updateOrInsert(
                ['name' => $name],
                ['value' => $value]
            );
    }
}
