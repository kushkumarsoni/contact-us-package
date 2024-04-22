<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Contact Us</h1>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="mt-1">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid
                @enderror" name="name" id="name" placeholder="Enter name" value="{{ old('name') }}" />
                @error('name')
                    <div id="name" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-1">
                <label for="email">Email</label>
                <input type="email" class="form-control  @error('email') is-invalid
                @enderror" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}" />
                @error('email')
                    <div id="email" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mt-1">
                <label for="mobile">Mobile</label>
                <input type="number" class="form-control  @error('mobile') is-invalid
                @enderror" name="mobile" id="mobile" placeholder="Enter mobile" value="{{ old('mobile') }}" />
                @error('mobile')
                    <div id="mobile" class="invalid-feedback">
                        {{ $message }}
                     </div>
                @enderror
            </div>
            <div class="mt-1">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject"
                value="{{ old('subject') }}"/>
            </div>
            <div class="mt-1">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message">{{ old('name') }}</textarea>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-info text-white">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
