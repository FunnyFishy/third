

     
  
   <h2 class="orange-txt">Cars</h2>
        <div>
            <h3>
            <a href="cars/create">Add new car &rarrb;
            </a></h3>
        </div>
    <div>
        @foreach($cars as $car)
        <table border="5px">
        <tr width=100 height=30>
            <th>NO.</th>
            <th>Company Name</th>
            
            <th>Founded</th>
            <th>
                <a href="cars/{{$car->id}}/edit">
                Edit &rarr;
                <!-- {{ $car->id }} -->
                </a>
            </th>
            <th>
                <form action ="/cars/{{$car->id}}" method ="POST"> 
                 @csrf
                    @method('DELETE')
                    <button type="submit" text="red"> 
                     Delete &rarr;
                    </button>
                </form>
            </th>
            
        </tr>
        <tr>
            <td>{{$car->id}}</td>
            <td>
                <a href="/cars/{{$car->id}}"> 
                {{ $car->name   }} </a></td>
            <td>{{ $car->founded }} </td>
        </tr>
        <table>
        @endforeach
    </div>