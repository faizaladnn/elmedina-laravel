<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getBranchesByCountry($country)
    {
        $data = [];

        switch($country){
            case "Selangor":
                $data['data'] = [
                    [
                        'branchName' => 'Shah Alam',
                        'address' =>    'No. 17, 1, Jalan Plumbum R 7/R, Seksyen 7, 40000 Shah Alam, Selangor',
                        'sourceMap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0999179940636!2d101.4873003152522!3d3.067964354500691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5323e55fc8e9%3A0x4379424303e313ee!2sEl%20Medina%20Spa%20Bekam%20Shah%20Alam!5e0!3m2!1sen!2smy!4v1576500104763!5m2!1sen!2smy',
                        'facebook' => 'https://www.facebook.com/elmedinaspabekamshahalam/',
                        'telephoneNo' => '013 - 200 9518',
                    ],
                    [
                        'branchName' => 'Bangi',
                        'address' => '2nd Floor, 1-09-03, Jln Medan Pusat Bandar 7, Seksyen 9, 43650 Bandar Baru Bangi, Selangor',
                        'sourceMap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.491109200717!2d101.75445281525252!3d2.961142855104205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcbe18e82a0db%3A0x5bae158640d76c66!2sEl%20Medina%20Spa%20Bekam%20-%20Bangi!5e0!3m2!1sen!2smy!4v1576500339532!5m2!1sen!2smy',
                        'facebook' => 'https://www.facebook.com/elmedinaspabekambangi/',
                        'telephoneNo' => '017 - 727 1152',
                        
                    ]
                ];
            break;
            case "Pahang": 
                $data['data'] = [
                    [
                        'branchName' => 'Kuantan',
                        'address' => 'A75, Level 1, Jln IM 7/1, Bandar Indera Mahkota, 25200 Kuantan, Pahang',
                        'sourceMap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.885727910673!2d103.29861911525126!3d3.834695549623814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8ba447aaa6987%3A0x8fbe0604d8ac3d6d!2sEl%20Medina%20Spa%20Bekam%20Kuantan!5e0!3m2!1sen!2smy!4v1576500389456!5m2!1sen!2smy',
                        'facebook' => 'https://www.facebook.com/elmedinaspabekamkuantan/',
                        'telephoneNo' => '010 - 838 7030',
                    ],
                ];
            break;
            case "Johor": 
                $data['data'] = [
                    [
                        'branchName' => 'Johor Bahru',
                        'address' => '29, Uda Business Centre, 01, Jln Padi Emas 1/5, Bandar Baru Uda, 81200 Johor Bahru, Johor',
                        'sourceMap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16421.356899928163!2d103.69805845728803!3d1.4905870294991632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da72bee481bedf%3A0xdff5448648e97aa3!2sEl%20Medina%20Spa%20Bekam%20-%20Johor%20Bahru!5e0!3m2!1sen!2smy!4v1576500453749!5m2!1sen!2smy',
                        'facebook' => 'https://www.facebook.com/elmedinaspabekamjohorbahru/',
                        'telephoneNo' => '013 - 999 8458',
                    ],
                ];
            break;
            default:
                $data[] = [];
        }

        return json_encode($data);
    }
}
