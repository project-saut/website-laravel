<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Forms &rsaquo; Editor &mdash; Stisla</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('backend/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('backend/codemirror/lib/codemirror.css') }}">
<link rel="stylesheet" href="{{ asset('backend/codemirror/theme/duotone-dark.css') }}">
<link rel="stylesheet" href="{{ asset('backend/selectric/public/selectric.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/components.css') }}">
</head>

<body>
<div id="app">
<di class="main-wrapper">
<div class="navbar-bg"></div>
@include('Backend.Home.penggalan.Navbar')
@include('Backend.Home.penggalan.sidebar')
<!-- Main Content -->
<div class="main-content">
<section class="section">
<div class="section-header"></div>

<div class="section-body">
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h4>Full Summernote</h4>
        </div>
        <div class="card-body">
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
            <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
            <div class="col-sm-12 col-md-7">
            <select class="form-control selectric">
                <option>Tech</option>
                <option>News</option>
                <option>Political</option>
            </select>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
            <div class="col-sm-12 col-md-7">
            <textarea class="summernote"></textarea>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
            <button class="btn btn-primary">Publish</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
</section>
</div>
<footer class="main-footer">
<div class="footer-left">
Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
</div>
<div class="footer-right">
2.3.0
</div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('backend/js/stisla.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('backend/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('backend/codemirror/lib/codemirror.js') }}"></script>
<script src="{{ asset('backend/codemirror/mode/javascript/javascript.js') }}"></script>
<script src="{{ asset('backend/selectric/public/jquery.selectric.min.js')}}"></script>

<!-- Template JS File -->
<script src="{{ asset('backend/js/scripts.js') }}"></script>
<script src="{{ asset('backend/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
</body>
</html>
