@extends('layouts.app')

@section('content')
    <div style="padding: 8rem 2rem; text-align: center;">
        <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">{{ __('insights.detail.placeholder_title') }}</h1>
        <p style="font-size: 1.25rem; color: #64748B; margin-bottom: 2rem;">
            Article slug: <strong>{{ $slug }}</strong>
        </p>
        <p style="color: #94A3B8;">{{ __('insights.detail.placeholder_desc') }}</p>
        <a href="{{ route('insights') }}" style="display: inline-block; margin-top: 2rem; padding: 1rem 2rem; background: #0EA5E9; color: white; text-decoration: none; border-radius: 8px;">
            {{ __('insights.detail.back_to_insights') }}
        </a>
    </div>
@endsection
