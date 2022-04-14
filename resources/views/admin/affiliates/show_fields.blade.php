<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $affiliate->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $affiliate->slug }}</p>
</div>

<!-- Times Used Field -->
<div class="form-group">
    {!! Form::label('times_used', 'Times Used:') !!}
    <p>{{ $affiliate->times_used }}</p>
</div>

