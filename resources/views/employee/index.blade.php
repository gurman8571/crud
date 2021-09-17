<x-template/>
<x-nav/>
<script src="https://kit.fontawesome.com/272c99ad92.js" crossorigin="anonymous"></script>    <title>Cv builder</title>
 
<style>
h1{
    text-transform:capitalize;
    text-align :center;

  font-weight:350;
  box-shadow: 0 3px 5px #ffff;
}
*{
    text-transform:capitalize;  
}
i{
    font-size:20px;
    }
    svg{
        display:none;
    }
    span{
        margin-top:10px;
        margin-bottom:10px;
    }
span a{
    color:green;
    border:3px solid black;
}
table,tr,th,td{
    border: 0.5px solid black;
}
</style>
<div class="container my-auto mt-3">
@if (session('status'))
    <div class="alert alert-success mt-5">
        {{ session('status') }}
    </div>
@endif
</div>
<div class="container my-auto mt-5">
@if (session('message'))
    <div class="alert alert-danger mt-5">
        {{ session('message') }}
    </div>
@endif
</div>
<div class="container mt-5">

<h1 class="m-4">list of employees</h1>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">country</th>
      <th scope="col">city</th>
      <th scope="col">role</th>
  

      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item['name']}}</td>
      <td>{{$item['email']}}</td>
      <td>{{$item->Country->name}} </td>
      <td>{{$item['city']}}</td>
      <td> 
    @if(!empty($item['roles']))
       {{$item['roles']->pluck('name')->implode(', ') }}
     
    @endif
    
    </td>

      
  
      <td> <a href="edit/{{$item['id']}}"> <i class="far fa-edit" style="color:blue"></i></a>  <a href="delete/{{$item['id']}}"><i class="far fa-trash-alt" style="color:red"></i></a></td>
    </tr>
@endforeach   
  </tbody>
</table>

<div class="container mb-5">
<span>{{$data->links()}}</span>
</div>
</div>