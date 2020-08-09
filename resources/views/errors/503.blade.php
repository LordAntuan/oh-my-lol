@extends('errors.minimal')

@section('title', __('errors.service_unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'errors.service_unavailable'))
