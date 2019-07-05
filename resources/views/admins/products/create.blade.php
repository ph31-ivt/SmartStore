@extends('layouts.admin')

@section('content_admin')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a new product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.products.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="container" name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Producter') }}</label>

                            <div class="col-md-6">
                                <select name="producter_id">
                                	@foreach ($producterIds as $key => $value)
                                		<option value="{{ $key}}">{{$value}}</option>
                                	@endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select name="category_id">
                                	@foreach ($categoryIds as $key => $value)
                                		<option value="{{ $key}}">{{$value}}</option>
                                	@endforeach
                                </select>
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="img_url" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="img_url" type="file" name="img_urls[]" multiple="multiple" required autocomplete="img_url" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea class="container" rows="8" name="description"></textarea>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection