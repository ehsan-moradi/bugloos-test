<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function getXmlData()
    {
        return '
            <root>
                <plate>1615022728.412806</plate>
                <include>mood</include>
                <brick>
                    <each>
                        <then>-1066211514.0731812</then>
                        <examine>toy</examine>
                        <soil>-55162093.3683486</soil>
                        <speed>might</speed>
                        <therefore>-1217304672.7372117</therefore>
                        <learn>date</learn>
                    </each>
                    <period>top</period>
                    <entirely>-1029438347.8183045</entirely>
                    <develop>1556281577.610537</develop>
                    <week>1201458297.3925881</week>
                    <went>friendly</went>
                </brick>
                <win>cake</win>
                <lay>teacher</lay>
                <beat>about</beat>
            </root>
        ';
    }

    public function getJsonData()
    {
        return response([
            'first_name' => 'Ehsan',
            'last_name'  => 'Moradi',
            'birthday'   => '1994',
            'info' => [
                'address' => 'doroud'
            ]
        ]);
    }
}
