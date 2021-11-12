@props([
    'type' => "text",
    'label' => "",
    'required' => false,
    'placeholder' => "",
])

@php
    $identifier = $attributes->whereStartsWith('wire:model')->first()
@endphp

<div class="{{$attributes->get('class')}}">
    <label for="{{$identifier}}" class="block text-sm font-medium text-gray-700">{{$label}}</label>
    <div class="mt-1 relative rounded-md shadow-sm">      
      <input 
            {{$attributes->whereStartsWith('wire:model')}}
            type="{{$type}}"
            @if ($required)
            required
            @endif
            name="{{$identifier}}" 
            id="{{$identifier}}"
    
            @error($identifier)
                class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md"
                aria-invalid="true"
                aria-describedby="email-error"    
            @else
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" 

            @enderror 
            placeholder="{{$placeholder}}">
    </div>
   
    @error($identifier)
    <p wire:key="error_{{ $identifier }}" class="mt-2 text-sm text-red-600" id="{{ $identifier }}-error">{{ $message }}
    </p>
    @enderror
  </div>
  