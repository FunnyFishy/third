
<h2>
    Show car
</h2>
{{ $car->name }}
{{ $car->founded }}
<p>

    @forelse($car->carModels as $model)
    <p>Models of {{ $car->name }} are:
    {{ $model->car_model }}</p>
   
</p>
    @empty
    <p>
        Not found

    </p>

    @endforelse