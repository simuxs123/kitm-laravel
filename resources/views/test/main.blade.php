<!DOCTYPE html>
<html lang="en">
@include('test/_partials/head')
<body>
<!-- Navigation-->
@include('test/_partials/nav')
<!-- Main Content-->

@if(session('error'))
    <div class="alert alert-danger" role="alert">
        <p class="mb-3">{{ session('error') }}</p>
        @if(session('errorDetail'))
            <pre class="alert-pre border bg-light p-2"><code>{{ session('errorDetail') }}</code></pre>
        @endif
    </div>
@endif
<div>
    @yield('content')
</div>


<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->

</body>
</html>
