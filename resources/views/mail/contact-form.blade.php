<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-2">
            <form action="{{route('contact')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                @if (session('success'))
                <div class="alert alert-success m-2" role='alert'>
                    {{session('success')}}
                </div>
                @elseif (session('error'))
                <div class="alert alert-danger m-2" role='alert'>
                    {{session('error')}}
                </div>
                @endif
                <div class="card-header">
                    <div class="card-title">
                        <h3>Contact Form</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="your name">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="you email">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <input type="text" class="form-control" name="message" placeholder="you message">
                        @error('message')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="you subject">
                        @error('subject')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="attachment" class="form-label">Attach File</label>
                        <input type="file" class="form-control" name="attachment" id="attachment">
                        @error('attachment')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="submit" class="btn btn-primary">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
