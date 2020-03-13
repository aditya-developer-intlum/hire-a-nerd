<?php

namespace App\Http\Controllers\Admin\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CmsHome;

class HomePageController extends Controller
{
   private $cms;

   public function index()
   {
   		$cms = CmsHome::first();
   		return view("admin.CMS.homepage",compact('cms'));
   }
   public function store(Request $request)
   {
      $this->cms = CmsHome::where('id',1)->first();
   	$this->props($request)
      ->uploadBanner($request)
      ->uploadSectionImage($request)
      ->save();
   	return back();
   }
   private function props(Request $request){
      
      $this->cms->first_header = $request->first_header;
      $this->cms->first_subheader = $request->first_subheader;
      $this->cms->first_professional = $request->first_professional;
      $this->cms->first_seller_earning = $request->first_seller_earning;
      $this->cms->first_affiliate_earning = $request->first_affiliate_earning;
      $this->cms->third_title = $request->third_title;
      $this->cms->third_subtitle = $request->third_subtitle;
      $this->cms->fourth_title_card_one = $request->fourth_title_card_one;
      $this->cms->fourth_description_card_one = $request->fourth_description_card_one;
      $this->cms->fourth_title_card_two = $request->fourth_title_card_two;
      $this->cms->fourth_description_card_two = $request->fourth_description_card_two;
      $this->cms->fifth_title = $request->fifth_title;
      $this->cms->fifth_sub_title = $request->fifth_sub_title;
      $this->cms->sixth_header = $request->sixth_header;
      $this->cms->sixth_first_title = $request->sixth_first_title;
      $this->cms->sixth_first_subtitle = $request->sixth_first_subtitle;
      $this->cms->sixth_second_title = $request->sixth_second_title;
      $this->cms->sixth_second_subtitle = $request->sixth_second_subtitle;
      $this->cms->sixth_third_title = $request->sixth_third_title;
      $this->cms->sixth_third_subtitle = $request->sixth_third_subtitle;
      $this->cms->seven_title = $request->seven_title;
      $this->cms->seven_sub_title = $request->seven_sub_title;
      return $this;
   }
   private function uploadBanner(Request $request)
   {
      if ($request->has('banner_image')) {
         $this->cms->banner_image = $request->banner_image->store('cms/home','public');
      }
      return $this;
   }
   private function uploadSectionImage(Request $request)
   {
      if ($request->has('section_image')) {
         $this->cms->section_image = $request->section_image->store('cms/home','public');
      }
      return $this;
   }
   private function save()
   {
      $this->cms->save();
   }
}
