@props(['disabled' => false, 'required' => false])

@php($name = $attributes->wire('model')->value ?? $attributes->get('name'))
@php($id = $attributes->wire('model')->value ?? $attributes->get('id'))

<select
    {{ $attributes->merge([
        'disabled' => $disabled,
        'required' => $required,
        'name' => $name,
        'id' => $id,
        'class' =>
            'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm',
    ]) }}>
    {{ $slot }}
</select>
