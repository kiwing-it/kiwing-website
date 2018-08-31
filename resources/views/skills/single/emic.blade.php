@extends('skills.layout')

@section('content')

    @include('skills.section.profile', [
        'image'       => '/images/skills/emic.jpg',
        'name'        => trans('skills.single.emic.name'),
        'nationality' => trans('skills.single.emic.nationality'),
        'age'         => trans('skills.single.emic.age'),
        'position'    => trans('skills.single.emic.position'),
        'languages'   => trans('skills.single.emic.languages'),
        'shortIntroduction' => trans('skills.single.emic.short_introduction'),
        'longIntroduction'  => trans('skills.single.emic.long_introduction'),
        'description' => trans('skills.single.emic.description'),
        'skills' => [
            [
                'name'   => trans('skills.single.emic.skills.0'),
                'rating' => 60,
            ],
            [
                'name'   => trans('skills.single.emic.skills.1'),
                'rating' => 85,
            ],
            [
                'name'   => trans('skills.single.emic.skills.2'),
                'rating' => 100,
            ],
            [
                'name'   => trans('skills.single.emic.skills.3'),
                'rating' => 65,
            ],
            [
                'name'   => trans('skills.single.emic.skills.4'),
                'rating' => 100,
            ],
        ],
        'motto' => trans('skills.single.emic.motto'),
    ])

    @include('skills.section.more-options', [
        'a' => 'a'
    ])

@endsection