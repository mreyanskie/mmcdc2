<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'patient_create',
            ],
            [
                'id'    => '18',
                'title' => 'patient_edit',
            ],
            [
                'id'    => '19',
                'title' => 'patient_show',
            ],
            [
                'id'    => '20',
                'title' => 'patient_delete',
            ],
            [
                'id'    => '21',
                'title' => 'patient_access',
            ],
            [
                'id'    => '22',
                'title' => 'appointment_create',
            ],
            [
                'id'    => '23',
                'title' => 'appointment_edit',
            ],
            [
                'id'    => '24',
                'title' => 'appointment_show',
            ],
            [
                'id'    => '25',
                'title' => 'appointment_delete',
            ],
            [
                'id'    => '26',
                'title' => 'appointment_access',
            ],
            [
                'id'    => '27',
                'title' => 'service_create',
            ],
            [
                'id'    => '28',
                'title' => 'service_edit',
            ],
            [
                'id'    => '29',
                'title' => 'service_show',
            ],
            [
                'id'    => '30',
                'title' => 'service_delete',
            ],
            [
                'id'    => '31',
                'title' => 'service_access',
            ],
            [
                'id'    => '32',
                'title' => 'employee_create',
            ],
            [
                'id'    => '33',
                'title' => 'employee_edit',
            ],
            [
                'id'    => '34',
                'title' => 'employee_show',
            ],
            [
                'id'    => '35',
                'title' => 'employee_delete',
            ],
            [
                'id'    => '36',
                'title' => 'employee_access',
            ],
            [
                'id'    => '37',
                'title' => 'product_management_access',
            ],
            [
                'id'    => '38',
                'title' => 'product_category_create',
            ],
            [
                'id'    => '39',
                'title' => 'product_category_edit',
            ],
            [
                'id'    => '40',
                'title' => 'product_category_show',
            ],
            [
                'id'    => '41',
                'title' => 'product_category_delete',
            ],
            [
                'id'    => '42',
                'title' => 'product_category_access',
            ],
            [
                'id'    => '43',
                'title' => 'product_tag_create',
            ],
            [
                'id'    => '44',
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => '45',
                'title' => 'product_tag_show',
            ],
            [
                'id'    => '46',
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => '47',
                'title' => 'product_tag_access',
            ],
            [
                'id'    => '48',
                'title' => 'product_create',
            ],
            [
                'id'    => '49',
                'title' => 'product_edit',
            ],
            [
                'id'    => '50',
                'title' => 'product_show',
            ],
            [
                'id'    => '51',
                'title' => 'product_delete',
            ],
            [
                'id'    => '52',
                'title' => 'product_access',
            ],
            [
                'id'    => '53',
                'title' => 'prescription_access',
            ],
            [
                'id'    => '54',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '55',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '56',
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => '57',
                'title' => 'user_alert_index',
            ],
            [
                'id'    => '58',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '59',
                'title' => 'user_alert_delete',
            ],
        ];

        Permission::insert($permissions);
    }
}
