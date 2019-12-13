@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/p" enctype="multipart/form-data" method="post">
    @csrf

    <div class="row">
      <div class="col-8 offset-2">

        <div class="row">
          <h1>Add New Campaign</h1>
        </div>
        <div class="form-group row">
          <label for="caption" class="col-md-4 col-form-label">Campaign Title</label>

          <input id="caption"
          type="text"
          class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
          name="caption"
          value="{{ old('caption') }}"
          autocomplete="caption" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('caption') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group row">
          <label for="description" class="col-md-4 col-form-label">Description of the Campaign</label>

          <textarea id="description"
          type="text"
          class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
          name="description"
          value="{{ old('description') }}"
          autocomplete="caption" autofocus></textarea>

          @if ($errors->has('description'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group row">
          <label for="amount" class="col-md-4 col-form-label">Target Amount</label>

          <input id="amount"
          type="text"
          class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}"
          name="amount"
          value="{{ old('amount') }}"
          autocomplete="amount" autofocus>

          @if ($errors->has('amount'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('amount') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group row">
              <label for="amount" class="col-md-4 col-form-label">Campaign Duration</label>
              <select name="duration" class="form-control">
                <option value="1 Week">1 Week</option>
                <option value="15 Days">15 Days</option>
                <option value="1 Month">1 Month</option>
                <option value="2 Months">2 Months</option>
                <option value="3 Months">3 Months</option>
                <option value="6 Months">6 Months</option>
                <option value="1 year">1 Year</option>
              </select>
        </div>
        <div class="row">
          <label for="image" class="col-md-4 col-form-label">Post Image</label>

          <input type="file" class="form-control-file" id="image" name="image">

          @if ($errors->has('image'))
          <strong>{{ $errors->first('image') }}</strong>
          @endif
        </div>

        <div class="row pt-4">
          <button class="btn btn-primary">Add New Campaign</button>
        </div>

      </div>
    </div>
  </form>
</div>
@endsection
