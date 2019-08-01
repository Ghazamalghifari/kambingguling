<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Tentang;
use App\KambingGuling;
use App\Aqiqah;
use App\NasiBox;
use App\Prasmanan;

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
	     

    	//Membuat Sample User Admin
        $admin = new User();
		$admin->name = "Kambing Guling Lampung";
		$admin->email = 'kambinggulinglampung@gmail.com';
		$admin->password = bcrypt('KWyIrRSiI0tuKeb');
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
			
    	// Membuat Harga Kambing
	    $HargaKambingGuling = new KambingGuling();
	    $HargaKambingGuling->harga_1 = "1.100.000";
	    $HargaKambingGuling->harga_2 = "1.400.000";
	    $HargaKambingGuling->harga_3 = "1.700.000";
	    $HargaKambingGuling->harga_4 = "2.100.000"; 
		$HargaKambingGuling->save(); 
		
    	// Membuat Harga Aqiqah
	    $HargaAqiqah = new Aqiqah();
	    $HargaAqiqah->harga_1 = "1.300.000";
	    $HargaAqiqah->harga_2 = "1.500.000";
	    $HargaAqiqah->harga_3 = "1.800.000";
	    $HargaAqiqah->harga_4 = "2.100.000"; 
		$HargaAqiqah->save(); 
		
    	// Membuat Harga Nasi Box
	    $HargaNasiBox = new NasiBox();
	    $HargaNasiBox->harga_1 = "12.000";
	    $HargaNasiBox->harga_2 = "15.000";
	    $HargaNasiBox->harga_3 = "18.000"; 
		$HargaNasiBox->save(); 
		
    	// Membuat Harga Prasmanan
	    $HargaPrasmanan = new Prasmanan();
	    $HargaPrasmanan->harga_1 = "20.000";
	    $HargaPrasmanan->harga_2 = "25.000";
	    $HargaPrasmanan->harga_3 = "30.000"; 
		$HargaPrasmanan->save();
    }
}
