@aware(['dataIndex'])


<!-- LAYER NR. 1 -->
<div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
id="{{ $dataIndex }}-layer-1"

data-x="['right']"
data-hoffset="['30']"
data-y="['middle']"
data-voffset="['-90']"
data-fontsize="['64']"
data-lineheight="['72']"
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;s:500"
data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
data-start="1000"
data-splitin="none"
data-splitout="none"
data-responsive_offset="on"
style="z-index: 7; white-space: nowrap; font-weight:600; margin-bottom: 100px; font-family:'Times New Roman', Times, serif"><span class="">{{ $slot }}</span>


</div>

<!-- LAYER NR. 2 -->
<div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
id="{{ $dataIndex }}-layer-2"

data-x="['right']"
data-hoffset="['35']"
data-y="['middle']"
data-voffset="['-25']"
data-fontsize="['28']"
data-lineheight="['54']"
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;s:500"
data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
data-start="1000"
data-splitin="none"
data-splitout="none"
data-responsive_offset="on"
style="z-index: 7; white-space: nowrap; font-weight:600; font-family:'Times New Roman', Times, serif; color:rgb(114, 110, 110)">
{{-- named slot for layout2 --}}
{{ $layer2 }}
<br>
</div>

<!-- LAYER NR. 3 -->
<div class="tp-caption tp-resizeme text-white text-right"
id="{{ $dataIndex }}-layer-3"

data-x="['right']"
data-hoffset="['35']"
data-y="['middle']"
data-voffset="['30']"
data-fontsize="['16','18',24']"
data-lineheight="['28']"
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;s:500"
data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
data-start="1400"
data-splitin="none"
data-splitout="none"
data-responsive_offset="on"
style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400; margin-top: 100px;  font-family:'Times New Roman', Times, serif; color:rgb(114, 110, 110)">

{{ $layer3 }}

</div>

<!-- LAYER NR. 4 -->
<div class="tp-caption tp-resizeme"
id="{{ $dataIndex }}-layer-4"

data-x="['right']"
data-hoffset="['35']"
data-y="['middle']"
data-voffset="['95']"
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;"
data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
data-start="1400"
data-splitin="none"
data-splitout="none"
data-responsive_offset="on"
style="z-index: 5; white-space: nowrap; letter-spacing:1px; margin-top: 150px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="#">Donate Now</a>
</div>
