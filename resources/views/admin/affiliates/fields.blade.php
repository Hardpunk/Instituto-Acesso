<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-8">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Slug Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('slug', 'Código') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('admin.affiliates.index') }}" class="btn btn-default">Cancelar</a>
    </div>
</div>
