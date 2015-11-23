<?php

use yii\db\Migration;

class m151123_182121_create_timezone extends Migration
{

    public function safeUp()
    {
        $this->createTable('{{%timezone}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(44)->notNull(),
            'timezone' => $this->string(30)->notNull()
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 1,
            'name' => '(GMT-11:00) Midway Island',
            'timezone' => 'Pacific/Midway',
        ]);
        $this->insert('{{%timezone}}', [
            'id' => 2,
            'name' => '(GMT-11:00) Samoa ',
            'timezone' => 'Pacific/Samoa',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 3,
            'name' => '(GMT-10:00) Hawaii ',
            'timezone' => 'Pacific/Honolulu',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 4,
            'name' => '(GMT-09:00) Alaska ',
            'timezone' => 'America/Anchorage',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 5,
            'name' => '(GMT-08:00) Pacific Time (US &amp; Canada) ',
            'timezone' => 'America/Los_Angeles']);


        $this->insert('{{%timezone}}', [
            'id' => 6,
            'name' => '(GMT-08:00) Tijuana ',
            'timezone' => 'America/Tijuana',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 7,
            'name' => '(GMT-07:00) Chihuahua ',
            'timezone' => 'America/Chihuahua',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 8,
            'name' => '(GMT-07:00) La Paz ',
            'timezone' => 'America/Chihuahua',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 9,
            'name' => '(GMT-07:00) Mazatlan ',
            'timezone' => 'America/Mazatlan',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 10,
            'name' => '(GMT-07:00) Mountain Time (US &amp; Canada) ',
            'timezone' => 'America/Denver']);

        $this->insert('{{%timezone}}', [
            'id' => 11,
            'name' => '(GMT-06:00) Central America ',
            'timezone' => 'America/Managua',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 12,
            'name' => '(GMT-06:00) Central Time (US &amp; Canada) ',
            'timezone' => 'America/Chicago']);

        $this->insert('{{%timezone}}', [
            'id' => 13,
            'name' => '(GMT-06:00) Guadalajara ',
            'timezone' => 'America/Mexico_City',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 14,
            'name' => '(GMT-06:00) Mexico City ',
            'timezone' => 'America/Mexico_City',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 15,
            'name' => '(GMT-06:00) Monterrey ',
            'timezone' => 'America/Monterrey',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 16,
            'name' => '(GMT-05:00) Bogota ',
            'timezone' => 'America/Bogota',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 17,
            'name' => '(GMT-05:00) Eastern Time (US &amp; Canada) ',
            'timezone' => 'America/New_York']);

        $this->insert('{{%timezone}}', [
            'id' => 18,
            'name' => '(GMT-05:00) Lima ',
            'timezone' => 'America/Lima',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 19,
            'name' => '(GMT-05:00) Quito ',
            'timezone' => 'America/Bogota',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 20,
            'name' => '(GMT-04:00) Atlantic Time (Canada) ',
            'timezone' => 'Canada/Atlantic']);

