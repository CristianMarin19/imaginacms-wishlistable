<div class="wishlist">

@if($showButton)
	<a href="{{\URL::route(\LaravelLocalization::getCurrentLocale() . '.wishlistable.wishlist.index')}}" class="mx-1">
		<i class="fa fa-heart" aria-hidden="true"></i>
	</a>
@endif
</div>
