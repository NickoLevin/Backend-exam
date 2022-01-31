<x-main-layout>
    <div class="container p-5 w-25">
        <h1>New thing</h1>
<form method="POST">
    @csrf
    <p><input class="form-control" placeholder="name" name="name"></p>
    <p><input class="form-control" placeholder="description" name="description"></p>
    <p><input class="form-control" placeholder="wrnt" type='date' name="wrnt"></p>
    <p><input class="form-control" type="submit"></p>    
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</div>


<div class="container p-5 w-25">
    <h1>New place</h1>
<form method="POST">
@csrf
<p><input class="form-control" placeholder="name" name="name"></p>
<p><input class="form-control" placeholder="description" name="description"></p>
<p><input class="form-control" placeholder="repair" name="repair"></p>
<p><input class="form-control" placeholder="In work? (y/n)" name="work"></p>
<p><input class="form-control" type="submit"></p>    
</form>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
</div>



<div class="container p-5 w-25">
    <h1>New user</h1>
<form method="POST">
@csrf
<p><input class="form-control" placeholder="name" name="name"></p>
<p><input class="form-control" type="email" placeholder="email" name="email"></p>
<p><input class="form-control" type="password" placeholder="password" name="password"></p>
<p><input class="form-control" type="submit"></p>    
</form>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
</div>



<div class="container p-5 w-75">
<table id="tabel2" class="display" style="width:100%">
    <h1>Things table</h1>
    <thead>
        <tr>
            <th> id</th>
            <th> name</th>
            <th> description </th>
            <th> wrnt </th>
            <th> user_id </th>
        </tr>
    </thead>
    <tbody>
         @foreach($things as $thing)
          <tr>
              <td> {{$thing->id}} </td>
              <td> {{$thing->name}} </td>
              <td> {{$thing->description}} </td>
              <td> {{$thing->wrnt}} </td>
              <td> {{$thing->user_id}} </td>
          </tr>
         @endforeach
   </tbody>
</table>
</div>


<div class="container p-5 w-75">
    <table id="tabel3" class="display" style="width:100%">
        <h1>Places table</h1>
        <thead>
            <tr>
                <th> id</th>
                <th> name</th>
                <th> description </th>
                <th> repair </th>
                <th> work </th>
            </tr>
        </thead>
        <tbody>
             @foreach($places as $place)
              <tr>
                  <td> {{$place->id}} </td>
                  <td> {{$place->name}} </td>
                  <td> {{$place->description}} </td>
                  <td> {{$place->repair}} </td>
                  <td> {{$place->work}} </td>
              </tr>
             @endforeach
       </tbody>
    </table>
    </div>


    <div class="container p-5 w-75">
        <table id="tabel4" class="display" style="width:100%">
            <h1>Users table</h1>
            <thead>
                <tr>
                    <th> id</th>
                    <th> name</th>
                    <th> email </th>
                </tr>
            </thead>
            <tbody>
                 @foreach($users as $user)
                  <tr>
                      <td> {{$user->id}} </td>
                      <td> {{$user->name}} </td>
                      <td> {{$user->email}} </td>
                  </tr>
                 @endforeach
           </tbody>
        </table>
        </div>

</x-main-layout>

