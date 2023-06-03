<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
{{--    {{dd($address->is_primary)}}--}}
    <input type="radio" wire:model="is_primary" name="is_primary{{$address->getTable()}}" value="1" id="{{$address->id}}">
    &nbsp; Default
</div>