        $this->insert('{{%timezone}}', [
            'id' => 21,
            'name' => '(GMT-04:30) Caracas ',
            'timezone' => 'America/Caracas',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 22,
            'name' => '(GMT-04:00) La Paz ',
            'timezone' => 'America/La_Paz',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 23,
            'name' => '(GMT-04:00) Santiago ',
            'timezone' => 'America/Santiago',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 24,
            'name' => '(GMT-03:30) Newfoundland ',
            'timezone' => 'America/St_Johns',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 25,
            'name' => '(GMT-03:00) Brasilia ',
            'timezone' => 'America/Sao_Paulo',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 26,
            'name' => '(GMT-03:00) Buenos Aires ',
            'timezone' => 'America/Argentina/Buenos_Aires',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 27,
            'name' => '(GMT-03:00) Georgetown ',
            'timezone' => 'America/Argentina/Buenos_Aires',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 28,
            'name' => '(GMT-03:00) Greenland ',
            'timezone' => 'America/Godthab',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 29,
            'name' => '(GMT-02:00) Mid-Atlantic ',
            'timezone' => 'America/Noronha'
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 30,
            'name' => '(GMT-01:00) Azores ',
            'timezone' => 'Atlantic/Azores',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 31,
            'name' => '(GMT-01:00) Cape Verde Is. ',
            'timezone' => 'Atlantic/Cape_Verde'
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 32,
            'name' => '(GMT+00:00) Casablanca ',
            'timezone' => 'Africa/Casablanca',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 33,
            'name' => '(GMT+00:00) Edinburgh ',
            'timezone' => 'Europe/London',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 34,
            'name' => '(GMT+00:00) Dublin ',
            'timezone' => 'Europe/Dublin',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 35,
            'name' => '(GMT+00:00) Lisbon ',
            'timezone' => 'Europe/Lisbon',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 36,
            'name' => '(GMT+00:00) London ',
            'timezone' => 'Europe/London',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 37,
            'name' => '(GMT+00:00) Monrovia ',
            'timezone' => 'Africa/Monrovia',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 38,
            'name' => '(GMT+00:00) UTC ',
            'timezone' => 'UTC'
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 39,
            'name' => '(GMT+01:00) Amsterdam ',
            'timezone' => 'Europe/Amsterdam',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 40,
            'name' => '(GMT+01:00) Belgrade ',
            'timezone' => 'Europe/Belgrade',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 41,
            'name' => '(GMT+01:00) Berlin ',
            'timezone' => 'Europe/Berlin',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 42,
            'name' => '(GMT+01:00) Bern ',
            'timezone' => 'Europe/Berlin',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 43,
            'name' => '(GMT+01:00) Bratislava ',
            'timezone' => 'Europe/Bratislava',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 44,
            'name' => '(GMT+01:00) Brussels ',
            'timezone' => 'Europe/Brussels',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 45,
            'name' => '(GMT+01:00) Budapest ',
            'timezone' => 'Europe/Budapest',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 46,
            'name' => '(GMT+01:00) Copenhagen ',
            'timezone' => 'Europe/Copenhagen',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 47,
            'name' => '(GMT+01:00) Ljubljana ',
            'timezone' => 'Europe/Ljubljana',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 48,
            'name' => '(GMT+01:00) Madrid ',
            'timezone' => 'Europe/Madrid',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 49,
            'name' => '(GMT+01:00) Paris ',
            'timezone' => 'Europe/Paris',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 50,
            'name' => '(GMT+01:00) Prague ',
            'timezone' => 'Europe/Prague',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 51,
            'name' => '(GMT+01:00) Rome ',
            'timezone' => 'Europe/Rome',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 52,
            'name' => '(GMT+01:00) Sarajevo ',
            'timezone' => 'Europe/Sarajevo',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 53,
            'name' => '(GMT+01:00) Skopje ',
            'timezone' => 'Europe/Skopje',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 54,
            'name' => '(GMT+01:00) Stockholm ',
            'timezone' => 'Europe/Stockholm',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 55,
            'name' => '(GMT+01:00) Vienna ',
            'timezone' => 'Europe/Vienna',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 56,
            'name' => '(GMT+01:00) Warsaw ',
            'timezone' => 'Europe/Warsaw',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 57,
            'name' => '(GMT+01:00) West Central Africa ',
            'timezone' => 'Africa/Lagos',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 58,
            'name' => '(GMT+01:00) Zagreb ',
            'timezone' => 'Europe/Zagreb',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 59,
            'name' => '(GMT+02:00) Athens ',
            'timezone' => 'Europe/Athens',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 60,
            'name' => '(GMT+02:00) Bucharest ',
            'timezone' => 'Europe/Bucharest',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 61,
            'name' => '(GMT+02:00) Cairo ',
            'timezone' => 'Africa/Cairo',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 62,
            'name' => '(GMT+02:00) Harare ',
            'timezone' => 'Africa/Harare',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 63,
            'name' => '(GMT+02:00) Helsinki ',
            'timezone' => 'Europe/Helsinki',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 64,
            'name' => '(GMT+02:00) Istanbul ',
            'timezone' => 'Europe/Istanbul',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 65,
            'name' => '(GMT+02:00) Jerusalem ',
            'timezone' => 'Asia/Jerusalem',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 66,
            'name' => '(GMT+02:00) Kyiv ',
            'timezone' => 'Europe/Helsinki',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 67,
            'name' => '(GMT+02:00) Pretoria ',
            'timezone' => 'Africa/Johannesburg',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 68,
            'name' => '(GMT+02:00) Riga ',
            'timezone' => 'Europe/Riga',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 69,
            'name' => '(GMT+02:00) Sofia ',
            'timezone' => 'Europe/Sofia',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 70,
            'name' => '(GMT+02:00) Tallinn ',
            'timezone' => 'Europe/Tallinn',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 71,
            'name' => '(GMT+02:00) Vilnius ',
            'timezone' => 'Europe/Vilnius',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 72,
            'name' => '(GMT+03:00) Baghdad ',
            'timezone' => 'Asia/Baghdad',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 73,
            'name' => '(GMT+03:00) Kuwait ',
            'timezone' => 'Asia/Kuwait',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 74,
            'name' => '(GMT+03:00) Minsk ',
            'timezone' => 'Europe/Minsk',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 75,
            'name' => '(GMT+03:00) Nairobi ',
            'timezone' => 'Africa/Nairobi',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 76,
            'name' => '(GMT+03:00) Riyadh ',
            'timezone' => 'Asia/Riyadh',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 77,
            'name' => '(GMT+03:00) Volgograd ',
            'timezone' => 'Europe/Volgograd',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 78,
            'name' => '(GMT+03:30) Tehran ',
            'timezone' => 'Asia/Tehran',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 79,
            'name' => '(GMT+04:00) Abu Dhabi ',
            'timezone' => 'Asia/Muscat',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 80,
            'name' => '(GMT+04:00) Baku ',
            'timezone' => 'Asia/Baku',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 81,
            'name' => '(GMT+04:00) Moscow ',
            'timezone' => 'Europe/Moscow',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 82,
            'name' => '(GMT+04:00) Muscat ',
            'timezone' => 'Asia/Muscat',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 83,
            'name' => '(GMT+04:00) St. Petersburg ',
            'timezone' => 'Europe/Moscow'
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 84,
            'name' => '(GMT+04:00) Tbilisi ',
            'timezone' => 'Asia/Tbilisi',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 85,
            'name' => '(GMT+04:00) Yerevan ',
            'timezone' => 'Asia/Yerevan',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 86,
            'name' => '(GMT+04:30) Kabul ',
            'timezone' => 'Asia/Kabul',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 87,
            'name' => '(GMT+05:00) Islamabad ',
            'timezone' => 'Asia/Karachi',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 88,
            'name' => '(GMT+05:00) Karachi ',
            'timezone' => 'Asia/Karachi',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 89,
            'name' => '(GMT+05:00) Tashkent ',
            'timezone' => 'Asia/Tashkent',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 90,
            'name' => '(GMT+05:30) Chennai ',
            'timezone' => 'Asia/Calcutta',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 91,
            'name' => '(GMT+05:30) Kolkata ',
            'timezone' => 'Asia/Kolkata',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 92,
            'name' => '(GMT+05:30) Mumbai ',
            'timezone' => 'Asia/Calcutta',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 93,
            'name' => '(GMT+05:30) New Delhi ',
            'timezone' => 'Asia/Calcutta',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 94,
            'name' => '(GMT+05:30) Sri Jayawardenepura ',
            'timezone' => 'Asia/Calcutta',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 95,
            'name' => '(GMT+05:45) Kathmandu ',
            'timezone' => 'Asia/Katmandu',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 96,
            'name' => '(GMT+06:00) Almaty ',
            'timezone' => 'Asia/Almaty',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 97,
            'name' => '(GMT+06:00) Astana ',
            'timezone' => 'Asia/Dhaka',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 98,
            'name' => '(GMT+06:00) Dhaka ',
            'timezone' => 'Asia/Dhaka',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 99,
            'name' => '(GMT+06:00) Ekaterinburg ',
            'timezone' => 'Asia/Yekaterinburg',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 100,
            'name' => '(GMT+06:30) Rangoon ',
            'timezone' => 'Asia/Rangoon',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 101,
            'name' => '(GMT+07:00) Bangkok ',
            'timezone' => 'Asia/Bangkok',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 102,
            'name' => '(GMT+07:00) Hanoi ',
            'timezone' => 'Asia/Bangkok',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 103,
            'name' => '(GMT+07:00) Jakarta ',
            'timezone' => 'Asia/Jakarta',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 104,
            'name' => '(GMT+07:00) Novosibirsk ',
            'timezone' => 'Asia/Novosibirsk',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 105,
            'name' => '(GMT+08:00) Beijing ',
            'timezone' => 'Asia/Hong_Kong',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 106,
            'name' => '(GMT+08:00) Chongqing ',
            'timezone' => 'Asia/Chongqing',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 107,
            'name' => '(GMT+08:00) Hong Kong ',
            'timezone' => 'Asia/Hong_Kong',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 108,
            'name' => '(GMT+08:00) Krasnoyarsk ',
            'timezone' => 'Asia/Krasnoyarsk',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 109,
            'name' => '(GMT+08:00) Kuala Lumpur ',
            'timezone' => 'Asia/Kuala_Lumpur',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 110,
            'name' => '(GMT+08:00) Perth ',
            'timezone' => 'Australia/Perth',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 111,
            'name' => '(GMT+08:00) Singapore ',
            'timezone' => 'Asia/Singapore',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 112,
            'name' => '(GMT+08:00) Taipei ',
            'timezone' => 'Asia/Taipei',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 113,
            'name' => '(GMT+08:00) Ulaan Bataar ',
            'timezone' => 'Asia/Ulan_Bator',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 114,
            'name' => '(GMT+08:00) Urumqi ',
            'timezone' => 'Asia/Urumqi',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 115,
            'name' => '(GMT+09:00) Irkutsk ',
            'timezone' => 'Asia/Irkutsk',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 116,
            'name' => '(GMT+09:00) Osaka ',
            'timezone' => 'Asia/Tokyo',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 117,
            'name' => '(GMT+09:00) Sapporo ',
            'timezone' => 'Asia/Tokyo',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 118,
            'name' => '(GMT+09:00) Seoul ',
            'timezone' => 'Asia/Seoul',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 119,
            'name' => '(GMT+09:00) Tokyo ',
            'timezone' => 'Asia/Tokyo',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 120,
            'name' => '(GMT+09:30) Adelaide ',
            'timezone' => 'Australia/Adelaide',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 121,
            'name' => '(GMT+09:30) Darwin ',
            'timezone' => 'Australia/Darwin',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 122,
            'name' => '(GMT+10:00) Brisbane ',
            'timezone' => 'Australia/Brisbane',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 123,
            'name' => '(GMT+10:00) Canberra ',
            'timezone' => 'Australia/Canberra',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 124,
            'name' => '(GMT+10:00) Guam ',
            'timezone' => 'Pacific/Guam',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 125,
            'name' => '(GMT+10:00) Hobart ',
            'timezone' => 'Australia/Hobart',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 126,
            'name' => '(GMT+10:00) Melbourne ',
            'timezone' => 'Australia/Melbourne',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 127,
            'name' => '(GMT+10:00) Port Moresby ',
            'timezone' => 'Pacific/Port_Moresby',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 128,
            'name' => '(GMT+10:00) Sydney ',
            'timezone' => 'Australia/Sydney',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 129,
            'name' => '(GMT+10:00) Yakutsk ',
            'timezone' => 'Asia/Yakutsk',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 130,
            'name' => '(GMT+11:00) Vladivostok ',
            'timezone' => 'Asia/Vladivostok',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 131,
            'name' => '(GMT+12:00) Auckland ',
            'timezone' => 'Pacific/Auckland',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 132,
            'name' => '(GMT+12:00) Fiji ',
            'timezone' => 'Pacific/Fiji',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 133,
            'name' => '(GMT+12:00) International Date Line West ',
            'timezone' => 'Pacific/Kwajalein',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 134,
            'name' => '(GMT+12:00) Kamchatka ',
            'timezone' => 'Asia/Kamchatka',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 135,
            'name' => '(GMT+12:00) Magadan ',
            'timezone' => 'Asia/Magadan',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 136,
            'name' => '(GMT+12:00) Marshall Is. ',
            'timezone' => 'Pacific/Fiji'
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 137, 'name' => '(GMT+12:00) New Caledonia ',
            'timezone' => 'Asia/Magadan',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 138,
            'name' => '(GMT+12:00) Solomon Is. ',
            'timezone' => 'Asia/Magadan']);

        $this->insert('{{%timezone}}', [
            'id' => 139,
            'name' => '(GMT+12:00) Wellington ',
            'timezone' => 'Pacific/Auckland',
        ]);

        $this->insert('{{%timezone}}', [
            'id' => 140,
            'name' => '(GMT+13:00) Nuku\\alofa ',
            'timezone' => 'Pacific/Tongatapu'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%timezone}}');
    }

}
