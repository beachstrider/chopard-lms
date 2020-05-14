<?php



if (! function_exists('activity_class')) {

	/**

	 * Define estilo items menu activities

	 *

	 * @param  string $index

	 * @param  \Illuminate\Database\Eloquent\Collection $user_activities

	 * @return string

	 */	

	function activity_class($index, $user_activities)

	{

		$class = 'incompleted';



        if ($user_activities->search(function ($item, $key) use ($index) {

            return $item->chapter.'.'.$item->activity == $index;

        }) !== false) {

        	$class = 'completed';

        }



		// $current_index = $current_chapter.'.'.$current_activity;

		// if ($index == $current_index) {

		// 	$class .= ' active';

		// }

		

		return $class;

	}

}



if (! function_exists('chapter_class')) {

	/**

	 * Define estilo chapters en menu

	 *

	 * @param  integer

	 * @param  decimal

	 * @return string

	 */	

	function chapter_class($index, $current_chapter)

	{

		$class = 'chapter';



		$current_chapter = (strpos($current_chapter, '.') !== false) ? substr($current_chapter, 0, -2) : $current_chapter;



		if ($index == $current_chapter) {

			$class .= ' abierto';

		}

		

		return $class;

	}

}