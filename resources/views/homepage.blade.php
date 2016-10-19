@extends('layout')

@section('contenu')
    <main class="container-fluid">
        <div class="row center-block">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <ul class="col-sm-12 col-md-12 text-center list-unstyled"  id="Contracts">
                    <li>
                        <label for="All-Contracts">Sélectionnez une station ou cliquez sur la carte</label>
                    </li>
                    <li>
                        <select class="form-control col-md-5 " name="select" id="All-Contracts">
                            @foreach ($stations as $station)
                                <option id="{{$station->StationNumber}}" value="{{$station->StationNumber}}">{{$station->Name}}
                                </option>
                            @endforeach
                        </select>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
            </div>
            <div id="map">
            </div>
        </div>
    </main>
@endsection



