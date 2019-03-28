@extends('layouts.app')

@section('content')
<main id="main mt-5 pt-5">

    <div class="container mt-5 pt-3 ">
        <div class="row mt-5 pt-5">
           <div class="col-md-3">
           <img src="https://res.cloudinary.com/syfon/image/upload/v1536857534/app1.jpg" alt="logo-image" srcset="" class="img-fluid rounded-circle" style="width:200px; height:200px">
            </div>
            <div class="col-md-7">
                <h1><a href="" class="font-weight-bold text-dark">Training for the perfect opportunity using the best available tools in the accounting ecosystem</a></h1>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem atque recusandae numquam nobis voluptatum, consequatur laudantium officia pariatur dolor quia asperiores quo illo quaerat error qui reiciendis reprehenderit provident. Id?</p>
                
                <table class="table">
                    <thead>
                        <tr class="font-weight-bold">
                        <th scope="col">Author</th>
                        <th scope="col">Posted</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><a href="" class="font-weight-bold text-success"> Moses Okon</a></td>
                        <td>15th December</td>
                        
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</main>

<style>
a:hover {
  text-decoration:none;
}
</style>

@endsection
