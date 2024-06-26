<div>
    @auth


        @if (Auth::user()->isLiked($idea))
            <form method="POST" action="{{ route('ideas.unlike', $idea->id) }}">
                @csrf
                <button type="submit" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{ $idea->likes()->count() }} </a>
            </form>
        @else
            <form method="POST" action="{{ route('ideas.like', $idea->id) }}">
                @csrf
                <button type="submit" class="fw-light nav-link fs-6"> <span class="far fa-heart me-1">
                    </span> {{ $idea->likes()->count() }} </a>
            </form>
        @endif
    @endauth
    @guest
        <a href="{{ route('login') }}" class="fw-light nav-link fs-6"> <span class="far fa-heart me-1">
            </span> {{ $idea->likes()->count() }} </a>
    @endguest
    </div>
