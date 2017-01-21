<div class="mgj_footer_otherlink">
	<p class="mgj_footer_otherlink_container">
		@foreach($link as $k=>$v)
		<a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="{{$v->url}}">{{$v->name}}</a>
		<b class="mgj_footer_b color_666"> | </b>
		@endforeach
	</p>
</div>