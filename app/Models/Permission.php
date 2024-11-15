<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends \Spatie\Permission\Models\Permission
{
    use HasFactory;

    public static function getDefaultPermissions()
    {
        return [
            "dashboard" => [
                "index" => [
                    "description" => "Dapat mengakses dashboard",
                    "role" => [Role::ADMIN],
                ],
            ],
            "user" => [
                "index" => [
                    "description" => "Dapat mengakses data user",
                    "role" => [Role::ADMIN],
                ],
                "create" => [
                    "description" => "Dapat membuat data user",
                    "role" => [Role::ADMIN],
                ],
                "edit" => [
                    "description" => "Dapat mengedit data user",
                    "role" => [Role::ADMIN],
                ],
                "delete" => [
                    "description" => "Dapat menghapus data user",
                    "role" => [Role::ADMIN],
                ],
            ],
            "role" => [
                "index" => [
                    "description" => "Dapat mengakses data role",
                    "role" => [Role::ADMIN],
                ],
                "create" => [
                    "description" => "Dapat membuat data role",
                    "role" => [Role::ADMIN],
                ],
                "edit" => [
                    "description" => "Dapat mengedit data role",
                    "role" => [Role::ADMIN],
                ],
                "delete" => [
                    "description" => "Dapat menghapus data role",
                    "role" => [Role::ADMIN],
                ],
            ],

            "operator" => [
                "index" => [
                    "description" => "Dapat mengakses data operator",
                    "role" => [Role::ADMIN],
                ],
                "create" => [
                    "description" => "Dapat membuat data operator",
                    "role" => [Role::ADMIN],
                ],
                "edit" => [
                    "description" => "Dapat mengedit data operator",
                    "role" => [Role::ADMIN],
                ],
                "delete" => [
                    "description" => "Dapat menghapus data operator",
                    "role" => [Role::ADMIN],
                ],
            ],

            "schedule" => [
                "create" => [
                    "description" => "Dapat absen",
                    "role" => [Role::ADMIN],
                ],
            ],
        ];
    }
}
