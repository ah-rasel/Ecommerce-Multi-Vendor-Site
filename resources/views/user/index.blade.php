@extends('layouts.app')
@section('contents')
<!-- Top Slider -->
<x-home.slider.main></x-home.slider.main>
<div class="px-2 mt-8 space-y-8">
    <!-- Services Slider -->
    <x-home.slider.services></x-home.slider.services>
    <!-- Top Products & Flash Sale -->
    <x-home.top-products></x-home.top-products>
    <!-- Featured Categories -->
    <x-home.featured-categories></x-home.featured-categories>
    <!-- Best Selling Products -->
    <x-home.best-sellings></x-home.best-sellings>
</div>
@endsection
@section('slider-script')
<x-slider_script></x-slider_script>
@endsection
@section('slider-style')
<x-slider_style></x-slider_script>
@endsection