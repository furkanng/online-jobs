@extends('user.layout.app')

@section('title', 'Mikro İşlerim')
@section('content')



    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Mikro İşler</h6>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class=" bg-white rounded p-4">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Enter task" id="taskInput">
                            <button type="button" class="btn btn-primary" onclick="addTask()">Add</button>
                        </div>

                        <!-- ToDo List Items -->
                        <div id="taskList">
                            <!-- Task items will be added dynamically here -->
                        </div>
                        <!-- ToDo List Items End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('../user/js/microtask.js') }}"></script>

@endsection
