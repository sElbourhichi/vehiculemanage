<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <title>Vehicule managmenet system</title>
  </head>
  <body>
    
    @include("navbar")
    
    <div class="d-flex justify-content-center">
        <div class="header">
            <h1> Vehicule managmenet system</h1>
        </div>
    </div>
    


    @if($layout =='index')
    
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">  
                <div class="row justify-content-center">
                    <section class="col-md-7">
                    @include("vehiculeslist")
                    </section>
                <div>
            </div>
        </div>
    
    @elseif($layout =='create')
         <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                @include("vehiculeslist")
                </section>
                <section class="col-md-5">
                <div class="card mb-3">
                    
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the vehicule</h5>
                    <form action="{{ url('/store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Mark</label>
                            <input type="text" name="marque" class="form-control"  placeholder="Enter mark">
                        
                        </div>
                        <div class="mb-3">
                            <label>Registration number</label>
                            <input type="text" name="matricule" class="form-control"  placeholder="Enter registration number">
                            
                        </div>
                        <div class="mb-3">
                            <label>Owner</label>
                            <input type="text" name="proprietaire" class="form-control"  placeholder="Enter the owner">
                            
                        </div>
                        <div class="mb-3">
                            <label>Damage</label>
                            <input type="text" name="dega" class="form-control"  placeholder="Enter damage">
                            
                        </div>
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="text" name="prix" class="form-control"  placeholder="Enter the price">
                            
                        </div>
                        
                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                    </div>
                </div>
                </section>
            </div>
        </div>
    @elseif($layout =='show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                @include("vehiculeslist")
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>
        
    @elseif($layout =='edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                @include("vehiculeslist")
                </section>
                <section class="col-md-5">
                <div class="card mb-3">
                    
                    <div class="card-body">
                        <h5 class="card-title">Update informations of the vehicule</h5>
                <form action="{{ url('/update/'.$vehicule->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Mark</label>
                                <input value="{{ $vehicule->marque }}" name="marque" type="text" class="form-control"  placeholder="Enter ">
                            </div>
                            <div class="form-group">
                                <label>Registration number</label>
                                <input value="{{ $vehicule->matricule }}" name="matricule" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>Owner</label>
                                <input value="{{ $vehicule->proprietaire }}" name="proprietaire" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label>Damage</label>
                                <input value="{{ $vehicule->dega }}" name="dega" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input value="{{ $vehicule->prix}}" name="prix" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                        
                </section>
            </div>
        </div>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>