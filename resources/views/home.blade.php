@extends('layouts.app')

@section('content')
    <div class="d-flex">
    
        <a class="list-group-item list-group-item-action m-2 " href="#">
            <div class="d-flex justify-content-between">
                <div>
                    <i style="font-size: 95px" class="fa-solid fa-address-book m-3"></i>
                </div>
                <div>
                    <div class="m-3">
                        <h2>My contacts</h2>
                            <div class="text-end"><em>15</em></div> 
                        </div>
                </div>
            </div>
        </a>

        <a class="list-group-item list-group-item-action m-2" href="#">
            <div class="d-flex justify-content-between">
                <div>
                    <i style="font-size: 95px" class="fa-solid fa-clipboard-list m-3"></i>
                </div>
                <div>
                    <div class="m-3">
                        <h2>My lists</h2>
                            <div class="text-end"><em>15</em></div> 
                        </div>
                </div>
            </div>
        </a>

        <a class="list-group-item list-group-item-action m-2" href="#">
            <div class="d-flex justify-content-between">
                <div>
                    <i style="font-size: 95px" class="fa-solid fa-users m-3"></i>
                </div>
                <div>
                    <div class="m-3">
                        <h2>My friends</h2>
                            <div class="text-end"><em>0</em></div> 
                        </div>
                </div>
            </div>
        </a>

    </div>

@endsection
