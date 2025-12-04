@if(isset($children[$parent->id]))
    <div class="child-level">
        @foreach($children[$parent->id] as $child)
            <div class="album-card">
                <div class="album-photo">
                    <img src="{{ $child->photo ? asset('storage/'.$child->photo) : asset('images/default-user.png') }}">
                </div>

                <div class="album-info">
                    <div class="division">{{ $child->division }}</div>
                    <div class="name">{{ $child->name }}</div>
                </div>
            </div>

            {{-- Rekursi --}}
            @include('struktur.child', ['parent' => $child, 'children' => $children])
        @endforeach
    </div>
@endif
