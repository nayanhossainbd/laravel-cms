<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'post_create',
            ],
            [
                'id'    => 34,
                'title' => 'post_edit',
            ],
            [
                'id'    => 35,
                'title' => 'post_show',
            ],
            [
                'id'    => 36,
                'title' => 'post_delete',
            ],
            [
                'id'    => 37,
                'title' => 'post_access',
            ],
            [
                'id'    => 38,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 39,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 40,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 41,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 42,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 43,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 44,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 45,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 46,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 47,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 48,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 49,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 50,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 51,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 52,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 53,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 54,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 55,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 56,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 57,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 58,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 59,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 60,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 61,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 62,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 63,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 64,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 65,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 66,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 67,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 68,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 69,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 70,
                'title' => 'content_posts_create',
            ],
            [
                'id'    => 71,
                'title' => 'content_posts_edit',
            ],
            [
                'id'    => 72,
                'title' => 'content_posts_show',
            ],
            [
                'id'    => 73,
                'title' => 'content_posts_delete',
            ],
            [
                'id'    => 74,
                'title' => 'content_posts_access',
            ],
            [
                'id'    => 75,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 76,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 77,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 78,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 79,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 80,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 81,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 82,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 83,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 84,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 85,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 86,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 87,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 88,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 89,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 90,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 91,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 92,
                'title' => 'page_access',
            ],
            [
                'id'    => 93,
                'title' => 'page_create',
            ],
            [
                'id'    => 94,
                'title' => 'page_edit',
            ],
            [
                'id'    => 95,
                'title' => 'page_show',
            ],
            [
                'id'    => 96,
                'title' => 'page_delete',
            ],
            [
                'id'    => 97,
                'title' => 'menu_access',
            ],
            [
                'id'    => 98,
                'title' => 'menu_create',
            ],
            [
                'id'    => 99,
                'title' => 'post_edit',
            ],
            [
                'id'    => 100,
                'title' => 'menu_show',
            ],
            [
                'id'    => 101,
                'title' => 'menu_delete',
            ],
            [
                'id'    => 102,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 103,
                'title' => 'audit_log_access',
            ],
        ];

        Permission::insert($permissions);
    }
}