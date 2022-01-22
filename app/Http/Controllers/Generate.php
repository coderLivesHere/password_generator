<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Generate extends Controller
{
    private function generation($settings)
    {
        $characters = '';

        $characters .= $settings['with_lower_letters'] ? 'abcdefghijklmnopqrstuvwxyz' : '';
        $characters .= $settings['with_upper_letters'] ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' : '';
        $characters .= $settings['with_numbers'] ? '0123456789' : '';
        $characters .= $settings['with_minus'] ? '-' : '';
        $characters .= $settings['with_underscore'] ? '_' : '';
        $characters .= $settings['with_specia_characters'] ? "!$%&:^?*#@/." : '';
        $characters .= $settings['with_staples'] ? '{[()]}' : '';

        if (strlen($characters) == 0)
            return 'Настройки не корректны';

        $characters_length = strlen($characters);
        $password = '';
        for ($i = 0; $i < $settings['size_password']; $i++) {
            $password .= $characters[rand(0, $characters_length - 1)];
        }

        return $password;
    }

    public function output(Request $request)
    {
        $settings = array();

        $settings['with_lower_letters'] = $request->get('with-lower-letters');
        $settings['with_upper_letters'] = $request->get('with-upper-letters');
        $settings['with_numbers'] = $request->get('with-numbers');
        $settings['with_minus'] = $request->get('with-minus');
        $settings['with_underscore'] = $request->get('with-underscore');
        $settings['with_specia_characters'] = $request->get('with-specia-characters');
        $settings['with_staples'] = $request->get('with-staples');
        $settings['size_password'] = $request->get('size-password');

        return view('generate', array('password' => $this->generation($settings)));
    }
}
