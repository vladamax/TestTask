@props(['name' , 'type'])

<x-form.label name="{{ $name }}"/>

<input class="border border-gray-400 p-2 w-full"
       type="{{ $type }}"
       name="{{ $name }}"
       id="{{ $name }}"
       value="{{ $type=='password' ? '' : old($name) }}"
       required
>

<x-form.error name="{{ $name }}"/>
