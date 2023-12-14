<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Validation extends Component
{
    public $data;
    public $tes;

    function getData()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mfsz3q3f-4100.asse.devtunnels.ms/debunking/getAll',
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

    function validation($id)
    {
        $curl = curl_init();
        $this->tes = 'hayo';
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mfsz3q3f-4100.asse.devtunnels.ms/debunking/validate/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PATCH',
            CURLOPT_POSTFIELDS => 'is_validated=true',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Cookie: .Tunnels.Relay.WebForwarding.Cookies=CfDJ8Mkjkyor3KBMgddPnEqMSUZVnGoR0Bfp6kX2uU9kNmaMfje8w_dHp_iNhUYyEtsTP8wZzFmog_p9fQlW2R1FbFJSnbQra7mL-ah0647IaSY2GOQXk2ybO73Z3XrZLLA0rD0aO8qnTI1mwcL6-0GZS7BwkOcfr6ZetWPO_3VxnSusMcw188YAPNt_4XKSS0jxZu21uHnc5Tj22CzoW0xGj6ZlfVFaRBMNpDL8OZJlJ9bSobFjAbBOtqAWeuAQWcSvDSiafy7mkmyFqHd_4vwv-d8_MugHBhC95-bOe9nB7-KRABNZKUuomvuw1-NkQDzpVBkd2PS7Afj_eKxr7PyBNo5_gJYoRzxQqGbpHIED6Sj1eLkxMlYonF_S-3S4ndjN37m0xSaRv6LMlHagf34CdCywQ7CZ5O9jh7ngWXnRP5xE3CYvER7EMiAEF_hEPlbCbBRjgrndEoAF8agF2IEI3eEgJ-yMfmAK8_dvOmVcPlzVlhU5e0cuU_vlihD6IrGijeay8kLpLuGKULxJzRsTthe5XOO4D5vYZFFtb86xJ_I_NFtGYIYCBR2qijdxC5Rq2r6P63D8FXKKcx_zm_Qrjg_5ryOteaeMOEiHZFd4DXJrXFnxenfQuNmeQ3ngIkpVeQabA00AvvFKc548L7u_kYXBk-rCIH2AygmE9i3JsOwBSvgP_u_qiR01RB_398h9r-ZQHon_ZDB0PanRAKFLUf1mOmlQ-hdRYOFj7koC-S3Ma76JRi0ETrQ9FJK-w3Yjij4wG2v2a-2jGdOsWRwyCGiMOG1IYoM08MYikri46h8-e82-ejS6GmGRsgg08KdByIL-QwH9X5-lstuiw4f-IHql3lsXGEJYcl96U1BmwnaX-eUBaAAIJ3LxjbtgVCHBF5pjkrSkWsC5VYyT-n-0uzE'
            ),
        ));

        // $response = curl_exec($curl);
        curl_exec($curl);

        curl_close($curl);
        return redirect('/');
    }

    function mount()
    {
        $this->data = $this->getData();
    }
    public function render()
    {
        return view('livewire.validation');
    }
}
