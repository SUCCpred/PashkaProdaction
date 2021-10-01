<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class CalcController extends Controller
{
        public function Trench(Request $request)
    {
        $valid = $request->validate([
            'ground-type' => 'required|min:1',
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'trench-lenght' => 'required',
            'trench-depth' => 'required',
            'trench-width' => 'required',
            'delivery' => 'required',
            'redirpage' => 'required'
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'trench',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'trench-lenght' => $request['trench-lenght'],
            'trench-depth' => $request['trench-depth'],
            'trench-width' => $request['trench-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Pit(Request $request)
    {
        $valid = $request->validate([
            'ground-type' => 'required|min:1',
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'pit-lenght' => 'required',
            'pit-depth' => 'required',
            'pit-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'pit',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'pit-lenght' => $request['pit-lenght'],
            'pit-depth' => $request['pit-depth'],
            'pit-width' => $request['pit-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Planning(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'area-lenght' => 'required',
            'area-max-length' => 'required',
            'area-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'planning',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'area-lenght' => $request['area-lenght'],
            'area-max-length' => $request['area-max-length'],
            'area-width' => $request['area-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Terracing(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'area-lenght' => 'required',
            'area-max-length' => 'required',
            'area-width' => 'required',
            'step-count' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'terracing',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'area-lenght' => $request['area-lenght'],
            'area-max-length' => $request['area-max-length'],
            'area-width' => $request['area-width'],
            'step-count' => $request['step-count'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Hydrodrill(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'hole-depth' => 'required',
            'trench-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'hydrodrill',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'hole-depth' => $request['hole-depth'],
            'trench-width' => $request['trench-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function Hydrohammer(Request $request)
    {
        $data = [
            'item-type' => 'hydrodrill',
            'delivery' => 1,
            'distance' => 0
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function FoundationPit(Request $request)
    {
        $valid = $request->validate([
            'pass-width' => 'required',
            'pass-height' => 'required',
            'communications-search' => 'required',
            'area-lenght' => 'required',
            'foundation-depth' => 'required',
            'area-width' => 'required',
            'delivery' => 'required',
        ]);

        if($request['delivery'] > 1)
        {
            $valid = $request->validate([
                'distance' => 'required'
            ]);
        }

        $data = [
            'item-type' => 'foundationPit',
            'ground-type' => $request['ground-type'],
            'pass-width' => $request['pass-width'],
            'pass-height' => $request['pass-height'],
            'communications-search' => $request['communications-search'],
            'area-lenght' => $request['area-lenght'],
            'foundation-depth' => $request['foundation-depth'],
            'area-width' => $request['area-width'],
            'delivery' => $request['delivery'],
            'distance' => $request['distance'] = null ? 0 : $request['distance']
        ];
        session()->push('session-data', $data);

        $redirpage = $request['redirpage'];
        if($redirpage > 0)
        {
            return $this->RedirectToNextForm($redirpage);
        }
        else
        {
            return $this->SummaryAllForms();
        }
    }

    public function RedirectToNextForm($redirpage)
    {
        switch ($redirpage){
            case 1:
                return redirect()->route('trench');
                break;
            case 2:
                return redirect()->route('pit');
                break;
            case 3:
                return redirect()->route('planning');
                break;
            case 4:
                return redirect()->route('terracing');
                break;
            case 5:
                return redirect()->route('hydrohammer');
                break;
            case 6:
                return redirect()->route('hydrodrill');
                break;
            case 7:
                return redirect()->route('foundation_pit');
                break;
            default:
                return redirect()->route('choise');
        }
    }

    public function CheckPitOrTrench($items, $type)
    {
        $pit = false;
        $trench = false;
        foreach ($items as $item)
        {
            switch ($item['item-type'])
            {
                case 'trench':
                    $trench = true;
                        break;
                case 'pit':
                    $pit = true;
                    break;
            }
        }
        if($type == 'pit')
        {
            return $pit;
        }
        else if($type == 'trench')
        {
            return $trench;
        }
        return false;
    }

    public function SummaryAllForms()
    {
        $price = [
            'main' => 0,
            'hour' => 0,
            'error' => 0
        ];

        $delivery_array = [];
        $delivery_iter = 0;
        $ground_check = 0;
        $isTerracing = false;

        foreach (session('session-data') as $item)
        {
            if(!in_array($item['delivery'], $delivery_array) && !in_array($item['distance'], $delivery_array))
            {
                $delivery_array[$delivery_iter++] = $item['delivery'];
                $delivery_array[$delivery_iter++] = $item['distance'];
            }
            if($item['ground-type'] > 1 && $item['item-type'] != 'hydrodrill')
            {
                if($ground_check == 0)
                {
                    $ground_check = $item['ground-type'];
                }
                else if($ground_check == 4){
                    break;
                }
                else
                {
                    if($ground_check != $item['ground-type'])
                    {
                        $ground_check = 4;
                    }
                }
            }
            if($item['pass-width'] >= 150 & $item['pass-height'] >= 250) //с кабиной
            {
               switch ($item['item-type'])
               {
                   case 'trench':
                       if($this->CheckPitOrTrench(session('session-data'), 'pit'))
                       {
                           $price = $this->TrenchWithPitSummary($price, $item['ground-type'], $item['trench-width'], $item['trench-depth'], $item['trench-lenght'], true);
                       }
                       else
                       {
                           $price = $this->TrenchWithoutPitSummary($price, $item['ground-type'], $item['trench-width'], $item['trench-depth'], $item['trench-lenght'], true);
                       }
                       break;
                   case 'pit':
                       if(!$this->CheckPitOrTrench(session('session-data'), 'trench'))
                       {
                           $price = $this->PitWithoutTrenchSummary($price, $item['pit-lenght'], $item['pit-width'], $item['pit-depth'], $item['ground-type']);
                       }
                       break;
                   case 'planning':
                       $price = $this->PlanningSummary($price, $item['area-lenght'], $item['area-max-length'], $item['area-width'], true);
                       break;
                   case 'terracing':
                       $price = $this->TerracingSummary($price, $item['area-lenght'], $item['area-max-length'], $item['area-width'], $item['step-count'], true);
                       $isTerracing = true;
                       break;
                   case 'hydrodrill':
                       $price = $this->HydrodrillSummary($price, $item['hole-depth'], $item['trench-width'], $item['ground-type']);
                       break;
                   case 'hydrohammer':
                       $price = $this->HydrohammerSummary($price);
                       break;
                   case 'foundationPit':
                       $price = $this->FoundationPitSummary($price, $item['area-lenght'], $item['area-width'], $item['foundation-depth'], true);
                       break;
               }
            }
            else if($item['pass-width'] >= 160 & $item['pass-height'] >= 200) //без кабины
            {
                switch ($item['item-type'])
                {
                    case 'trench':
                        if($this->CheckPitOrTrench(session('session-data'), 'pit'))
                        {
                            $price = $this->TrenchWithPitSummary($price, $item['ground-type'], $item['trench-width'], $item['trench-depth'], $item['trench-lenght'], false);
                        }
                        else
                        {
                            $price = $this->TrenchWithoutPitSummary($price, $item['ground-type'], $item['trench-width'], $item['trench-depth'], $item['trench-lenght'], false);
                        }
                        break;
                    case 'pit':
                        if(!$this->CheckPitOrTrench(session('session-data'), 'trench'))
                        {
                            $price = $this->PitWithoutTrenchSummary($price, $item['pit-lenght'], $item['pit-width'], $item['pit-depth'], $item['ground-type']);
                        }
                        break;
                    case 'planning':
                        $price = $this->PlanningSummary($price, $item['area-lenght'], $item['area-max-length'], $item['area-width'], false);
                        break;
                    case 'terracing':
                        $price = $this->TerracingSummary($price, $item['area-lenght'], $item['area-max-length'], $item['area-width'], $item['step-count'], false);
                        $isTerracing = true;
                        break;
                    case 'hydrodrill':
                        $price = $this->HydrodrillSummary($price, $item['hole-depth'], $item['trench-width'], $item['ground-type']);
                        break;
                    case 'hydrohammer':
                        $price = $this->HydrohammerSummary($price);
                        break;
                    case 'foundationPit':
                        $price = $this->FoundationPitSummary($price, $item['area-lenght'], $item['area-width'], $item['foundation-depth'], false);
                        break;
                }
            }
            else //индивидуальный звонок
            {
                $price['error'] = 1;
                $price['errormessage'] = 'Индивидуальный звонок';
                break;
            }
        }

        for ($i=0; $i<$delivery_iter;)
        {
            $price = $this->GetPriceLocation($price, $delivery_array[$i++], $delivery_array[$i++]);
        }

        session()->forget('session-data');
        session()->put('session-data', array());
        $ground_type_text = [
            'скальный грунт',
            'полускальный грунт',
            'строительный мусор',
            'некопаемый грунт'
        ];
        $data = ['price' => $price];
        if($ground_check > 0)
        {
            $data += ['badground' => $ground_type_text[$ground_check-2]];
        }
        $data += ['isTerracing' => $isTerracing];
        return view('price', $data);
    }

    public function TrenchWithoutPitSummary($price, $ground, $width, $depth, $length, $cabina)
    {
        if($cabina)
        {
            if($length <= 30)
            {
                $price['main'] += 4500;
            }
            else
            {
                if($depth <= 120)
                {
                    if($width < 50)
                    {
                        $price['main'] += 150*$length;
                    }
                    else
                    {
                        $price['main'] += 200*$length;
                    }
                }
                else
                {
                    if($width < 50)
                    {
                        $price['main'] += (150 + ($depth - 120))*$length;
                    }
                    else
                    {
                        $price['main'] += (200 + ($depth - 120))*$length;
                    }
                }
            }
        }
        else {
            if ($length <= 30) {
                $price['main'] += 5000;
            } else {
                if ($depth <= 120) {
                    if ($width < 50) {
                        $price['main'] += 160 * $length;
                    } else {
                        $price['main'] += 210 * $length;
                    }
                } else {
                    if ($width < 50) {
                        $price['main'] += (160 + ($depth - 120)) * $length;
                    } else {
                        $price['main'] += (210 + ($depth - 120)) * $length;
                    }
                }
            }
        }
        if($ground > 1)
        {
            $price['hour'] += 2500;
        }
        return $price;
    }

    public function TrenchWithPitSummary($price, $ground, $width, $depth, $length, $cabina)
    {
        if($cabina)
        {
            if($length <= 30)
            {
                if($depth <= 120)
                {
                    $price['main'] += 2000 + 9000;
                }
                else
                {
                    $price['main'] += 200 * $length + 6000;
                }
            }
            else
            {
                if($depth <= 120)
                {
                    if($width < 50)
                    {
                        $price['main'] += 150 * $length + 6000;
                    }
                    else
                    {
                        $price['main'] += 200 * $length + 6000;
                    }
                }
                else
                {
                    if($width < 50)
                    {
                        $price['main'] += (150 + ($length - 120))*$length + 6000;
                    }
                    else
                    {
                        $price['main'] += (200 + ($length - 120))*$length + 6000;
                    }
                }
            }
        }
        else {
            if ($length <= 30) {
                if($depth <= 120)
                {
                    $price['main'] += 2200 + 7000;
                }
                else
                {
                    $price['main'] += 1200 + 7000;
                }
            } else {
                if ($depth <= 120) {
                    if ($width < 50) {
                        $price['main'] += 160 * $length + 7000;
                    } else {
                        $price['main'] += 210 * $length + 7000;
                    }
                } else {
                    if ($width < 50) {
                        $price['main'] += (160 + ($length - 120)) * $length + 7000;
                    } else {
                        $price['main'] += (210 + ($length - 120)) * $length + 7000;
                    }
                }
            }
        }
        if($ground > 1)
        {
            $price['hour'] += 2500;
        }
        return $price;
    }

    public function PitWithoutTrenchSummary($price, $length, $width, $depth, $ground)
    {
        if(($length + $width <= 650) & ($depth <= 220) & (($length >= 250 & $width <= 250) | ( $width >= 250 & $length <= 250)))
        {
            if($ground <= 1)
            {
                $price['main'] += 7000;
            }
            else
            {
                $price['hour'] += 2500;
            }
        }
        else //индивидуальный звонок
        {
            $price['error'] = 1;
            $price['errormessage'] = 'Индивидуальный звонок';
        }
        return $price;
    }

    public function PlanningSummary($price, $x, $z, $y, $cabina)
    {
        $cubes = ($z /2) * $x * $y;
        $time = intval($cubes / 7);

        if($cabina)
        {
            $price['main'] += 1500*$time;
        }
        else if(!$cabina)
        {
            $price['main'] += 1700*$time;
        }
        return $price;
    }

    public function TerracingSummary($price, $x, $z, $y, $step_count, $cabina)
    {
        $cubes = ($z /2) * $x * $y;
        $time = intval($cubes / 7);

        if($cabina)
        {
            $price['main'] += 1500*$time*$step_count;
        }
        else if(!$cabina)
        {
            $price['main'] += 1700*$time*$step_count;
        }
        return $price;
    }

    public function HydrodrillSummary($price, $depth, $count, $ground_type)
    {
        if($depth <= 100)
        {
            if($count <= 12)
            {
                $price['hour'] += 2000;
            }
            else if($count < 100)
            {
                $price['main'] += ($ground_type > 1)? 550* $count : 350*$count;
            }
            else
            {
              $price['main'] += ($ground_type > 1)? 550* $count : 300*$count;
            }
        }
        else
        {
            if($count <= 12)
            {
                $price['hour'] += 2000;
            }
            else if($count < 100)
            {
                $price['main'] += ($ground_type > 1)? 550* $count : 400*$count;
            }
            else
            {
                $price['main'] += ($ground_type > 1)? 550* $count : 350*$count;
            }
        }
        return $price;
      }

    public function HydrohammerSummary($price)
    {
        $price['hour'] += 2500;
        return $price;
    }

    public function FoundationPitSummary($price, $x, $y, $z, $cabina)
    {
        $cubes = 1.2 * ($x*$y*$z);
        $time = intval($cubes / 7);
        if($cabina)
        {
            $price['main'] += 1500*$time;
        }
        else if(!$cabina)
        {
            $price['main'] += 1700*$time;
        }
        return $price;
    }

    function GetPriceLocation($price, $location, $distance)
    {
        if ($location > 1 && $distance == 0)
            return $price;
        switch ($location){
            case 1:
                $price['main'] += 2000;
                return $price;
            case 2:
                $price['main'] += $distance * 40 * 2 + 5000;
                return $price;
            case 3:
                $price['main'] += $distance * 40 * 2 + 2000;
                return $price;
        }
        return $price;
    }
}
