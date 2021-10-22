<x-app-layout>
 <div class="container">
 <div class="row">
 <div class="col-md-8 offset-2">
 <h2 class="text-center text-success mb-2">All Admin and Editors</h2>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">User E-Mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_admin as $admin)
    <tr>
      <td>{{$loop->index+1}}</td>
      <td>{{$admin->name}}</td>
      <td>{{$admin->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
 </div>
 </div>
 </div>
</x-app-layout>
