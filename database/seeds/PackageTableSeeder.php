<?php

use App\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('packages')->insert([
        //     'title' => "VVIP A - Full Body (24 Cup) + Sport Massage (45 Minutes) + Air Relax (30 Minutes)",
        // ]);
        
        $package = new Package();
        $package->title = "VVIP A - Full Body (24 Cup) + Sport Massage (45 Minutes) + Air Relax (30 Minutes)";
        $package->save();
        
        $package = new Package();
        $package->title = "VVIP B - Full Body (24 Cup) + Sport Massage (30 Minutes)";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 1 - Full Body (24 Cup)";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 2 - Half Body (14 Cup)";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 3 - Bekam Wajah (8 Cup)";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 4 - Bekam Kepala (8 Cup)";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 5 - Bekam Kaki (12 Cup)";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 6 - Bekam Angin (21 Cup)";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 7 - Urutan Badan (8 Cup)";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 8 - Sport Massage + Hypervolt Therapy";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 9 - Sport Massage + Hypervolt Therapy + Air Relax";
        $package->save();
        
        $package = new Package();
        $package->title = "PAKEJ 10 - Sport Recovery";
        $package->save();
    }
}
