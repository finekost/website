<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function home()
    {
        return view('home', ['cases' => $this->getCases()]);
    }

    public function detail($case)
    {
        return view('detail', ['case' => $this->getDetailForCase($case)]);
    }

    private function getDetailForCase($caseTitle)
    {
        $case = collect($this->getCases())->filter(function ($value, $key) use ($caseTitle) {
            if ($value['case'] === $caseTitle) {
                return $value;
            }
        })->first();

        $case['detail'] = $this->getCaseDetail($caseTitle);

        return $case;
    }

    private function getCases()
    {
        $cases = [];
        $cases[] = $this->createCase('wochenmarkt');
        $cases[] = $this->createCase('luzern');
        $cases[] = $this->createCase('huawei');
        $cases[] = $this->createCase('vw');
        $cases[] = $this->createCase('flaschenkino');
        $cases[] = $this->createCase('hkr');
        $cases[] = $this->createCase('ontego');
        $cases[] = $this->createCase('seatar');
        $cases[] = $this->createCase('hibb');
        $cases[] = $this->createCase('jim_block');
        $cases[] = $this->createCase('omc');
        $cases[] = $this->createCase('kapacht');
        $cases[] = $this->createCase('audioguideme');
        $cases[] = $this->createCase('pickup');
        $cases[] = $this->createCase('asphaltgold');
        $cases[] = $this->createCase('michelapp');
        $cases[] = $this->createCase('nsn');
        $cases[] = $this->createCase('urbanchef');
        $cases[] = $this->createCase('labelit');
        $cases[] = $this->createCase('hashtaggen');
        $cases[] = $this->createCase('digitalcouture');
        $cases[] = $this->createCase('bmw-2013');
        $cases[] = $this->createCase('mikado');
        $cases[] = $this->createCase('attagme');
        $cases[] = $this->createCase('michel');
        $cases[] = $this->createCase('vivawest');
        $cases[] = $this->createCase('quixit');
        $cases[] = $this->createCase('bmw-2012');
        $cases[] = $this->createCase('ktm');
        $cases[] = $this->createCase('threadwatch');
        $cases[] = $this->createCase('tronjanisches-shirt');
        $cases[] = $this->createCase('klexxi');
        $cases[] = $this->createCase('cinemaxx');
        $cases[] = $this->createCase('paywithatweet');
        $cases[] = $this->createCase('mousetracker');

        return $cases;
    }

    private function getCaseDetail($case)
    {
        return $this->createCaseDetail(
                intval(trans('cases/'.$case.'.year')),
                intval(trans('cases/'.$case.'.images')),
                trans('cases/'.$case.'.about'),
                trans('cases/'.$case.'.tech'));
    }

    private function createCase($case, $video = null)
    {
        $caseData = ['case' => $case, 'title' => trans('cases/'.$case.'.title')];

      // use thumb_size when defined
      if (trans('cases/'.$case.'.thumb_size') != 'cases/'.$case.'.thumb_size') {
          $caseData['size'] = trans('cases/'.$case.'.thumb_size');
      } else {
          $caseData['size'] = 'half';
      }

      // use video when defined
      if (trans('cases/'.$case.'.video') != 'cases/'.$case.'.video') {
          $caseData['video_path'] = trans('cases/'.$case.'.video');
      }

        return $caseData;
    }

    private function createCaseDetail($year, $images, $about, $tech)
    {
        $caseDetail = ['year' => $year,
               'images' => $images,
               'about' => $about,
               'tech' => $tech, ];

        return $caseDetail;
    }
}
