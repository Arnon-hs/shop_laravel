<ul class="nav nav-pills nav-fill">
    <li class="nav-item">
        <a class="nav-link" href="{{route('catalog')}}">Весь каталог</a>
    </li>
    @foreach($categories as $category)
        <li class="nav-item">
            <a class="nav-link" href="{{route('category', $category->id)}}">{{ucfirst($category->title)}}</a>
            {{--todo active--}}
        </li>
    @endforeach
</ul>