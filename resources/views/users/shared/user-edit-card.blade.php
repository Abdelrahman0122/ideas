<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form action={{ route('users.update', $user->id) }} method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:150px" class="me-3 avatar-sm rounded-circle" src="{{ $user->getImageURL() }}"
                        alt="Mario Avatar">
                    <div>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        @error('name')
                            <span class="d-block mt-2 fs-6 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                @if (Auth::id() === $user->id)
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark btn-sm"> view </a>
                @endif
            </div>
            <div class="mt-4">
                <label for="">profile picture:</label>
                <div class="div">
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                        <span class="d-block mt-2 fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> Bio : </h5>
                <div class="mb-3">
                    <textarea name="bio" class="form-control" id="bio" rows="3">{{ $user->bio }}</textarea>
                    @error('bio')
                        <span class="d-block mt-2 fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark mb-2 btn-sm "> save </button>
                </div>
                @include('users.shared.user-stats')
                @auth
                    @if (Auth::id() !== $user->id)
                        <div class="mt-3">
                            <button class="btn btn-primary btn-sm"> Follow </button>
                        </div>
                    @endif
                @endauth
            </div>
        </form>
    </div>
</div>
