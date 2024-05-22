

@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            @include('shared.success-message')
            <hr>
            <div>
                <h1> Terms </h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum odio voluptatibus obcaecati exercitationem, soluta
                eius accusantium laborum sapiente maxime quasi repudiandae consectetur dolores quidem rem illo neque cumque amet ad.
                Sapiente alias quos excepturi libero expedita, distinctio harum animi, quo, voluptates incidunt adipisci quisquam
                inventore totam accusantium deleniti neque amet facere enim suscipit possimus modi. Possimus, enim. Quia officia
                excepturi facere ab soluta autem, deleniti voluptates hic sunt quae delectus qui et veritatis quo reiciendis velit
                dolore quidem quaerat dolorum quas non recusandae! Officia, nisi rerum. Voluptate aspernatur alias eum iste,
                suscipit, laboriosam amet esse ab culpa id ad dolorem.

            </div>
        </div>

        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
