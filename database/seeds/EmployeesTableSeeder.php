<?php
use App\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'id'             => 1,
                'name'           => 'Dr. Janell P. Meneses, M.D',
                'email'          => 'mmcdc@admin.com',
                'phone'          => '+123456789',
                'created_at'     => now(),
                'updated_at'     => now(),
                'deleted_at'     => null
            ],
        ];
        Employee::insert($employees);
    }
}
