<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Tentang;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
    	// Membuat role admin
	    $adminRole = new Role();
	    $adminRole->name = "admin";
	    $adminRole->display_name = "Admin";
	    $adminRole->save();
	    
	    // Membuat role member
	    $memberRole = new Role();
	    $memberRole->name = "member";
	    $memberRole->display_name = "Member";
	    $memberRole->save();

    	//Membuat Sample User Member
        $member = new User();
		$member->name = "Sample Member";
		$member->email = 'member@gmail.com';
		$member->password = bcrypt('rahasia');
		$member->save();
		$member->attachRole($memberRole);

    	//Membuat Sample User Admin
        $admin = new User();
		$admin->name = "Sample Admin";
		$admin->email = 'admin@gmail.com';
		$admin->password = bcrypt('rahasia');
		$admin->save();
		$admin->attachRole($adminRole);

		
    	// Membuat Tentang Perusahaan
	    $tentangUsaha = new Tentang();
	    $tentangUsaha->tentang_kami = "Kambing Guling adalah";
	    $tentangUsaha->gmail = "kambinggulinglampung@gmail.com";
	    $tentangUsaha->facebook = "Kambing Guling Lampung";
	    $tentangUsaha->instagram = "kambinggulinglampung";
	    $tentangUsaha->whatsapp = "08222222222";
	    $tentangUsaha->telphone = "08222222222";
	    $tentangUsaha->alamat = "Bandar Lampung";
		$tentangUsaha->save(); 
    }
}
