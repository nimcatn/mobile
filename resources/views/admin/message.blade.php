
@if (session('success'))
    <div class="alert alert-success display-hide">
        <div class="tab__box">
            <div class="tab__items" style="background-color: #259c08">
             <span style="color: white" > {{ session('success') }}</span>  
            </div>
        </div>
    </div>
@endif


@if (session('error'))
<div class="tab__box">
        <div class="tab__items" style="background-color: #b91510">
            <span style="color: white" > {{ session('error') }} </span>
        </div>
    </div>
@endif
