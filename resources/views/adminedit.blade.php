<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Menu Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Edit List</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('adminadd.update', $store->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            

                            <div class="mb-3">
                                <label for="name" class="form-label">NAME:</label>
                                <input name="name" id="name" class="form-control" value="{{ $store->name}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="latitude" class="form-label">LATITUDE:</label>
                                <input name="latitude" id="latitude" class="form-control" value="{{ $store->latitude}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="longitude" class="form-label">LONGITUDE:</label>
                                <input name="longitude" id="longitude" class="form-control" value="{{ $store->longitude}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">ADDRESS:</label>
                                <input name="address" id="address" class="form-control" value="{{ $store->address}}" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
