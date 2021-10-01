<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ReviewModel;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function Reviews()
    {
        //ReviewModel::find(1)->user['FIO'];
        //ReviewModel::find(1)->all();
        $data = [];
        if (ReviewModel::count() == 0)
        {
            return view('reviews', ["empty" => 1]);
        }
        $datas = ReviewModel::all();
        foreach ($datas as $d)
        {
            $data[$d['id']] = [
                'id' => $d['id'],
                'fio' => $d['user_name'],
                'text' => $d['review_text'],
                'timestamp' => $d['timestamp'],
            ];
        }
        return view('reviews', ["data" => $data]);
    }

    public function AddReview(Request $request)
    {
        $valid = $request->validate([
            'reviewtext' => 'required',
            'username' => 'required',
        ]);

        $user = new ReviewModel();

        $user->user_email = 'example@mail.com';
        $user->review_text = $request->input('reviewtext');
        $user->user_name = $request->input('username');
        $user->ip = $_SERVER['REMOTE_ADDR'];
        $user->timestamp = date('d.m.Y \в H:i');

        $user->save();

        $data = [];
        $datas = ReviewModel::all();
        foreach ($datas as $d)
        {
            $data[$d['id']] = [
                'id' => $d['id'],
                //'fio' => ReviewModel::find($d['id'])->user['FIO'],
                'fio' => $d['user_name'],
                'text' => $d['review_text'],
                'timestamp' => $d['timestamp'],
            ];
        }

        return view('reviews', ["data" => $data]);
    }

    public function EditReview($id)
    {
        $data = [];
        if (ReviewModel::count() == 0)
        {
            return view('reviews', ["empty" => 1]);
        }
        $datas = ReviewModel::all();
        $data['review_text'] = $this->FindInData($datas, $id)['review_text'];
        $data['id'] = $id;

        return view('reviews_editor', ['data' => $data]);
    }

    public function EditReviewResult(Request $request, $id)
    {
        $valid = $request->validate([
            'reviewtext' => 'required',
        ]);

        ReviewModel::where('id', $id)->update(array('review_text' => $request->input('reviewtext')));

       return redirect()->route('reviews');
    }

    public function DeleteReview($id)
    {
        ReviewModel::where('id', $id)->delete();

        return redirect()->route('reviews');
    }

    public function FindInData($datas, $id)
    {
        foreach ($datas as $d)
        {
            if ($d['id'] == $id)
                return $d;
        }
    }
}
