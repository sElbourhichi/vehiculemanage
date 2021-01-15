<div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2016/11/29/09/32/antique-1868726_1280.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">List of vehicules</h5>
    <p class="card-text">You can find here all the informatins about vehicules in the system</p>
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Mark</th>
      <th scope="col">Registration number</th>
      <th scope="col">owner</th>
      <th scope="col">Damage</th>
      <th scope="col">Price</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
@foreach($vehicules as $vehicule)
    <tr>
      <td>{{ $vehicule->marque}}</td>
      <td>{{ $vehicule->matricule}}</td>
      <td>{{ $vehicule->proprietaire}}</td>
      <td>{{ $vehicule->dega}}</td>
      <td>{{ $vehicule->prix}}</td>
      <td>
        <div class="d-flex">
        <a href="{{ url('/edit/'.$vehicule->id) }}" class="btn btn-sm btn-warning ">Edit</a>
        &nbsp; &nbsp;
        <form action="{{ url('/delete', ['id' => $vehicule->id]) }}" method="post" >
             <input class="btn btn-sm btn-danger" type="submit" value="Delete" />
             @method('delete')
             @csrf
            </form>
    
        </div>
        
      </td>
    </tr>
@endforeach
   </tbody>
</table>



  </div>
</div>

