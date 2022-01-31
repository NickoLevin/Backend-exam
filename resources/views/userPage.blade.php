<x-main-layout>
    <table id="example" class="display" style="width:100%">
        <h1>Users tabel</h1>
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

        <br/>
        <table id="tabel2" class="display" style="width:100%">
            <h1>Things tabel</h1>
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

        <br/>
        <table id="tabel3" class="display" style="width:100%">
            <h1>Places tabel</h1>
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

        <br/>
        <table id="tabel4" class="display" style="width:100%">
            <h1>Using tabel</h1>
            <thead>
                <tr>
                    <th> id</th>
                    <th> name_id</th>
                    <th> thing_id </th>
                    <th> place_id </th>
                    <th> count</th>
                </tr>
            </thead>
            <tbody>
                 @foreach($using as $using)
                  <tr>
                      <td> {{$using->id}} </td>
                      <td> {{$using->name_id}} </td>
                      <td> {{$using->thing_id}} </td>
                      <td> {{$using->place_id}} </td>
                      <td> {{$using->place_id}} </td>
                  </tr>
                 @endforeach
           </tbody>
        </table>
</x-main-layout>