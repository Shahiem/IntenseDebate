<?php namespace ShahiemSeymor\IntenseDebate\Models;

use Model;

class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'intensedebate_settings';
    public $settingsFields = 'fields.yaml';

    public $rules = [
        'site_act' => 'required',
    ];

}