<x-layout>
    @slot('title', 'All Data')


        @slot('body')
            <div class="container">
                <a href="{{ route('add') }}" class="btn btn-success">Add data</a>
                <div class="row">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Action1</th>
                                <th scope="col">Action2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $data as $data )

                            <tr>
                                <th scope="row">1</th>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->password}}</td>
                                <td> <a href="update/{{$data->id}}" class="btn btn-warning btn-sm">Updae</a>  </td>
                                <td> <a href="delete/{{$data->id}}" class="btn btn-danger btn-sm">Delete</a>  </td>
                            </tr>
                           
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>

        @endslot
    </x-layout>
