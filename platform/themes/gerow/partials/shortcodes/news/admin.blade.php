<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input
            class="form-control"
            name="title"
            value="{{ Arr::get($attributes, 'title') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Subtitle') }}</label>
        <input
            class="form-control"
            name="subtitle"
            value="{{ Arr::get($attributes, 'subtitle') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Description') }}</label>
        <textarea
            class="form-control"
            name="description"
        >{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Type') }}</label>
        {{ Form::customSelect('type', $types, Arr::get($attributes, 'type')) }}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Limit') }}</label>
        <input
            class="form-control"
            name="limit"
            type="number"
            value="{{ Arr::get($attributes, 'limit') }}"
            placeholder="{{ __('Limit') }}"
        >
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image') }}</label>
        {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect(
            'style',
            [
                'style-1' => __('Style :number', ['number' => 1]),
                'style-2' => __('Style :number', ['number' => 2]),
            ],
            Arr::get($attributes, 'style'),
        ) !!}
    </div>
</section>
