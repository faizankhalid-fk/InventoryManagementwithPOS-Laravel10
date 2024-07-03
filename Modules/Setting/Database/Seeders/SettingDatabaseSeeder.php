<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Inventory Recorder',
            'company_email' => 'info@inventoryrecorder.com',
            'company_phone' => '+447598210534',
            'notification_email' => 'info@inventoryrecorder.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Inventory Recorder © 2021 || Product by <strong><a target="_blank" href="https://www.shapestechnology.com">Shapes Technology</a></strong>',
            'company_address' => '9 Saint James Street, London, UK E17 7PJ'
        ]);
    }
}
