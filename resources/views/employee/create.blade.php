
<!DOCTYPE html>
<html lang="en">

<style>
    #btn:hover{
      box-shadow: 5px 5px 5px 10px  white;
       
    }
    #btn{
        width:33%;
    }
.form-control{
  width:3%;
}.capitalize{
  font-weight:350;
  box-shadow: 0 3px 5px #ffff;
}
span{
  margin:auto;
}
.alert{
        color: #D8000C;
    }
    .form-control:focus {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
}
</style>
<body>  

<x-nav/>

<div class="container">
    <h1 class="capitalize text-center  text-capitalize mt-5">enter employee details here</h1>
<form action="store" method="POST" class="mt-5" enctype="multipart/form-data">
    @csrf
    <div class="container">
    <div class="form-group">



<div class="form-group">
    <label for="exampleInputEmail1">NAME*</label>
    <input type="text" value="{{old('name')}}"class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    @error('name')
    <span class="alert">{{$message}}</span>
    @enderror
  <div class="form-group">
    <label for="exampleInputEmail1">Email address*</label>
    <input type="email" value="{{old('email')}}" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  @error('email')
    <span class="alert ">{{$message}}</span>
    @enderror
  <div class="form-group">
    <label for="exampleInputPassword1">country*</label>
    <select name="position" value="{{old('position')}}" class="form-control"name="position" id="exampleInputPassword1" placeholder="Position">

@foreach($data['country'] as $key => $item)
<option value="{{$key}}">{{$item}}</option>
@endforeach
    </select>
    
  </div>
  @error('position')
    <span class="alert ">{{$message}}</span>
    @enderror
    <div class="form-group">
    <label for="exampleInputPassword1">role*</label>
    <select value="{{old('role')}}" class="form-control" multiple name="role[]" id="exampleInputPassword1" placeholder="Position">

@foreach($data['role'] as $key => $item)
<option value="{{$key}}">{{$item}}</option>
@endforeach
    </select>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">city*</label>
    <input type="text" class="form-control"name="city" value="{{old('city')}}"id="exampleInputPassword1" placeholder="contact">
  </div>
  @error('city')
    <span class="alert ">{{$message}}</span>
    @enderror
 
 <div class="text-center">
  <button type="submit" class="btn btn-success mt-3 " id="btn">add employee</button>
  </div>
  </div>
  </form>
</div>



</body>
</html>