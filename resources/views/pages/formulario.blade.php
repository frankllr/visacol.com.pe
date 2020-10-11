<form method="POST" action="{{route('contactanos')}}" class="needs-validation">
    @csrf
    <div class="form-group row">
        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Nombre completo</label>
        <div class="col-lg-9 @if($errors -> first('full-name')) has-danger @endif">
        <input class="form-control @if($errors -> first('full-name')) is-invalid @endif" required type="text" id="full-name" name="full-name" value="{{old('full-name')}}">
            {!! $errors -> first('full-name', "<label id:'full-name-error' class='error' for='full-name'>:message</label>") !!}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Email</label>
        <div class="col-lg-9 @if($errors -> first('email')) has-danger @endif">
        <input class="form-control @if($errors -> first('email')) is-invalid @endif" required type="email" id="email" name="email" value="{{old('email')}}">
            {!! $errors -> first('email', "<label id:'email-error' class='error' for='email'>:message</label>") !!}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Celular</label>
        <div class="col-lg-6 @if($errors -> first('phone')) has-danger @endif">
        <input class="form-control @if($errors -> first('phone')) is-invalid @endif" required type="text" id="phone" name="phone" minlength="9" maxlength="9" value="{{old('phone')}}">
            {!! $errors -> first('phone', "<label id:'phone-error' class='error' for='phone'>:message</label>") !!}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Ciudad</label>
        <div class="col-lg-9 @if($errors -> first('city')) has-danger @endif">
        <input class="form-control @if($errors -> first('city')) is-invalid @endif" required type="text" id="department" name="department" value="{{old('department')}}">
            {!! $errors -> first('city', "<label id:'department-error' class='error' for='department'>:message</label>") !!}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Consulta</label>
        <div class="col-lg-9 @if($errors -> first('message')) has-danger @endif">
            <textarea maxlength="5000" data-msg-required="Por favor, ingrese su mensaje." rows="7" class="form-control @if($errors -> first('message')) is-invalid @endif" name="message" id="message" required=""></textarea>
            {!! $errors -> first('message', "<label id:'message-error' class='error' for='message'>:message</label>") !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="form-group col-lg-9">
        </div>
        <div class="form-group col-lg-3">
            <input type="submit" value="ENVIAR COTIZACIÓN" id="btnSend" class="btn btn-tech btn-modern float-right" data-loading-text="Loading...">
        </div>
    </div>
</form>

@section('script')
    <script>
        $('#phone').keypress(function(e) {
            key = e.keyCode || e.which;
            teclado = String.fromCharCode(key);
            numeros = "0123456789";
            especiales = "8-37-38-46";
            teclado_especial = false;

            for (var i in especiales) {
                if (key == especiales[i]) {
                    teclado_especial = true;
                }
            }

            if (numeros.indexOf(teclado) == -1 && !teclado_especial) {
                return false;
            }
        });

        $('#cerrar').click(function(e) {
            $('#modalaviso').remove();
        });
    </script>
    @endsection