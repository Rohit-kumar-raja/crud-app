<x-layout>
    @slot('title', 'Home')

        @slot('body')
            <form method="POST" class=" bg-dark p-5">
                <div class="container">
                    <div class="row">
                        @csrf
                        <div class="col-sm-4">
                            <label for="exampleInputEmail1" class="form-label text-white">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="col-sm-4">
                            <label for="exampleInputEmail1" class="form-label text-white">Email id</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="col-sm-4">
                            <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="col-sm-4 mt-5 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
                        </div>

                    </div>
                </div>
                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>
        @endslot
    </x-layout>
