<?php
/**
 * Created by vbak with PhpStorm.
 *
 * License notice:
 * Made for firstygroup. Do whatever you want and good luck!
 * User: vbak
 * Date: 6/21/23
 * Time: 4:13 PM
 */
namespace App\Models;

class Listing {
    public static function all(){
        return array(
            [
                'id' => 1,
                'title' => 'first post',
                'description' => 'asdasdasdasdasdasd'
            ],
            [
                'id' => 2,
                'title' => 'second post',
                'description' => 'lkl;kxcl;vkxcl;vkxcl;vl;xcv'
            ]
        );

    }


    public static function find($id) {
        $listings = self::all();

        foreach ($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }

}
