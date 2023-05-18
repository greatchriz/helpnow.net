{{-- make the props data available in the child components --}}
@props([
    'dataIndex',
    'sliderImage',
])


<li data-index="{{ $dataIndex }}" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ $sliderImage }}" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
    <!-- MAIN IMAGE -->
    <img src="{{ $sliderImage }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
    <!-- LAYERS -->
    {{ $slot }}

  </li>
