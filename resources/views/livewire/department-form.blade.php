<div>
    <input wire:model="name" type="text">
    <button wire:click="save">Submit</button>
    @if ($success)
        <div>Saved</div>
    @endif 
</div>
