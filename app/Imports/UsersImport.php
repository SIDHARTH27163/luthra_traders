<?php
namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $existingUser = User::where('email', $row['email'])->first();

        if ($existingUser) {
            // Update the existing user record
            $existingUser->update([
                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                // Update other columns as needed
            ]);

            return $existingUser;
        }

        return new User([
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'email' => $row['email'],
            'service' => 6,
            'role' => 6, // User Type User
            'status' => 0,
            'password' => Hash::make('password')
        ]);
    }
}
