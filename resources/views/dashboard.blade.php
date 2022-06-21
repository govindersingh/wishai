@extends('shopify-app::layouts.default')
@extends('layouts.head')

@section('content')
<div class="dashboard">
	@include('announcement-bar')
	<div class="wishlist_progress_content">
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-8">
		<p>Here's what's happening with your wishlist AI this month</p>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="wishlist_p_text">
				<span>2/3000 Wishlist Additions</span>
			</div>
		</div>
		</div>
		</div>
	</div>
	<div class="wishlist_card_wrappr">
		<div class="wishlist-card">
			<h2 class="card-heading">Wishlist Additions</h2>
			<div class="card_content"><span>0<span></div>
			<a href="">view activities</a>
		</div>
		<div class="wishlist-card">
			<h2 class="card-heading">Customers</h2>
			<div class="card_content"><span>0<span></div>
			<a href="">view customers</a>
		</div>
		<div class="wishlist-card">
			<h2 class="card-heading">Products</h2>
			<div class="card_content"><span>0<span></div>
			<a href="">view products</a>
		</div>
		<div class="wishlist-card">
			<h2 class="card-heading">Products added to cart</h2>
			<div class="card_content">
				<p>Count:<span>  0 </span></p> | <p>Value: <span>  0</p>
			</div>
			<a href="">View products added to cart</a>
		</div>
		<div class="wishlist-card">
			<h2 class="card-heading">Email Reminders Count</h2>
			<div class="card_content">
				<p>Count:<span>  0 </span></p> | <p>Value: <span>  0</p>
			</div>
			<a href="">Upgrade To Use</a>
		</div>
		<div class="wishlist-card">
			<h2 class="card-heading">Avg. per customer</h2>
			<div class="card_content"><span>0<span></div>
			<a href="">view customers</a>
		</div>
	</div>


	<div class="wishlist_top">
		<div class="wishlist_top_product">
		<h2 class="card-heading">Top Products by Wishlist Additions</h2>
		<div class="wl_product_data">
			<span>No sale info in range</span>
		</div>
		</div>
		<div class="wishlist_top_product wishlist_top_customer">
		<h2 class="card-heading">Top Customers by Wishlist Additions</h2>
		<div class="wl_product_data wl_customer_data">
			<span>No sale info in range</span>
		</div>
		</div>
	</div>
	@include('quick-review')
</div>

@endsection

@section('scripts')
    @parent

    <script>
        
    </script>
@endsection