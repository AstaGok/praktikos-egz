@extends('layout')

@section('content')

<div class="container">


    <form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="exampleInputName">Vardas ir Pavardė</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Vardas ir Pavardė" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
        <label for="exampleInputEmail">El. paštas</label>
        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Elektronis paštas" wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <div class="form-group">
        <label for="exampleInputbody">Pastabos</label>
        <textarea class="form-control" id="exampleInputbody" placeholder="Pastabos" wire:model="body"></textarea>
        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <button type="submit" class="btn btn-primary">Rezervuoti</button>
</form>

</div>
@endsection
