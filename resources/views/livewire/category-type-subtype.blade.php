<div>
    <div class="form-group col-md-4">
        <label for="category" class=" col-form-label text-md-right">{{ __('Category') }}</label>

        <div class="">
            <select wire:model="selectedCategory" class="form-control">
                <option value="" selected>Choose Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedCategory))
        <div class="form-group col-md-4">
            <label for="type" class="col-form-label text-md-right">{{ __('Type') }}</label>

            <div class="col-md-6">
                <select wire:model="selectedType" class="form-control">
                    <option value="" selected>Choose type</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    @if (!is_null($selectedType))
        <div class="form-group col-md-4">
            <label for="sub_type" class="col-form-label text-md-right">{{ __('Subtype') }}</label>

            <div class="">
                <select wire:model="selectedSubType" class="form-control" name="sub_type_id">
                    <option value="" selected>Choose Sub Type</option>
                    @foreach($subtypes as $subtype)
                        <option value="{{ $subtype->id }}">{{ $subtype->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>
