<!DOCTYPE html>
<html lang="en">

<style>
#btn {
    width: 33%;
}

.alert {
    color: #D8000C;
}
</style>

<body>
    <x-template />
    <x-nav />

    <div class="container">
        <h1 class="capitalize text-center  text-capitalize mt-5">add a country here</h1>
        <form action="/create" method="POST" class="mt-5">
            @csrf
            <div class="container">
              <input type="hidden" name="status" value=1>
                <div class="form-group">
                    <label for="exampleInputEmail1">NAME</label>
                    <input type="text" class="form-control" name="name"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    @error('name')
                    <span class="alert ">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">currency</label>
                        <input type="text" class="form-control" name="currency" 
                            id="currency" aria-describedby="emailHelp" placeholder="Enter cuurency">
                
                    </div>
                    @error('currency')
                    <span class="alert ">{{$message}}</span>
                    @enderror
                   
                
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-3 " id="btn">Submit</button>
                    </div>
                </div>
        </form>
    </div>



</body>

</html>