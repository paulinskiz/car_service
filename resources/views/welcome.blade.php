@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center my-2">Jūsų patikimas servisas</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <ul>
                                    <li>Kvalifikuotų darbuotojų komanda</li>
                                    <li>Vienas servisas - visi remonto darbai</li>
                                    <li>Pakaitinis automobilis</li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <h5 class="text-center text-primary">Prisiregistravę vartotojai pridėti savo turimus automobilius, matyti atliekamų darbų eigą, bei jų istoriją. Taip pat patogu rezervuoti laiką auto remontui.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-8 text-center">
                <a href="{{ route('reservation') }}" class="btn btn-primary">Rezervuoti laiką</a>
                <a href="{{ route('login') }}" class="btn btn-success">Prisijungi</a>
            </div>
        </div>
    </div>
@endsection