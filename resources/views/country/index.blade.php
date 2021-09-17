<x-template />
<x-nav />
<script src="https://kit.fontawesome.com/272c99ad92.js" crossorigin="anonymous"></script>
<title>Cv builder</title>

<style>
h1 {
    text-transform: capitalize;
    text-align: center;

    font-weight: 350;
    box-shadow: 0 3px 5px #ffff;
}

* {
    text-transform: capitalize;
}

i {
    font-size: 20px;
}

svg {
    display: none;
}

span {
    margin-top: 10px;
    margin-bottom: 10px;
}

span a {
    color: green;
    border: 3px solid black;
}

table,
tr,
th,
td {
    border: 0.5px solid black;
}
</style>



<div class="container mt-5">
<div class="container my-auto mt-5">
@if (session('message'))
    <div class="alert alert-primary mt-5">
        {{ session('message') }}
    </div>
@endif

    <h1 class="m-4">list of countires</h1>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">currency</th>
                <th scope="col">status</th>
                <th scope="col">operation</th>

            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <th scope="row">{{$item['id']}}</th>
                <td>{{$item['name']}}</td>
                <td>{{$item['currency']}}</td>

            <td>{{($item['status']==0)?'inactive ':'active'}}</td>         



                <td> <a href="status/{{$item['id']}}"> change status</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container mb-5">
        <span>{{$data->links()}}</span>
    </div>
</div>