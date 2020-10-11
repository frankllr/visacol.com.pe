{{-- contenido del email --}}
    <div>
         Cliente: {{ $mensaje['full-name'] }}
         Email: {{ $mensaje['email'] }}
         Celular: {{ $mensaje['phone'] }}
         Ciudad: {{ $mensaje['department'] }}
         Consulta: {{ $mensaje['message'] }}
    </div>