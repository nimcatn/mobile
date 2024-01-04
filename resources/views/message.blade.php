<link rel="stylesheet" href="/css/font.css">
<style>
    .alert-simple.alert-success {
        border: 1px solid rgba(36, 241, 6, 0.46);
        background-color: rgba(7, 149, 66, 0.12156862745098039);
        box-shadow: 0px 0px 2px #259c08;
        color: #0ad406;
        text-shadow: 2px 1px #00040a;
        transition: 0.5s;
        cursor: pointer;
    }



    .alert-simple.alert-info {
        border: 1px solid rgba(6, 44, 241, 0.46);
        background-color: rgba(7, 73, 149, 0.12156862745098039);
        box-shadow: 0px 0px 2px #0396ff;
        color: #0396ff;
        text-shadow: 2px 1px #00040a;
        transition: 0.5s;
        cursor: pointer;
    }


    .alert-simple.alert-warning {
        border: 1px solid rgba(241, 143, 6, 0);
        background-color: rgba(205, 240, 10, 0.16);
        color: #030303;
        height: 20;

    }



    .alert-simple.alert-danger {
        background-color: rgba(220, 17, 1, 0.16);
        color: #000000;
        transition: 0.5s;
        cursor: pointer;
        height: 50;

    }


    /*
    .alert-simple.alert-primary {
        border: 1px solid rgba(6, 241, 226, 0.81);
        background-color: rgba(1, 204, 220, 0.16);
        box-shadow: 0px 0px 2px #03fff5;
        color: #03d0ff;
        text-shadow: 2px 1px #00040a;
        transition: 0.5s;
        cursor: pointer;
    } */
</style>














@if ($errors->any())
    <div class="col-lg-12" style="font-family: Vazir">
        <div class="alert alert-danger display-hide">
            @foreach ($errors->all() as $error)
                <button class="close" data-close="alert"></button>
                <span> {{ $error }}</span>
            @endforeach

        </div>
    </div>
@endif

@if (session('success'))
    <div class="col-lg-12" style="font-family: Vazir">
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> {{ session('success') }}</span>

        </div>
    </div>
@endif


@if (session('error'))
    <br>
    <div class="alert fade alert-simple alert-danger" style="font-family: Vazir">
        <span style="color: red">{{ session('error') }}</span> <br>
    </div>
@endif
