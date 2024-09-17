@extends("layouts.dashboard")

@section("title")
- About
@endsection


@section("content")
About Page Content
@endsection

@push('scripts')
<script>
    alert('About');
</script>
@endpush