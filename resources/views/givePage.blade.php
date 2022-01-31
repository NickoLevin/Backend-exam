<x-main-layout>

    <form method="POST">
        @csrf
    <div class="container p-5 w-25">
        <h3>Thing</h3>
    <select class="form-select" aria-label="Пример выбора по умолчанию" name="thing">
        @foreach($things as $thing)
        <option>{{$thing->name}}</option>
        @endforeach
      </select>
      <br/>
      <h3>User</h3>
      <select class="form-select" aria-label="Пример выбора по умолчанию" name="user">
          @foreach($users as $user)
        <option>{{$user->name}}</option>
        @endforeach
      </select>
      <br/>
      <h3>Place</h3>
      <select class="form-select" aria-label="Пример выбора по умолчанию" name="place">
        @foreach($places as $place)
        <option>{{$place->name}}</option>
        @endforeach
      </select>
      <br/>
      <br/>
    <p ><input class="form-control" type="submit"></p>  
    </div> 
</form>
    


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
            <table id="tabel4" class="display" style="width:100%">
                <h1>Usings table</h1>
                <thead>
                    <tr>
                        <th> id</th>
                        <th> user_id</th>
                        <th> place_id </th>
                        <th> thing_id </th>
                        <th> amount </th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($usings as $using)
                      <tr>
                          <td> {{$using->id}} </td>
                          <td> {{$using->user_id}} </td>
                          <td> {{$using->place_id}} </td>
                          <td> {{$using->thing_id}} </td>
                          <td> {{$using->amount}} </td>
                      </tr>
                     @endforeach
               </tbody>
            </table>
            </div>

</x-main-layout>