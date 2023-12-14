<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Community extends Component
{
    public $data;

    function getData()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mfsz3q3f-4100.asse.devtunnels.ms/community',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: .Tunnels.Relay.WebForwarding.Cookies=CfDJ8Mkjkyor3KBMgddPnEqMSUak9Kc92bOW6jBOW9aYW-3p121m-QPnEccJYcd9PG8SNX0AXdB9uXL8fXF5J1pDtlKkiwWnop-wNGAsSy7VHljHOhTPXv1_iqALWapN0fT8mLV7akZcQUittm8GePd-W__vh7m83AZIYMOJUzQuuBJBLRJbpYPdXzjBvec2_ZVdrSqc7ckZqIZivSTFvHsiHyK0f9nJoLWf6y7_DB6IKmKZRIsr2kvAQejgBFLcjfgPbd2aR2YoR-iXAB6I5Ebe7taPkbxNOgTIWHlHyc_CIGrk2_6rbdXTIciIfHseNdOT7CcI2CP7ZZPaBh-xO3TSTlEeTDsglwq_fnLlpbTm01fbF3zrKR6YdhroWa8ZTUp7MsXautmIaHCtMQRGrtf2Ragyov4M87pS0xJu_yr3teZl-AmkSLRARL_S-B45zjA7khjX-dtdlpQM6azHKmuvcnsDMUFEDeWc6xTsKN82CB7P35X1npXtzVSZnMD6cw80LkPW6hNDIyZkfTyMa1UMzfuIUXZNm73J-K5BGKTH4bfxbyJ5A7Y1KcuOdD2NLJ3EEiGceCCfmevbnPHVDcQfyNJ49gLLunW5KKwStQHTtXLjpV_w6bobmJ3ssKIxFQMaU1wIpJSnuXKsfo3JmUOm2ym2I1DZtul8mOKxdh0yHPJCz6vN62iVAtknqhPPxPDqxSzK4-jFqECQJ4wYrpsORnXJX61MaPjkFdeI77fcFaEvpszDoW4dBofXIWQ1C3C4QhQfXrl-BH-ZQAxy_PXEkUbqNziwDJqqNvVRChOM-UGQid3GUFxZT9Mc0nxzEbHLtWa5qQtZWDiitJL5pfmd-zeKsA_s5R70qBqfrXMTmV6wy128AZuXoyZN9f3tl72Ui6tYoDU7goCux9slBEEqbY4'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, true);
    }


    function mount()
    {
        $this->data = $this->getData();
    }
    public function render()
    {
        return view('livewire.community');
    }
}
