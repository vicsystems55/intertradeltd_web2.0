@extends('layouts.loadbase')

@section('content')
<h5 class="bg-primary">
    <marquee behavior="" direction=""><span class="text-warning">Trial version - 5 days left, upgrade to continue using service</span></marquee>
</h5>


<section class="about-us py-100" id="start">

    <div class="container">
        <h1>Load Calculator</h1>

        <load-calculator-component></load-calculator-component>
    </div>
</section>


@endsection
