<?php
/**
 * Created by vbak with PhpStorm.
 *
 * License notice:
 * Made for firstygroup. Do whatever you want and good luck!
 * User: vbak
 * Date: 6/21/23
 * Time: 2:15 PM
 */
?>

@extends('layout')
@section('content')

    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


        @unless(count($listings) == 0)
            @foreach($listings as $listing)
                <x-listing-card :listing="$listing"/>
            @endforeach

        @else
            <p>No listings found</p>
        @endunless
    </div>

    <div class="mt-6 p4">
        {{$listings->links()}}
    </div>
@endsection

