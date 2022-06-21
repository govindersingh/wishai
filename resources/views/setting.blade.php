@extends('shopify-app::layouts.default')
@extends('layouts.head')

@section('content')

<div class="setting">
<div class="page-width">
    <div class="setting_topbar">
        <h2>Wishlist Ai</h2>
        <div class="setting_btns">
            <a href="">Manage subscription</a>
            <a href="">disable app</a>
        </div>
    </div>
    <div class="wishlist_reviews">
    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true"><path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8m2.293-10.707L9 10.586 7.707 9.293a.999.999 0 1 0-1.414 1.414l2 2a.997.997 0 0 0 1.414 0l4-4a.999.999 0 1 0-1.414-1.414"></path></svg>
        <div class="wishlist_review_inner">
            <span>Great! You have Wishlist Hero appearance Setup</span>
            <p>let us know what you think about Wishlist Hero</p>
            <div class="review_starts">
            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
            </div>
        </div>
        <div class="review_cross">
        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true"><path d="M11.414 10l4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z" fill-rule="evenodd"></path></svg>
        </div>
    </div>
    <div class="setting_main">
        <div class="setting_options">
            <div class="setting_inner green">
            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true"><path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8m2.293-10.707L9 10.586 7.707 9.293a.999.999 0 1 0-1.414 1.414l2 2a.997.997 0 0 0 1.414 0l4-4a.999.999 0 1 0-1.414-1.414"></path></svg>
            <p>Customize Wishlist Appearance</p>    
            </div>
            <a href="">configure</a>
        </div>
        <div class="setting_options">
            <div class="setting_inner green">
            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true"><path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8m2.293-10.707L9 10.586 7.707 9.293a.999.999 0 1 0-1.414 1.414l2 2a.997.997 0 0 0 1.414 0l4-4a.999.999 0 1 0-1.414-1.414"></path></svg>
            <p>Share Wishlist via Email/Social Media</p>    
            </div>
            <a href="">configure</a>
        </div>
        <div class="setting_options">
            <div class="setting_inner disabled">
            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true"><path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8m4-9H6a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2"></path></svg>
            <p>Add to Wishlist from Collections & Quick View</p>    
            </div>
            <a href="">configure</a>
        </div>
        <div class="setting_options">
            <div class="setting_inner locked">
            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M17 8h-1V6c0-3.309-2.691-6-6-6S4 2.691 4 6v2H3a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zM4 18h12v-8H4v8zM6 6c0-2.206 1.794-4 4-4s4 1.794 4 4v2H6V6zm4 10a1 1 0 0 0 1-1v-2a1 1 0 1 0-2 0v2a1 1 0 0 0 1 1"></path></svg>
            <p>Email reminders for on sale and Low stock wishlisted products</p>    
            </div>
            <a href="">upgrade</a>
        </div>
        <div class="setting_options">
            <div class="setting_inner locked">
            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M17 8h-1V6c0-3.309-2.691-6-6-6S4 2.691 4 6v2H3a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zM4 18h12v-8H4v8zM6 6c0-2.206 1.794-4 4-4s4 1.794 4 4v2H6V6zm4 10a1 1 0 0 0 1-1v-2a1 1 0 1 0-2 0v2a1 1 0 0 0 1 1"></path></svg>
            <p>Custom Branding</p>    
            </div>
            <a href="">upgrade</a>
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