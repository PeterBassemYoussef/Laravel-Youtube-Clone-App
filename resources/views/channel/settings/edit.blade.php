@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Channel Setting') }}</div>

                    <form method="POST" action="/channel/{{ $channel->slug }}/update">

                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') ? old('name') : $channel->name }}" required autocomplete="name"
                                        autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="slug" class="col-md-4 col-form-label text-md-end">{{ __('Slug') }}</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-text">{{ config('app.url') . "/channel/" }}</div>
                                        <input id="slug" type="text"
                                            class="form-control @error('slug') is-invalid @enderror" name="slug"
                                            value="{{ old('slug') ? old('slug') : $channel->slug }}" required
                                            autocomplete="slug" autofocus>
                                    </div>
                                    @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('description') is-invalid @enderror"  name="description" placeholder="Leave a comment here" id="description" style="height: 100px;resize: none;">{{ old('description') ? old('description') : $channel->description }}</textarea>
                                        <label for="description">Description</label>
                                    </div>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <button class="btn btn-sm btn-primary float-end m-2" type="submit">Update</button>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
