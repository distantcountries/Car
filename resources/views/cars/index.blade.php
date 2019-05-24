
    <ul>
        @foreach ($cars as $car)
            <li>
                {{ $car->title }}
            </li>
        @endforeach
    </ul>
