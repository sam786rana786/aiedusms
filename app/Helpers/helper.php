<?php

use Carbon\Carbon;
use App\Models\Setting;


if (!function_exists('setMailConfig')) {
    function setMailConfig()
    {
        $settings = Setting::pluck('description', 'label');

        $mailConfig = [
            'transport' => 'smtp',
            'host' => $settings['smtp_host'],
            'port' => $settings['smtp_port'],
            'encryption' => $settings['smtp_security'],
            'username' => $settings['smtp_username'],
            'password' => $settings['smtp_password'],
            'timeout' => null
        ];
        config(['mail.mailers.smtp' => $mailConfig]);
    }
}


if (!function_exists('setLocalConfig')) {
    function setLocalConfig()
    {
        $settings = Setting::pluck('description', 'label');
        $localConfig = [
            'timezone' => $settings['timezone'],
            'date_format' => $settings['date_format'],
            'time_format' => $settings['time_format'],
            'currency' => $settings['currency']
        ];
        config(['app.locals' => $localConfig]);
    }
}

if (!function_exists('formatDate')) {
    function formatDate($date = '')
    {
        $settings = Setting::pluck('description', 'label');
        $format = $settings['date_format'];
        if ($date == '' || $date == null) {
            return null;
        }
        return date($format, strtotime($date));
    }
}

if (!function_exists('formatTime')) {
    function formatTime($time = '')
    {
        $settings = Setting::pluck('description', 'label');
        $format = $settings['time_format'];
        if ($time == '' || $time == null) {
            return null;
        }
        return Carbon::parse($time)->format($format);
    }
}
