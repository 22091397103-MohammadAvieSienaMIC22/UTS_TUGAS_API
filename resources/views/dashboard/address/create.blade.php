@extends('dashboard.layouts.master')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Address</h1>
</div>
<div class="col-lg-6">
    <form method="POST" action="/dashboard/addresss" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="street" class="form-label">Street</label>
          <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" name="street" required autofocus value="{{ old('street') }}">
            @error('street')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">City</label>
          <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" required value="{{ old('city') }}">
            @error('city')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="province" class="form-label">Province</label>
          <input type="text" class="form-control @error('province') is-invalid @enderror" id="province" name="province" required value="{{ old('province') }}">
            @error('province')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="country" class="form-label">Country</label>
          <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" required value="{{ old('country') }}">
            @error('country')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="postal_code" class="form-label">Postal Code</label>
          <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" name="postal_code" required value="{{ old('postal_code') }}">
            @error('postal_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="contact_id" class="form-label">ID Contact</label>
          <input type="text" class="form-control @error('contact_id') is-invalid @enderror" id="contact_id" name="contact_id" required value="{{ old('contact_id') }}">
            @error('contact_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add Address</button>
      </form>
</div>
@endsection
