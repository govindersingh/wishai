@extends('shopify-app::layouts.default')
@extends('layouts.head')

@section('content')
<div class="help">
<div class="wishlist_card_wrappr">
    <div class="wishlist-card">
    <h2 class="card-heading">FAQ <i class="fa fa-question-circle-o" aria-hidden="true"></i></h2>
        <a href="">View FAQ <i class="fa fa-share-square-o" aria-hidden="true"></i></a>
     </div>
     <div class="wishlist-card">
    <h2 class="card-heading">Developer FAQ <i class="fa fa-wrench" aria-hidden="true"></i></h2>
        <a href="">View Developer FAQ <i class="fa fa-share-square-o" aria-hidden="true"></i></a>
     </div>
     <div class="wishlist-card">
    <h2 class="card-heading">General Support <i class="fa fa-commenting-o" aria-hidden="true"></i></h2>
        <a href="">Contact Support</a>
     </div>
     <div class="wishlist-card">
    <h2 class="card-heading">Installation Support <i class="fa fa-cog" aria-hidden="true"></i></h2>
    <p class="card_p_support">HELP SETTING UP</p>
    <form>
     <div class="form-inner">
    <input type="checkbox"  name="" value="">
    <label>Header Icon</label>
    </div>
    <div class="form-inner">
    <input type="checkbox"  name="" value="">
    <label>Collection View Icon</label>
    </div>
    <div class="form-inner">
    <input type="checkbox" name="" value="">
    <label>Quick View Icon</label>
</div>
</form>
        <a href="">contact support</a>
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