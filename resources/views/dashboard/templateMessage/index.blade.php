@extends('dashboard.layouts.main')

@section('content')
    <div class="pagetitle">
        <h1>Template Message</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Template Message</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h5>Form</h5>
            </div>

            <form action="{{ route('templates.whatsapp.store') }}" method="POST">
                @csrf

                <label for="category" class="form-label mt-3">category</label>
                <select class="form-select" id="category" name="category">
                    @foreach ($categories['data'] as $category)
                        <option value="{{ $category['name'] }}">{{ $category['name'] }}</option>
                    @endforeach
                </select>

                <label for="template-name" class="form-label mt-3">Template Name</label>
                <input type="text" class="form-control" name="template_name" id="template-name" maxlength="512"
                    placeholder="Enter template name..." required>

                <small id="char-count" class="position-absolute end-0 text-muted" style="margin-right: 20px">0/512</small>

                <label for="choose" class="form-label mt-3">Choose Category</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" value="MARKETING" id="flexRadioDefault1"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault1">Marketing</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" value="UTILITY" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">Utility</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" value="AUTHENTICATION"
                        id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">Authentication</label>
                </div>

                <label for="language" class="form-label mt-3">Languages</label>
                <select class="form-select" id="language" name="language">
                    @foreach ($languages['data'] as $language)
                        <option value="{{ $language['value'] }}">{{ $language['name'] }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>

    <script>
        const input = document.getElementById('template-name');
        const charCount = document.getElementById('char-count');

        input.addEventListener('input', function() {
            let length = this.value.length;
            charCount.textContent = `${length}/512`;

            if (length >= 512) {
                this.classList.add('is-invalid');
                charCount.classList.add('text-danger');
            } else {
                this.classList.remove('is-invalid');
                charCount.classList.remove('text-danger');
            }
        });
    </script>

    <style>
        .is-invalid {
            border-color: red !important;
        }
    </style>
@endsection
