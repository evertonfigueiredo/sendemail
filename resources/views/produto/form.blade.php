<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nome') }}
            {{ Form::text('nome', $produto->nome, ['class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : ''), 'placeholder' => 'Nome']) }}
            {!! $errors->first('nome', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>