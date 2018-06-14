@if(Auth::user())

    @extends('layouts.app')
    @section('content')

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <form id="regForm" action="">

            <h1>Criterios de Busqueda</h1>

            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                    <div class="row">
                        <div class="col-xs-6">

                            <h3>*Documento</h3>
                            <input placeholder="Consulta Declaracion" oninput="this.className = ''" disabled>
                            <h3>*RFC</h3>
                            <p><input placeholder="{{ Auth::user()->username }}" oninput="this.className = ''" disabled></p>
                            <h3>Periodicidad</h3>
                            <p><input placeholder="" oninput="this.className = ''"></p>
                            <h3>Periodo</h3>
                                <select id="inputState" class="form-control">
                                    <option selected>Seleccionar...</option>
                                    <option>...</option>
                                </select>
                            <h3>Fecha de presentacion</h3>
                            <p><input type="date" placeholder="" oninput="this.className = ''"></p>
                            <h3>No. de Operacion</h3>
                            <p><input placeholder="" oninput="this.className = ''"></p>

                        </div>

                        <div class="col-xs-6">

                            <h3>*Declaracion</h3>
                            <p><input placeholder="Provisional o Definitiva de impuestos Federales" oninput="this.className = ''" disabled></p>
                            <h3>Tipo de Declaracion</h3>
                            <p><input placeholder="" oninput="this.className = ''"></p>
                            <h3>*Ejercicio</h3>
                            <p><input placeholder="2018" oninput="this.className = ''" disabled></p>
                            <h3>Linea de Captura</h3>
                            <p><input placeholder="" oninput="this.className = ''"></p>

                        </div>

                    </div>
                <div class="alert alert-info col-xs" >
                    <strong>*Campos obligatorios</strong>
                </div>
            </div>

            <div class="tab">Contact Info:
                <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
                <p><input placeholder="Phone..." oninput="this.className = ''"></p>
            </div>

            <div class="tab">Birthday:
                <p><input placeholder="dd" oninput="this.className = ''"></p>
                <p><input placeholder="mm" oninput="this.className = ''"></p>
                <p><input placeholder="yyyy" oninput="this.className = ''"></p>
            </div>

            <div class="tab">Login Info:
                <p><input placeholder="Username..." oninput="this.className = ''"></p>
                <p><input placeholder="Password..." oninput="this.className = ''"></p>
            </div>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Buscar</button>
                    <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Consultar</button>
                    <!--<button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Consultar</button>-->
                </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>

        </form>

        <script src="{{ asset('js/components.js') }}"></script>

    @endsection

@endif

