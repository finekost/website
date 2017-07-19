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
        $cases[] = $this->createCase('oeko-wochenmarkt');
        $cases[] = $this->createCase('raststaette-luzern');
        $cases[] = $this->createCase('huawei-nova');
        $cases[] = $this->createCase('vw-service');
        $cases[] = $this->createCase('flaschenkino');
        $cases[] = $this->createCase('bettertalkto');
        $cases[] = $this->createCase('hahnenkamm');
        $cases[] = $this->createCase('ontego-commsult');
        $cases[] = $this->createCase('seat-ar-experience');
        $cases[] = $this->createCase('hamburger-institut-fuer-berufliche-bildung-hibb');
        $cases[] = $this->createCase('jim-block-app');
        $cases[] = $this->createCase('oh-my-clutch');
        $cases[] = $this->createCase('citylator');
        $cases[] = $this->createCase('kapacht');
        $cases[] = $this->createCase('audioguideme');
        $cases[] = $this->createCase('pickup-game');
        $cases[] = $this->createCase('asphaltgold-fittingroom');
        $cases[] = $this->createCase('st-michaelis-mobile');
        $cases[] = $this->createCase('nsn-ipad-app');
        $cases[] = $this->createCase('urbanchef');
        $cases[] = $this->createCase('labelit');
        $cases[] = $this->createCase('hashtag-generator');
        $cases[] = $this->createCase('digital-couture');
        $cases[] = $this->createCase('bmw-2013');
        $cases[] = $this->createCase('mikado');
        $cases[] = $this->createCase('attag-me');
        $cases[] = $this->createCase('st-michaelis');
        $cases[] = $this->createCase('vivawest');
        $cases[] = $this->createCase('quixit');
        $cases[] = $this->createCase('bmw-2013');
        $cases[] = $this->createCase('ktm-ipad');
        $cases[] = $this->createCase('bmw-2012');
        $cases[] = $this->createCase('threadwatch');
        $cases[] = $this->createCase('cinemaxx-app');
        $cases[] = $this->createCase('trojanisches-t-shirt');
        $cases[] = $this->createCase('klexxi-kinderwelt');
        $cases[] = $this->createCase('cinemaxx-app');
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
