<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraphs(3,true),
            'video_url'=>'monvideo.com'.rand(10,255),
            'course_id'=>Course::all()->random()->id
        ];
    }
}
