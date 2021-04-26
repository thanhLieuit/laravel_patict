<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truycap;
use Carbon\Carbon;

class ChartDataController extends Controller
{
    function getAllMonths(){

		$month_array = array();
		$posts_dates = Truycap::orderBy( 'ngay', 'ASC' )->pluck( 'ngay' );

		$posts_dates = json_decode( $posts_dates );
		if ( ! empty( $posts_dates ) ) {
			foreach ( $posts_dates as $unformatted_date ) {
				$date = new \DateTime( $unformatted_date );
				$month_no = $date->format( 'm' );
				$month_name = $date->format( 'M' );
				$month_array[ $month_no ] = $month_name;
			}

		}
		return $month_array;
	}

	function getMonthlyPostCount( $month ) {
		$monthly_post_count = Truycap::get()->sum('dem');
		return $monthly_post_count;
	}

	function getMonthlyPostData() {

		$monthly_post_count_array = array();
		$month_array = $this->getAllMonths();
		$month_name_array = array();
		if ( ! empty( $month_array ) ) {
			foreach ( $month_array as $month_no => $month_name ){
				$monthly_post_count = $this->getMonthlyPostCount( $month_no );
				array_push( $monthly_post_count_array, $monthly_post_count );
				array_push( $month_name_array, $month_name );
			}
		}

		$max_no = max( $monthly_post_count_array );
		$max = round(( $max_no + 10/2 ) / 10 ) * 150;
		$monthly_post_data_array = array(
			'months' => $month_name_array,
			'post_count_data' => $monthly_post_count_array,
			'max' => $max,
		);

		return $monthly_post_data_array;

    }
 function getAllDays(){

		$day_array = array();
		$posts_dates = Truycap::orderBy( 'ngay', 'ASC' )->pluck( 'ngay' );

		$posts_dates = json_decode( $posts_dates );

		if (! empty( $posts_dates ) ) {
			foreach ( $posts_dates as $unformatted_date ) {
				$dt = Carbon::now();
				$date = new \DateTime( $unformatted_date );
				$day_no = $date->format( 'd-m' );
				$day_name = $date->format( 'D-m' );
				$day_array[ $day_no ] = $day_name;
				
			}
			
		}
		return $day_array;
	}

	function getDaylyPostCount( $day ) {
		$dayly_post_count = Truycap::whereDay( 'ngay', $day )->get()->sum('dem');

		return $dayly_post_count;
	}

	function getDaylyPostData() {

		$dayly_post_count_array = array();
		$day_array = $this->getAllDays();
		$day_name_array = array();
		if ( ! empty( $day_array ) ) {
			foreach ( $day_array as $day_no => $day_name ){
				$dayly_post_count = $this->getDaylyPostCount( $day_no );
				array_push( $dayly_post_count_array, $dayly_post_count );
				array_push( $day_name_array, $day_name );
			}
		}

		$max_no = max( $dayly_post_count_array );
		$max = round(( $max_no + 10/2 ) / 10 ) * 13;
		$dayly_post_data_array = array(
			'days' => $day_name_array,
			'post_count_data' => $dayly_post_count_array,
			'max' => $max,

		);

		return $dayly_post_data_array;

    }
    
}
