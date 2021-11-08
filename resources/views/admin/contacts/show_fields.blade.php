<div class="row">
    <div class="form-group col-12 col-sm-6">
        {!! Form::label('name', 'Nome:') !!}
        <p>{{ $contact->name }}</p>
    </div>

    <div class="form-group col-12 col-sm-6">
        {!! Form::label('email', 'E-mail:') !!}
        <p>{{ $contact->email }}</p>
    </div>

    <div class="form-group col-12 col-sm-6">
        {!! Form::label('phone', 'Telefone:') !!}
        <p>{{ $contact->phone }}</p>
    </div>

    <div class="form-group col-12 col-sm-6">
        {!! Form::label('message', 'Mensagem:') !!}
        <p>{{ $contact->message }}</p>
    </div>

    <div class="form-group col-12 col-sm-6">
        {!! Form::label('created_at', 'Mensagem enviada em:') !!}
        <p>{{ $contact->created_at->format('d/m/Y H:i:s') }}</p>
    </div>

</div>


