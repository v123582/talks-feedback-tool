<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
  	    User::create(array(
            	'name'     => 'admin',
  	        'email'     => 'admin@admin.com',
  	        'serialNumber' => 'admin',
  	    ));
  	     User::create(array(
            'name'     => 'test',
  	        'email'     => 'test@test.com',
  	        'serialNumber' => 'test',
  	    ));

  ## 志工
  User::create(array('name'=> 'admin','email' => 'v123582@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'rachelni0824@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'frank890417@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'itainan.101@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'yuweiichen@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'Lydiachang@hotmail.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'jasonkuo52@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'college2580@hotmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'plusone.tem04@g2.nctu.edu.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'mavericktw21@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => '3appletall@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'amanda0ray@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'yintzu.chang@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'tiffany791124@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'amyapple19901203@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'acchen@kyec.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'chien.mse04@nctu.edu.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'nianhsuan@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'misher1127@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'sophiasu0612@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'ting-ru@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'billykuan1106@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'idmakers1010@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'q1995812@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'heydalala@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'bone850201@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'hebe8305051@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'supermonkey17@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'shen2281@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'poiuytrechu.bt96@g2.nctu.edu.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'chia_wei_liang.eed02@g2.nctu.edu.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'melody87190@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 't0412125.ep04@nctu.edu.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'wubrianx@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'wind90405@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'zaubernight@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'ruimei13@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'oliviaanddove@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 's1t2e3sn@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'kuandeho@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'bala0342@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'jenny093226@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'eggstar3434@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'ecafrekop1290@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'eve83116@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'vera515@yahoo.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'lucy0317windband@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'thetingweili@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'maxmin2100@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'a0933274429@hotmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'Mandychen252@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'c5197@hotmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'hazel.facts@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'horsedragonjeff@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'gkj4367me@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'jay142420022002@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 's8912811@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'yuenjoey@yahoo.com.hk','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'sarasarapig@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'k135212002@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'tingting2723@yahoo.com.tw','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'pupss90135@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'rhoward1995@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'suan60018@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'naven85129@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'Hagalaz1080@gmail.com','serialNumber' => 'admin',));
  User::create(array('name'=> 'admin','email' => 'angelica.lunlun@gmail.com','serialNumber' => 'admin',));User::create(array('name'=> 'admin','email' => 'E-mail','serialNumber' => 'admin',));

    }
}
