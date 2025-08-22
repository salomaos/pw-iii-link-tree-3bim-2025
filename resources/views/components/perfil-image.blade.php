@props([
    'src' => 'https://placehold.co/400', 
    'shape' => 'rounded'
    ])


<img class={{ $shape }} src={{ asset($src) }}>