<!DOCTYPE html>
<html lang="en">

<style>
#btn {
    width: 33%;
}

.alert {
    color: #D8000C;
}
#one{
    display:none;
}
</style>

<body>
    <x-template />
    <x-nav />

    <div class="container">
        <h1 class="capitalize text-center  text-capitalize mt-5">update employee details here</h1>
        <form action="/update" method="POST" class="mt-5">
            @csrf
            <div class="container">
                <input type="hidden" name="id" value="{{$data['employee']['id']}}">
                <div class="form-group">
                    <label for="exampleInputEmail1">NAME</label>
                    <input type="text" class="form-control" name="name" value="{{$data['employee']['name']}}"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    @error('name')
                    <span class="alert ">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{$data['employee']['email']}}"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
              
                    @error('email')
                    <span class="alert ">{{$message}}</span>
                    @enderror
                    <div class="form-group">
    <label for="exampleInputPassword1">country*</label>
    <select name="position" value="{{$data['employee']->country->name}}" class="form-control"name="position" id="country" placeholder="Position">
    <option value="{{$data['employee']['country_id']}}" id="one" >{{$data['employee']->country->name}}</option>
@foreach($data['country'] as $key => $item)
        (<option value="{{$key}}">{{$item}}</option>)
    
@endforeach
    </select>

  </div>
                    @error('position')
                    <span class="alert ">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputPassword1">city</label>
                        <input type="text" class="form-control" name="city" id="exampleInputPassword1"
                            value="{{$data['employee']['city']}}" placeholder="contact">
                    </div>
                    @error('city')
                    <span class="alert ">{{$message}}</span>
                    @enderror
                    <div class="form-group">
    <label for="exampleInputPassword1">role*</label>
    <select value=""
      class="form-control" multiple name="role[]" id="exampleInputPassword1" placeholder="Position">

@foreach($data['role'] as $key => $item)
<option value="{{$key}}">{{$item}}</option>
@endforeach
    </select>
    
  </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-3 " id="btn">Update</button>
                    </div>
                </div>
        </form>
    </div>



</body>

</html>