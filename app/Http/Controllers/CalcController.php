<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class CalcController extends Controller
{
    public function Wedding(Request $request)
    {
        $valid = $request->validate([
            'CameraCount' => 'required',
            'VideoFormat' => 'required',
            'Duration' => 'required',
            'redirpage' => 'required'
        ]);

        $data = [
            'item-type' => 'Wedding',
            'CameraCount' => $request['CameraCount'],
            'VideoFormat' => $request['VideoFormat'],
            'Duration' => $request['Duration']
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

    public function Music_clip(Request $request)
    {
        $valid = $request->validate([
            'NeedScenario' => 'required',
            'FilmingDuration' => 'required',
            'IncludeGraphics' => 'required',
            'redirpage' => 'required'
        ]);

        $data = [
            'item-type' => 'Music_clip',
            'FilmingDuration' => $request['FilmingDuration'],
            'IncludeGraphics' => $request['IncludeGraphics'],
            'NeedScenario' => $request['NeedScenario']
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

    public function Interview(Request $request)
    {
        $valid = $request->validate([
            'VideoDuration' => 'required',
            'CameraCount' => 'required',
            'redirpage' => 'required'
        ]);

        $data = [
            'item-type' => 'Interview',
            'VideoDuration' => $request['VideoDuration'],
            'CameraCount' => $request['CameraCount']
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

    public function Photosession(Request $request)
    {
        $valid = $request->validate([
            'PhotoCount' => 'required',
            'FilmTime' => 'required',
            'redirpage' => 'required'
        ]);

        $data = [
            'item-type' => 'Photosession',
            'PhotoCount' => $request['PhotoCount'],
            'FilmTime' => $request['FilmTime']
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

    public function Animation(Request $request)
    {
        $valid = $request->validate([
            'AnimationDuration' => 'required',
            'redirpage' => 'required'
        ]);

        $data = [
            'item-type' => 'Animation',
            'AnimationDuration' => $request['AnimationDuration']
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
                return redirect()->route('Wedding');
                break;
            case 2:
                return redirect()->route('Music_clip');
                break;
            case 3:
                return redirect()->route('Interview');
                break;
            case 4:
                return redirect()->route('Photosession');
                break;
            case 5:
                return redirect()->route('Animation');
                break;
            default:
                return redirect()->route('choise');
        }
    }

    public function SummaryAllForms()
    {
        $price = [
            'main' => 0,
            'hour' => 0,
            'error' => 0
        ];

        foreach (session('session-data') as $item)
        {
            switch ($item['item-type'])
            {
                case 'Wedding':
                    $price = $this->WeddingSummary($price, $item['CameraCount'], $item['VideoFormat'], $item['Duration']);
                    break;
                case 'Music_clip':
                    $price = $this->Music_clipSummary($price, $item['NeedScenario'], $item['FilmingDuration'], $item['IncludeGraphics']);
                    break;
                case 'Interview':
                    $price = $this->InterviewSummary($price, $item['VideoDuration'], $item['CameraCount']);
                    break;
                case 'Photosession':
                    $price = $this->PhotosessionSummary($price, $item['PhotoCount'], $item['FilmTime']);
                    break;
                case 'Animation':
                    $price = $this->AnimationSummary($price, $item['AnimationDuration']);
                    break;
            }
        }

        session()->forget('session-data');
        session()->put('session-data', array());

        $data = ['price' => $price];
        return view('price', $data);
    }

    public function WeddingSummary($price, $CameraCount, $VideoFormat, $Duration)
    {
        $price['main'] += 10000; //это база
        $price['main'] += $CameraCount*500;
        $price['main'] += $VideoFormat*2000;
        $price['main'] += $Duration > 0? 3000 : 0;
        return $price;
    }

    public function Music_clipSummary($price, $NeedScenario, $FilmingDuration, $IncludeGraphics)
    {
        $price['main'] += 3000; //это база
        $price['main'] += $NeedScenario > 0? 2000 : 0;
        switch ($FilmingDuration)
        {
            case 1:
                $price['main'] += 500;
                break;
            case 2:
                $price['main'] += 1500;
                break;
        }
        $price['main'] += $IncludeGraphics > 0? 1500 : 0;
        return $price;
    }

    public function InterviewSummary($price, $VideoDuration, $CameraCount)
    {
        $price['main'] += 1500; //это база
        $price['main'] += $VideoDuration > 0? 500 : 0;
        switch ($CameraCount)
        {
            case 1:
                $price['main'] += 500;
                break;
            case 2:
                $price['main'] += 1000;
                break;
        }
        return $price;
    }

    public function PhotosessionSummary($price, $PhotoCount, $FilmTime)
    {
        $price['main'] += 1500; //это база
        $price['main'] += $PhotoCount > 0? 500 : 0;
        $price['main'] += $FilmTime > 0? 500 : 0;
        return $price;
    }

    public function AnimationSummary($price, $AnimationDuration)
    {
        $price['main'] += 500; //это база
        $price['main'] += $AnimationDuration > 0? 500 : 0;
        return $price;
    }
}
