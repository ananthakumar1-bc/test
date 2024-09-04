<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container">
    <h1>User List</h1>

    <div class="input-group mb-3">
        <input type="text" id="searchNew" class="form-control" placeholder="Search by name, department, or designation">
        <div class="input-group-append">
        </div>
    </div>


    <!-- User List -->
    <div id="user-table">
         @include('users.partials.table', ['users' => $users]) 
    </div>
</div>

<script>


    $(document).ready(function() {
        
        $('#searchNew').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('users.search') }}",
                type: "GET",
                data: {search: query},
                success: function(data) {
                    $('#user-table').html(data);
                }
            });
        });
    });
</script>
