<?php

//hàm lấy các value từ bảng setting
function getConfigValueFromSettingTable($configKey){
    $setting=\App\Models\Setting::where('config_key',$configKey)->first();
    if(!empty($setting)){
        return $setting->config_value;
    }
    return null;
}